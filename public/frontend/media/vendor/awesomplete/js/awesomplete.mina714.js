// Awesomplete - Lea Verou - MIT license
!function(){function t(t){var e=Array.isArray(t)?{label:t[0],value:t[1]}:"object"==typeof t&&"label"in t&&"value"in t?t:{label:t,value:t};this.label=e.label||e.value,this.value=e.value}function e(t,e,i){for(var s in e){var n=e[s],r=t.input.getAttribute("data-"+s.toLowerCase());"number"==typeof n?t[s]=parseInt(r):!1===n?t[s]=null!==r:n instanceof Function?t[s]=null:t[s]=r,t[s]||0===t[s]||(t[s]=s in i?i[s]:n)}}function i(t,e){return"string"==typeof t?(e||document).querySelector(t):t||null}function s(t,e){return o.call((e||document).querySelectorAll(t))}function n(){s("input.awesomplete").forEach(function(t){new r(t)})}var r=function(t,s){var n=this;r.count=(r.count||0)+1,this.count=r.count,this.isOpened=!1,this.input=i(t),this.input.setAttribute("autocomplete","off"),this.input.setAttribute("aria-autocomplete","list"),this.input.setAttribute("aria-expanded","false"),this.input.setAttribute("aria-owns","awesomplete_list_"+this.count),this.input.setAttribute("role","combobox"),this.options=s=s||{},e(this,{minChars:2,maxItems:10,autoFirst:!1,data:r.DATA,filter:r.FILTER_CONTAINS,sort:!1!==s.sort&&r.SORT_BYLENGTH,container:r.CONTAINER,item:r.ITEM,replace:r.REPLACE,tabSelect:!1,listLabel:"Results List",statusNoResults:"No results found",statusXResults:"{0} results found",statusTypeXChar:"Type {0} or more characters for results"},s),this.index=-1,this.container=this.container(t),this.ul=i.create("ul",{hidden:"hidden",role:"listbox",id:"awesomplete_list_"+this.count,inside:this.container,"aria-label":this.listLabel}),this.status=i.create("span",{className:"visually-hidden",role:"status","aria-live":"assertive","aria-atomic":!0,inside:this.container,textContent:""}),this._events={input:{input:this.evaluate.bind(this),blur:this.close.bind(this,{reason:"blur"}),keydown:function(t){var e=t.keyCode;n.opened&&(13===e&&n.selected?(t.preventDefault(),n.select(void 0,void 0,t)):9===e&&n.selected&&n.tabSelect?(t.preventDefault(),n.select(void 0,void 0,t)):27===e?n.close({reason:"esc"}):38!==e&&40!==e||(t.preventDefault(),n[38===e?"previous":"next"]()))}},form:{submit:this.close.bind(this,{reason:"submit"})},ul:{mousedown:function(t){t.preventDefault()},click:function(t){var e=t.target;if(e!==this){for(;e&&!/li/i.test(e.nodeName);)e=e.parentNode;e&&0===t.button&&(t.preventDefault(),n.select(e,t.target,t))}}}},i.bind(this.input,this._events.input),i.bind(this.input.form,this._events.form),i.bind(this.ul,this._events.ul),this.input.hasAttribute("list")?(this.list="#"+this.input.getAttribute("list"),this.input.removeAttribute("list")):this.list=this.input.getAttribute("data-list")||s.list||[],r.all.push(this)};r.prototype={set list(t){if(Array.isArray(t))this._list=t;else if("string"==typeof t&&t.indexOf(",")>-1)this._list=t.split(/\s*,\s*/);else if((t=i(t))&&t.children){var e=[];o.apply(t.children).forEach(function(t){if(!t.disabled){var i=t.textContent.trim(),s=t.value||i,n=t.label||i;""!==s&&e.push({label:n,value:s})}}),this._list=e}document.activeElement===this.input&&this.evaluate()},get selected(){return this.index>-1},get opened(){return this.isOpened},close:function(t){this.opened&&(this.input.setAttribute("aria-expanded","false"),this.ul.setAttribute("hidden",""),this.isOpened=!1,this.index=-1,this.status.setAttribute("hidden",""),this.input.setAttribute("aria-activedescendant",""),i.fire(this.input,"awesomplete-close",t||{}))},open:function(){this.input.setAttribute("aria-expanded","true"),this.ul.removeAttribute("hidden"),this.isOpened=!0,this.status.removeAttribute("hidden"),this.autoFirst&&-1===this.index&&this.goto(0),i.fire(this.input,"awesomplete-open")},destroy:function(){if(i.unbind(this.input,this._events.input),i.unbind(this.input.form,this._events.form),!this.options.container){var t=this.container.parentNode;t.insertBefore(this.input,this.container),t.removeChild(this.container)}this.input.removeAttribute("autocomplete"),this.input.removeAttribute("aria-autocomplete"),this.input.removeAttribute("aria-expanded"),this.input.removeAttribute("aria-owns"),this.input.removeAttribute("role");var e=r.all.indexOf(this);-1!==e&&r.all.splice(e,1)},next:function(){var t=this.ul.children.length;this.goto(this.index<t-1?this.index+1:t?0:-1)},previous:function(){var t=this.ul.children.length,e=this.index-1;this.goto(this.selected&&-1!==e?e:t-1)},goto:function(t){var e=this.ul.children;this.selected&&e[this.index].setAttribute("aria-selected","false"),this.index=t,t>-1&&e.length>0&&(e[t].setAttribute("aria-selected","true"),this.input.setAttribute("aria-activedescendant",this.ul.id+"_item_"+this.index),this.ul.scrollTop=e[t].offsetTop-this.ul.clientHeight+e[t].clientHeight,i.fire(this.input,"awesomplete-highlight",{text:this.suggestions[this.index]}))},select:function(t,e,s){if(t?this.index=i.siblingIndex(t):t=this.ul.children[this.index],t){var n=this.suggestions[this.index];i.fire(this.input,"awesomplete-select",{text:n,origin:e||t,originalEvent:s})&&(this.replace(n),this.close({reason:"select"}),i.fire(this.input,"awesomplete-selectcomplete",{text:n,originalEvent:s}))}},evaluate:function(){var e=this,i=this.input.value;i.length>=this.minChars&&this._list&&this._list.length>0?(this.index=-1,this.ul.innerHTML="",this.suggestions=this._list.map(function(s){return new t(e.data(s,i))}).filter(function(t){return e.filter(t,i)}),!1!==this.sort&&(this.suggestions=this.suggestions.sort(this.sort)),this.suggestions=this.suggestions.slice(0,this.maxItems),this.suggestions.forEach(function(t,s){e.ul.appendChild(e.item(t,i,s))}),0===this.ul.children.length?(this.status.textContent=this.statusNoResults,this.close({reason:"nomatches"})):(this.input.setAttribute("aria-activedescendant",""),this.open(),this.status.textContent=this.statusXResults.replaceAll("{0}",this.ul.children.length))):(this.close({reason:"nomatches"}),this.minChar<=1||i.length>=this.minChars?this.status.textContent=this.statusNoResults:this.status.textContent=this.statusTypeXChar.replaceAll("{0}",this.minChars))}},r.all=[],r.FILTER_CONTAINS=function(t,e){return RegExp(i.regExpEscape(e.trim()),"i").test(t)},r.FILTER_STARTSWITH=function(t,e){return RegExp("^"+i.regExpEscape(e.trim()),"i").test(t)},r.SORT_BYLENGTH=function(t,e){return t.length!==e.length?t.length-e.length:t<e?-1:1},r.CONTAINER=function(t){return i.create("div",{className:"awesomplete",around:t})},r.ITEM=function(t,e,s){return i.create("li",{innerHTML:""===e.trim()?t:t.replace(RegExp(i.regExpEscape(e.trim()),"gi"),"<mark>$&</mark>"),role:"option","aria-selected":"false",tabindex:"-1",id:"awesomplete_list_"+this.count+"_item_"+s})},r.REPLACE=function(t){this.input.value=t.value},r.DATA=function(t){return t},Object.defineProperty(t.prototype=Object.create(String.prototype),"length",{get:function(){return this.label.length}}),t.prototype.toString=t.prototype.valueOf=function(){return""+this.label};var o=Array.prototype.slice;i.create=function(t,e){var s=document.createElement(t);for(var n in e){var r=e[n];if("inside"===n)i(r).appendChild(s);else if("around"===n){var o=i(r);o.parentNode.insertBefore(s,o),s.appendChild(o),null!=o.getAttribute("autofocus")&&o.focus()}else n in s?s[n]=r:s.setAttribute(n,r)}return s},i.bind=function(t,e){if(t)for(var i in e){var s=e[i];i.split(/\s+/).forEach(function(e){t.addEventListener(e,s)})}},i.unbind=function(t,e){if(t)for(var i in e){var s=e[i];i.split(/\s+/).forEach(function(e){t.removeEventListener(e,s)})}},i.fire=function(t,e,i){var s=document.createEvent("HTMLEvents");s.initEvent(e,!0,!0);for(var n in i)s[n]=i[n];return t.dispatchEvent(s)},i.regExpEscape=function(t){return t.replace(/[-\\^$*+?.()|[\]{}]/g,"\\$&")},i.siblingIndex=function(t){for(var e=0;t=t.previousElementSibling;e++);return e},"undefined"!=typeof self&&(self.Awesomplete=r),"undefined"!=typeof Document&&("loading"!==document.readyState?n():document.addEventListener("DOMContentLoaded",n)),r.$=i,r.$$=s,"object"==typeof module&&module.exports&&(module.exports=r)}();
//# sourceMappingURL=awesomplete.min.js.map