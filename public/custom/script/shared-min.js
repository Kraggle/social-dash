export default{alert:function(t,e="normal"){try{$.notify({icon:"fal "+("error"==e?"fa-exclamation-circle":"fa-bell-on"),message:t},{type:"primary",timer:4e3,placement:{from:"top",align:"right"}})}catch(t){}},toggleHelp:function(t){t.preventDefault();const e=$(this).attr("toggle");$(`div[toggle="${e}"]`).toggleClass("d-none")},changeCost:function(t){const e=$(this).attr("name"),o=$(this).data(),a=$(this).attr("type");let n=0;"checkbox"==a?n=o[$(this).is(":checked")?"onCost":"offCost"]:a||(n=$(":selected",this).data("cost")),$(`#${e}_cost`).text(n)}};