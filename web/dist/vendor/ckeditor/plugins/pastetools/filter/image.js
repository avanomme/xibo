!function(){function e(e){function t(e){return"string"!=typeof e?-1:CKEDITOR.tools.array.indexOf(n,(function(t){return t.id===e}))}function a(e){var t=e.match(/\\blipuid (\w+)\}/);return e=e.match(/\\bliptag(-?\d+)/),t?t[1]:e?e[1]:null}var i=CKEDITOR.plugins.pastetools.filters.common.rtf,n=[];if(e=i.removeGroups(e,"(?:(?:header|footer)[lrf]?|nonshppict|shprslt)"),!(e=i.getGroups(e,"pict")))return n;for(var o=0;o<e.length;o++){var s=e[o].content,p=a(s),l=r(s),g=t(p),u=(f=-1!==g&&n[g].hex)&&n[g].type===l,f=f&&n[g].type!==l&&g===n.length-1,m=-1!==s.indexOf("\\defshp"),c=-1!==CKEDITOR.tools.array.indexOf(CKEDITOR.pasteFilters.image.supportedImageTypes,l);u?n.push(n[g]):f||m||(s={id:p,hex:c?i.extractGroupContent(s).replace(/\s/g,""):null,type:l},-1!==g?n.splice(g,1,s):n.push(s))}return n}function t(e){for(var t,r=/<img[^>]+src="([^"]+)[^>]+/g,a=[];t=r.exec(e);)a.push(t[1]);return a}function r(e){var t=CKEDITOR.tools.array.find(CKEDITOR.pasteFilters.image.recognizableImageTypes,(function(t){return t.marker.test(e)}));return t?t.type:"unknown"}function a(e){var t=-1!==CKEDITOR.tools.array.indexOf(CKEDITOR.pasteFilters.image.supportedImageTypes,e.type),r=e.hex;return t?("string"==typeof r&&(r=CKEDITOR.tools.convertHexStringToBytes(e.hex)),e.type?"data:"+e.type+";base64,"+CKEDITOR.tools.convertBytesToBase64(r):null):null}function i(e){return new CKEDITOR.tools.promise((function(t){CKEDITOR.ajax.load(e,(function(e){e=a({type:n(e=new Uint8Array(e)),hex:e}),t(e)}),"arraybuffer")}))}function n(e){e=e.subarray(0,4);var t=CKEDITOR.tools.array.map(e,(function(e){return e.toString(16)})).join("");return(e=CKEDITOR.tools.array.find(CKEDITOR.pasteFilters.image.recognizableImageSignatures,(function(e){return 0===t.indexOf(e.signature)})))?e.type:null}CKEDITOR.pasteFilters.image=function(r,n,o){var s;return n.activeFilter&&!n.activeFilter.check("img[src]")||0===(s=t(r)).length?r:o?function(t,r,i){var n,o;if(0===(r=e(r)).length)return t;if(n=CKEDITOR.tools.array.map(r,(function(e){return a(e)}),this),i.length!==n.length)return CKEDITOR.error("pastetools-failed-image-extraction",{rtf:r.length,html:i.length}),t;for(o=0;o<i.length;o++)if(0===i[o].indexOf("file://"))if(n[o]){var s=i[o].replace(/\\/g,"\\\\");t=t.replace(new RegExp("(<img [^>]*src=[\"']?)"+s),"$1"+n[o])}else CKEDITOR.error("pastetools-unsupported-image",{type:r[o].type,index:o});return t}(r,o,s):function(e,t,r){var a=CKEDITOR.tools.array.unique(CKEDITOR.tools.array.filter(r,(function(e){return e.match(/^blob:/i)})));return r=CKEDITOR.tools.array.map(a,i),CKEDITOR.tools.promise.all(r).then((function(t){CKEDITOR.tools.array.forEach(t,(function(t,r){if(t){var i=a[r];i=e.editable().find('img[src="'+i+'"]').toArray(),CKEDITOR.tools.array.forEach(i,(function(e){e.setAttribute("src",t),e.setAttribute("data-cke-saved-src",t)}),this)}else CKEDITOR.error("pastetools-unsupported-image",{type:"blob",index:r})}))})),t}(n,r,s)},CKEDITOR.pasteFilters.image.extractFromRtf=e,CKEDITOR.pasteFilters.image.extractTagsFromHtml=t,CKEDITOR.pasteFilters.image.getImageType=r,CKEDITOR.pasteFilters.image.createSrcWithBase64=a,CKEDITOR.pasteFilters.image.convertBlobUrlToBase64=i,CKEDITOR.pasteFilters.image.getImageTypeFromSignature=n,CKEDITOR.pasteFilters.image.supportedImageTypes=["image/png","image/jpeg","image/gif"],CKEDITOR.pasteFilters.image.recognizableImageTypes=[{marker:/\\pngblip/,type:"image/png"},{marker:/\\jpegblip/,type:"image/jpeg"},{marker:/\\emfblip/,type:"image/emf"},{marker:/\\wmetafile\d/,type:"image/wmf"}],CKEDITOR.pasteFilters.image.recognizableImageSignatures=[{signature:"ffd8ff",type:"image/jpeg"},{signature:"47494638",type:"image/gif"},{signature:"89504e47",type:"image/png"}]}();