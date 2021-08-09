/*! Hammer.JS - v2.0.8 - 2016-09-30
 * http://hammerjs.github.io/
 *
 * Copyright (c)  Jorik Tangelder;
 * Licensed under the MIT license */
function t(t,e){return void 0===t?e:t}var e=["","webkit","Moz","MS","ms","o"],n=document.createElement("div"),i=Math.round,r=Math.abs,o=Date.now;function s(t,n){for(var i=void 0,r=void 0,o=n[0].toUpperCase()+n.slice(1),s=0;s<e.length;){if((r=(i=e[s])?i+o:n)in t)return r;s++}}var a=s(n.style,"touchAction"),u=void 0!==a,c=function(){if(!u)return!1;var t={},e=window.CSS&&window.CSS.supports;return["auto","manipulation","pan-y","pan-x","pan-x pan-y","none"].forEach((function(n){return t[n]=!e||window.CSS.supports("touch-action",n)})),t}(),h="ontouchstart"in window,l=void 0!==s(window,"PointerEvent"),p=h&&/mobile|tablet|ip(ad|hone|od)|android/i.test(navigator.userAgent),f=["x","y"],v=["clientX","clientY"],d="function"!=typeof Object.assign?function(t){if(null==t)throw new TypeError("Cannot convert undefined or null to object");for(var e=Object(t),n=1;n<arguments.length;n++){var i=arguments[n];if(null!=i)for(var r in i)i.hasOwnProperty(r)&&(e[r]=i[r])}return e}:Object.assign,y=1;function m(t,e,n){var i=void 0;if(t)if(t.forEach)t.forEach(e,n);else if(void 0!==t.length)for(i=0;i<t.length;)e.call(n,t[i],i,t),i++;else for(i in t)t.hasOwnProperty(i)&&e.call(n,t[i],i,t)}function g(t,e,n){return!!Array.isArray(t)&&(m(t,n[e],n),!0)}function T(t,e,n){if(t.indexOf&&!n)return t.indexOf(e);for(var i=0;i<t.length;){if(n&&t[i][n]==e||!n&&t[i]===e)return i;i++}return-1}var _="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},b=(function(){function t(t){this.value=t}function e(e){var n,i;function r(n,i){try{var s=e[n](i),a=s.value;a instanceof t?Promise.resolve(a.value).then((function(t){r("next",t)}),(function(t){r("throw",t)})):o(s.done?"return":"normal",s.value)}catch(t){o("throw",t)}}function o(t,e){switch(t){case"return":n.resolve({value:e,done:!0});break;case"throw":n.reject(e);break;default:n.resolve({value:e,done:!1});break}(n=n.next)?r(n.key,n.arg):i=null}this._invoke=function(t,e){return new Promise((function(o,s){var a={key:t,arg:e,resolve:o,reject:s,next:null};i?i=i.next=a:(n=i=a,r(t,e))}))},"function"!=typeof e.return&&(this.return=void 0)}"function"==typeof Symbol&&Symbol.asyncIterator&&(e.prototype[Symbol.asyncIterator]=function(){return this}),e.prototype.next=function(t){return this._invoke("next",t)},e.prototype.throw=function(t){return this._invoke("throw",t)},e.prototype.return=function(t){return this._invoke("return",t)}}(),function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}),E=function(){function t(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}return function(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}}(),k=function t(e,n,i){null===e&&(e=Function.prototype);var r=Object.getOwnPropertyDescriptor(e,n);if(void 0===r){var o=Object.getPrototypeOf(e);return null===o?void 0:t(o,n,i)}if("value"in r)return r.value;var s=r.get;return void 0!==s?s.call(i):void 0},O=function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)},w=function(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e},P=function(t,e){if(Array.isArray(t))return t;if(Symbol.iterator in Object(t))return function(t,e){var n=[],i=!0,r=!1,o=void 0;try{for(var s,a=t[Symbol.iterator]();!(i=(s=a.next()).done)&&(n.push(s.value),!e||n.length!==e);i=!0);}catch(t){r=!0,o=t}finally{try{!i&&a.return&&a.return()}finally{if(r)throw o}}return n}(t,e);throw new TypeError("Invalid attempt to destructure non-iterable instance")};function I(t,e){return"function"===(void 0===t?"undefined":_(t))?t.apply(e&&e[0]||void 0,e):t}function S(t,e){var n=e.manager;return n?n.get(t):t}function A(t){return 16&t?"cancel":8&t?"end":4&t?"move":2&t?"start":""}var x=function(){function e(n){b(this,e),this.options=d({},this.defaults,n||{}),this.id=y++,this.manager=null,this.options.enable=t(this.options.enable,!0),this.state=1,this.simultaneous={},this.requireFail=[]}return E(e,[{key:"set",value:function(t){return d(this.options,t),this.manager&&this.manager.touchAction.update(),this}},{key:"recognizeWith",value:function(t){if(g(t,"recognizeWith",this))return this;var e=this.simultaneous;return e[(t=S(t,this)).id]||(e[t.id]=t,t.recognizeWith(this)),this}},{key:"dropRecognizeWith",value:function(t){return g(t,"dropRecognizeWith",this)||(t=S(t,this),delete this.simultaneous[t.id]),this}},{key:"requireFailure",value:function(t){if(g(t,"requireFailure",this))return this;var e=this.requireFail;return-1===T(e,t=S(t,this))&&(e.push(t),t.requireFailure(this)),this}},{key:"dropRequireFailure",value:function(t){if(g(t,"dropRequireFailure",this))return this;t=S(t,this);var e=T(this.requireFail,t);return e>-1&&this.requireFail.splice(e,1),this}},{key:"hasRequireFailures",value:function(){return this.requireFail.length>0}},{key:"canRecognizeWith",value:function(t){return!!this.simultaneous[t.id]}},{key:"emit",value:function(t){var e=this,n=this.state;function i(n){e.manager.emit(n,t)}n<8&&i(e.options.event+A(n)),i(e.options.event),t.additionalEvent&&i(t.additionalEvent),n>=8&&i(e.options.event+A(n))}},{key:"tryEmit",value:function(t){if(this.canEmit())return this.emit(t);this.state=32}},{key:"canEmit",value:function(){for(var t=0;t<this.requireFail.length;){if(!(33&this.requireFail[t].state))return!1;t++}return!0}},{key:"recognize",value:function(t){var e=d({},t);if(!I(this.options.enable,[this,e]))return this.reset(),void(this.state=32);56&this.state&&(this.state=1),this.state=this.process(e),30&this.state&&this.tryEmit(e)}},{key:"process",value:function(t){}},{key:"getTouchAction",value:function(){}},{key:"reset",value:function(){}}]),e}();x.prototype.defaults={};var C=function(t){function e(){return b(this,e),w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments))}return O(e,x),E(e,[{key:"attrTest",value:function(t){var e=this.options.pointers;return 0===e||t.pointers.length===e}},{key:"process",value:function(t){var e=this.state,n=t.eventType,i=6&e,r=this.attrTest(t);return i&&(8&n||!r)?16|e:i||r?4&n?8|e:2&e?4|e:2:32}}]),e}();C.prototype.defaults={pointers:1};var D=function(t){function e(){return b(this,e),w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments))}return O(e,C),E(e,[{key:"getTouchAction",value:function(){return["none"]}},{key:"attrTest",value:function(t){return k(e.prototype.__proto__||Object.getPrototypeOf(e.prototype),"attrTest",this).call(this,t)&&(Math.abs(t.rotation)>this.options.threshold||2&this.state)}}]),e}();D.prototype.defaults={event:"rotate",threshold:0,pointers:2};var j=function(t){function e(){return b(this,e),w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments))}return O(e,C),E(e,[{key:"getTouchAction",value:function(){return["none"]}},{key:"attrTest",value:function(t){return k(e.prototype.__proto__||Object.getPrototypeOf(e.prototype),"attrTest",this).call(this,t)&&(Math.abs(t.scale-1)>this.options.threshold||2&this.state)}},{key:"emit",value:function(t){if(1!==t.scale){var n=t.scale<1?"in":"out";t.additionalEvent=this.options.event+n}k(e.prototype.__proto__||Object.getPrototypeOf(e.prototype),"emit",this).call(this,t)}}]),e}();function R(t){return 16===t?"down":8===t?"up":2===t?"left":4===t?"right":""}j.prototype.defaults={event:"pinch",threshold:0,pointers:2};var M=function(t){function e(){b(this,e);var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments));return t.pX=null,t.pY=null,t}return O(e,C),E(e,[{key:"getTouchAction",value:function(){var t=this.options.direction,e=[];return 6&t&&e.push("pan-y"),24&t&&e.push("pan-x"),e}},{key:"directionTest",value:function(t){var e=this.options,n=!0,i=t.distance,r=t.direction,o=t.deltaX,s=t.deltaY;return r&e.direction||(6&e.direction?(r=0===o?1:o<0?2:4,n=o!==this.pX,i=Math.abs(t.deltaX)):(r=0===s?1:s<0?8:16,n=s!==this.pY,i=Math.abs(t.deltaY))),t.direction=r,n&&i>e.threshold&&r&e.direction}},{key:"attrTest",value:function(t){return C.prototype.attrTest.call(this,t)&&(2&this.state||!(2&this.state)&&this.directionTest(t))}},{key:"emit",value:function(t){this.pX=t.deltaX,this.pY=t.deltaY;var n=R(t.direction);n&&(t.additionalEvent=this.options.event+n),k(e.prototype.__proto__||Object.getPrototypeOf(e.prototype),"emit",this).call(this,t)}}]),e}();M.prototype.defaults={event:"pan",threshold:10,pointers:1,direction:30};var z=function(t){function e(){return b(this,e),w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments))}return O(e,C),E(e,[{key:"getTouchAction",value:function(){return M.prototype.getTouchAction.call(this)}},{key:"attrTest",value:function(t){var n=this.options.direction,i=void 0;return 30&n?i=t.overallVelocity:6&n?i=t.overallVelocityX:24&n&&(i=t.overallVelocityY),k(e.prototype.__proto__||Object.getPrototypeOf(e.prototype),"attrTest",this).call(this,t)&&n&t.offsetDirection&&t.distance>this.options.threshold&&t.maxPointers===this.options.pointers&&r(i)>this.options.velocity&&4&t.eventType}},{key:"emit",value:function(t){var e=R(t.offsetDirection);e&&this.manager.emit(this.options.event+e,t),this.manager.emit(this.options.event,t)}}]),e}();function N(t,e){return function(){return t.apply(e,arguments)}}function X(t,e,n){return setTimeout(N(t,n),e)}function Y(t,e,n){n||(n=f);var i=e[n[0]]-t[n[0]],r=e[n[1]]-t[n[1]];return Math.sqrt(i*i+r*r)}z.prototype.defaults={event:"swipe",threshold:10,velocity:.3,direction:30,pointers:1};var F=function(t){function e(){b(this,e);var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments));return t.pTime=!1,t.pCenter=!1,t._timer=null,t._input=null,t.count=0,t}return O(e,x),E(e,[{key:"getTouchAction",value:function(){return["manipulation"]}},{key:"process",value:function(t){var e=this,n=this.options,i=t.pointers.length===n.pointers,r=t.distance<n.threshold,o=t.deltaTime<n.time;if(this.reset(),1&t.eventType&&0===this.count)return this.failTimeout();if(r&&o&&i){if(4!==t.eventType)return this.failTimeout();var s=!this.pTime||t.timeStamp-this.pTime<n.interval,a=!this.pCenter||Y(this.pCenter,t.center)<n.posThreshold;if(this.pTime=t.timeStamp,this.pCenter=t.center,a&&s?this.count+=1:this.count=1,this._input=t,0===this.count%n.taps)return this.hasRequireFailures()?(this._timer=X((function(){e.state=8,e.tryEmit()}),n.interval,this),2):8}return 32}},{key:"failTimeout",value:function(){var t=this;return this._timer=X((function(){t.state=32}),this.options.interval,this),32}},{key:"reset",value:function(){clearTimeout(this._timer)}},{key:"emit",value:function(){8===this.state&&(this._input.tapCount=this.count,this.manager.emit(this.options.event,this._input))}}]),e}();F.prototype.defaults={event:"tap",pointers:1,taps:1,interval:300,time:250,threshold:9,posThreshold:10};var q=function(t){function e(){b(this,e);var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments));return t._timer=null,t._input=null,t}return O(e,x),E(e,[{key:"getTouchAction",value:function(){return["auto"]}},{key:"process",value:function(t){var e=this,n=this.options,i=t.pointers.length===n.pointers,r=t.distance<n.threshold,o=t.deltaTime>n.time;if(this._input=t,!r||!i||12&t.eventType&&!o)this.reset();else if(1&t.eventType)this.reset(),this._timer=X((function(){e.state=8,e.tryEmit()}),n.time,this);else if(4&t.eventType)return 8;return 32}},{key:"reset",value:function(){clearTimeout(this._timer)}},{key:"emit",value:function(t){8===this.state&&(t&&4&t.eventType?this.manager.emit(this.options.event+"up",t):(this._input.timeStamp=o(),this.manager.emit(this.options.event,this._input)))}}]),e}();function W(t,e){return t.indexOf(e)>-1}q.prototype.defaults={event:"press",pointers:1,time:251,threshold:9};var L=function(){function t(e,n){b(this,t),this.manager=e,this.set(n)}return E(t,[{key:"set",value:function(t){"compute"===t&&(t=this.compute()),u&&this.manager.element.style&&c[t]&&(this.manager.element.style[a]=t),this.actions=t.toLowerCase().trim()}},{key:"update",value:function(){this.set(this.manager.options.touchAction)}},{key:"compute",value:function(){var t=[];return m(this.manager.recognizers,(function(e){I(e.options.enable,[e])&&(t=t.concat(e.getTouchAction()))})),function(t){if(W(t,"none"))return"none";var e=W(t,"pan-x"),n=W(t,"pan-y");return e&&n?"none":e||n?e?"pan-x":"pan-y":W(t,"manipulation")?"manipulation":"auto"}(t.join(" "))}},{key:"preventDefaults",value:function(t){var e=t.srcEvent,n=t.offsetDirection;if(this.manager.session.prevented)e.preventDefault();else{var i=this.actions,r=W(i,"none")&&!c.none,o=W(i,"pan-y")&&!c["pan-y"],s=W(i,"pan-x")&&!c["pan-x"];if(r){var a=1===t.pointers.length,u=t.distance<2,h=t.deltaTime<250;if(a&&u&&h)return}if(!s||!o)return r||o&&6&n||s&&24&n?this.preventSrc(e):void 0}}},{key:"preventSrc",value:function(t){this.manager.session.prevented=!0,t.preventDefault()}}]),t}();function H(t,e){for(;t;){if(t===e)return!0;t=t.parentNode}return!1}function U(t){var e=t.length;if(1===e)return{x:i(t[0].clientX),y:i(t[0].clientY)};for(var n=0,r=0,o=0;o<e;)n+=t[o].clientX,r+=t[o].clientY,o++;return{x:i(n/e),y:i(r/e)}}function V(t){for(var e=[],n=0;n<t.pointers.length;)e[n]={clientX:i(t.pointers[n].clientX),clientY:i(t.pointers[n].clientY)},n++;return{timeStamp:o(),pointers:e,center:U(e),deltaX:t.deltaX,deltaY:t.deltaY}}function G(t,e,n){n||(n=f);var i=e[n[0]]-t[n[0]],r=e[n[1]]-t[n[1]];return 180*Math.atan2(r,i)/Math.PI}function Z(t,e){return t===e?1:r(t)>=r(e)?t<0?2:4:e<0?8:16}function B(t,e,n){return{x:e/t||0,y:n/t||0}}function $(t,e){var n=t.session,i=e.pointers,s=i.length;n.firstInput||(n.firstInput=V(e)),s>1&&!n.firstMultiple?n.firstMultiple=V(e):1===s&&(n.firstMultiple=!1);var a=n.firstInput,u=n.firstMultiple,c=u?u.center:a.center,h=e.center=U(i);e.timeStamp=o(),e.deltaTime=e.timeStamp-a.timeStamp,e.angle=G(c,h),e.distance=Y(c,h),function(t,e){var n=e.center,i=t.offsetDelta||{},r=t.prevDelta||{},o=t.prevInput||{};1!==e.eventType&&4!==o.eventType||(r=t.prevDelta={x:o.deltaX||0,y:o.deltaY||0},i=t.offsetDelta={x:n.x,y:n.y}),e.deltaX=r.x+(n.x-i.x),e.deltaY=r.y+(n.y-i.y)}(n,e),e.offsetDirection=Z(e.deltaX,e.deltaY);var l,p,f=B(e.deltaTime,e.deltaX,e.deltaY);e.overallVelocityX=f.x,e.overallVelocityY=f.y,e.overallVelocity=r(f.x)>r(f.y)?f.x:f.y,e.scale=u?(l=u.pointers,Y((p=i)[0],p[1],v)/Y(l[0],l[1],v)):1,e.rotation=u?function(t,e){return G(e[1],e[0],v)+G(t[1],t[0],v)}(u.pointers,i):0,e.maxPointers=n.prevInput?e.pointers.length>n.prevInput.maxPointers?e.pointers.length:n.prevInput.maxPointers:e.pointers.length,function(t,e){var n=t.lastInterval||e,i=e.timeStamp-n.timeStamp,o=void 0,s=void 0,a=void 0,u=void 0;if(8!==e.eventType&&(i>25||void 0===n.velocity)){var c=e.deltaX-n.deltaX,h=e.deltaY-n.deltaY,l=B(i,c,h);s=l.x,a=l.y,o=r(l.x)>r(l.y)?l.x:l.y,u=Z(c,h),t.lastInterval=e}else o=n.velocity,s=n.velocityX,a=n.velocityY,u=n.direction;e.velocity=o,e.velocityX=s,e.velocityY=a,e.direction=u}(n,e);var d=t.element;H(e.srcEvent.target,d)&&(d=e.srcEvent.target),e.target=d}function J(t,e,n){var i=n.pointers.length,r=n.changedPointers.length,o=1&e&&i-r==0,s=12&e&&i-r==0;n.isFirst=!!o,n.isFinal=!!s,o&&(t.session={}),n.eventType=e,$(t,n),t.emit("hammer.input",n),t.recognize(n),t.session.prevInput=n}function K(t){return t.trim().split(/\s+/g)}function Q(t,e,n){m(K(e),(function(e){t.addEventListener(e,n,!1)}))}function tt(t,e,n){m(K(e),(function(e){t.removeEventListener(e,n,!1)}))}function et(t){var e=t.ownerDocument||t;return e.defaultView||e.parentWindow||window}var nt=function(){function t(e,n){b(this,t);var i=this;this.manager=e,this.callback=n,this.element=e.element,this.target=e.options.inputTarget,this.domHandler=function(t){I(e.options.enable,[e])&&i.handler(t)},this.init()}return E(t,[{key:"handler",value:function(){}},{key:"init",value:function(){this.evEl&&Q(this.element,this.evEl,this.domHandler),this.evTarget&&Q(this.target,this.evTarget,this.domHandler),this.evWin&&Q(et(this.element),this.evWin,this.domHandler)}},{key:"destroy",value:function(){this.evEl&&tt(this.element,this.evEl,this.domHandler),this.evTarget&&tt(this.target,this.evTarget,this.domHandler),this.evWin&&tt(et(this.element),this.evWin,this.domHandler)}}]),t}(),it={pointerdown:1,pointermove:2,pointerup:4,pointercancel:8,pointerout:8},rt={2:"touch",3:"pen",4:"mouse",5:"kinect"},ot="pointerdown",st="pointermove pointerup pointercancel";window.MSPointerEvent&&!window.PointerEvent&&(ot="MSPointerDown",st="MSPointerMove MSPointerUp MSPointerCancel");var at=function(t){function e(){b(this,e);var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments));return t.evEl=ot,t.evWin=st,t.store=t.manager.session.pointerEvents=[],t}return O(e,nt),E(e,[{key:"handler",value:function(t){var e=this.store,n=!1,i=t.type.toLowerCase().replace("ms",""),r=it[i],o=rt[t.pointerType]||t.pointerType,s="touch"===o,a=T(e,t.pointerId,"pointerId");1&r&&(0===t.button||s)?a<0&&(e.push(t),a=e.length-1):12&r&&(n=!0),a<0||(e[a]=t,this.callback(this.manager,r,{pointers:e,changedPointers:[t],pointerType:o,srcEvent:t}),n&&e.splice(a,1))}}]),e}();function ut(t){return Array.prototype.slice.call(t,0)}function ct(t,e,n){for(var i=[],r=[],o=0;o<t.length;){var s=e?t[o][e]:t[o];T(r,s)<0&&i.push(t[o]),r[o]=s,o++}return n&&(i=e?i.sort((function(t,n){return t[e]>n[e]})):i.sort()),i}var ht={touchstart:1,touchmove:2,touchend:4,touchcancel:8},lt="touchstart touchmove touchend touchcancel",pt=function(t){function e(){b(this,e),e.prototype.evTarget=lt,e.prototype.targetIds={};var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments));return t.evTarget=lt,t.targetIds={},t}return O(e,nt),E(e,[{key:"handler",value:function(t){var e=ht[t.type],n=ft.call(this,t,e);n&&this.callback(this.manager,e,{pointers:n[0],changedPointers:n[1],pointerType:"touch",srcEvent:t})}}]),e}();function ft(t,e){var n=ut(t.touches),i=this.targetIds;if(3&e&&1===n.length)return i[n[0].identifier]=!0,[n,n];var r=void 0,o=void 0,s=ut(t.changedTouches),a=[],u=this.target;if(o=n.filter((function(t){return H(t.target,u)})),1===e)for(r=0;r<o.length;)i[o[r].identifier]=!0,r++;for(r=0;r<s.length;)i[s[r].identifier]&&a.push(s[r]),12&e&&delete i[s[r].identifier],r++;return a.length?[ct(o.concat(a),"identifier",!0),a]:void 0}var vt={mousedown:1,mousemove:2,mouseup:4},dt=function(t){function e(){b(this,e);var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments));return t.evEl="mousedown",t.evWin="mousemove mouseup",t.pressed=!1,t}return O(e,nt),E(e,[{key:"handler",value:function(t){var e=vt[t.type];1&e&&0===t.button&&(this.pressed=!0),2&e&&1!==t.which&&(e=4),this.pressed&&(4&e&&(this.pressed=!1),this.callback(this.manager,e,{pointers:[t],changedPointers:[t],pointerType:"mouse",srcEvent:t}))}}]),e}(),yt=function(t){function e(){b(this,e);var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments)),n=N(t.handler,t);return t.touch=new pt(t.manager,n),t.mouse=new dt(t.manager,n),t.primaryTouch=null,t.lastTouches=[],t}return O(e,nt),E(e,[{key:"handler",value:function(t,e,n){var i="touch"===n.pointerType,r="mouse"===n.pointerType;if(!(r&&n.sourceCapabilities&&n.sourceCapabilities.firesTouchEvents)){if(i)mt.call(this,e,n);else if(r&&Tt.call(this,n))return;this.callback(t,e,n)}}},{key:"destroy",value:function(){this.touch.destroy(),this.mouse.destroy()}}]),e}();function mt(t,e){1&t?(this.primaryTouch=e.changedPointers[0].identifier,gt.call(this,e)):12&t&&gt.call(this,e)}function gt(t){var e=this,n=P(t.changedPointers,1)[0];n.identifier===this.primaryTouch&&function(){var t={x:n.clientX,y:n.clientY};e.lastTouches.push(t);var i=e.lastTouches;setTimeout((function(){var e=i.indexOf(t);e>-1&&i.splice(e,1)}),2500)}()}function Tt(t){for(var e=t.srcEvent.clientX,n=t.srcEvent.clientY,i=0;i<this.lastTouches.length;i++){var r=this.lastTouches[i],o=Math.abs(e-r.x),s=Math.abs(n-r.y);if(o<=25&&s<=25)return!0}return!1}var _t=function(){function t(e,n){var i,r=this;b(this,t),this.options=d({},Et.defaults,n||{}),this.options.inputTarget=this.options.inputTarget||e,this.handlers={},this.session={},this.recognizers=[],this.oldCssProps={},this.element=e,this.input=new((i=this).options.inputClass||(l?at:p?pt:h?yt:dt))(i,J),this.touchAction=new L(this,this.options.touchAction),bt(this,!0),m(this.options.recognizers,(function(t){var e=r.add(new t[0](t[1]));t[2]&&e.recognizeWith(t[2]),t[3]&&e.requireFailure(t[3])}),this)}return E(t,[{key:"set",value:function(t){return d(this.options,t),t.touchAction&&this.touchAction.update(),t.inputTarget&&(this.input.destroy(),this.input.target=t.inputTarget,this.input.init()),this}},{key:"stop",value:function(t){this.session.stopped=t?2:1}},{key:"recognize",value:function(t){var e=this.session;if(!e.stopped){this.touchAction.preventDefaults(t);var n=void 0,i=this.recognizers,r=e.curRecognizer;(!r||r&&8&r.state)&&(r=e.curRecognizer=null);for(var o=0;o<i.length;)n=i[o],2===e.stopped||r&&n!==r&&!n.canRecognizeWith(r)?n.reset():n.recognize(t),!r&&14&n.state&&(r=e.curRecognizer=n),o++}}},{key:"get",value:function(t){if(t instanceof x)return t;for(var e=this.recognizers,n=0;n<e.length;n++)if(e[n].options.event===t)return e[n];return null}},{key:"add",value:function(t){if(g(t,"add",this))return this;var e=this.get(t.options.event);return e&&this.remove(e),this.recognizers.push(t),t.manager=this,this.touchAction.update(),t}},{key:"remove",value:function(t){if(g(t,"remove",this))return this;if(t=this.get(t)){var e=this.recognizers,n=T(e,t);-1!==n&&(e.splice(n,1),this.touchAction.update())}return this}},{key:"on",value:function(t,e){if(void 0!==t&&void 0!==e){var n=this.handlers;return m(K(t),(function(t){n[t]=n[t]||[],n[t].push(e)})),this}}},{key:"off",value:function(t,e){if(void 0!==t){var n=this.handlers;return m(K(t),(function(t){e?n[t]&&n[t].splice(T(n[t],e),1):delete n[t]})),this}}},{key:"emit",value:function(t,e){this.options.domEvents&&function(t,e){var n=document.createEvent("Event");n.initEvent(t,!0,!0),n.gesture=e,e.target.dispatchEvent(n)}(t,e);var n=this.handlers[t]&&this.handlers[t].slice();if(n&&n.length){e.type=t,e.preventDefault=function(){e.srcEvent.preventDefault()};for(var i=0;i<n.length;)n[i](e),i++}}},{key:"destroy",value:function(){this.element&&bt(this,!1),this.handlers={},this.session={},this.input.destroy(),this.element=null}}]),t}();function bt(t,e){var n=t.element;if(n.style){var i=void 0;m(t.options.cssProps,(function(r,o){i=s(n.style,o),e?(t.oldCssProps[i]=n.style[i],n.style[i]=r):n.style[i]=t.oldCssProps[i]||""})),e||(t.oldCssProps={})}}var Et=function e(n,i){return b(this,e),(i=i||{}).recognizers=t(i.recognizers,e.defaults.preset),new _t(n,i)};Et.VERSION="2.0.8",Et.defaults={domEvents:!1,touchAction:"compute",enable:!0,inputTarget:null,inputClass:null,preset:[[D,{enable:!1}],[j,{enable:!1},["rotate"]],[z,{direction:6}],[M,{direction:6},["swipe"]],[F],[F,{event:"doubletap",taps:2},["tap"]],[q]],cssProps:{userSelect:"none",touchSelect:"none",touchCallout:"none",contentZooming:"none",userDrag:"none",tapHighlightColor:"rgba(0,0,0,0)"}};var kt={touchstart:1,touchmove:2,touchend:4,touchcancel:8},Ot=function(t){function e(){b(this,e);var t=w(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments));return t.evTarget="touchstart",t.evWin="touchstart touchmove touchend touchcancel",t.started=!1,nt.apply(t,arguments),t}return O(e,nt),E(e,[{key:"handler",value:function(t){var e=kt[t.type];if(1===e&&(this.started=!0),this.started){var n=wt.call(this,t,e);12&e&&n[0].length-n[1].length==0&&(this.started=!1),this.callback(this.manager,e,{pointers:n[0],changedPointers:n[1],pointerType:"touch",srcEvent:t})}}}]),e}();function wt(t,e){var n=ut(t.touches),i=ut(t.changedTouches);return 12&e&&(n=ct(n.concat(i),"identifier",!0)),[n,i]}function Pt(t,e,n){var i="DEPRECATED METHOD: "+e+"\n"+n+" AT \n";return function(){var e=new Error("get-stack-trace"),n=e&&e.stack?e.stack.replace(/^[^\(]+?[\n$]/gm,"").replace(/^\s+at\s+/gm,"").replace(/^Object.<anonymous>\s*\(/gm,"{anonymous}()@"):"Unknown Stack Trace",r=window.console&&(window.console.warn||window.console.log);return r&&r.call(window.console,i,n),t.apply(this,arguments)}}var It=Pt((function(t,e,n){for(var i=Object.keys(e),r=0;r<i.length;)(!n||n&&void 0===t[i[r]])&&(t[i[r]]=e[i[r]]),r++;return t}),"extend","Use `assign`."),St=Pt((function(t,e){return It(t,e,!0)}),"merge","Use `assign`.");d(Et,{INPUT_START:1,INPUT_MOVE:2,INPUT_END:4,INPUT_CANCEL:8,STATE_POSSIBLE:1,STATE_BEGAN:2,STATE_CHANGED:4,STATE_ENDED:8,STATE_RECOGNIZED:8,STATE_CANCELLED:16,STATE_FAILED:32,DIRECTION_NONE:1,DIRECTION_LEFT:2,DIRECTION_RIGHT:4,DIRECTION_UP:8,DIRECTION_DOWN:16,DIRECTION_HORIZONTAL:6,DIRECTION_VERTICAL:24,DIRECTION_ALL:30,Manager:_t,Input:nt,TouchAction:L,TouchInput:pt,MouseInput:dt,PointerEventInput:at,TouchMouseInput:yt,SingleTouchInput:Ot,Recognizer:x,AttrRecognizer:C,Tap:F,Pan:M,Swipe:z,Pinch:j,Rotate:D,Press:q,on:Q,off:tt,each:m,merge:St,extend:It,assign:d,inherit:function(t,e,n){var i=e.prototype,r=void 0;(r=t.prototype=Object.create(i)).constructor=t,r._super=i,n&&d(r,n)},bindFn:N,prefixed:s,toArray:ut,inArray:T,uniqueArray:ct,splitStr:K,boolOrFn:I,hasParent:H,addEventListeners:Q,removeEventListeners:tt});export default Et;