var html5Preloader=function(){var e="undefined"==typeof XMLHttpRequest?function(){try{return new ActiveXObject("Msxml2.XMLHTTP.6.0")}catch(e){}try{return new ActiveXObject("Msxml2.XMLHTTP.3.0")}catch(e){}return null}:XMLHttpRequest,i="undefined"!=typeof Audio?function(){return new Audio}:function(){return document.createElement("audio")},t="undefined"!=typeof Video?function(){return new Video}:function(){return document.createElement("video")},n={oga:{codec:'audio/ogg; codecs="vorbis"',media:"audio"},wav:{codec:'audio/wav; codecs="1"',media:"audio"},webma:{codec:'audio/webm; codecs="vorbis"',media:"audio"},mp3:{codec:'audio/mpeg; codecs="mp3"',media:"audio"},m4a:{codec:'audio/mp4; codecs="mp4a.40.2"',media:"audio"},ogv:{codec:'video/ogg; codecs="theora, vorbis"',media:"video"},webmv:{codec:'video/webm; codecs="vorbis, vp8"',media:"video"},m4v:{codec:'video/mp4; codecs="avc1.42E01E, mp4a.40.2"',media:"video"}},o={imageTypes:["jpg","png","jpeg","tiff","gif"]},s="FILE@";function r(e,i){for(var t=0;t<i.length;t++)if(i[t]===e)return!0;return!1}function a(e,i){return e.bind?e.bind(i):function(){return e.apply(i,arguments)}}function d(e){var i=[].slice.call(arguments,1);setTimeout((function(){e.apply(this,i)}),0)}function l(){var e;for(e in l.prototype)l.prototype.hasOwnProperty(e)&&(this[e]=l.prototype[e]);this._listeners={}}function u(e,i,t){if(!(this instanceof u))return new u(e,i,t);var s,a,l,c,f=this,h=[];if("string"==typeof e){for(a=(s=e.split("*:"))[s[1]?1:0].split("||"),f.id=s[1]?s[0]:a[0],f.alternates=h,s=0;s<a.length;s++)l=(l=a[s].split("."))[l.length-1].toLowerCase(),c=n[l]?n[l].media:r(l,o.imageTypes)?"image":"document",n[l]&&!n[l].supported||h.push({type:c,path:a[s]});h.length||h.push({type:c,path:a[s-1]}),function e(){var n=h.shift(),o=null;n?("number"==typeof t&&(o=setTimeout((function(){d(i,{e:Error("Load event not fired within "+t+"ms")},f)}),t)),new u[n.type](n.path,(function(t,n){if(o&&clearTimeout(o),f.dom=n&&n.dom,t&&f.alternates.length)return e();i(t,f)}))):d(i,{e:Error("No viable alternatives")},null)}()}else d(i,TypeError("Invalid path"),f)}function c(e){return function(i,t){var n=this,o=e();function s(){o.onload=o.onerror=null,o.removeEventListener&&o.removeEventListener("canplaythrough",s,!0),t(null,n)}o.addEventListener&&o.addEventListener("canplaythrough",s,!0),o.onload=s,o.onerror=function(e){t(e,n)},n.dom=o,o.src=i,o.load&&o.load()}}function f(){var e=this,i=arguments;if(!(e instanceof f))return e=new f,i.length&&e.loadFiles.apply(e,i),e;e.files=[],f.EventEmitter.call(e),e.loadCallback=a(e.loadCallback,e),i.length&&e.loadFiles.apply(e,i)}return n.ogg=n.oga,n.mp4=n.m4v,n.webm=n.webmv,l.prototype={_listeners:null,emit:function(e,i){if(i=i||[],this._listeners[e])for(var t=0;t<this._listeners[e].length;t++)this._listeners[e][t].apply(this,i);return this},on:function(e,i){return this._listeners[e]=this._listeners[e]||[],this._listeners[e].push(i),this},off:function(e,i){if(this._listeners[e]){if(!i)return delete this._listeners[e],this;for(var t=0;t<this._listeners[e].length;t++)this._listeners[e][t]===i&&this._listeners[e].splice(t--,1);this._listeners[e].length||delete this._listeners[e]}return this},once:function(e,i){return this.on(e,(function e(){return this.off(e),i.apply(this,arguments)}))}},u.audio=c(i),u.video=c(t),u.image=c((function(){return new Image})),u.document=function(i,t){var n=this,o=/(\[(!)?(.+)?\])?$/.exec(i),s=o[3],r=n.dom=new e;r?(i=i.substr(0,i.length-o[0].length),i+=o[2]?(-1===i.indexOf("?")?"?":"&")+"fobarz="+ +new Date:"",s&&r.overrideMimeType("@"===s?"text/plain; charset=x-user-defined":s),r.onreadystatechange=function(){if(4===r.readyState)try{n.dom=r.responseXML&&r.responseXML.documentElement?r.responseXML:String(r.responseText||""),200===r.status?t(null,n):t({e:Error("Request failed: "+r.status)},n)}catch(e){t({e:e},n)}},r.onerror=function(e){t(e,n)},r.open("GET",i,!0),r.send()):d(t,Error("No XHR!"),n)},function(){var e,s=i(),r=t();for(e in o.audio=!!s.canPlayType,o.video=!!r.canPlayType,o.audioTypes=[],o.videoTypes=[],n)n.hasOwnProperty(e)&&("video"===n[e].media?(n[e].supported=o.video&&r.canPlayType(n[e].codec))&&o.videoTypes.push(e):"audio"===n[e].media&&(n[e].supported=o.audio&&s.canPlayType(n[e].codec))&&o.audioTypes.push(e))}(),o.audio||(u.audio=function(e,i){d(i,Error("<AUDIO> not supported."),e)}),o.video||(u.video=function(e,i){d(i,Error("<VIDEO> not supported."),e)}),f.prototype={active:!1,files:null,filesLoading:0,filesLoaded:0,filesLoadedMap:{},timeout:null,loadCallback:function(e,i){this.filesLoadedMap[i.id]||(this.filesLoaded++,this.filesLoadedMap[i.id]=i),this.emit(e?"error":"fileloaded",e?[e,i]:[i]),this.filesLoading-this.filesLoaded==0&&(this.active=!1,this.emit("finish"),this.filesLoading=0,this.filesLoaded=0)},getFile:function(e){return void 0===e?function(e,i){if(e.map)return e.map(i);var t,n=[];for(t=0;t<e.length;t++)n.push(i(e[t]));return n}(this.files,(function(e){return e.dom})):"number"==typeof e?this.files[e].dom:"string"==typeof e?this.files[s+e].dom:null},removeFile:function(e){var i,t;switch(typeof e){case"undefined":this.files=[];break;case"number":i=this.files[e],this.files[s+i.id]&&delete this.files[s+i.id],this.files.splice(e,1);break;case"string":for((i=this.files[s+e])&&delete this.files[s+e],t=0;t<this.files.length;t++)this.files[t]===i&&this.files.splice(t--,1)}},loadFiles:function(){var e,i,t=[].slice.call(arguments);for(e=0;e<t.length;e++)i=f.loadFile(t[e],this.loadCallback,this.timeout),this.files.push(i),this.files[s+i.id]=i,this.filesLoading++;this.active=this.active||!!this.filesLoading},addFiles:function(e){return this.loadFiles.apply(this,e instanceof Array?e:arguments)},getProgress:function(){return this.filesLoading?this.filesLoaded/this.filesLoading:1}},f.support=o,f.loadFile=u,f.EventEmitter=l,f}();