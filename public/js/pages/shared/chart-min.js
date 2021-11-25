import t from"../../core/jquery/jquery.js";import"../../plugins/flatpickr/flatpickr.js";import a from"../../plugins/K.js";import e from"../../plugins/chart-js/chart.js";import n from"./chart-options.js";import o from"./shared.js";import s from"../../plugins/dayjs/index.js";export default(i={})=>{const c=a.extend(!0,{chartId:"",scales:{},page:"all",options:{maintainAspectRatio:!1,aspectRatio:4}},i),d=t(c.chartId);if(!d.length)return;const h=d.get(0),l=d.data("type")||"line";let r=d.parent(),p=d.data("height")||"auto";r.hasClass("chart-area")||r.addClass("chart-area"),r.height(c.options.maintainAspectRatio?"auto":p).css("min-height","initial");const u=[],m=d.closest(".card"),g=m.find("[data-chart-toggles] input"),f=m.find("[data-chart-scale]"),x=m.find("[data-flatpickr]");let y;g.each((function(){const a=t(this).data();a.options={color:a.color,label:a.label,btn:this,hidden:!t(this).is(":checked")},u.push(a.options)}));const M=()=>{y&&y.destroy();const t=[],o=[],i=f.find(":checked").val()||"day",r=c.scales[i];let p=s(x.length?x.val():void 0),m=Math.ceil(r.count/2);"hour"!=i&&(p=p.add(m,i)),p.isAfter(s())&&(p=s()),a.each(u,((e,s)=>{let d,u=p.clone().add(-r.count,i);const m=[];for(let t=1;t<=r.count;t++){if("bubble"==l)for(let e=0;e<c.scales.x.count;e++)m.push({x:e,y:t,r:a.random(r.min,r.max)});else m.push({x:u.format("month"==i?"MMM 'YY":"hour"==i?"ha":"D MMM"),y:d=a.random(r.min,r.max)});u=u.clone().add(1,i),null!=d&&o.push(d)}t.push(a.extend({},n.dataset(l,s.color,h,!0),{hidden:s.hidden,label:s.label,data:m})),s.index=e}));const g=a.extend(!0,{},n.options(l));"bubble"!=l&&a.extend(!0,g,{scales:{y:{suggestedMin:Math.max(0,Math.min.apply(null,o)-10),suggestedMax:Math.max.apply(null,o)+10}}});const M={type:l,data:{datasets:t},options:a.extend(!0,g,c.options)};y=new e(h,M),d.data("chart",y)};M(),f.find("input").on("change",(()=>{const t=f.find(":checked");o.setPageCookie(c.page,{[t.attr("name")]:t.attr("id")}),M()})),g.on("change",(function(){const a=t(this).data("options"),e=a.hidden=!t(this).is(":checked");g.each((function(){o.setPageCookie(c.page,{[t(this).attr("id")]:t(this).is(":checked")})})),y[e?"hide":"show"](a.index)})),x.length&&x.on("change",(function(){o.setPageCookie(c.page,{[t(this).attr("id")]:t(this).val()}),M()}))};