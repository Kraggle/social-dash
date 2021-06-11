/*!

 =========================================================
 * White Dashboard Pro - v1.0.0
 =========================================================

 * Product Page: https://www.creative-tim.com/product/white-dashboard-pro-laravel
 * Copyright 2018 Creative Tim (http://www.creative-tim.com) & Updivision (http://www.updivision.com)


 * Coded by www.creative-tim.com & www.updivision.com

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 */
var a=!0,e=!1,n=$("html"),i=$("body"),t=$(".navbar-minimize-fixed"),o=$(".collapse"),s=$(".navbar"),r=$(".tagsinput"),c=$(".selectpicker"),l=$(".navbar[color-on-scroll]"),d=$(".full-screen-map"),p=$(".datetimepicker"),m=$(".datepicker"),f=$(".timepicker"),h=0,v=0;navigator.platform.indexOf("Win")>-1?(0!=$(".main-panel").length&&new PerfectScrollbar(".main-panel",{wheelSpeed:2,wheelPropagation:!0,minScrollbarLength:20,suppressScrollX:!0}),0!=$(".sidebar .sidebar-wrapper").length&&(new PerfectScrollbar(".sidebar .sidebar-wrapper"),$(".table-responsive").each((function(){new PerfectScrollbar($(this)[0])}))),n.addClass("perfect-scrollbar-on")):n.addClass("perfect-scrollbar-off"),$(document).ready((function(){$(".row").offset();(navigator.platform.indexOf("Win")>-1?$(".ps"):$(window)).on("scroll",(function(){$(this).scrollTop()>50?t.css("opacity","1"):t.css("opacity","0")})),o.on("show.bs.collapse",(function(){$(this).parent().siblings().children(".collapse").each((function(){$(this).collapse("hide")}))})),$('[data-toggle="tooltip"], [rel="tooltip"]').tooltip(),$('[data-toggle="popover"]').each((function(){let a=$(this).data("color");$(this).popover({template:'<div class="popover popover-'+a+'" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'})}));var a=r.data("color");0!=r.length&&r.tagsinput(),$(".bootstrap-tagsinput").find(".tag").addClass("badge-"+a),0!=c.length&&c.selectpicker({iconBase:"tim-icons",tickIcon:"icon-check-2"}),$("#search-button").on("click",(function(){$(this).closest(".navbar-collapse").removeClass("show"),s.addClass("navbar-transparent").removeClass("bg-white")})),C.initMinimizeSidebar();l.attr("color-on-scroll");0!=l.length&&(C.checkScrollForTransparentNavbar(),$(window).on("scroll",C.checkScrollForTransparentNavbar)),0==d.length&&0==$(".bd-docs").length&&$(".navbar-toggler").on("click",(function(){o.on("show.bs.collapse",(function(){$(this).closest(".navbar").removeClass("navbar-transparent").addClass("bg-white")})).on("hide.bs.collapse",(function(){$(this).closest(".navbar").addClass("navbar-transparent").removeClass("bg-white")})),s.css("transition","")})),s.css({top:"0",transition:"all .5s linear"}),$(".form-control").on("focus",(function(){$(this).parent(".input-group").addClass("input-group-focus")})).on("blur",(function(){$(this).parent(".input-group").removeClass("input-group-focus")})),$(".bootstrap-switch").each((function(){var a=$(this).data("on-label")||"",e=$(this).data("off-label")||"";$(this).bootstrapSwitch({onText:a,offText:e})}))})),$(document).on("click",".navbar-toggle",(function(){var a=$(this);if(1==C.misc.navbar_menu_visible)n.removeClass("nav-open"),C.misc.navbar_menu_visible=0,setTimeout((function(){a.removeClass("toggled"),$(".bodyClick").remove()}),550);else{setTimeout((function(){a.addClass("toggled")}),580);$('<div class="bodyClick"></div>').appendTo("body").on("click",(function(){n.removeClass("nav-open"),C.misc.navbar_menu_visible=0,setTimeout((function(){a.removeClass("toggled"),$(".bodyClick").remove()}),550)})),n.addClass("nav-open"),C.misc.navbar_menu_visible=1}})),$(window).resize((function(){if(h=v=0,0==d.length&&0==$(".bd-docs").length){var a=s.find('[data-toggle="collapse"]').attr("aria-expanded");s.hasClass("bg-white")&&$(window).width()>991?s.removeClass("bg-white").addClass("navbar-transparent"):s.hasClass("navbar-transparent")&&$(window).width()<991&&"false"!=a&&s.addClass("bg-white").removeClass("navbar-transparent")}}));var b,u,g,w,C={misc:{navbar_menu_visible:0},checkScrollForTransparentNavbar:(b=function(){$(document).scrollTop()>scroll_distance?a&&(a=!1,l.removeClass("navbar-transparent")):a||(a=!0,l.addClass("navbar-transparent"))},u=17,function(){var a=this,e=arguments;clearTimeout(w),w=setTimeout((function(){w=null,g||b.apply(a,e)}),u),g&&!w&&b.apply(a,e)}),initDateTimePicker:function(){0!=p.length&&p.datetimepicker({icons:{time:"tim-icons icon-watch-time",date:"tim-icons icon-calendar-60",up:"fa fa-chevron-up",down:"fa fa-chevron-down",previous:"tim-icons icon-minimal-left",next:"tim-icons icon-minimal-right",today:"fa fa-screenshot",clear:"fa fa-trash",close:"fa fa-remove"}}),0!=m.length&&m.datetimepicker({format:"MM/DD/YYYY",icons:{time:"tim-icons icon-watch-time",date:"tim-icons icon-calendar-60",up:"fa fa-chevron-up",down:"fa fa-chevron-down",previous:"tim-icons icon-minimal-left",next:"tim-icons icon-minimal-right",today:"fa fa-screenshot",clear:"fa fa-trash",close:"fa fa-remove"}}),0!=f.length&&f.datetimepicker({format:"h:mm A",icons:{time:"tim-icons icon-watch-time",date:"tim-icons icon-calendar-60",up:"fa fa-chevron-up",down:"fa fa-chevron-down",previous:"tim-icons icon-minimal-left",next:"tim-icons icon-minimal-right",today:"fa fa-screenshot",clear:"fa fa-trash",close:"fa fa-remove"}})},initMinimizeSidebar:function(){0!=$(".sidebar-mini").length&&(e=!0),$(".minimize-sidebar").on("click",(function(){e?(i.removeClass("sidebar-mini"),e=!1,C.showSidebarMessage("Sidebar mini deactivated...")):(i.addClass("sidebar-mini"),e=!0,C.showSidebarMessage("Sidebar mini activated..."));var a=setInterval((function(){window.dispatchEvent(new Event("resize"))}),180);setTimeout((function(){clearInterval(a)}),1e3)}))},startAnimationForLineChart:function(a){a.on("draw",(function(a){"line"===a.type||"area"===a.type?a.element.animate({d:{begin:600,dur:700,from:a.path.clone().scale(1,0).translate(0,a.chartRect.height()).stringify(),to:a.path.clone().stringify(),easing:Chartist.Svg.Easing.easeOutQuint}}):"point"===a.type&&(h++,a.element.animate({opacity:{begin:80*h,dur:500,from:0,to:1,easing:"ease"}}))})),h=0},startAnimationForBarChart:function(a){a.on("draw",(function(a){"bar"===a.type&&(v++,a.element.animate({opacity:{begin:80*v,dur:500,from:0,to:1,easing:"ease"}}))})),v=0},showSidebarMessage:function(a){try{$.notify({icon:"tim-icons icon-bell-55",message:a},{type:"primary",timer:4e3,placement:{from:"top",align:"right"}})}catch(a){}}};