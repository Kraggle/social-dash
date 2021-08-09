import{K as t}from"../plugins/K.js";import e from"./shared/shared.js";import s from"../plugins/wNumb-min.js";$((()=>{$("#search").on("keypress",(function(t){"Enter"==t.key&&(t.preventDefault(),i())})),$("#find-btn").on("click",(function(t){t.preventDefault(),i()})),$("button[toggle]").on("click",e.toggleHelp),$("[has-cost]").on("change switchChange.bootstrapSwitch",(function(t){const e=$(this).attr("name").replace(/(^s\w+\[|\])/g,""),s=$(this).data(),a=$(this).attr("type");let i=0,c="";"checkbox"==a?(i=s[$(this).is(":checked")?"onCost":"offCost"],c=$(this).is(":checked")?"on":"off"):a||(i=$(":selected",this).data("cost"),c=$("option:selected",this).attr("title")),$(`#${e}_cost`).text(i),o.call(this,c),n()})),$("div[id^=noUi_]:not(.initialized)").each((function(){$(this).addClass("initialized");const t=$(this).attr("name"),e=t.replace(/(^s\w+\[|\])/g,""),a=$(this).get(0),i=$(`input[name="${t}"]`),c=$(this).data(),r=c.min,l=c.max,h=c.step,d=c.default;function m(){const t=i.data(),s=t.maxCost,o=t.minCost,n=((s-o)*((parseInt(a.noUiSlider.get())-r)/(l-r))+o).toFixed(2);$(`#${e}_cost`).text(n)}i.data(c),i.attr("has-cost",""),noUiSlider.create(a,{start:d,connect:[!0,!0],range:{min:r,max:l},step:h,format:s({decimals:0})}),a.noUiSlider.on("update",(()=>{const t=a.noUiSlider.get();i.val(t),m.call(this),o.call(this,t),n()})),i.on("change",(function(){const t=$(this).val();a.noUiSlider.set(t),m.call(this),o.call(this,t),n()}))})),a()}));const a=()=>{const t=parseInt($("[name=followers]").val()),s=Math.ceil(t/5e4)||1;$("[has-cost]").each((function(){let t=$(this).data();switch($(this).attr("type")){case"checkbox":break;case"number":null==t.oldMax&&(t.oldMax=t.maxCost),null==t.oldMin&&(t.oldMin=t.minCost),t.maxCost=t.oldMax*s,t.minCost=t.oldMin*s,$(this).trigger("change");break;case"hidden":break;case void 0:$("option",this).each((function(){t=$(this).data(),t.oldCost||(t.oldCost=t.cost),t.cost=(t.oldCost*s).toFixed(2),t.content=this.dataset.content=t.content.replace(/cost'>£[\d\.]+/,`cost'>£${t.cost}`)})),$(this).selectpicker("refresh"),$(this).trigger("change");break}})),$("[update=followers]").text(e.nFormatter(t,t>1e6?1:0)),n()};function o(t){if(!this.hasAttribute("has-msg"))return;const e=$(this).attr("name");$(`[update="${e}"]`).text(t.toLowerCase())}const n=()=>{let t=0;$("[has-cost]").each((function(){const e=$(this).data(),s="#"+$(this).attr("name").replace(/(^s\w+\[|\])/g,"")+"_cost";"hidden"==$(this).attr("type")?t+=e.cost:t+=parseFloat($(s).text())})),$(".text-on-front .acc-cost").text(t.toFixed(2)),$(".text-on-back .acc-cost").text(Math.floor(t))},i=()=>{const s=$("#find-btn, #search");s.disable();const o=$("#search").val();o?$.getJSON("/calls",{action:"igAccountExists",name:o},(function(o){if(e.alert(o.message,o.success?"normal":"error"),o.success){$("input[name=username]").val(o.username),$("input[name=pk]").val(o.pk);let e=o.data.follower_count;e=t.isArray(e)?e.pop():e,$("[name=followers]").val(e),a()}s.enable()})):e.alert("Please input an instergram username!","error")};