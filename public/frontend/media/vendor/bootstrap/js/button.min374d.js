import{E as a,d as r,B as c}from"./dom.min.js?5.3.3";const i="button",l="bs.button",u=`.${l}`,E=".data-api",g="active",s='[data-bs-toggle="button"]',A=`click${u}${E}`;class e extends c{static get NAME(){return i}toggle(){this._element.setAttribute("aria-pressed",this._element.classList.toggle(g))}static jQueryInterface(o){return this.each(function(){const n=e.getOrCreateInstance(this);o==="toggle"&&n[o]()})}}if(a.on(document,A,s,t=>{t.preventDefault();const o=t.target.closest(s);e.getOrCreateInstance(o).toggle()}),r(e),window.bootstrap=window.bootstrap||{},window.bootstrap.Button=e,Joomla&&Joomla.getOptions){const t=Joomla.getOptions("bootstrap.button");t&&t.length&&t.forEach(o=>{document.querySelectorAll(o).forEach(n=>new window.bootstrap.Button(n))})}export{e as B};
