var LOG_LEVEL,previewLayout,VERSION="3.1",ID_COUNTER=0;function dsInit(e,i,t){LOG_LEVEL=10,$(".preview-log").css("display","none"),$(".preview-info").css("display","none"),$(".preview-end").css("display","none"),document.onkeypress=keyHandler,playLog(0,"info","Xibo HTML Preview v"+VERSION+" Starting Up",!0);var a={addedFiles:[],preloader:html5Preloader(),addFiles:function(e){this.addedFiles.includes(e)||(this.preloader.addFiles(e),this.addedFiles.push(e))}};previewLayout=new Layout(e,i,a,t)}function nextId(){return ID_COUNTER>500&&(ID_COUNTER=0),ID_COUNTER+=1}function playLog(e,i,t,a){if(e<=LOG_LEVEL){var n=timestamp()+" "+i.toUpperCase()+": "+t;e>0&&console.log(n),a&&$(".preview-log").html(n)}}function timestamp(){var e="",i=new Date,t=i.getDate(),a=i.getMonth()+1,n=i.getFullYear(),o=i.getHours(),r=i.getMinutes(),d=i.getSeconds();return r<10&&(r="0"+r),d<10&&(d="0"+d),(e+=t+"/"+a+"/"+n+" ")+(o+":")+r+":"+d+"'"+i.getMilliseconds()}function keyHandler(e){var i="charCode"in e?e.charCode:e.keyCode;if("l"==String.fromCharCode(i)){var t=$(".preview-log");"none"==t.css("display")?t.css("display","block"):t.css("display","none")}}function Layout(e,i,t,a){var n=this;n.id=e,n.parseXlf=function(e){playLog(10,"debug","Parsing Layout "+n.id,!1),n.containerName="L"+n.id+"-"+nextId(),n.regionMaxZIndex=0;var o=$("#screen_"+n.id);o.append('<div id="'+n.containerName+'"></div>'),!1===a&&o.append('<a style="position:absolute;top:0;left:0;width:100%;height:100%;" target="_blank" href="'+o.parent().parent().attr("data-url")+'"></a>');var r=$("#"+n.containerName);if(r.css("display","none"),r.css("outline","red solid thin"),n.sw=o.width(),n.sh=o.height(),playLog(7,"debug","Screen is ("+n.sw+"x"+n.sh+") pixels"),n.layoutNode=e,n.xw=$(n.layoutNode).filter(":first").attr("width"),n.xh=$(n.layoutNode).filter(":first").attr("height"),n.zIndex=$(n.layoutNode).filter(":first").attr("zindex"),playLog(7,"debug","Layout is ("+n.xw+"x"+n.xh+") pixels"),n.scaleFactor=Math.min(n.sw/n.xw,n.sh/n.xh),n.sWidth=Math.round(n.xw*n.scaleFactor),n.sHeight=Math.round(n.xh*n.scaleFactor),n.offsetX=Math.abs(n.sw-n.sWidth)/2,n.offsetY=Math.abs(n.sh-n.sHeight)/2,playLog(7,"debug","Scale Factor is "+n.scaleFactor),playLog(7,"debug","Render will be ("+n.sWidth+"x"+n.sHeight+") pixels"),playLog(7,"debug","Offset will be ("+n.offsetX+","+n.offsetY+") pixels"),r.css("width",n.sWidth+"px"),r.css("height",n.sHeight+"px"),r.css("position","absolute"),r.css("left",n.offsetX+"px"),r.css("top",n.offsetY+"px"),null!=n.zIndex&&r.css("z-index",n.zIndex),n.bgColour=$(n.layoutNode).filter(":first").attr("bgcolor"),n.bgImage=$(n.layoutNode).filter(":first").attr("background"),""!=n.bgImage&&null!=n.bgImage){n.bgId=n.bgImage.substring(0,n.bgImage.indexOf("."));var d=i.layoutBackgroundDownloadUrl.replace(":id",n.id)+"?preview=1";t.addFiles(d+"&width="+n.sWidth+"&height="+n.sHeight+"&dynamic&proportional=0"),r.css("background","url('"+d+"&width="+n.sWidth+"&height="+n.sHeight+"&dynamic&proportional=0')"),r.css("background-repeat","no-repeat"),r.css("background-size",n.sWidth+"px "+n.sHeight+"px"),r.css("background-position","0px 0px")}r.css("background-color",n.bgColour);var s=[];$($.parseXML(n.layoutNode)).find("action").each((function(e,i){playLog(4,"debug","Creating action "+$(this).attr("id"),!1),s.push(new Action($(this).attr("id"),this))})),n.actionController=new ActionController(n,s,i),$($.parseXML(n.layoutNode)).find("drawer").each((function(){playLog(4,"debug","Creating drawer "+$(this).attr("id"),!1),n.drawer=this})),$($.parseXML(n.layoutNode)).find("region").each((function(){playLog(4,"debug","Creating region "+$(this).attr("id"),!1),n.regionObjects.push(new Region(n,$(this).attr("id"),this,i,t))})),playLog(4,"debug","Layout "+n.id+" has "+n.regionObjects.length+" regions"),n.actionController.initTouchActions(),n.ready=!1,t.addFiles(i.loaderUrl),a?t.preloader.on("finish",n.run):n.run()},n.run=function(){if(playLog(4,"debug","Running Layout ID "+n.id,!1),n.ready){$("#"+n.containerName).css("display","block"),$("#splash_"+n.id).css("display","none");for(var e=0;e<n.regionObjects.length;e++)playLog(4,"debug","Running region "+n.regionObjects[e].id,!1),n.regionObjects[e].run()}else n.checkReadyState(40,n.run,(function(){playLog(4,"error","Attempted to run Layout ID "+n.id+" before it was ready.",!1)}))},n.end=function(){parent.postMessage("viewerStoppedPlaying");for(var e=0;e<n.regionObjects.length;e++)n.regionObjects[e].end()},n.destroy=function(){},n.regionExpired=function(){playLog(5,"debug","A region expired. Checking if all regions have expired.",!1),n.allExpired=!0;for(var e=0;e<n.regionObjects.length;e++)playLog(4,"debug","Region "+n.regionObjects[e].id+" expired? "+n.regionObjects[e].complete,!1),n.regionObjects[e].complete||(n.allExpired=!1);n.allExpired&&(playLog(4,"debug","All regions have expired",!1),n.end())},n.regionEnded=function(){playLog(5,"debug","A region ended. Checking if all regions have ended.",!1),n.allEnded=!0;for(var e=0;e<n.regionObjects.length;e++)playLog(4,"debug","Region "+n.regionObjects[e].id+": "+n.regionObjects[e].ended,!1),n.regionObjects[e].ended||(n.allEnded=!1);n.allEnded&&(playLog(4,"debug","All regions have ended",!1),n.stopAllMedia(),$("#end_"+n.id).css("display","block"))},n.stopAllMedia=function(){playLog(3,"debug","Stop all media!");for(var e=0;e<n.regionObjects.length;e++)for(var i=n.regionObjects[e],t=0;t<i.mediaObjects.length;t++)i.mediaObjects[t].stop()},n.checkReadyState=function(e,i,t){n.ready=!0;for(var a=0;a<n.regionObjects.length;a++){var o=n.regionObjects[a];o.checkReadyState(),o.ready||(n.ready=!1)}n.ready?i():--e<=0?t():setTimeout((function(){n.checkReadyState(e,i,t)}),250)},n.ready=!1,n.id=e,n.regionObjects=[],n.drawer=[],n.allExpired=!1,playLog(3,"debug","Loading Layout "+n.id,!0),$.ajax({type:"GET",url:i.getXlfUrl,success:n.parseXlf})}function Region(e,i,t,a,n){var o=this;o.layout=e,o.id=i,o.xml=t,o.mediaObjects=[],o.mediaObjectsActions=[],o.currentMedia=-1,o.complete=!1,o.containerName="R-"+o.id+"-"+nextId(),o.ending=!1,o.ended=!1,o.oneMedia=!1,o.oldMedia=void 0,o.curMedia=void 0,o.totalMediaObjects=$(o.xml).children("media").length,o.ready=!1,o.finished=function(){o.mediaObjects=o.mediaObjects.filter((function(e){return!e.singlePlay})),o.complete=!0,o.layout.regionExpired()},o.exitTransition=function(){$("#"+o.containerName).css("display","none"),o.exitTransitionComplete()},o.end=function(){playLog(8,"debug","Region "+o.id+" has ended!"),o.ending=!0,o.exitTransition()},o.exitTransitionComplete=function(){o.ended=!0,o.layout.regionEnded()},o.transitionNodes=function(e,i){var t="1"==i.options.loop||"1"==i.region.options.loop&&1==i.region.totalMediaObjects;e&&e.pause(),(e!=i||t)&&(t&&e==i&&e.reset(),e&&e.stop(),o.ended||(i.run(),$("#"+i.containerName).css("display","block")))},o.nextMedia=function(){o.ended||(o.curMedia?(playLog(8,"debug","nextMedia -> Old: "+o.curMedia.id),o.oldMedia=o.curMedia):o.oldMedia=void 0,o.currentMedia=o.currentMedia+1,o.currentMedia>=o.mediaObjects.length&&(o.finished(),o.currentMedia=0),playLog(8,"debug","nextMedia -> Next up is media "+(o.currentMedia+1)+" of "+o.mediaObjects.length),o.curMedia=o.mediaObjects[o.currentMedia],null!=o.curMedia&&playLog(8,"debug","nextMedia -> New: "+o.curMedia.id),o.transitionNodes(o.oldMedia,o.curMedia))},o.previousMedia=function(){o.currentMedia=o.currentMedia-1,o.currentMedia<0||o.ended?o.currentMedia=0:(o.curMedia?(playLog(8,"debug","previousMedia -> Old: "+o.curMedia.id),o.oldMedia=o.curMedia):o.oldMedia=void 0,o.curMedia=o.mediaObjects[o.currentMedia],null!=o.curMedia&&playLog(8,"debug","previousMedia -> New: "+o.curMedia.id),o.transitionNodes(o.oldMedia,o.curMedia))},o.checkReadyState=function(){for(var e=0;e<o.mediaObjects.length;e++)if(!o.mediaObjects[e].ready)return void(o.ready=!1);o.ready=!0},o.run=function(){o.totalMediaObjects>0&&o.nextMedia()},o.options=[],$(o.xml).children("options").children().each((function(){playLog(9,"debug","Option "+this.nodeName.toLowerCase()+" -> "+$(this).text(),!1),o.options[this.nodeName.toLowerCase()]=$(this).text()})),o.sWidth=$(t).attr("width")*o.layout.scaleFactor,o.sHeight=$(t).attr("height")*o.layout.scaleFactor,o.offsetX=$(t).attr("left")*o.layout.scaleFactor,o.offsetY=$(t).attr("top")*o.layout.scaleFactor,o.zIndex=$(t).attr("zindex"),$("#"+o.layout.containerName).append('<div id="'+o.containerName+'"></div>'),$("#"+o.containerName).css("width",o.sWidth+"px"),$("#"+o.containerName).css("height",o.sHeight+"px"),$("#"+o.containerName).css("position","absolute"),$("#"+o.containerName).css("left",o.offsetX+"px"),$("#"+o.containerName).css("top",o.offsetY+"px"),null!=o.zIndex&&($("#"+o.containerName).css("z-index",o.zIndex),parseInt(o.zIndex)>o.layout.regionMaxZIndex&&(o.layout.regionMaxZIndex=parseInt(o.zIndex))),playLog(4,"debug","Created region "+o.id,!1),playLog(7,"debug","Render will be ("+o.sWidth+"x"+o.sHeight+") pixels"),playLog(7,"debug","Offset will be ("+o.offsetX+","+o.offsetY+") pixels"),$(o.xml).children("media").each((function(){playLog(5,"debug","Creating media "+$(this).attr("id"),!1),o.mediaObjects.push(new media(o,$(this).attr("id"),this,a,n))}));for(var r=0;r<o.layout.actionController.actions.length;r++){var d=o.layout.actionController.actions[r],s=$(d.xml).prop("attributes");if("region"==s.target.value&&"navWidget"==s.actionType.value&&s.targetId.value==o.id){var c=$(o.layout.drawer).find("media#"+s.widgetId.value)[0];o.mediaObjectsActions.push(new media(o,$(c).attr("id"),c,a,n))}}0==$(o.xml).children("media").length&&($self=$("#"+o.containerName),o.complete=!0,messageSize=o.sWidth>o.sHeight?o.sHeight:o.sWidth,$self.css("background-color","rgba(255, 0, 0, 0.25)"),$self.append('<div class="empty-message" id="empty_'+o.containerName+'"></div>'),$message=$("#empty_"+o.containerName),$message.append('<span class="empty-icon fa fa-exclamation-triangle" style="font-size:'+messageSize/4+'px"></span>'),$message.append('<span class="empty-icon">'+previewTranslations.emptyRegionMessage+"</span>")),playLog(4,"debug","Region "+o.id+" has "+o.mediaObjects.length+" media items")}function media(e,i,t,a,n){var o=this;o.region=e,o.xml=t,o.id=i,o.containerName="M-"+o.id+"-"+nextId(),o.iframeName=o.containerName+"-iframe",o.mediaType=$(o.xml).attr("type"),o.render=$(o.xml).attr("render"),o.attachedAudio=!1,o.singlePlay=!1,o.timeoutId=void 0,o.ready=!0,o.checkIframeStatus=!1,null==o.render&&(o.render="module"),o.run=function(){if(o.iframe)if(o.checkIframeStatus){var e=$("#"+o.containerName+" #"+o.iframeName);e[0].src=e[0].src}else $("#"+o.containerName).empty().append(o.iframe);playLog(5,"debug","Running media "+o.id+" for "+o.duration+" seconds"),"video"==o.mediaType&&$("#"+o.containerName+"-vid").get(0).play(),"audio"==o.mediaType&&$("#"+o.containerName+"-aud").get(0).play(),o.attachedAudio&&$("#"+o.containerName+"-attached-aud").get(0).play(),0==o.duration?"video"==o.mediaType?($("#"+o.containerName+"-vid").bind("ended",o.region.nextMedia),$("#"+o.containerName+"-vid").bind("error",o.region.nextMedia),$("#"+o.containerName+"-vid").bind("click",o.region.nextMedia)):"audio"==o.mediaType?($("#"+o.containerName+"-aud").bind("ended",o.region.nextMedia),$("#"+o.containerName+"-aud").bind("error",o.region.nextMedia),$("#"+o.containerName+"-aud").bind("click",o.region.nextMedia)):(o.duration=3,o.timeoutId=setTimeout(o.region.nextMedia,1e3*o.duration)):o.timeoutId=setTimeout(o.region.nextMedia,1e3*o.duration)},o.reset=function(){playLog(5,"debug","Reset media "+o.id),"video"==o.mediaType&&($("#"+o.containerName+"-vid").get(0).currentTime=0),"audio"==o.mediaType&&($("#"+o.containerName+"-aud").get(0).currentTime=0),o.attachedAudio&&($("#"+o.containerName+"-attached-aud").get(0).currentTime=0)},o.pause=function(){"video"==o.mediaType&&$("#"+o.containerName+"-vid").get(0).pause(),"audio"==o.mediaType&&$("#"+o.containerName+"-aud").get(0).pause(),o.attachedAudio&&$("#"+o.containerName+"-attached-aud").get(0).pause()},o.stop=function(){playLog(5,"debug","Stop media "+o.id),$("#"+o.containerName).css("display","none")},o.duration=$(o.xml).attr("duration"),o.lkid=$(o.xml).attr("lkid"),o.options=[],$(o.xml).find("options").children().each((function(){playLog(9,"debug","Option "+this.nodeName.toLowerCase()+" -> "+$(this).text(),!1),o.options[this.nodeName.toLowerCase()]=$(this).text()})),"1"===o.options.showfullscreen?(o.divWidth=o.region.layout.sWidth,o.divHeight=o.region.layout.sHeight):(o.divWidth=o.region.sWidth,o.divHeight=o.region.sHeight),$("#"+o.region.containerName).append('<div id="'+o.containerName+'"></div>');var r=$("#"+o.containerName);r.css("display","none"),r.css("width",o.divWidth+"px"),r.css("height",o.divHeight+"px"),r.css("position","absolute"),r.css("background-size","contain"),r.css("background-repeat","no-repeat"),r.css("background-position","center"),"1"===o.options.showfullscreen&&(r.css("left",-o.region.offsetX+"px"),r.css("top",-o.region.offsetY+"px"),r.css("z-index",o.region.layout.regionMaxZIndex+1));var d=a.getResourceUrl.replace(":regionId",o.region.id).replace(":id",o.id)+"?preview=1&layoutPreview=1&scale_override="+o.region.layout.scaleFactor,s="1"==o.options.loop||"1"==o.region.options.loop&&1==o.region.totalMediaObjects;if("html"==o.render||"ticker"==o.mediaType){if(o.checkIframeStatus=!0,o.iframe=$('<iframe scrolling="no" id="'+o.iframeName+'" src="'+d+"&width="+o.divWidth+"&height="+o.divHeight+'" width="'+o.divWidth+'px" height="'+o.divHeight+'px" style="border:0;"></iframe>'),"1"==o.options.durationisperitem||"1"==o.options.durationisperpage){var c=new RegExp("\x3c!-- NUMITEMS=(.*?) --\x3e");jQuery.ajax({url:d+"&width="+o.divWidth+"&height="+o.divHeight,success:function(e){var i=c.exec(e);null!=i&&(o.duration=parseInt(o.duration)*parseInt(i[1]))},async:!1})}}else if("image"===o.mediaType)if(n.addFiles(d),r.css("background-image","url('"+d+"')"),"stretch"===o.options.scaletype)r.css("background-size","100% 100%");else if("fit"===o.options.scaletype)r.css("background-size","cover");else{var l=""==o.options.align?"center":o.options.align,g=""==o.options.valign||"middle"==o.options.valign?"center":o.options.valign;r.css("background-position",l+" "+g)}else if("text"==o.mediaType||"datasetview"==o.mediaType||"webpage"==o.mediaType||"embedded"==o.mediaType)o.checkIframeStatus=!0,o.iframe=$('<iframe scrolling="no" id="'+o.iframeName+'" src="'+d+"&width="+o.divWidth+"&height="+o.divHeight+'" width="'+o.divWidth+'px" height="'+o.divHeight+'px" style="border:0;"></iframe>');else if("video"==o.mediaType)n.addFiles(d),o.iframe=$('<video id="'+o.containerName+'-vid" preload="auto" '+(1==o.options.mute?"muted":"")+" "+(s?"loop":"")+'><source src="'+d+'">Unsupported Video</video>'),"stretch"==o.options.scaletype&&o.iframe.css("object-fit","fill");else if("audio"==o.mediaType)n.addFiles(d),r.append('<audio id="'+o.containerName+'-aud" preload="auto" '+(s?"loop":"")+" "+(1==o.options.mute?"muted":"")+'><source src="'+d+'">Unsupported Audio</audio>');else if("flash"==o.mediaType){var p='<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="100%" HEIGHT="100%" id="Yourfilename" ALIGN="">';p=p+'<PARAM NAME=movie VALUE="'+d+'"> <PARAM NAME=quality VALUE=high> <param name="wmode" value="transparent"> <EMBED src="'+d+'" quality="high" wmode="transparent" WIDTH="100%" HEIGHT="100%" NAME="Yourfilename" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED> </OBJECT>',n.addFiles(d),o.iframe=$(p)}else r.css("outline","red solid thin");if(o.iframe&&o.checkIframeStatus&&(o.ready=!1,$("#"+o.containerName).empty().append(o.iframe),$(o.iframe).on("load",(function(){o.ready=!0}))),$(o.xml).find("audio").length>0){var u=$(o.xml).find("audio"),h=u.find("uri"),m=h.attr("mediaid"),f=a.libraryDownloadUrl.replace(":id",m);if(null!=n.preloader.filesLoadedMap[f]&&n.addFiles(f),null!=h.attr("volume")){var y=h.attr("volume")/100;u.get(0).volume=y}u.prop("loop","1"==h.get(0).getAttribute("loop")),u.attr("id",o.containerName+"-attached-aud"),u.append('<source src="'+f+'">Unsupported Audio'),r.append(u),o.attachedAudio=!0}playLog(5,"debug","Created media "+o.id)}function Action(e,i){this.id=e,this.xml=i}function ActionController(e,i,t){var a=this;a.parent=e,a.actions=[];var n=$('<div class="action-controller noselect"></div>').appendTo($("#"+e.containerName));n.append($('<div class="action-controller-title"><button class="toggle"></button><span class="title">'+previewTranslations.actionControllerTitle+"</span></div>"));for(var o=$('<div class="actions-container"></div>').appendTo(n),r=0;r<i.length;r++){var d=i[r];a.actions.push(d);var s=$("<div>"),c=$(d.xml).prop("attributes");$.each(c,(function(){s.data(this.name,this.value),s.attr(this.name,this.value)}));var l="";l+='<span class="action-row-title">'+previewTranslations[s.attr("actiontype")],"navWidget"==s.attr("actiontype")?l+=' <span title="'+previewTranslations.widgetId+'">['+s.attr("widgetId")+"]</span>":"navLayout"==s.attr("actiontype")&&(l+=' <span title="'+previewTranslations.layoutCode+'">['+s.attr("layoutCode")+"]</span>"),l+="</span>",l+='<span class="action-row-target" title="'+previewTranslations.target+'">'+s.attr("target"),""!=s.attr("targetid")&&(l+="("+s.attr("targetid")+s.attr("layoutcode")+")"),l+="</span>",s.html(l),s.addClass("action",d.id),s.attr("originalId",d.id),s.attr("id","A-"+d.id+"-"+nextId()),s.appendTo(o)}n.draggable({handle:".action-controller-title",scroll:!1,cursor:"dragging",containment:"parent"}),n.find(".toggle").click((function(){n.toggleClass("d-none")})),n.toggle(n.find('.action[triggerType="webhook"]').length>0);var g=function(e){"navLayout"==e.actionType?function(e){if(confirm(previewTranslations.navigateToLayout.replace("[layoutTag]",e))){var i=t.layoutPreviewUrl.replace("[layoutCode]",e)+"?findByCode=1";window.open(i,"_blank")}}(e.layoutCode):"previous"!=e.actionType&&"next"!=e.actionType||"region"!=e.target?"navWidget"==e.actionType&&"region"==e.target?function(e,i){var t,n,o=0;for(o=0;o<a.parent.regionObjects.length;o++){var r=a.parent.regionObjects[o];r.id==e&&(t=r)}for(o=0;o<t.mediaObjectsActions.length;o++){var d=t.mediaObjectsActions[o];d.id==i&&(n=d)}n.singlePlay=!0,0===t.mediaObjects.length&&($("#"+t.containerName).find(".empty-message").remove(),$("#"+t.containerName).css("background-color",""),a.complete=!1),t.mediaObjects.splice(t.currentMedia+1,0,n),t.nextMedia()}(e.targetId,e.widgetId):console.log(e.actionType+" > "+e.target+"["+e.targetId+"]"):function(e,i){for(var t=0;t<a.parent.regionObjects.length;t++){var n=a.parent.regionObjects[t];n.id==e&&("next"==i?n.nextMedia():n.previousMedia())}}(e.targetId,e.actionType)};n.find('.action[triggerType="webhook"]').click((function(e){e.stopPropagation(),g($(this).data())})).addClass("clickable"),a.initTouchActions=function(){n.find('.action[triggerType="touch"]').each((function(){var e,i=$(this).data();if("layout"==i.source)e=$("#"+a.parent.containerName);else for(var t=0;t<a.parent.regionObjects.length;t++){var n=a.parent.regionObjects[t];if("region"==i.source){if(n.id==i.sourceId){e=$("#"+n.containerName);break}}else if("widget"==i.source)for(var o=0;o<n.mediaObjects.length;o++){var r=n.mediaObjects[o];if(r.id==i.sourceId){e=$("#"+r.containerName);break}}if(null!=e)break}null!=e&&e.on("click",(function(e){e.stopPropagation(),g(i)})).addClass("clickable")}))}}function previewActionTrigger(e,t,a){if("/duration/set"==e){var n=function(e){var t;e:for(i=0;i<previewLayout.regionObjects.length;i++){var a=previewLayout.regionObjects[i];for(j=0;j<a.mediaObjects.length;j++){var n=a.mediaObjects[j];if(n.id==e){t=n;break e}}}return t}(t.id);null!=n&&(n.duration=t.duration,clearTimeout(n.timeoutId),n.timeoutId=setTimeout(n.region.nextMedia,1e3*n.duration))}else if("/trigger"==e){var o=$(".action[triggercode="+t.trigger+"]");o.length&&o.click()}"function"==typeof a&&a()}