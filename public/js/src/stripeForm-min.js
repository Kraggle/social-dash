const e=Stripe($("#payment-form").data("stripe"));export default()=>{const t=e.elements({fonts:[{cssSrc:"https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,600,700,800,900"}]}),n={base:{fontFamily:"Montserrat, sans-serif",fontSize:"12px",color:"rgb(29, 37, 59)",fontWeight:"400",lineHeight:"1.428571",height:"calc(2.249999625rem + 2px)","::placeholder":{color:"rgba(0,0,0,0.4)"}}},a={focus:"focus",empty:"empty",invalid:"invalid"},s=t.create("cardNumber",{style:n,classes:a});s.mount("#number-element");const r=t.create("cardExpiry",{style:n,classes:a});r.mount("#expiry-element");const o=t.create("cardCvc",{style:n,classes:a});o.mount("#cvc-element"),function(t,n){const a=n.data("secret");n.on("submit",(async function(s){if($("input[name=token]",this).length)return;s.preventDefault();const r=$("input[name=billing-name]").val(),{setupIntent:o,error:c}=await e.confirmCardSetup(a,{payment_method:{card:t[0],billing_details:{name:r}}});c?c.type:($("<input>",{type:"hidden",name:"token",value:o.payment_method}).prependTo(n),n.trigger("submit"))}))}([s,r,o],$("#payment-form"))};