import{popperGenerator as p,detectOverflow as r}from"./popperjs/createPopper.js";import o from"./popperjs/modifiers/eventListeners.js";import e from"./popperjs/modifiers/popperOffsets.js";import s from"./popperjs/modifiers/computeStyles.js";import i from"./popperjs/modifiers/applyStyles.js";import m from"./popperjs/modifiers/offset.js";import f from"./popperjs/modifiers/flip.js";import t from"./popperjs/modifiers/preventOverflow.js";import j from"./popperjs/modifiers/arrow.js";import d from"./popperjs/modifiers/hide.js";var a=[o,e,s,i,m,f,t,j,d],l=p({defaultModifiers:a});export{l as createPopper,p as popperGenerator,a as defaultModifiers,r as detectOverflow};export{createPopper as createPopperLite}from"./popperjs/popper-lite.js";export*from"./popperjs/modifiers/index.js";