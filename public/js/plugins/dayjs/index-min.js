import*as t from"./constant.js";import s from"./locale/en.js";import e from"./utils.js";let i="en";const r={};r[i]=s;const n=t=>t instanceof $,h=(t,s,e)=>{let n;if(!t)return i;if("string"==typeof t)r[t]&&(n=t),s&&(r[t]=s,n=t);else{const{name:s}=t;r[s]=t,n=s}return!e&&n&&(i=n),n||!e&&i},o=function(t,s){if(n(t))return t.clone();const e="object"==typeof s?s:{};return e.date=t,e.args=arguments,new $(e)},u=e;u.l=h,u.i=n,u.w=(t,s)=>o(t,{locale:s.$L,utc:s.$u,x:s.$x,$offset:s.$offset});class ${constructor(t){this.$L=h(t.locale,null,!0),this.parse(t)}parse(s){this.$d=(s=>{const{date:e,utc:i}=s;if(null===e)return new Date(NaN);if(u.u(e))return new Date;if(e instanceof Date)return new Date(e);if("string"==typeof e&&!/Z$/i.test(e)){const s=e.match(t.REGEX_PARSE);if(s){const t=s[2]-1||0,e=(s[7]||"0").substring(0,3);return i?new Date(Date.UTC(s[1],t,s[3]||1,s[4]||0,s[5]||0,s[6]||0,e)):new Date(s[1],t,s[3]||1,s[4]||0,s[5]||0,s[6]||0,e)}}return new Date(e)})(s),this.$x=s.x||{},this.init()}init(){const{$d:t}=this;this.$y=t.getFullYear(),this.$M=t.getMonth(),this.$D=t.getDate(),this.$W=t.getDay(),this.$H=t.getHours(),this.$m=t.getMinutes(),this.$s=t.getSeconds(),this.$ms=t.getMilliseconds()}$utils(){return u}isValid(){return!(this.$d.toString()===t.INVALID_DATE_STRING)}isSame(t,s){const e=o(t);return this.startOf(s)<=e&&e<=this.endOf(s)}isAfter(t,s){return o(t)<this.startOf(s)}isBefore(t,s){return this.endOf(s)<o(t)}$g(t,s,e){return u.u(t)?this[s]:this.set(e,t)}unix(){return Math.floor(this.valueOf()/1e3)}valueOf(){return this.$d.getTime()}startOf(s,e){const i=!!u.u(e)||e,r=u.p(s),n=(s,e)=>{const r=u.w(this.$u?Date.UTC(this.$y,e,s):new Date(this.$y,e,s),this);return i?r:r.endOf(t.D)},h=(t,s)=>u.w(this.toDate()[t].apply(this.toDate("s"),(i?[0,0,0,0]:[23,59,59,999]).slice(s)),this),{$W:o,$M:$,$D:a}=this,c="set"+(this.$u?"UTC":"");switch(r){case t.Y:return i?n(1,0):n(31,11);case t.M:return i?n(1,$):n(0,$+1);case t.W:{const t=this.$locale().weekStart||0,s=(o<t?o+7:o)-t;return n(i?a-s:a+(6-s),$)}case t.D:case t.DATE:return h(`${c}Hours`,0);case t.H:return h(`${c}Minutes`,1);case t.MIN:return h(`${c}Seconds`,2);case t.S:return h(`${c}Milliseconds`,3);default:return this.clone()}}endOf(t){return this.startOf(t,!1)}$set(s,e){const i=u.p(s),r="set"+(this.$u?"UTC":""),n={[t.D]:`${r}Date`,[t.DATE]:`${r}Date`,[t.M]:`${r}Month`,[t.Y]:`${r}FullYear`,[t.H]:`${r}Hours`,[t.MIN]:`${r}Minutes`,[t.S]:`${r}Seconds`,[t.MS]:`${r}Milliseconds`}[i],h=i===t.D?this.$D+(e-this.$W):e;if(i===t.M||i===t.Y){const s=this.clone().set(t.DATE,1);s.$d[n](h),s.init(),this.$d=s.set(t.DATE,Math.min(this.$D,s.daysInMonth())).$d}else n&&this.$d[n](h);return this.init(),this}set(t,s){return this.clone().$set(t,s)}get(t){return this[u.p(t)]()}add(s,e){s=Number(s);const i=u.p(e),r=t=>{const e=o(this);return u.w(e.date(e.date()+Math.round(t*s)),this)};if(i===t.M)return this.set(t.M,this.$M+s);if(i===t.Y)return this.set(t.Y,this.$y+s);if(i===t.D)return r(1);if(i===t.W)return r(7);const n={[t.MIN]:t.MILLISECONDS_A_MINUTE,[t.H]:t.MILLISECONDS_A_HOUR,[t.S]:t.MILLISECONDS_A_SECOND}[i]||1,h=this.$d.getTime()+s*n;return u.w(h,this)}subtract(t,s){return this.add(-1*t,s)}format(s){const e=this.$locale();if(!this.isValid())return e.invalidDate||t.INVALID_DATE_STRING;const i=s||t.FORMAT_DEFAULT,r=u.z(this),{$H:n,$m:h,$M:o}=this,{weekdays:$,months:a,meridiem:c}=e,l=(t,s,e,r)=>t&&(t[s]||t(this,i))||e[s].substr(0,r),M=t=>u.s(n%12||12,t,"0"),D=c||((t,s,e)=>{const i=t<12?"AM":"PM";return e?i.toLowerCase():i}),d={YY:String(this.$y).slice(-2),YYYY:this.$y,M:o+1,MM:u.s(o+1,2,"0"),MMM:l(e.monthsShort,o,a,3),MMMM:l(a,o),D:this.$D,DD:u.s(this.$D,2,"0"),d:String(this.$W),dd:l(e.weekdaysMin,this.$W,$,2),ddd:l(e.weekdaysShort,this.$W,$,3),dddd:$[this.$W],H:String(n),HH:u.s(n,2,"0"),h:M(1),hh:M(2),a:D(n,h,!0),A:D(n,h,!1),m:String(h),mm:u.s(h,2,"0"),s:String(this.$s),ss:u.s(this.$s,2,"0"),SSS:u.s(this.$ms,3,"0"),Z:r};return i.replace(t.REGEX_FORMAT,((t,s)=>s||d[t]||r.replace(":","")))}utcOffset(){return 15*-Math.round(this.$d.getTimezoneOffset()/15)}diff(s,e,i){const r=u.p(e),n=o(s),h=(n.utcOffset()-this.utcOffset())*t.MILLISECONDS_A_MINUTE,$=this-n;let a=u.m(this,n);return a={[t.Y]:a/12,[t.M]:a,[t.Q]:a/3,[t.W]:($-h)/t.MILLISECONDS_A_WEEK,[t.D]:($-h)/t.MILLISECONDS_A_DAY,[t.H]:$/t.MILLISECONDS_A_HOUR,[t.MIN]:$/t.MILLISECONDS_A_MINUTE,[t.S]:$/t.MILLISECONDS_A_SECOND}[r]||$,i?a:u.a(a)}daysInMonth(){return this.endOf(t.M).$D}$locale(){return r[this.$L]}locale(t,s){if(!t)return this.$L;const e=this.clone(),i=h(t,s,!0);return i&&(e.$L=i),e}clone(){return u.w(this.$d,this)}toDate(){return new Date(this.valueOf())}toJSON(){return this.isValid()?this.toISOString():null}toISOString(){return this.$d.toISOString()}toString(){return this.$d.toUTCString()}}const a=$.prototype;o.prototype=a,[["$ms",t.MS],["$s",t.S],["$m",t.MIN],["$H",t.H],["$W",t.D],["$M",t.M],["$y",t.Y],["$D",t.DATE]].forEach((t=>{a[t[1]]=function(s){return this.$g(s,t[0],t[1])}})),o.extend=(t,s)=>(t.$i||(t(s,$,o),t.$i=!0),o),o.locale=h,o.isDayjs=n,o.unix=t=>o(1e3*t),o.en=r[i],o.Ls=r,o.p={};export default o;