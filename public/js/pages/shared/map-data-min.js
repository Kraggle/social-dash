import o from"../../core/jquery/jquery.js";import"../../plugins/jquery.jvectormap.js";import e from"./colors.js";export default{init(){const l={AU:760,BR:550,CA:120,DE:1300,FR:540,GB:690,GE:200,IN:200,RO:600,RU:300,US:2920};o("#worldMap").vectorMap({map:"world_mill",backgroundColor:"transparent",zoomOnScroll:!1,regionStyle:{initial:{fill:e.lighten("blue",35),"fill-opacity":.9,stroke:e.darken("blue",100),"stroke-width":.2,"stroke-opacity":.5}},series:{regions:[{values:l,scale:[e.lighten("blue",30),e.darken("blue",10)],normalizeFunction:"polynomial"}]},onRegionTipShow:function(o,e,r){e.html(e.html()+` (${l[r]||0})`)}})}};