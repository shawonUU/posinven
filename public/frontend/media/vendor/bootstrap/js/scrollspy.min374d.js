import{E as h,S as n,d as u,B as b,c as T,f as v,i as S}from"./dom.min.js?5.3.3";const g="scrollspy",m="bs.scrollspy",_=`.${m}`,A=".data-api",L=`activate${_}`,d=`click${_}`,O=`load${_}${A}`,w="dropdown-item",a="active",y='[data-bs-spy="scroll"]',f="[href]",C=".nav, .list-group",E=".nav-link",D=".nav-item",I=".list-group-item",N=`${E}, ${D} > ${E}, ${I}`,M=".dropdown",R=".dropdown-toggle",$={offset:null,rootMargin:"0px 0px -25%",smoothScroll:!1,target:null,threshold:[.1,.5,1]},P={offset:"(number|null)",rootMargin:"string",smoothScroll:"boolean",target:"element",threshold:"array"};class l extends b{constructor(t,e){super(t,e),this._targetLinks=new Map,this._observableSections=new Map,this._rootElement=getComputedStyle(this._element).overflowY==="visible"?null:this._element,this._activeTarget=null,this._observer=null,this._previousScrollData={visibleEntryTop:0,parentScrollTop:0},this.refresh()}static get Default(){return $}static get DefaultType(){return P}static get NAME(){return g}refresh(){this._initializeTargetsAndObservables(),this._maybeEnableSmoothScroll(),this._observer?this._observer.disconnect():this._observer=this._getNewObserver();for(const t of this._observableSections.values())this._observer.observe(t)}dispose(){this._observer.disconnect(),super.dispose()}_configAfterMerge(t){return t.target=T(t.target)||document.body,t.rootMargin=t.offset?`${t.offset}px 0px -30%`:t.rootMargin,typeof t.threshold=="string"&&(t.threshold=t.threshold.split(",").map(e=>Number.parseFloat(e))),t}_maybeEnableSmoothScroll(){this._config.smoothScroll&&(h.off(this._config.target,d),h.on(this._config.target,d,f,t=>{const e=this._observableSections.get(t.target.hash);if(e){t.preventDefault();const s=this._rootElement||window,r=e.offsetTop-this._element.offsetTop;if(s.scrollTo){s.scrollTo({top:r,behavior:"smooth"});return}s.scrollTop=r}}))}_getNewObserver(){const t={root:this._rootElement,threshold:this._config.threshold,rootMargin:this._config.rootMargin};return new IntersectionObserver(e=>this._observerCallback(e),t)}_observerCallback(t){const e=o=>this._targetLinks.get(`#${o.target.id}`),s=o=>{this._previousScrollData.visibleEntryTop=o.target.offsetTop,this._process(e(o))},r=(this._rootElement||document.documentElement).scrollTop,c=r>=this._previousScrollData.parentScrollTop;this._previousScrollData.parentScrollTop=r;for(const o of t){if(!o.isIntersecting){this._activeTarget=null,this._clearActiveClass(e(o));continue}const p=o.target.offsetTop>=this._previousScrollData.visibleEntryTop;if(c&&p){if(s(o),!r)return;continue}!c&&!p&&s(o)}}_initializeTargetsAndObservables(){this._targetLinks=new Map,this._observableSections=new Map;const t=n.find(f,this._config.target);for(const e of t){if(!e.hash||v(e))continue;const s=n.findOne(decodeURI(e.hash),this._element);S(s)&&(this._targetLinks.set(decodeURI(e.hash),e),this._observableSections.set(e.hash,s))}}_process(t){this._activeTarget!==t&&(this._clearActiveClass(this._config.target),this._activeTarget=t,t.classList.add(a),this._activateParents(t),h.trigger(this._element,L,{relatedTarget:t}))}_activateParents(t){if(t.classList.contains(w)){n.findOne(R,t.closest(M)).classList.add(a);return}for(const e of n.parents(t,C))for(const s of n.prev(e,N))s.classList.add(a)}_clearActiveClass(t){t.classList.remove(a);const e=n.find(`${f}.${a}`,t);for(const s of e)s.classList.remove(a)}static jQueryInterface(t){return this.each(function(){const e=l.getOrCreateInstance(this,t);if(typeof t=="string"){if(e[t]===void 0||t.startsWith("_")||t==="constructor")throw new TypeError(`No method named "${t}"`);e[t]()}})}}if(h.on(window,O,()=>{for(const i of n.find(y))l.getOrCreateInstance(i)}),u(l),window.bootstrap=window.bootstrap||{},window.bootstrap.Scrollspy=l,Joomla&&Joomla.getOptions){const i=Joomla.getOptions("bootstrap.scrollspy");typeof i=="object"&&i!==null&&Object.keys(i).forEach(t=>{const e=i[t],s={offset:e.offset?e.offset:10,method:e.method?e.method:"auto"};e.target&&(s.target=e.target);const r=Array.from(document.querySelectorAll(t));r.length&&r.map(c=>new window.bootstrap.Scrollspy(c,s))})}export{l as S};