!function(t,e){t.Tour=e(t.jQuery),t.Tour}(window,(function(t){const e="#tourBackdrop",o="#tourBackdrop-temp",n="#tourHighlight",i="#tourHighlight-temp",r="#tourPrevent";var s;return s=window.document,function(){function a(e){var o;try{o=window.localStorage}catch(t){o=!1}if(this._options=t.extend(!0,{name:"tour",steps:[],container:"body",autoscroll:!0,keyboard:!1,storage:o,debug:!1,backdrop:!1,backdropContainer:"body",backdropOptions:{highlightOpacity:.6,highlightColor:"#FFF",backdropSibling:!1,animation:{backdropShow:function(t,e){t.fadeIn()},backdropHide:function(t,e){t.fadeOut("slow")},highlightShow:function(t,e){e.fnPositionHighlight(),t.fadeIn()},highlightTransition:"tour-highlight-animation",highlightHide:function(t,e){t.fadeOut("slow")}}},redirect:!0,orphan:!1,duration:!1,delay:!1,basePath:"",template:null,sanitizeWhitelist:[],sanitizeFunction:null,showProgressBar:!1,showProgressText:!1,getProgressBarHTML:null,getProgressTextHTML:null,afterSetState:function(t,e){},afterGetState:function(t,e){},afterRemoveState:function(t){},onStart:function(t){localStorage.tour_playing=t._options.name},onEnd:function(t){var e=t._options.name;localStorage.setItem(e+"_seen",1),localStorage.removeItem(e+"_current_step"),localStorage.removeItem("tour_playing"),"function"==typeof updateTourCardStatus&&updateTourCardStatus()},onShow:function(t){},onShown:function(t){},onHide:function(t){},onHidden:function(t){},onNext:function(t){},onPrev:function(t){},onPause:function(t,e){},onResume:function(t,e){},onRedirectError:function(t){},onElementUnavailable:this.onElementUnavailable,onElementUnavailableStep:null,onPreviouslyEnded:null,onModalHidden:null},e),0==t(this._options.backdropContainer).length&&(this._options.backdropContainer="body"),"function"==typeof this._options.sanitizeFunction)this._debug("Using custom sanitize function in place of bootstrap - security implications, be careful");else{this._options.sanitizeFunction=null,this._debug("Extending Bootstrap sanitize options");var n=t.extend(!0,{},t.fn.popover.Constructor.Default.whiteList);t.each({button:["data-role","style"],img:["style"],div:["style"]},(function(e,o){null==n[e]&&(n[e]=[]),t.merge(n[e],o)})),t.each(this._options.sanitizeWhitelist,(function(e,o){null==n[e]&&(n[e]=[]),t.merge(n[e],o)})),this._options.sanitizeWhitelist=n}return this._current=null,this.backdrops=[],this}return a.prototype.addSteps=function(t){var e,o,n;for(e=0,o=t.length;e<o;e++)n=t[e],this.addStep(n);return this},a.prototype.addStep=function(t){return this._options.steps.push(t),this},a.prototype.getStepCount=function(){return this._options.steps.length},a.prototype.getStep=function(e){if(null!=this._options.steps[e])return"function"==typeof this._options.steps[e].element&&(this._options.steps[e].element=this._options.steps[e].element()),this._options.steps[e]=t.extend(!0,{id:"step-"+e,path:"",host:"",placement:"right",title:"",content:"<p></p>",next:e===this._options.steps.length-1?-1:e+1,prev:e-1,animation:!0,container:this._options.container,autoscroll:this._options.autoscroll,backdrop:this._options.backdrop,redirect:this._options.redirect,preventInteraction:!1,orphan:this._options.orphan,duration:this._options.duration,delay:this._options.delay,delayOnElement:null,template:this._options.template,boundary:null,showProgressBar:this._options.showProgressBar,showProgressText:this._options.showProgressText,getProgressBarHTML:this._options.getProgressBarHTML,getProgressTextHTML:this._options.getProgressTextHTML,onShow:this._options.onShow,onShown:this._options.onShown,onHide:this._options.onHide,onHidden:this._options.onHidden,onNext:this._options.onNext,onPrev:this._options.onPrev,onPause:this._options.onPause,onResume:this._options.onResume,onRedirectError:this._options.onRedirectError,onElementUnavailable:this._options.onElementUnavailable,onElementUnavailableStep:this._options.onElementUnavailableStep,onModalHidden:this._options.onModalHidden,internalFlags:{elementModal:null,elementModalOriginal:null,elementBootstrapSelectpicker:null}},this._options.steps[e]),this._options.steps[e].backdropOptions=t.extend(!0,{},this._options.backdropOptions,this._options.steps[e].backdropOptions),1==this._options.steps[e].reflexOnly&&(this._options.steps[e].reflex=!0),0==this._options.steps[e].orphan&&null==this._options.steps[e].delayOnElement&&(this._options.steps[e].delayOnElement={delayElement:"element",maxDelay:2e3}),this._options.steps[e]},a.prototype._setStepFlag=function(t,e,o){null!=this._options.steps[t]&&(this._options.steps[t].internalFlags[e]=o)},a.prototype._getStepFlag=function(t,e){if(null!=this._options.steps[t])return this._options.steps[t].internalFlags[e]},a.prototype.init=function(){return null==localStorage.tour_playing?(this.ended()?this.restart():this.start(),this._debug("Tour "+this._options.name+"has started"),!0):(this._debug("Tour already playing, prevent initialise"),!1)},a.prototype.start=function(e){if(e=null!=e?e:null,this.ended()&&null==e)return null!=this._options.onPreviouslyEnded&&"function"==typeof this._options.onPreviouslyEnded?(this._debug("Tour previously ended, exiting. Call tour.restart() to force restart. Firing onPreviouslyEnded()"),this._options.onPreviouslyEnded(this)):this._debug("Tour previously ended, exiting. Call tour.restart() to force restart"),this;this.setCurrentStep(e),this._createOverlayElements(),this._initMouseNavigation(),this._initKeyboardNavigation();var o=this;t(window).on("resize.tour-"+o._options.name,(function(){o.reshowCurrentStep()}));var n=this._makePromise(null!=this._options.onStart?this._options.onStart(this):void 0);return this._callOnPromiseDone(n,this.showStep,this._current),this},a.prototype.next=function(){var t;return t=this.hideStep(),this._callOnPromiseDone(t,this._showNextStep)},a.prototype.prev=function(){var t;return t=this.hideStep(),this._callOnPromiseDone(t,this._showPrevStep)},a.prototype.goTo=function(t){var e;return this._debug("goTo step "+t),e=this.hideStep(),this._callOnPromiseDone(e,this.showStep,t)},a.prototype.end=function(){var e,o,n;return this._debug("Tour.end() called"),n=this,e=function(e){if(t(s).off("click.tour-"+n._options.name),t(s).off("keyup.tour-"+n._options.name),t(window).off("resize.tour-"+n._options.name),t(window).off("scroll.tour-"+n._options.name),n._setState("end","yes"),n._clearTimer(),t(".tour-step-element-reflex").removeClass("tour-step-element-reflex"),t(".tour-step-element-reflexOnly").removeClass("tour-step-element-reflexOnly"),n._hideBackdrop(),n._destroyOverlayElements(),null!=n._options.onEnd)return n._options.onEnd(n)},o=this.hideStep(),this._callOnPromiseDone(o,e)},a.prototype.ended=function(){return"yes"==this._getState("end")},a.prototype.restart=function(){return this._removeState("current_step"),this._removeState("end"),this._removeState("redirect_to"),this.start()},a.prototype.restartFromStep=function(t){return this._removeState("end"),this._removeState("redirect_to"),this.start(t)},a.prototype.pause=function(){var t;return(t=this.getStep(this._current))&&t.duration?(this._paused=!0,this._duration-=(new Date).getTime()-this._start,window.clearTimeout(this._timer),this._debug("Paused/Stopped step "+(this._current+1)+" timer ("+this._duration+" remaining)."),null!=t.onPause?t.onPause(this,this._duration):void 0):this},a.prototype.resume=function(){var t,e;return(t=this.getStep(this._current))&&t.duration?(this._paused=!1,this._start=(new Date).getTime(),this._duration=this._duration||t.duration,this._timer=window.setTimeout((e=this,function(){return e._isLast()?e.end():e.next()}),this._duration),this._debug("Started step "+(this._current+1)+" timer with duration "+this._duration),null!=t.onResume&&this._duration!==t.duration?t.onResume(this,this._duration):void 0):this},a.prototype.reshowCurrentStep=function(){var t;return this._debug("Reshowing current step "+this.getCurrentStepIndex()),t=this.hideStep(),this._callOnPromiseDone(t,this.showStep,this._current)},a.prototype.onElementUnavailable=function(t,e){var o,n=t.getStep(e);t._debug("Element unavailable at step "+e),t.delayFunc&&(window.clearInterval(t.delayFunc),t.delayFunc=null),(o=null!=n.onElementUnavailableStep?n.onElementUnavailableStep:e-1)<0?(t._debug("Step "+o+" not available, end tour"),t.end()):(t._debug("Go to step "+o),t.goTo(o))},a.prototype.hideStep=function(){var e,o,n,i,r;if(i=this.getStep(this.getCurrentStepIndex()))return this._clearTimer(),n=this._makePromise(null!=i.onHide?i.onHide(this,this.getCurrentStepIndex()):void 0),r=this,o=function(e){var o;(o=t(i.element)).data("bs.popover")||o.data("popover")||(o=t("body")),o.popover("dispose"),o.removeClass("tour-"+r._options.name+"-element tour-"+r._options.name+"-"+r.getCurrentStepIndex()+"-element").removeData("bs.popover"),i.reflex&&(o.removeClass("tour-step-element-reflex").off(r._reflexEvent(i.reflex)+".tour-"+r._options.name),o.removeClass("tour-step-element-reflexOnly")),r._unfixBootstrapSelectPickerZindex(i);var n=r._getStepFlag(r.getCurrentStepIndex(),"elementModalOriginal");if(null!=n&&(r._setStepFlag(r.getCurrentStepIndex(),"elementModalOriginal",null),i.element=n),null!=i.onHidden)return i.onHidden(r)},e=i.delay.hide||i.delay,"[object Number]"==={}.toString.call(e)&&e>0?(this._debug("Wait "+e+" milliseconds to hide the step "+(this._current+1)),window.setTimeout(function(t){return function(){return t._callOnPromiseDone(n,o)}}(this),e)):this._callOnPromiseDone(n,o),n},a.prototype.showStep=function(e){var o,n,i,r,a;if(this.ended())return this._debug("Tour ended, showStep prevented."),null!=this._options.onEnd&&this._options.onEnd(this),this;if((a=this.getStep(e))&&(n=this._makePromise(null!=a.onShow?a.onShow(this,e):void 0),this.setCurrentStep(e),o=function(){switch({}.toString.call(a.path)){case"[object Function]":return a.path();case"[object String]":return this._options.basePath+a.path;default:return a.path}}.call(this),!a.redirect||!this._isRedirect(a.host,o,s.location)||(this._redirect(a,e,o),this._isJustPathHashDifferent(a.host,o,s.location)))){var l=function(e){return e.delayOnElement?"function"==typeof e.delayOnElement.delayElement?e.delayOnElement.delayElement():"element"==e.delayOnElement.delayElement?t(e.element):t(e.delayOnElement.delayElement):t(e.element)};if(r=function(t){return function(o){if(t._isOrphan(a)){var n=l(a),i=a.delayOnElement&&"element"!=a.delayOnElement.delayElement;if(!1===a.orphan||i&&!n.is(":visible"))return t._debug("Handle unintended orphan step "+(t._current+1)+".\nOrphan option is false () and the element "+a.element+" does not exist or is hidden."),void("function"==typeof a.onElementUnavailable?(t._debug("Calling onElementUnavailable callback"),a.onElementUnavailable(t,t._current)):t._showPrevStep(!0));t._debug("Show the orphan step "+(t._current+1)+". Orphans option is true.")}if(t.handleStepModals(e),a.autoscroll&&!t._isOrphan(a)?t._scrollIntoView(e):t._showPopoverAndOverlay(e),a.duration)return t.resume()}}(this),i=a.delay.show||a.delay,"[object Number]"==={}.toString.call(i)&&i>0)this._debug("Wait "+i+" milliseconds to show the step "+(this._current+1)),window.setTimeout(function(t){return function(){return t._callOnPromiseDone(n,r)}}(this),i);else if(a.delayOnElement){this.delayFunc=null;var h=this,p=l(a),u=p.length>0?p[0].tagName:a.delayOnElement.delayElement,d=a.delayOnElement.maxDelay?a.delayOnElement.maxDelay:2e3;this._debug("Wait for element "+u+" visible or max "+d+" milliseconds to show the step "+(this._current+1)),h.delayFunc=window.setInterval((function(){if(h._debug("Wait for element "+u+": checking..."),0===p.length&&(p=l(a)),p.is(":visible"))return h._debug("Wait for element "+u+": found, showing step"),window.clearInterval(h.delayFunc),h.delayFunc=null,h._callOnPromiseDone(n,r)}),250),d<250&&(d=251),window.setTimeout((function(){if(h.delayFunc)return h._debug("Wait for element "+u+": max timeout reached without element found"),window.clearInterval(h.delayFunc),h._callOnPromiseDone(n,r)}),d)}else this._callOnPromiseDone(n,r);return n}},a.prototype.handleStepModals=function(e){var o=e;if(this.getCurrentStepIndex()===o&&!this.ended()){var n,i,r,s=this.getStep(o),a=null;!1===s.orphan&&(t(s.element).hasClass("modal")||t(s.element).data("bs.modal"))&&(a=t(s.element),this._setStepFlag(this.getCurrentStepIndex(),"elementModalOriginal",s.element),s.element=t(s.element).find(".modal-content:first")),n=t(s.element),null===a&&n.parents(".modal:first").length&&(a=n.parents(".modal:first")),a&&a.length>0&&(this._setStepFlag(o,"elementModal",a),null!=this.funcModalHelper&&a.off("hidden.bs.modal",this.funcModalHelper),this.funcModalHelper=(i=this,r=a,function(){if(i._debug("Modal close triggered"),"function"==typeof s.onModalHidden){var t=s.onModalHidden(i,o);if(!1===t)return void i._debug("onModalHidden returned exactly false, tour step unchanged");if(Number.isInteger(t))return i._debug("onModalHidden returned int, tour moving to step "+t+1),r.off("hidden.bs.modal",i.funcModalHelper),i.goTo(t);i._debug("onModalHidden did not return false or int, continuing tour")}r.off("hidden.bs.modal",i.funcModalHelper)}),a.on("hidden.bs.modal",this.funcModalHelper))}},a.prototype.getCurrentStepIndex=function(){return parseInt(this._current)},a.prototype.setCurrentStep=function(t){return null!=t?(this._current=t,this._setState("current_step",t)):(this._current=this._getState("current_step"),this._current=null===this._current?0:parseInt(this._current,10)),this},a.prototype._setState=function(t,e){var o;if(this._options.storage){o=this._options.name+"_"+t;try{this._options.storage.setItem(o,e)}catch(t){t.code===DOMException.QUOTA_EXCEEDED_ERR&&this._debug("LocalStorage quota exceeded. State storage failed.")}return this._options.afterSetState(o,e)}return null==this._state&&(this._state={}),this._state[t]=e,this._state[t]},a.prototype._removeState=function(t){var e;return this._options.storage?(e=this._options.name+"_"+t,this._options.storage.removeItem(e),this._options.afterRemoveState(e)):null!=this._state?delete this._state[t]:void 0},a.prototype._getState=function(t){var e,o;return this._options.storage?(e=this._options.name+"_"+t,o=this._options.storage.getItem(e)):null!=this._state&&(o=this._state[t]),void 0!==o&&"null"!==o||(o=null),this._options.afterGetState(t,o),o},a.prototype._showNextStep=function(t){var e,o,n,i,r=t||!1;if(i=this,o=function(t){return i.showStep(i._current+1)},e=void 0,n=this.getStep(this._current),!1===r&&null!=n.onNext){var s=n.onNext(this);if(!1===s)return this._debug("onNext callback returned false, preventing move to next step"),this.showStep(this._current);e=this._makePromise(s)}return this._callOnPromiseDone(e,o)},a.prototype._showPrevStep=function(t){var e,o,n,i,r=t||!1;if(i=this,o=function(t){return i.showStep(n.prev)},e=void 0,n=this.getStep(this._current),!1===r&&null!=n.onPrev){var s=n.onPrev(this);if(!1===s)return this._debug("onPrev callback returned false, preventing move to previous step"),this.showStep(this._current);e=this._makePromise(s)}return this._callOnPromiseDone(e,o)},a.prototype._debug=function(t){if(this._options.debug)return window.console.log("[ Xibo Tour: '"+this._options.name+"' ] "+t)},a.prototype._isRedirect=function(t,e,o){var n;return!(null==t||""===t||!("[object RegExp]"==={}.toString.call(t)&&!t.test(o.origin)||"[object String]"==={}.toString.call(t)&&this._isHostDifferent(t,o)))||(n=[o.pathname,o.search,o.hash].join(""),null!=e&&""!==e&&("[object RegExp]"==={}.toString.call(e)&&!e.test(n)||"[object String]"==={}.toString.call(e)&&this._isPathDifferent(e,n)))},a.prototype._isHostDifferent=function(t,e){switch({}.toString.call(t)){case"[object RegExp]":return!t.test(e.origin);case"[object String]":return this._getProtocol(t)!==this._getProtocol(e.href)||this._getHost(t)!==this._getHost(e.href);default:return!0}},a.prototype._isPathDifferent=function(t,e){return this._getPath(t)!==this._getPath(e)||!this._equal(this._getQuery(t),this._getQuery(e))||!this._equal(this._getHash(t),this._getHash(e))},a.prototype._isJustPathHashDifferent=function(t,e,o){var n;return(null==t||""===t||!this._isHostDifferent(t,o))&&(n=[o.pathname,o.search,o.hash].join(""),"[object String]"==={}.toString.call(e)&&this._getPath(e)===this._getPath(n)&&this._equal(this._getQuery(e),this._getQuery(n))&&!this._equal(this._getHash(e),this._getHash(n)))},a.prototype._redirect=function(e,o,n){var i;return t.isFunction(e.redirect)?e.redirect.call(this,n):(i="[object String]"==={}.toString.call(e.host)?""+e.host+n:n,this._debug("Redirect to "+i),this._getState("redirect_to")!==""+o?(this._setState("redirect_to",""+o),s.location.href=i,s.location.href):(this._debug("Error redirection loop to "+n),this._removeState("redirect_to"),null!=e.onRedirectError?e.onRedirectError(this):void 0))},a.prototype._isOrphan=function(e){return 1==e.orphan||null==e.element||!t(e.element).length||t(e.element).is(":hidden")&&"http://www.w3.org/2000/svg"!==t(e.element)[0].namespaceURI},a.prototype._isLast=function(){return this._current>=this._options.steps.length-1},a.prototype._showPopoverAndOverlay=function(t){var e;if(this.getCurrentStepIndex()===t&&!this.ended())return e=this.getStep(t),this._updateBackdropElements(e),this._updateOverlayElements(e),this._fixBootstrapSelectPickerZindex(e),this._showPopover(e,t),null!=e.onShown&&e.onShown(this),this},a.prototype._showPopover=function(e,o){var n,i,r,a,l,h;if(i=this._isOrphan(e),0==t(s).find(".popover.tour-"+this._options.name+".tour-"+this._options.name+"-"+this.getCurrentStepIndex()).length){if(t(".tour-"+this._options.name).remove(),e.template=this._template(e,o),i&&(e.element="body",e.placement="top",e.reflexOnly&&this._debug("Step is an orphan, and reflexOnly is set: ignoring reflexOnly")),(n=t(e.element)).addClass("tour-"+this._options.name+"-element tour-"+this._options.name+"-"+o+"-element"),e.reflex&&!i&&(n.addClass("tour-step-element-reflex"),n.off(this._reflexEvent(e.reflex)+".tour-"+this._options.name).on(this._reflexEvent(e.reflex)+".tour-"+this._options.name,(h=this,function(){return h._isLast()?h.end():h.next()})),e.reflexOnly)){n.addClass("tour-step-element-reflexOnly");var p=t(e.template).find('[data-role="next"]').clone();if(p.length){var u=p[0].outerHTML;p.hide();var d=p[0].outerHTML;e.template=e.template.replace(u,d)}}r=e.title,a=e.content,l=parseInt((o+1)/this.getStepCount()*100),e.showProgressBar&&(a="function"==typeof e.getProgressBarHTML?e.getProgressBarHTML(l)+a:'<div class="progress"><div class="progress-bar progress-bar-striped" role="progressbar" style="width: '+l+'%;"></div></div>'+a),e.showProgressText&&("function"==typeof e.getProgressTextHTML?r+=e.getProgressTextHTML(o,l,this.getStepCount()):r+='<span class="float-right">'+(o+1)+"/"+this.getStepCount()+"</span>");var c={placement:e.placement,trigger:"manual",title:r,content:a,html:!0,whiteList:this._options.sanitizeWhitelist,sanitizeFn:this._options.sanitizeFunction,animation:e.animation,container:e.container,template:e.template,selector:e.element};null!=e.boundary&&(c.boundary=e.boundary),i?c.offset=function(e){var o=Math.max(0,(t(window).height()-e.popper.height)/2),n=Math.max(0,(t(window).width()-e.popper.width)/2);return e.popper.position="fixed",e.popper.top=o,e.popper.bottom=o+e.popper.height,e.popper.left=n,e.popper.right=o+e.popper.width,e}:c.selector="#"+e.element[0].id,n.popover(c),n.popover("show"),t(n.data("bs.popover")?n.data("bs.popover").getTipElement():n.data("popover").getTipElement()).attr("id",e.id),this._debug("Step "+(this._current+1)+" of "+this._options.steps.length)}},a.prototype._template=function(e,o){var n,i,r,s,a,l;return l=e.template,this._isOrphan(e)&&"[object Boolean]"!=={}.toString.call(e.orphan)&&(l=e.orphan),r=(n=(a=t.isFunction(l)?t(l(o,e)):t(l)).find(".popover-navigation")).find('[data-role="prev"]'),i=n.find('[data-role="next"]'),s=n.find('[data-role="pause-resume"]'),this._isOrphan(e)&&a.addClass("orphan"),a.addClass("tour-"+this._options.name+" tour-"+this._options.name+"-"+o),e.reflex&&a.addClass("tour-"+this._options.name+"-reflex"),e.prev<0&&r.addClass("disabled").prop("disabled",!0).prop("tabindex",-1),e.next<0&&i.addClass("disabled").prop("disabled",!0).prop("tabindex",-1),e.duration||s.remove(),a.clone().wrap("<div>").parent().html()},a.prototype._reflexEvent=function(t){return"[object Boolean]"==={}.toString.call(t)?"click":t},a.prototype._reposition=function(e,o){var n,i,r,a,l,h,p;if(a=e[0].offsetWidth,i=e[0].offsetHeight,l=(p=e.offset()).left,h=p.top,(n=t(s).height()-p.top-e.outerHeight())<0&&(p.top=p.top+n),(r=t("html").outerWidth()-p.left-e.outerWidth())<0&&(p.left=p.left+r),p.top<0&&(p.top=0),p.left<0&&(p.left=0),e.offset(p),"bottom"===o.placement||"top"===o.placement){if(l!==p.left)return this._replaceArrow(e,2*(p.left-l),a,"left")}else if(h!==p.top)return this._replaceArrow(e,2*(p.top-h),i,"top")},a.prototype._replaceArrow=function(t,e,o,n){return t.find(".arrow").css(n,e?50*(1-e/o)+"%":"")},a.prototype._scrollIntoView=function(e){var o,n,i,r,s,a,l,h,p;if(l=this.getStep(e),o=t(l.element),this._isOrphan(l))return this._showPopoverAndOverlay(e);if(!o.length)return this._showPopoverAndOverlay(e);switch(n=t(window),s=o.offset().top,r=o.outerHeight(),h=n.height(),a=0,l.placement){case"top":a=Math.max(0,s-h/2);break;case"left":case"right":a=Math.max(0,s+r/2-h/2);break;case"bottom":a=Math.max(0,s+r-h/2)}return this._debug("Scroll into view. ScrollTop: "+a+". Element offset: "+s+". Window height: "+h+"."),i=0,t("body, html").stop(!0,!0).animate({scrollTop:Math.ceil(a)},(p=this,function(){if(2==++i)return p._showPopoverAndOverlay(e),p._debug("Scroll into view.\nAnimation end element offset: "+o.offset().top+".\nWindow height: "+n.height()+".")}))},a.prototype._initMouseNavigation=function(){var e;return e=this,t(s).off("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='prev']").off("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='next']").off("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='end']").off("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='pause-resume']").on("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='next']",function(t){return function(e){return e.preventDefault(),t.next()}}(this)).on("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='prev']",function(t){return function(e){if(e.preventDefault(),t._current>0)return t.prev()}}(this)).on("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='end']",function(t){return function(e){return e.preventDefault(),t.end()}}(this)).on("click.tour-"+this._options.name,".popover.tour-"+this._options.name+" *[data-role='pause-resume']",(function(o){var n;return o.preventDefault(),(n=t(this)).text(e._paused?n.data("pause-text"):n.data("resume-text")),e._paused?e.resume():e.pause()}))},a.prototype._initKeyboardNavigation=function(){var e;if(this._options.keyboard)return t(s).on("keyup.tour-"+this._options.name,(e=this,function(o){if(o.which)switch(o.which){case 39:if(0==t(".tour-step-element-reflexOnly").length)return o.preventDefault(),e._isLast()?e.end():e.next();break;case 37:if(0==t(".tour-step-element-reflexOnly").length&&(o.preventDefault(),e._current>0))return e.prev();break;case 27:return o.preventDefault(),e.end()}}))},a.prototype._makePromise=function(e){return e&&t.isFunction(e.then)?e:null},a.prototype._callOnPromiseDone=function(t,e,o){return t?t.then((n=this,function(t){return e.call(n,o)})):e.call(this,o);var n},a.prototype._fixBootstrapSelectPickerZindex=function(e){var o;this._isOrphan(e)||0==t(s).find(".popover.tour-"+this._options.name+".tour-"+this._options.name+"-"+this.getCurrentStepIndex()).length&&(o="select"==t(e.element)[0].tagName.toLowerCase()?t(e.element):t(e.element).find("select:first")).length>0&&o.parent().hasClass("bootstrap-select")&&(this._debug("Fixing Bootstrap SelectPicker"),o.parent().css("z-index","1111"),this._setStepFlag(this.getCurrentStepIndex(),"elementBootstrapSelectpicker",o))},a.prototype._unfixBootstrapSelectPickerZindex=function(t){var e=this._getStepFlag(this.getCurrentStepIndex(),"elementBootstrapSelectpicker");e&&(this._debug("Unfixing Bootstrap SelectPicker"),e.parent().css("z-index","auto"))},a.prototype._createOverlayElements=function(){var o=t('<div class="tour-backdrop" id="'+e.substr(1)+'"></div>'),i=t('<div class="tour-highlight" id="'+n.substr(1)+'" style="width:0px;height:0px;top:0px;left:0px;"></div>');0===t(e).length&&t(this._options.backdropContainer).append(o),0===t(n).length&&t(this._options.backdropContainer).append(i)},a.prototype._destroyOverlayElements=function(o){t(e).remove(),t(n).remove(),t(r).remove(),t(".tour-highlight-element").removeClass("tour-highlight-element")},a.prototype._hideBackdrop=function(r){var s=r||null;s?(this._hideHighlightOverlay(s),"function"==typeof s.backdropOptions.animation.backdropHide?s.backdropOptions.animation.backdropHide(t(e)):(t(e).addClass(s.backdropOptions.animation.backdropHide),t(e).hide(0,(function(){t(this).removeClass(s.backdropOptions.animation.backdropHide)})))):(t(e).hide(0),t(n).hide(0),t(o).remove(),t(i).remove())},a.prototype._showBackdrop=function(o){var i=o||null;t(e).removeClass().addClass("tour-backdrop").hide(0),i?("function"==typeof i.backdropOptions.animation.backdropShow?i.backdropOptions.animation.backdropShow(t(e)):(t(e).addClass(i.backdropOptions.animation.backdropShow),t(e).show(0,(function(){t(this).removeClass(i.backdropOptions.animation.backdropShow)}))),this._isOrphan(i)?t(n).is(":visible")&&this._hideHighlightOverlay(i):t(n).is(":visible")?this._positionHighlightOverlay(i):this._showHighlightOverlay(i)):(t(e).show(0),t(n).show(0))},a.prototype._createStepSubset=function(e){var o=this,i=t(e.element);return{element:i,container:e.container,autoscroll:e.autoscroll,backdrop:e.backdrop,preventInteraction:e.preventInteraction,isOrphan:this._isOrphan(e),orphan:e.orphan,duration:e.duration,delay:e.delay,fnPositionHighlight:function(){o._debug("Positioning highlight (fnPositionHighlight) over step element "+i[0].id+":\nWidth = "+i.outerWidth()+", height = "+i.outerHeight()+"\nTop: "+i.offset().top+", left: "+i.offset().left),t(n).width(i.outerWidth()).height(i.outerHeight()).offset(i.offset())}}},a.prototype._showHighlightOverlay=function(e){var o=t(".tour-highlight-element");o.length>0&&o.removeClass("tour-highlight-element");var i=t(e.element).parents(".modal:first");i.length?i.addClass("tour-highlight-element"):t(e.element).addClass("tour-highlight-element"),t(n).removeClass().addClass("tour-highlight").hide(0),"function"==typeof e.backdropOptions.animation.highlightShow?e.backdropOptions.animation.highlightShow(t(n),this._createStepSubset(e)):(t(n).css({opacity:e.backdropOptions.highlightOpacity,"background-color":e.backdropOptions.highlightColor}),t(n).width(0).height(0).offset({top:0,left:0}),t(n).show(0),t(n).addClass(e.backdropOptions.animation.highlightShow),t(n).width(t(e.element).outerWidth()).height(t(e.element).outerHeight()).offset(t(e.element).offset()),t(n).one("webkitAnimationEnd oanimationend msAnimationEnd animationend",(function(){t(n).removeClass(e.backdropOptions.animation.highlightShow)})))},a.prototype._positionHighlightOverlay=function(e){var o=t(".tour-highlight-element");o.length>0&&o.removeClass("tour-highlight-element");var i=t(e.element).parents(".modal:first");i.length?i.addClass("tour-highlight-element"):t(e.element).addClass("tour-highlight-element"),"function"==typeof e.backdropOptions.animation.highlightTransition?e.backdropOptions.animation.highlightTransition(t(n),this._createStepSubset(e)):(t(n).removeClass().addClass("tour-highlight"),t(n).css({opacity:e.backdropOptions.highlightOpacity,"background-color":e.backdropOptions.highlightColor}),t(n).addClass(e.backdropOptions.animation.highlightTransition),t(n).width(t(e.element).outerWidth()).height(t(e.element).outerHeight()).offset(t(e.element).offset()),t(n).one("webkitAnimationEnd oanimationend msAnimationEnd animationend",(function(){t(n).removeClass(e.backdropOptions.animation.highlightTransition)})))},a.prototype._hideHighlightOverlay=function(e){t(".tour-highlight-element").removeClass("tour-highlight-element"),"function"==typeof e.backdropOptions.animation.highlightHide?e.backdropOptions.animation.highlightHide(t(n),this._createStepSubset(e)):(t(n).addClass(e.backdropOptions.animation.highlightHide),t(n).one("webkitAnimationEnd oanimationend msAnimationEnd animationend",(function(){t(n).removeClass().addClass("tour-highlight"),t(n).hide(0)})))},a.prototype._updateBackdropElements=function(r){r.backdrop!=t(e).is(":visible")?r.backdrop?this._showBackdrop(r):this._hideBackdrop(r):r.backdrop?this._isOrphan(r)?t(n).is(":visible")&&this._hideHighlightOverlay(r):t(n).is(":visible")?this._positionHighlightOverlay(r):this._showHighlightOverlay(r):t(n).is(":visible")&&this._hideHighlightOverlay(r),t(o).remove(),t(i).remove(),1==r.backdropOptions.backdropSibling?(t(n).addClass("tour-behind"),t(e).addClass("tour-zindexFix"),t(n).clone().prop("id",i.substring(1)).removeClass("tour-behind").insertAfter(".tour-highlight-element"),t(e).clone().prop("id",o.substring(1)).removeClass("tour-zindexFix").insertAfter(".tour-highlight-element")):(t(n).removeClass("tour-behind"),t(e).removeClass("tour-zindexFix"))},a.prototype._updateOverlayElements=function(e){e.preventInteraction?(this._debug("preventInteraction == true, adding overlay"),0===t(r).length&&t('<div class="tour-prevent" id="'+r.substr(1)+'" style="width:0px;height:0px;top:0px;left:0px;"></div>').insertAfter(n),t(r).width(t(e.element).outerWidth()).height(t(e.element).outerHeight()).offset(t(e.element).offset())):t(r).remove()},a.prototype._clearTimer=function(){return window.clearTimeout(this._timer),this._timer=null,this._duration=null,this._duration},a.prototype._getProtocol=function(t){return(t=t.split("://")).length>1?t[0]:"http"},a.prototype._getHost=function(t){return(t=(t=t.split("//")).length>1?t[1]:t[0]).split("/")[0]},a.prototype._getPath=function(t){return t.replace(/\/?$/,"").split("?")[0].split("#")[0]},a.prototype._getQuery=function(t){return this._getParams(t,"?")},a.prototype._getHash=function(t){return this._getParams(t,"#")},a.prototype._getParams=function(t,e){var o,n,i,r,s;if(1===(r=t.split(e)).length)return{};for(s={},o=0,n=(r=r[1].split("&")).length;o<n;o++)s[(i=(i=r[o]).split("="))[0]]=i[1]||"";return s},a.prototype._equal=function(t,e){var o,n,i,r,s,a;if("[object Object]"==={}.toString.call(t)&&"[object Object]"==={}.toString.call(e)){if(r=Object.keys(t),s=Object.keys(e),r.length!==s.length)return!1;for(n in t)if(a=t[n],!this._equal(e[n],a))return!1;return!0}if("[object Array]"==={}.toString.call(t)&&"[object Array]"==={}.toString.call(e)){if(t.length!==e.length)return!1;for(n=o=0,i=t.length;o<i;n=++o)if(a=t[n],!this._equal(a,e[n]))return!1;return!0}return t===e},a}()}));