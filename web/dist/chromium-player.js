class XiboChromiumPlayer {
    constructor() {
        this.displayId = null;
        this.cmsUrl = null;
        this.clientKey = null;
        this.currentLayout = null;
        this.nextLayout = null;
        this.layoutExpiry = null;
        this.collectInterval = 300;
        this.initialized = false;
        
        this.initialize();
    }

    async initialize() {
        try {
            // Get configuration from DOM
            const playerDiv = document.getElementById('player');
            this.displayId = playerDiv.dataset.displayId;
            this.cmsUrl = playerDiv.dataset.cmsUrl;
            this.clientKey = playerDiv.dataset.key;

            if (!this.displayId || !this.cmsUrl || !this.clientKey) {
                throw new Error('Missing required configuration');
            }

            // Initialize display
            await this.connect();
            
            // Start main loop
            this.startHeartbeat();
            this.startLayoutCycle();
            
            this.initialized = true;
            console.log('Chromium player initialized');
        } catch (error) {
            console.error('Failed to initialize player:', error);
            // Retry initialization after 30 seconds
            setTimeout(() => this.initialize(), 30000);
        }
    }

    async connect() {
        try {
            const response = await fetch(`${this.cmsUrl}/display/chromium/connect?displayId=${this.displayId}&key=${this.clientKey}`);
            if (!response.ok) throw new Error('Connection failed');
            
            const data = await response.json();
            this.collectInterval = data.display.collectInterval;
            this.currentLayout = data.display.layoutId;
            
            await this.loadLayout(this.currentLayout);
        } catch (error) {
            console.error('Connection error:', error);
            throw error;
        }
    }

    async loadLayout(layoutId) {
        try {
            const response = await fetch(`${this.cmsUrl}/layout/render/${layoutId}?displayId=${this.displayId}&key=${this.clientKey}`);
            if (!response.ok) throw new Error('Failed to load layout');
            
            const content = await response.text();
            document.getElementById('player').innerHTML = content;
            
            // Record proof of play
            await this.recordProofOfPlay(layoutId);
        } catch (error) {
            console.error('Layout load error:', error);
            throw error;
        }
    }

    async recordProofOfPlay(layoutId) {
        try {
            await fetch(`${this.cmsUrl}/stats`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Display-Key': this.clientKey
                },
                body: JSON.stringify({
                    type: 'layout',
                    displayId: this.displayId,
                    layoutId: layoutId,
                    scheduleId: 0,
                    fromDate: new Date().toISOString()
                })
            });
        } catch (error) {
            console.error('Failed to record proof of play:', error);
        }
    }

    startHeartbeat() {
        setInterval(async () => {
            try {
                const response = await fetch(`${this.cmsUrl}/display/heartbeat?displayId=${this.displayId}&key=${this.clientKey}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                });
                
                if (!response.ok) throw new Error('Heartbeat failed');
                
                const data = await response.json();
                if (data.layout && data.layout !== this.currentLayout) {
                    this.nextLayout = data.layout;
                    this.layoutExpiry = data.layoutExpiry;
                }
            } catch (error) {
                console.error('Heartbeat error:', error);
            }
        }, this.collectInterval * 1000);
    }

    startLayoutCycle() {
        setInterval(async () => {
            try {
                if (this.nextLayout && this.nextLayout !== this.currentLayout) {
                    this.currentLayout = this.nextLayout;
                    this.nextLayout = null;
                    await this.loadLayout(this.currentLayout);
                }
            } catch (error) {
                console.error('Layout cycle error:', error);
            }
        }, this.collectInterval * 1000);
    }
} 