$((()=>{function t(){$(this).each((function(){const t=$(this).data("disabler"),e="show"==($(this).is(":checked")?t[1]:t[0]);$(`[disabler=${t.name}]`).each((function(){$(this).closest(".type-wrapper").hasClass("d-none")||(e?$(this).add($(this).closest("div")).removeAttr("disabled"):$(this).add($(this).closest("div")).attr("disabled",!0))}))}))}$("#input-name").on("keyup",(function(){const t=$("#input-key");if(t.hasClass("has-edited"))return;let e=$(this).val();t.val(e.toLowerCase().replace(/ /g,"_"))})),$("#input-key").on("keyup",(function(){$(this).addClass("has-edited")})),$("#add-option").on("click",(function(t){t.preventDefault();const e=$(".row[repeat=_0]").clone();$(this).closest(".row").before(e);const s=$(".row[repeat]").length-1;e.attr("repeat",`_${s}`),e.find("input").each((function(){if($(this).attr("name",$(this).attr("name").replace("[0]",`[${s}]`)),"checkbox"==$(this).attr("type")){const t=$(this).closest(".has-switch"),e=$(this).detach();t.html(e),e.prop("checked",!1),e.bootstrapSwitch()}else $(this).val("")}))})),$("#string-options").on("switchChange.bootstrapSwitch","input[type=checkbox]",(function(){$(this).is(":checked")&&$("#string-options input:checked").not($(this)).bootstrapSwitch("state",!1)})),$("#select-type").on("change",(function(){const e=$("option:selected",this).val();$("div[type]").addClass("d-none").find("input").each((function(){$(this).hasClass("bootstrap-switch")?$(this).bootstrapSwitch("disabled",!0):$(this).prop("disabled",!0)})),$(`div[type=${e}]`).removeClass("d-none").find("input").each((function(){$(this).hasClass("bootstrap-switch")?$(this).bootstrapSwitch("disabled",!1):$(this).prop("disabled",!1)})),t.call($("[data-disabler]"))})),$("div[type=text]").on("click",".btn.remove",(function(){const t=$("div[repeat]");t.length<2?($("input",t).val(""),$("input[type=checkbox]",t).bootstrapSwitch("state",!1)):($(this).closest("div[repeat]").remove(),$("div[repeat]").each((function(t){$(this).attr("repeat",`_${t}`),$("input",this).each((function(){$(this).attr("name",$(this).attr("name").replace(/\[\d+\]/,`[${t}]`))}))})))})),$("[data-disabler]").on("switchChange.bootstrapSwitch",t),t.call($("[data-disabler]"))}));