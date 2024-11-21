class XiboChromiumPlayer {
    constructor() {
        this.displayId = this.getDisplayId();
        this.config = null;
        this.currentLayout = null;
        this.initialize();
    }

    getDisplayId() {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('displayId');
    }

    async initialize() {
        try {
            await this.connect();
            await this.startPlayback();
            this.startHeartbeat();
        } catch (e) {
            console.error('Failed to initialize player:', e);
            setTimeout(() => this.initialize(), 30000);
        }
    }

    async connect() {
        const response = await fetch(`/api/display/chromium/connect?displayId=${this.displayId}`);
        if (!response.ok) throw new Error('Failed to connect');
        this.config = await response.json();
    }

    async startPlayback() {
        const layoutId = this.config.layoutId;
        const response = await fetch(`/api/layout/render/${layoutId}`);
        if (!response.ok) throw new Error('Failed to load layout');
        
        const content = await response.text();
        document.getElementById('player-content').innerHTML = content;
        
        // Record stat
        await fetch(`/api/stats`, {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({
                type: 'chromium',
                displayId: this.displayId,
                layoutId: layoutId,
                duration: 0
            })
        });
    }

    startHeartbeat() {
        setInterval(async () => {
            try {
                const response = await fetch(`/api/display/heartbeat/${this.displayId}`, {
                    method: 'POST'
                });
                if (!response.ok) throw new Error('Heartbeat failed');
                
                const data = await response.json();
                if (data.layoutId !== this.currentLayout) {
                    await this.startPlayback();
                }
            } catch (e) {
                console.error('Heartbeat error:', e);
            }
        }, this.config.collectInterval * 1000);
    }
}

// Initialize player when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new XiboChromiumPlayer();
});