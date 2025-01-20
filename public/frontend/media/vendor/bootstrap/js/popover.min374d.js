import{P as v,c as y}from"./popper.min.js?5.3.3";import{b as f,d,B as C,E as r,m as w,n as g,o as A,T as O,j as u,M as N,c as P,D as L}from"./dom.min.js?5.3.3";const D="tooltip",S=new Set(["sanitize","allowList","sanitizeFn"]),m="fade",F="modal",p="show",I=".tooltip-inner",b=`.${F}`,E="hide.bs.modal",l="hover",_="focus",M="click",k="manual",H="hide",z="hidden",R="show",j="shown",V="inserted",x="click",U="focusin",W="focusout",G="mouseenter",$="mouseleave",B={AUTO:"auto",TOP:"top",RIGHT:f()?"left":"right",BOTTOM:"bottom",LEFT:f()?"right":"left"},q={allowList:L,animation:!0,boundary:"clippingParents",container:!1,customClass:"",delay:0,fallbackPlacements:["top","right","bottom","left"],html:!1,offset:[0,6],placement:"top",popperConfig:null,sanitize:!0,sanitizeFn:null,selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',title:"",trigger:"hover focus"},J={allowList:"object",animation:"boolean",boundary:"(string|element)",container:"(string|element|boolean)",customClass:"(string|function)",delay:"(number|object)",fallbackPlacements:"array",html:"boolean",offset:"(array|string|function)",placement:"(string|function)",popperConfig:"(null|object|function)",sanitize:"boolean",sanitizeFn:"(null|function)",selector:"(string|boolean)",template:"string",title:"(string|element|function)",trigger:"string"};class a extends C{constructor(e,i){if(typeof v>"u")throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");super(e,i),this._isEnabled=!0,this._timeout=0,this._isHovered=null,this._activeTrigger={},this._popper=null,this._templateFactory=null,this._newContent=null,this.tip=null,this._setListeners(),this._config.selector||this._fixTitle()}static get Default(){return q}static get DefaultType(){return J}static get NAME(){return D}enable(){this._isEnabled=!0}disable(){this._isEnabled=!1}toggleEnabled(){this._isEnabled=!this._isEnabled}toggle(){if(this._isEnabled){if(this._activeTrigger.click=!this._activeTrigger.click,this._isShown()){this._leave();return}this._enter()}}dispose(){clearTimeout(this._timeout),r.off(this._element.closest(b),E,this._hideModalHandler),this._element.getAttribute("data-bs-original-title")&&this._element.setAttribute("title",this._element.getAttribute("data-bs-original-title")),this._disposePopper(),super.dispose()}show(){if(this._element.style.display==="none")throw new Error("Please use show on visible elements");if(!(this._isWithContent()&&this._isEnabled))return;const e=r.trigger(this._element,this.constructor.eventName(R)),t=(w(this._element)||this._element.ownerDocument.documentElement).contains(this._element);if(e.defaultPrevented||!t)return;this._disposePopper();const s=this._getTipElement();this._element.setAttribute("aria-describedby",s.getAttribute("id"));const{container:n}=this._config;if(this._element.ownerDocument.documentElement.contains(this.tip)||(n.append(s),r.trigger(this._element,this.constructor.eventName(V))),this._popper=this._createPopper(s),s.classList.add(p),"ontouchstart"in document.documentElement)for(const T of[].concat(...document.body.children))r.on(T,"mouseover",g);const o=()=>{r.trigger(this._element,this.constructor.eventName(j)),this._isHovered===!1&&this._leave(),this._isHovered=!1};this._queueCallback(o,this.tip,this._isAnimated())}hide(){if(!this._isShown()||r.trigger(this._element,this.constructor.eventName(H)).defaultPrevented)return;if(this._getTipElement().classList.remove(p),"ontouchstart"in document.documentElement)for(const s of[].concat(...document.body.children))r.off(s,"mouseover",g);this._activeTrigger[M]=!1,this._activeTrigger[_]=!1,this._activeTrigger[l]=!1,this._isHovered=null;const t=()=>{this._isWithActiveTrigger()||(this._isHovered||this._disposePopper(),this._element.removeAttribute("aria-describedby"),r.trigger(this._element,this.constructor.eventName(z)))};this._queueCallback(t,this.tip,this._isAnimated())}update(){this._popper&&this._popper.update()}_isWithContent(){return!!this._getTitle()}_getTipElement(){return this.tip||(this.tip=this._createTipElement(this._newContent||this._getContentForTemplate())),this.tip}_createTipElement(e){const i=this._getTemplateFactory(e).toHtml();if(!i)return null;i.classList.remove(m,p),i.classList.add(`bs-${this.constructor.NAME}-auto`);const t=A(this.constructor.NAME).toString();return i.setAttribute("id",t),this._isAnimated()&&i.classList.add(m),i}setContent(e){this._newContent=e,this._isShown()&&(this._disposePopper(),this.show())}_getTemplateFactory(e){return this._templateFactory?this._templateFactory.changeContent(e):this._templateFactory=new O({...this._config,content:e,extraClass:this._resolvePossibleFunction(this._config.customClass)}),this._templateFactory}_getContentForTemplate(){return{[I]:this._getTitle()}}_getTitle(){return this._resolvePossibleFunction(this._config.title)||this._element.getAttribute("data-bs-original-title")}_initializeOnDelegatedTarget(e){return this.constructor.getOrCreateInstance(e.delegateTarget,this._getDelegateConfig())}_isAnimated(){return this._config.animation||this.tip&&this.tip.classList.contains(m)}_isShown(){return this.tip&&this.tip.classList.contains(p)}_createPopper(e){const i=u(this._config.placement,[this,e,this._element]),t=B[i.toUpperCase()];return y(this._element,e,this._getPopperConfig(t))}_getOffset(){const{offset:e}=this._config;return typeof e=="string"?e.split(",").map(i=>Number.parseInt(i,10)):typeof e=="function"?i=>e(i,this._element):e}_resolvePossibleFunction(e){return u(e,[this._element])}_getPopperConfig(e){const i={placement:e,modifiers:[{name:"flip",options:{fallbackPlacements:this._config.fallbackPlacements}},{name:"offset",options:{offset:this._getOffset()}},{name:"preventOverflow",options:{boundary:this._config.boundary}},{name:"arrow",options:{element:`.${this.constructor.NAME}-arrow`}},{name:"preSetPlacement",enabled:!0,phase:"beforeMain",fn:t=>{this._getTipElement().setAttribute("data-popper-placement",t.state.placement)}}]};return{...i,...u(this._config.popperConfig,[i])}}_setListeners(){const e=this._config.trigger.split(" ");for(const i of e)if(i==="click")r.on(this._element,this.constructor.eventName(x),this._config.selector,t=>{this._initializeOnDelegatedTarget(t).toggle()});else if(i!==k){const t=i===l?this.constructor.eventName(G):this.constructor.eventName(U),s=i===l?this.constructor.eventName($):this.constructor.eventName(W);r.on(this._element,t,this._config.selector,n=>{const o=this._initializeOnDelegatedTarget(n);o._activeTrigger[n.type==="focusin"?_:l]=!0,o._enter()}),r.on(this._element,s,this._config.selector,n=>{const o=this._initializeOnDelegatedTarget(n);o._activeTrigger[n.type==="focusout"?_:l]=o._element.contains(n.relatedTarget),o._leave()})}this._hideModalHandler=()=>{this._element&&this.hide()},r.on(this._element.closest(b),E,this._hideModalHandler)}_fixTitle(){const e=this._element.getAttribute("title");e&&(!this._element.getAttribute("aria-label")&&!this._element.textContent.trim()&&this._element.setAttribute("aria-label",e),this._element.setAttribute("data-bs-original-title",e),this._element.removeAttribute("title"))}_enter(){if(this._isShown()||this._isHovered){this._isHovered=!0;return}this._isHovered=!0,this._setTimeout(()=>{this._isHovered&&this.show()},this._config.delay.show)}_leave(){this._isWithActiveTrigger()||(this._isHovered=!1,this._setTimeout(()=>{this._isHovered||this.hide()},this._config.delay.hide))}_setTimeout(e,i){clearTimeout(this._timeout),this._timeout=setTimeout(e,i)}_isWithActiveTrigger(){return Object.values(this._activeTrigger).includes(!0)}_getConfig(e){const i=N.getDataAttributes(this._element);for(const t of Object.keys(i))S.has(t)&&delete i[t];return e={...i,...typeof e=="object"&&e?e:{}},e=this._mergeConfigObj(e),e=this._configAfterMerge(e),this._typeCheckConfig(e),e}_configAfterMerge(e){return e.container=e.container===!1?document.body:P(e.container),typeof e.delay=="number"&&(e.delay={show:e.delay,hide:e.delay}),typeof e.title=="number"&&(e.title=e.title.toString()),typeof e.content=="number"&&(e.content=e.content.toString()),e}_getDelegateConfig(){const e={};for(const[i,t]of Object.entries(this._config))this.constructor.Default[i]!==t&&(e[i]=t);return e.selector=!1,e.trigger="manual",e}_disposePopper(){this._popper&&(this._popper.destroy(),this._popper=null),this.tip&&(this.tip.remove(),this.tip=null)}static jQueryInterface(e){return this.each(function(){const i=a.getOrCreateInstance(this,e);if(typeof e=="string"){if(typeof i[e]>"u")throw new TypeError(`No method named "${e}"`);i[e]()}})}}d(a);const Q="popover",K=".popover-header",X=".popover-body",Y={...a.Default,content:"",offset:[0,8],placement:"right",template:'<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',trigger:"click"},Z={...a.DefaultType,content:"(null|string|element|function)"};class c extends a{static get Default(){return Y}static get DefaultType(){return Z}static get NAME(){return Q}_isWithContent(){return this._getTitle()||this._getContent()}_getContentForTemplate(){return{[K]:this._getTitle(),[X]:this._getContent()}}_getContent(){return this._resolvePossibleFunction(this._config.content)}static jQueryInterface(e){return this.each(function(){const i=c.getOrCreateInstance(this,e);if(typeof e=="string"){if(typeof i[e]>"u")throw new TypeError(`No method named "${e}"`);i[e]()}})}}if(d(c),window.bootstrap=window.bootstrap||{},window.bootstrap.Popover=c,window.bootstrap.Tooltip=a,Joomla&&Joomla.getOptions){const h=Joomla.getOptions("bootstrap.tooltip"),e=Joomla.getOptions("bootstrap.popover");typeof e=="object"&&e!==null&&Object.keys(e).forEach(i=>{const t=e[i],s={animation:t.animation?t.animation:!0,container:t.container?t.container:!1,delay:t.delay?t.delay:0,html:t.html?t.html:!1,placement:t.placement?t.placement:"top",selector:t.selector?t.selector:!1,title:t.title?t.title:"",trigger:t.trigger?t.trigger:"click",offset:t.offset?t.offset:0,fallbackPlacement:t.fallbackPlacement?t.fallbackPlacement:"flip",boundary:t.boundary?t.boundary:"scrollParent",customClass:t.customClass?t.customClass:"",sanitize:t.sanitize?t.sanitize:!0,sanitizeFn:t.sanitizeFn?t.sanitizeFn:null,popperConfig:t.popperConfig?t.popperConfig:null};t.content&&(s.content=t.content),t.template&&(s.template=t.template),t.allowList&&(s.allowList=t.allowList);const n=Array.from(document.querySelectorAll(i));n.length&&n.map(o=>new window.bootstrap.Popover(o,s))}),typeof h=="object"&&h!==null&&Object.keys(h).forEach(i=>{const t=h[i],s={animation:t.animation?t.animation:!0,container:t.container?t.container:!1,delay:t.delay?t.delay:0,html:t.html?t.html:!1,selector:t.selector?t.selector:!1,trigger:t.trigger?t.trigger:"hover focus",fallbackPlacement:t.fallbackPlacement?t.fallbackPlacement:null,boundary:t.boundary?t.boundary:"clippingParents",title:t.title?t.title:"",customClass:t.customClass?t.customClass:"",sanitize:t.sanitize?t.sanitize:!0,sanitizeFn:t.sanitizeFn?t.sanitizeFn:null,popperConfig:t.popperConfig?t.popperConfig:null};t.placement&&(s.placement=t.placement),t.template&&(s.template=t.template),t.allowList&&(s.allowList=t.allowList);const n=Array.from(document.querySelectorAll(i));n.length&&n.map(o=>new window.bootstrap.Tooltip(o,s))})}export{c as P};
