import{K as e}from"./src/K.js";import s from"./shared.js";$((()=>{$("#find-btn").on("click",n),$("button[toggle]").on("click",s.toggleHelp),$("[has-cost]").on("change switchChange.bootstrapSwitch",s.changeCost)}));const n=()=>{const e=$("input[name=search]").val();e?$.getJSON("/calls",{action:"igAccountExists",name:e},(function(e){s.alert(e.message,e.success?"normal":"error"),e.success&&($("#username").val(e.username),$("#pk").val(e.pk))})):s.alert("Please input an instergram username!","error")};