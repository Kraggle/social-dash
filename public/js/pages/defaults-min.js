import t from"../core/jquery/jquery.js";t((()=>{function e(){t(this).each((function(){const e=t(this).data("disabler"),i="show"==(t(this).is(":checked")?e[1]:e[0]);t(`[disabler=${e.name}]`).each((function(){t(this).closest(".type-wrapper").hasClass("d-none")||(i?t(this).add(t(this).closest("div")).removeAttr("disabled"):t(this).add(t(this).closest("div")).attr("disabled",!0))}))}))}t("#input-name").on("keyup",(function(){const e=t("#input-key");if(e.hasClass("has-edited"))return;let i=t(this).val();e.val(i.toLowerCase().replace(/ /g,"_"))})),t("#input-key").on("keyup",(function(){t(this).addClass("has-edited")})),t("#add-option").on("click",(function(e){e.preventDefault();const i=t(".no-vis").first().nextUntil("[repeat=_1]").clone(),a=parseInt(t("[repeat]").last().attr("repeat").replace(/_/,""))+1;t(".choice-grid").append(i),i.attr("repeat",`_${a}`),i.find("input").each((function(){if(t(this).attr("name",t(this).attr("name").replace("[0]",`[${a}]`)),"checkbox"==t(this).attr("type")){const e=t(this).closest("div.bootstrap-switch"),i=t(this).detach();e.prev("input").attr("name",t(this).attr("name").replace("[0]",`[${a}]`)),e.before(i),e.remove(),i.prop("checked",!1),i.bootstrapSwitch()}else t(this).val("")}))})),t("#string-options").on("switchChange.bootstrapSwitch","input[type=checkbox]",(function(){t(this).is(":checked")&&t("#string-options input:checked").not(t(this)).bootstrapSwitch("state",!1)})),t("#select-type").on("change",(function(){const i=t("option:selected",this).val();t("div[type]").addClass("d-none").find("input").each((function(){t(this).hasClass("bootstrap-switch")?t(this).bootstrapSwitch("disabled",!0):t(this).prop("disabled",!0)})),t(`div[type=${i}]`).removeClass("d-none").find("input").each((function(){t(this).hasClass("bootstrap-switch")?t(this).bootstrapSwitch("disabled",!1):t(this).prop("disabled",!1)})),e.call(t("[data-disabler]"))})),t("div[type=text]").on("click",".btn.remove",(function(){const e=t(this).attr("repeat"),i=t(".btn[repeat]"),a=t(`[repeat${e}]`).first().prev().nextUntil(`.btn[repeat${e}]`);if(i.length<2)t("input[type=text]",a).val(""),t("input[type=checkbox]",a).bootstrapSwitch("state",!1);else{a.remove();let e=0;t(".choice-grid").children().each((function(){"LABEL"!=this.tagName&&(t(this).attr("repeat",`_${e}`),t("input",this).each((function(){t(this).attr("name",t(this).attr("name").replace(/\[\d+\]/,`[${e}]`))}))),"INPUT"==this.tagName&&t(this).attr("name",t(this).attr("name").replace(/\[\d+\]/,`[${e}]`)),"BUTTON"==this.tagName&&e++}))}})),t("[data-disabler]").on("switchChange.bootstrapSwitch",e),e.call(t("[data-disabler]"))}));