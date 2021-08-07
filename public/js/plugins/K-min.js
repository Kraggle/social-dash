const t=[].indexOf,e={},r=e.toString,n=e.hasOwnProperty,o=n.toString,i=o.call(Object),s={version:"2.0",extend(t,...e){let r,n,o,i,a,c,l={},u=0,p=!1;const f=e.length;for("boolean"==s.type(t)?(p=t,l=e[u]||{},u++):l=t,"object"===s.type(l)||s.isFunction(l)||(l={}),u===f&&(l=this,u--);u<f;u++)if(r=e[u],null!=r)for(n in r)o=l[n],i=r[n],l!==i&&(p&&i&&(s.isPlainObject(i)||(a=s.isArray(i)))?(a?(a=!1,c=o&&s.isArray(o)?o:[]):c=o&&s.isPlainObject(o)?o:{},l[n]=s.extend(p,c,i)):void 0!==i&&(l[n]=i));return l},each(t,e){let r,n=0;if(isArrayLike(t))for(r=t.length;n<r&&!1!==e.call(t[n],n,t[n]);n++);else for(const r in t)if(!1===e.call(t[r],r,t[r]))break;return t},type:t=>null==t?t+"":"object"==typeof t||"function"==typeof t?e[r.call(t)]||"object":typeof t,isFunction:t=>"function"===s.type(t),isPlainObject(t){if(!t||"[object Object]"!==r.call(t))return!1;const e=Object.getPrototypeOf(t);if(!e)return!0;const s=n.call(e,"constructor")&&e.constructor;return"function"==typeof s&&o.call(s)===i},isArray:Array.isArray||function(t){return"[object Array]"===Object.prototype.toString.call(t)},indexOf(t,e){for(let r=0;r<t.length;r++)if(t[r]===e)return r;return-1},urlParam(t){const e={};let r=window.location.href.match(/\?([^#]*)/);return null==r?t?"":{}:(r=r[1].split("&"),s.each(r,(function(t,r){r=r.split("="),e[r[0]]=decodeURI(r[1])})),t?e[t]||"":e)},curtail(){let t=arguments[0],e=arguments[1];return!Object.keys(t).length&&Object.keys(e).length&&(t=s.extend({},arguments[1]),e=arguments[2]),e&&"object"!=typeof e&&(e=[e]),s.each(e,(function(e,r){r in t&&delete t[r]})),t},reduce(){let t=arguments[0],e=arguments[1];return!Object.keys(t).length&&Object.keys(e).length&&(t=s.extend({},arguments[1]),e=arguments[2]),e&&"object"!=typeof e&&(e=[e]),s.each(t,(function(r){!s.has(r,e)&&delete t[r]})),t},inArray:(e,r,n)=>{if(null==r)return-1;if("object"==s.type(e)){for(let t=0;t<r.length;t++)if(s.equals(r[t],e))return t;return-1}return t.call(r,e,n)},isInArray:(t,e)=>{switch(s.type(e)){case"array":return-1!=s.hasArray(t,e);case"object":return t in e;default:return!1}},local:(t,e)=>{if(void 0===e)return void 0===t?localStorage:JSON.parse(localStorage.getItem(t));localStorage.setItem(t,JSON.stringify(e))},localRemove:t=>localStorage.removeItem(t),isIterable:t=>s.has(s.type(t),["array","object"]),equals:(t,e)=>{const r=s.type(t);if(r==s.type(e))switch(r){case"array":if(s.empty(t)&&s.empty(e))return!0;if(t.length!=e.length)return!1;for(let r=0,n=t.length;r<n;r++)if(!s.in(t[r],e))return!1;break;case"object":if(s.empty(t)&&s.empty(e))return!0;for(const r in t){if(!s.has(r,e))return!1;if(!s.equals(t[r],e[r]))return!1}for(const r in e)if(void 0===t[r])return!1;break;case"number":case"string":case"boolean":if(t!=e)return!1;break;case"function":if(t.toString()!=e.toString())return!1;break;default:if(!t!=!e)return!1}else{if(s.empty(t)&&s.empty(e))return!0;switch(r){case"array":case"object":return!1;case"number":return!(t||!s.Util.isNull(e));case"string":case"boolean":if(t!=e)return!1;break;default:if(!t!=!e)return!1;break}}return!0},isNull:t=>s.has(s.type(t),["null","undefined"]),length:t=>{const e=s.type(t);return"object"==e?Object.keys(t).length:"array"==e?t.length:0},empty:t=>{switch(s.type(t)){case"object":return!Object.keys(t).length;case"array":return!t.length;case"number":case"boolean":return!1;default:return!t}},getPropByString:(t,e)=>{if(!e)return t;const r=e.split(".");let n=0;for(let e=r.length-1;n<e;n++){const e=t[r[n]];if(void 0===e)break;t=e}return t[r[n]]},isNumeric:t=>s.in(s.type(t),["number","string"])&&!isNaN(parseFloat(t))&&isFinite(t),isBoolean:t=>s.in(t,["true","false",!0,!1]),parse:t=>(t=s.JSON.parse(t),s.isNumeric(t)?t=parseInt(t):"boolean"!=s.type(t)&&s.isBoolean(t)&&(t="true"==t),t),includeHTML:()=>{let t,e,r,n;const o=document.querySelectorAll("[include]");for(t=0;t<o.length;t++)if(e=o[t],r=e.getAttribute("include"),r)return n=new XMLHttpRequest,n.onreadystatechange=function(){4==this.readyState&&(200==this.status&&(e.innerHTML=this.responseText),404==this.status&&(e.innerHTML="Page not found."),e.removeAttribute("include"),s.includeHTML())},n.open("GET",r,!0),void n.send()},imgToSvg:(t,e)=>{document.querySelectorAll(`img.${t}`).forEach((t=>{const r=t.id,n=t.className,o=t.src,i=t.getAttribute("style"),s=new XMLHttpRequest;s.onreadystatechange=function(){if(4==this.readyState&&200==this.status){const o=this.responseXML.getElementsByTagName("svg")[0];r&&(o.id=r),n&&o.setAttribute("class",n.removeClass("svg-me")),o.removeAttribute("xmlns:a");const s=o.getAttribute("viewBox"),a=o.getAttribute("width"),c=o.getAttribute("height");!s&&a&&c&&o.setAttribute("viewBox",`0 0 ${c} ${a}`),i&&o.setAttribute("style",i),t.replaceWith(o),e&&e.call(o)}},s.open("GET",o,!0),s.send()}))},loadStyles:t=>{t.forEach((t=>{const e=document.createElement("link");e.setAttribute("rel","stylesheet"),e.setAttribute("href",t),document.head.appendChild(e)}))},loadStylesWithCondition:(t,e)=>t&&s.loadStyles(e),choice:t=>t[s.random(0,t.length)],dateToTimestamp:(t=new Date)=>t.toISOString().replace(/(T|\.\d+Z)/g," ").trim(),generateID(t=10){const e=[],r="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz",n=r.length;for(let o=0;o<t;o++)e.push(r.charAt(Math.floor(Math.random()*n)));return e.join("")},delay:t=>new Promise((e=>setTimeout(e,t))),getValue(t,e){if("object"!=s.type(t))return t;let r;const n=e.split(".");for(e of n)if(r=t[e],"object"!=s.type(r))break;return r},now:(t=!0)=>t?(new Date).getTime():new Date,random:(t=0,e=100)=>Math.floor(Math.random()*(e-t+1)+t)};s.JSON={stringify:t=>s.in(s.type(t),["array","object"])?JSON.stringify(t):t,parse(t){if("string"==s.type(t)&&t.match(/^[{[]/))try{return JSON.parse(t)}catch(e){return t}return t}},s.Util={formatLatLngs(t,e=5){const r=Math.pow(10,e);switch(s.type(t)){case"object":t.lat=Math.round(t.lat*r)/r,t.lng=Math.round(t.lng*r)/r;break;case"array":for(let r=0;r<t.length;r++)t[r]=s.Util.formatLatLngs(t[r],e);break;case"number":return Math.round(t*r)/r}return t},create:Object.create||function(){function t(){}return function(e){return t.prototype=e,new t}}(),bind(t,e){const r=Array.prototype.slice;if(t.bind)return t.bind.apply(t,r.call(arguments,1));const n=r.call(arguments,2);return function(){return t.apply(e,n.length?n.concat(r.call(arguments)):arguments)}},stamp:t=>(t._k_id=t._k_id||++s.Util.lastId,t._k_id),lastId:0,throttle(t,e,r){let n,o;const i=()=>{n=!1,o&&(s.apply(r,o),o=!1)},s=()=>{n?o=arguments:(t.apply(r,arguments),setTimeout(i,e),n=!0)};return s},wrapNum(t,e,r){const n=e[1],o=e[0],i=n-o;return t===n&&r?t:((t-o)%i+i)%i+o},falseFn:()=>!1,formatNum(t,e){const r=Math.pow(10,e||5);return Math.round(t*r)/r},trim:t=>t.trim?t.trim():t.replace(/^\s+|\s+$/g,""),splitWords:t=>s.Util.trim(t).split(/\s+/),setOptions(t,e){s.has("options",t)||(t.options=t.options?s.Util.create(t.options):{});for(const r in e)t.options[r]=e[r];return t.options},getParamString(t,e,r){const n=[];for(const e in t)n.push(encodeURIComponent(r?e.toUpperCase():e)+"="+encodeURIComponent(t[e]));return(e&&-1!==e.indexOf("?")?"&":"?")+n.join("&")},template:(t,e)=>t.replace(s.Util.templateRe,(function(t,r){let n=e[r];if(void 0===n)throw new Error("No value provided for variable "+t);return"function"==typeof n&&(n=n(e)),n})),templateRe:/\{ *([\w_-]+) *\}/g,cookie:{assign(t){for(let e=1;e<arguments.length;e++){const r=arguments[e];for(let e in r)t[e]=r[e]}return t},defaultConverter:{read:t=>t.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent),write:t=>encodeURIComponent(t).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)},init(t,e){function r(r,n,o){if("undefined"==typeof document)return;"number"==typeof(o=s.Util.cookie.assign({},e,o)).expires&&(o.expires=new Date(Date.now()+864e5*o.expires)),o.expires&&(o.expires=o.expires.toUTCString()),r=encodeURIComponent(r).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape),n=t.write(n,r);let i="";for(const t in o)o[t]&&(i+="; "+t,!0!==o[t]&&(i+="="+o[t].split(";")[0]));return document.cookie=r+"="+n+i}return Object.create({set:r,get:function(e){if("undefined"==typeof document||arguments.length&&!e)return;const r=document.cookie?document.cookie.split("; "):[],n={};for(const o of r){const r=o.split("=");let i=r.slice(1).join("=");"="===i[0]&&(i=i.slice(1,-1));try{const o=s.Util.cookie.defaultConverter.read(r[0]);if(n[o]=t.read(i,o),e===o)break}catch(t){}}return e?n[e]:n},remove:function(t,e){r(t,"",s.Util.cookie.assign({},e,{expires:-1}))},withAttributes:function(t){return s.Util.cookie.init(this.converter,s.Util.cookie.assign({},this.attributes,t))},withConverter:function(t){return s.Util.cookie.init(s.Util.cookie.assign({},this.converter,t),this.attributes)}},{attributes:{value:Object.freeze(e)},converter:{value:Object.freeze(t)}})}}},s.cookie=s.Util.cookie.init(s.Util.cookie.defaultConverter,{path:"/"}),s.has=s.inArray,s.in=s.inArray,s.isWindow=function(t){return null!=t&&t===t.window},s.isWindows=navigator.platform.indexOf("Win")>-1,s.evaluate={"+":(t,e)=>t+e,"-":(t,e)=>t-e,"*":(t,e)=>t*e,"/":(t,e)=>t/e,"<":(t,e)=>t<e,">":(t,e)=>t>e,">=":(t,e)=>t>=e,"<=":(t,e)=>t<=e},s.supportsPassive=!1;try{const t=Object.defineProperty({},"passive",{get:()=>s.supportsPassive=!0});window.addEventListener("testPassive",null,t),window.removeEventListener("testPassive",null,t)}catch(t){}s.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),(function(t,r){e["[object "+r+"]"]=r.toLowerCase()}));export function isArrayLike(t){const e=!!t&&"length"in t&&t.length,r=s.type(t);return"function"!==r&&!s.isWindow(t)&&("array"===r||0===e||"number"==typeof e&&e>0&&e-1 in t)}const a=/[^\x20\t\r\n\f]+/g;export function classesToArray(t){return Array.isArray(t)?t:"string"==typeof t&&t.match(a)||[]}export function stripAndCollapse(t){return(t.match(a)||[]).join(" ")}s.isMobile=()=>navigator.userAgent.bMatch(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i);export default s;Array.prototype.removeDupes||(Array.prototype.removeDupes=function(){const t=[],e=[];return s.each(this,(function(r,n){const o=JSON.stringify(n);s.in(o,t)||(t.push(o),e.push(n))})),e}),String.prototype.filter||(String.prototype.filter=function(){const t=this.toString().split(" "),e=[];return t.clean(""),t.length<2?t[0]:(s.each(t,(function(t,r){s.in(r,e)||e.push(r)})),e.join(" "))}),Array.prototype.clean||(Array.prototype.clean=function(t){for(let e=0;e<this.length;e++)this[e]==t&&(this.splice(e,1),e--);return this}),Array.prototype.average||(Array.prototype.average=function(){if(this.length){return this.reduce(((t,e)=>t+e))/this.length}return 0}),String.prototype.bMatch||(String.prototype.bMatch=function(t){return null!==this.toString().match(t)}),String.prototype.contains||(String.prototype.contains=function(t="",e=!1){let r=this.toString();return e||(r=r.toLowerCase(),t=t.toLowerCase()),-1!=r.indexOf(t)}),String.prototype.space||(String.prototype.space=function(){return this.toString().replace(/([A-Z])([A-Z])([a-z])|([a-z])([A-Z])/g,"$1$4 $2$3$5").trim()}),String.prototype.titleCase||(String.prototype.titleCase=function(){return this.toString().replace(/(?:^|\s)\w/g,(function(t){return t.toUpperCase()}))}),String.prototype.firstToUpper||(String.prototype.firstToUpper=function(){const t=this.toString();return t.substr(0,1).toUpperCase()+t.substr(1)}),String.prototype.equals||(String.prototype.equals=function(t,e=!1){if("string"!=s.type(t))return!1;let r=this.toString();return e||(r=r.toLowerCase(),t=t.toLowerCase()),r==t}),String.prototype.addClass||(String.prototype.addClass=function(t){const e=classesToArray(t),r=this.toString();let n,o,i,s;if(e.length&&(o=r||"",n=` ${stripAndCollapse(o)} `,n)){for(s=0;i=e[s++];)n.indexOf(` ${i} `)<0&&(n+=i+" ");return stripAndCollapse(n)}return r}),String.prototype.removeClass||(String.prototype.removeClass=function(t){const e=classesToArray(t),r=this.toString();let n,o,i,s;if(e.length&&(o=r||"",n=` ${stripAndCollapse(o)} `,n)){for(s=0;i=e[s++];)for(;n.indexOf(` ${i} `)>-1;)n=n.replace(` ${i} `," ");return stripAndCollapse(n)}return r}),String.prototype.get||(String.prototype.get=function(t){const e=this.toString().match(t);return s.empty(e)?"":e[0]}),Date.prototype.addHours||(Date.prototype.addHours=function(t){return this.setTime(this.getTime()+60*t*60*1e3),this}),Date.prototype.addMinutes||(Date.prototype.addMinutes=function(t){return this.setTime(this.getTime()+60*t*1e3),this});(new Date).addMinutes(10);export{s as K};class c{run(t,e){this.time=e,this.callback=t,this._action()}_action(){this.timeout&&clearTimeout(this.timeout),this.timeout=setTimeout(this.callback,this.time)}}export function timed(){return new c}