<?php
if($jos['article_id'] != NULL)
{
  $brand  = array('brand123', 'Brand123');
  $title = str_replace($brand,ucfirst($titlebrand),$jos['landingarticle']['title']);
  $meta_description = str_replace($brand,ucfirst($titlebrand),$jos['landingarticle']['meta_description']);
  $long_description = str_replace($brand,ucfirst($titlebrand),$jos['landingarticle']['long_description']);
}
?>
<!doctype html>
<html lang="id">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">
    <meta charset="utf-8" />
    <script type="text/javascript">
        (window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["bam.nr-data.net"]},distributed_tracing:{enabled:true}};(window.NREUM||(NREUM={})).loader_config={agentID:"601426670",accountID:"2596454",trustKey:"2596454",xpid:"VgMOV1JWDBAFUVNRBAIBUlE=",licenseKey:"NRJS-f1f97408dd720d9f1e3",applicationID:"552333645"};;/*! For license information please see nr-loader-spa-1.267.0.min.js.LICENSE.txt */
        (()=>{var e,t,r={8122:(e,t,r)=>{"use strict";r.d(t,{a:()=>i});var n=r(944);function i(e,t){try{if(!e||"object"!=typeof e)return(0,n.R)(3);if(!t||"object"!=typeof t)return(0,n.R)(4);const r=Object.create(Object.getPrototypeOf(t),Object.getOwnPropertyDescriptors(t)),o=0===Object.keys(r).length?e:r;for(let a in o)if(void 0!==e[a])try{if(null===e[a]){r[a]=null;continue}Array.isArray(e[a])&&Array.isArray(t[a])?r[a]=Array.from(new Set([...e[a],...t[a]])):"object"==typeof e[a]&&"object"==typeof t[a]?r[a]=i(e[a],t[a]):r[a]=e[a]}catch(e){(0,n.R)(1,e)}return r}catch(e){(0,n.R)(2,e)}}},2555:(e,t,r)=>{"use strict";r.d(t,{Vp:()=>c,fn:()=>s,x1:()=>u});var n=r(384),i=r(8122);const o={beacon:n.NT.beacon,errorBeacon:n.NT.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},a={};function s(e){try{const t=c(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}function c(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!a[e])throw new Error("Info for ".concat(e," was never set"));return a[e]}function u(e,t){if(!e)throw new Error("All info objects require an agent identifier!");a[e]=(0,i.a)(t,o);const r=(0,n.nY)(e);r&&(r.info=a[e])}},9417:(e,t,r)=>{"use strict";r.d(t,{D0:()=>h,gD:()=>p,xN:()=>g});var n=r(993);const i=e=>{if(!e||"string"!=typeof e)return!1;try{document.createDocumentFragment().querySelector(e)}catch{return!1}return!0};var o=r(2614),a=r(944),s=r(384),c=r(8122);const u="[data-nr-mask]",d=()=>{const e={mask_selector:"*",block_selector:"[data-nr-block]",mask_input_options:{color:!1,date:!1,"datetime-local":!1,email:!1,month:!1,number:!1,range:!1,search:!1,tel:!1,text:!1,time:!1,url:!1,week:!1,textarea:!1,select:!1,password:!0}};return{ajax:{deny_list:void 0,block_internal:!0,enabled:!0,harvestTimeSeconds:10,autoStart:!0},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},feature_flags:[],generic_events:{enabled:!0,harvestTimeSeconds:30,autoStart:!0},harvest:{tooManyRequestsDelay:60},jserrors:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},logging:{enabled:!0,harvestTimeSeconds:10,autoStart:!0,level:n.p_.INFO},metrics:{enabled:!0,autoStart:!0},obfuscate:void 0,page_action:{enabled:!0},page_view_event:{enabled:!0,autoStart:!0},page_view_timing:{enabled:!0,harvestTimeSeconds:30,autoStart:!0},privacy:{cookies_enabled:!0},proxy:{assets:void 0,beacon:void 0},session:{expiresMs:o.wk,inactiveMs:o.BB},session_replay:{autoStart:!0,enabled:!1,harvestTimeSeconds:60,preload:!1,sampling_rate:10,error_sampling_rate:100,collect_fonts:!1,inline_images:!1,fix_stylesheets:!0,mask_all_inputs:!0,get mask_text_selector(){return e.mask_selector},set mask_text_selector(t){i(t)?e.mask_selector="".concat(t,",").concat(u):""===t||null===t?e.mask_selector=u:(0,a.R)(5,t)},get block_class(){return"nr-block"},get ignore_class(){return"nr-ignore"},get mask_text_class(){return"nr-mask"},get block_selector(){return e.block_selector},set block_selector(t){i(t)?e.block_selector+=",".concat(t):""!==t&&(0,a.R)(6,t)},get mask_input_options(){return e.mask_input_options},set mask_input_options(t){t&&"object"==typeof t?e.mask_input_options={...t,password:!0}:(0,a.R)(7,t)}},session_trace:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},soft_navigations:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},spa:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},ssl:void 0}},l={},f="All configuration objects require an agent identifier!";function h(e){if(!e)throw new Error(f);if(!l[e])throw new Error("Configuration for ".concat(e," was never set"));return l[e]}function g(e,t){if(!e)throw new Error(f);l[e]=(0,c.a)(t,d());const r=(0,s.nY)(e);r&&(r.init=l[e])}function p(e,t){if(!e)throw new Error(f);var r=h(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}},5603:(e,t,r)=>{"use strict";r.d(t,{a:()=>c,o:()=>s});var n=r(384),i=r(8122);const o={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},a={};function s(e){if(!e)throw new Error("All loader-config objects require an agent identifier!");if(!a[e])throw new Error("LoaderConfig for ".concat(e," was never set"));return a[e]}function c(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");a[e]=(0,i.a)(t,o);const r=(0,n.nY)(e);r&&(r.loader_config=a[e])}},3371:(e,t,r)=>{"use strict";r.d(t,{V:()=>f,f:()=>l});var n=r(8122),i=r(384),o=r(6154),a=r(9324);let s=0;const c={buildEnv:a.F3,distMethod:a.Xs,version:a.xv,originTime:o.WN},u={customTransaction:void 0,disabled:!1,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,onerror:void 0,origin:""+o.gm.location,ptid:void 0,releaseIds:{},appMetadata:{},session:void 0,denyList:void 0,timeKeeper:void 0,obfuscator:void 0},d={};function l(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!d[e])throw new Error("Runtime for ".concat(e," was never set"));return d[e]}function f(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");d[e]={...(0,n.a)(t,u),...c},Object.hasOwnProperty.call(d[e],"harvestCount")||Object.defineProperty(d[e],"harvestCount",{get:()=>++s});const r=(0,i.nY)(e);r&&(r.runtime=d[e])}},9324:(e,t,r)=>{"use strict";r.d(t,{F3:()=>i,Xs:()=>o,Yq:()=>a,xv:()=>n});const n="1.267.0",i="PROD",o="CDN",a="2.0.0-alpha.12"},6154:(e,t,r)=>{"use strict";r.d(t,{A4:()=>s,OF:()=>d,RI:()=>i,Vr:()=>h,WN:()=>g,bv:()=>o,gm:()=>a,lR:()=>f,m:()=>u,mw:()=>c,sb:()=>l});var n=r(1863);const i="undefined"!=typeof window&&!!window.document,o="undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis.navigator instanceof WorkerNavigator),a=i?window:"undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis),s="complete"===a?.document?.readyState,c=Boolean("hidden"===a?.document?.visibilityState),u=""+a?.location,d=/iPad|iPhone|iPod/.test(a.navigator?.userAgent),l=d&&"undefined"==typeof SharedWorker,f=(()=>{const e=a.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/);return Array.isArray(e)&&e.length>=2?+e[1]:0})(),h=!!a.navigator?.sendBeacon,g=Date.now()-(0,n.t)()},4777:(e,t,r)=>{"use strict";r.d(t,{J:()=>o});var n=r(944);const i={agentIdentifier:"",ee:void 0};class o{constructor(e){try{if("object"!=typeof e)return(0,n.R)(8);this.sharedContext={},Object.assign(this.sharedContext,i),Object.entries(e).forEach((([e,t])=>{Object.keys(i).includes(e)&&(this.sharedContext[e]=t)}))}catch(e){(0,n.R)(9,e)}}}},7295:(e,t,r)=>{"use strict";r.d(t,{Xv:()=>a,gX:()=>i,iW:()=>o});var n=[];function i(e){if(!e||o(e))return!1;if(0===n.length)return!0;for(var t=0;t<n.length;t++){var r=n[t];if("*"===r.hostname)return!1;if(s(r.hostname,e.hostname)&&c(r.pathname,e.pathname))return!1}return!0}function o(e){return void 0===e.hostname}function a(e){if(n=[],e&&e.length)for(var t=0;t<e.length;t++){let r=e[t];if(!r)continue;0===r.indexOf("http://")?r=r.substring(7):0===r.indexOf("https://")&&(r=r.substring(8));const i=r.indexOf("/");let o,a;i>0?(o=r.substring(0,i),a=r.substring(i)):(o=r,a="");let[s]=o.split(":");n.push({hostname:s,pathname:a})}}function s(e,t){return!(e.length>t.length)&&t.indexOf(e)===t.length-e.length}function c(e,t){return 0===e.indexOf("/")&&(e=e.substring(1)),0===t.indexOf("/")&&(t=t.substring(1)),""===e||e===t}},1687:(e,t,r)=>{"use strict";r.d(t,{Ak:()=>c,Ze:()=>l,x3:()=>u});var n=r(7836),i=r(3606),o=r(860),a=r(2646);const s={};function c(e,t){const r={staged:!1,priority:o.P[t]||0};d(e),s[e].get(t)||s[e].set(t,r)}function u(e,t){e&&s[e]&&(s[e].get(t)&&s[e].delete(t),h(e,t,!1),s[e].size&&f(e))}function d(e){if(!e)throw new Error("agentIdentifier required");s[e]||(s[e]=new Map)}function l(e="",t="feature",r=!1){if(d(e),!e||!s[e].get(t)||r)return h(e,t);s[e].get(t).staged=!0,f(e)}function f(e){const t=Array.from(s[e]);t.every((([e,t])=>t.staged))&&(t.sort(((e,t)=>e[1].priority-t[1].priority)),t.forEach((([t])=>{s[e].delete(t),h(e,t)})))}function h(e,t,r=!0){const o=e?n.ee.get(e):n.ee,s=i.i.handlers;if(!o.aborted&&o.backlog&&s){if(r){const e=o.backlog[t],r=s[t];if(r){for(let t=0;e&&t<e.length;++t)g(e[t],r);Object.entries(r).forEach((([e,t])=>{Object.values(t||{}).forEach((t=>{t[0]?.on&&t[0]?.context()instanceof a.y&&t[0].on(e,t[1])}))}))}}o.isolatedBacklog||delete s[t],o.backlog[t]=null,o.emit("drain-"+t,[])}}function g(e,t){var r=e[1];Object.values(t[r]||{}).forEach((t=>{var r=e[0];if(t[0]===r){var n=t[1],i=e[3],o=e[2];n.apply(i,o)}}))}},7836:(e,t,r)=>{"use strict";r.d(t,{P:()=>c,ee:()=>u});var n=r(384),i=r(8990),o=r(3371),a=r(2646),s=r(5607);const c="nr@context:".concat(s.W),u=function e(t,r){var n={},s={},d={},l=!1;try{l=16===r.length&&(0,o.f)(r).isolatedBacklog}catch(e){}var f={on:g,addEventListener:g,removeEventListener:function(e,t){var r=n[e];if(!r)return;for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)},emit:function(e,r,n,i,o){!1!==o&&(o=!0);if(u.aborted&&!i)return;t&&o&&t.emit(e,r,n);for(var a=h(n),c=p(e),d=c.length,l=0;l<d;l++)c[l].apply(a,r);var g=v()[s[e]];g&&g.push([f,e,r,a]);return a},get:m,listeners:p,context:h,buffer:function(e,t){const r=v();if(t=t||"feature",f.aborted)return;Object.entries(e||{}).forEach((([e,n])=>{s[n]=t,t in r||(r[t]=[])}))},abort:function(){f._aborted=!0,Object.keys(f.backlog).forEach((e=>{delete f.backlog[e]}))},isBuffering:function(e){return!!v()[s[e]]},debugId:r,backlog:l?{}:t&&"object"==typeof t.backlog?t.backlog:{},isolatedBacklog:l};return Object.defineProperty(f,"aborted",{get:()=>{let e=f._aborted||!1;return e||(t&&(e=t.aborted),e)}}),f;function h(e){return e&&e instanceof a.y?e:e?(0,i.I)(e,c,(()=>new a.y(c))):new a.y(c)}function g(e,t){n[e]=p(e).concat(t)}function p(e){return n[e]||[]}function m(t){return d[t]=d[t]||e(f,t)}function v(){return f.backlog}}(void 0,"globalEE"),d=(0,n.Zm)();d.ee||(d.ee=u)},2646:(e,t,r)=>{"use strict";r.d(t,{y:()=>n});class n{constructor(e){this.contextId=e}}},9908:(e,t,r)=>{"use strict";r.d(t,{d:()=>n,p:()=>i});var n=r(7836).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},3606:(e,t,r)=>{"use strict";r.d(t,{i:()=>o});var n=r(9908);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.d,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.d);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3878:(e,t,r)=>{"use strict";r.d(t,{DD:()=>c,jT:()=>a,sp:()=>s});var n=r(6154);let i=!1,o=!1;try{const e={get passive(){return i=!0,!1},get signal(){return o=!0,!1}};n.gm.addEventListener("test",null,e),n.gm.removeEventListener("test",null,e)}catch(e){}function a(e,t){return i||o?{capture:!!e,passive:i,signal:t}:!!e}function s(e,t,r=!1,n){window.addEventListener(e,t,a(r,n))}function c(e,t,r=!1,n){document.addEventListener(e,t,a(r,n))}},5607:(e,t,r)=>{"use strict";r.d(t,{W:()=>n});const n=(0,r(9566).bz)()},9566:(e,t,r)=>{"use strict";r.d(t,{LA:()=>s,ZF:()=>c,bz:()=>a,el:()=>u});var n=r(6154);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n.gm?.crypto||n.gm?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(30))),i.split("").map((e=>"x"===e?o(t,r++).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n.gm?.crypto||n.gm?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(e)));const a=[];for(var s=0;s<e;s++)a.push(o(r,i++).toString(16));return a.join("")}function c(){return s(16)}function u(){return s(32)}},2614:(e,t,r)=>{"use strict";r.d(t,{BB:()=>a,H3:()=>n,g:()=>u,iL:()=>c,tS:()=>s,uh:()=>i,wk:()=>o});const n="NRBA",i="SESSION",o=144e5,a=18e5,s={STARTED:"session-started",PAUSE:"session-pause",RESET:"session-reset",RESUME:"session-resume",UPDATE:"session-update"},c={SAME_TAB:"same-tab",CROSS_TAB:"cross-tab"},u={OFF:0,FULL:1,ERROR:2}},1863:(e,t,r)=>{"use strict";function n(){return Math.floor(performance.now())}r.d(t,{t:()=>n})},7485:(e,t,r)=>{"use strict";r.d(t,{D:()=>i});var n=r(6154);function i(e){if(0===(e||"").indexOf("data:"))return{protocol:"data"};try{const t=new URL(e,location.href),r={port:t.port,hostname:t.hostname,pathname:t.pathname,search:t.search,protocol:t.protocol.slice(0,t.protocol.indexOf(":")),sameOrigin:t.protocol===n.gm?.location?.protocol&&t.host===n.gm?.location?.host};return r.port&&""!==r.port||("http:"===t.protocol&&(r.port="80"),"https:"===t.protocol&&(r.port="443")),r.pathname&&""!==r.pathname?r.pathname.startsWith("/")||(r.pathname="/".concat(r.pathname)):r.pathname="/",r}catch(e){return{}}}},944:(e,t,r)=>{"use strict";function n(e,t){"function"==typeof console.debug&&console.debug("New Relic Warning: https://github.com/newrelic/newrelic-browser-agent/blob/main/docs/warning-codes.md#".concat(e),t)}r.d(t,{R:()=>n})},5284:(e,t,r)=>{"use strict";r.d(t,{t:()=>c,B:()=>s});var n=r(7836),i=r(6154);const o="newrelic";const a=new Set,s={};function c(e,t){const r=n.ee.get(t);s[t]??={},e&&"object"==typeof e&&(a.has(t)||(r.emit("rumresp",[e]),s[t]=e,a.add(t),function(e={}){try{i.gm.dispatchEvent(new CustomEvent(o,{detail:e}))}catch(e){}}({loaded:!0})))}},8990:(e,t,r)=>{"use strict";r.d(t,{I:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},6389:(e,t,r)=>{"use strict";function n(e,t=500,r={}){const n=r?.leading||!1;let i;return(...r)=>{n&&void 0===i&&(e.apply(this,r),i=setTimeout((()=>{i=clearTimeout(i)}),t)),n||(clearTimeout(i),i=setTimeout((()=>{e.apply(this,r)}),t))}}function i(e){let t=!1;return(...r)=>{t||(t=!0,e.apply(this,r))}}r.d(t,{J:()=>i,s:()=>n})},3304:(e,t,r)=>{"use strict";r.d(t,{A:()=>o});var n=r(7836);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}return""}}},5289:(e,t,r)=>{"use strict";r.d(t,{GG:()=>o,sB:()=>a});var n=r(3878);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.sp)("load",e,t)}function a(e){if(i())return e();(0,n.DD)("DOMContentLoaded",e)}},384:(e,t,r)=>{"use strict";r.d(t,{NT:()=>o,US:()=>d,Zm:()=>a,bQ:()=>c,dV:()=>s,nY:()=>u,pV:()=>l});var n=r(6154),i=r(1863);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return n.gm.NREUM||(n.gm.NREUM={}),void 0===n.gm.newrelic&&(n.gm.newrelic=n.gm.NREUM),n.gm.NREUM}function s(){let e=a();return e.o||(e.o={ST:n.gm.setTimeout,SI:n.gm.setImmediate,CT:n.gm.clearTimeout,XHR:n.gm.XMLHttpRequest,REQ:n.gm.Request,EV:n.gm.Event,PR:n.gm.Promise,MO:n.gm.MutationObserver,FETCH:n.gm.fetch,WS:n.gm.WebSocket}),e}function c(e,t){let r=a();r.initializedAgents??={},t.initializedAt={ms:(0,i.t)(),date:new Date},r.initializedAgents[e]=t}function u(e){let t=a();return t.initializedAgents?.[e]}function d(e,t){a()[e]=t}function l(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},2843:(e,t,r)=>{"use strict";r.d(t,{u:()=>i});var n=r(3878);function i(e,t=!1,r,i){(0,n.DD)("visibilitychange",(function(){if(t)return void("hidden"===document.visibilityState&&e());e(document.visibilityState)}),r,i)}},8139:(e,t,r)=>{"use strict";r.d(t,{u:()=>f});var n=r(7836),i=r(3434),o=r(8990),a=r(6154);const s={},c=a.gm.XMLHttpRequest,u="addEventListener",d="removeEventListener",l="nr@wrapped:".concat(n.P);function f(e){var t=function(e){return(e||n.ee).get("events")}(e);if(s[t.debugId]++)return t;s[t.debugId]=1;var r=(0,i.YM)(t,!0);function f(e){r.inPlace(e,[u,d],"-",g)}function g(e,t){return e[1]}return"getPrototypeOf"in Object&&(a.RI&&h(document,f),h(a.gm,f),h(c.prototype,f)),t.on(u+"-start",(function(e,t){var n=e[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var i=(0,o.I)(n,l,(function(){var e={object:function(){if("function"!=typeof n.handleEvent)return;return n.handleEvent.apply(n,arguments)},function:n}[typeof n];return e?r(e,"fn-",null,e.name||"anonymous"):n}));this.wrapped=e[1]=i}})),t.on(d+"-start",(function(e){e[1]=this.wrapped||e[1]})),t}function h(e,t,...r){let n=e;for(;"object"==typeof n&&!Object.prototype.hasOwnProperty.call(n,u);)n=Object.getPrototypeOf(n);n&&t(n,...r)}},3434:(e,t,r)=>{"use strict";r.d(t,{Jt:()=>o,YM:()=>c});var n=r(7836),i=r(5607);const o="nr@original:".concat(i.W);var a=Object.prototype.hasOwnProperty,s=!1;function c(e,t){return e||(e=n.ee),r.inPlace=function(e,t,n,i,o){n||(n="");const a="-"===n.charAt(0);for(let s=0;s<t.length;s++){const c=t[s],u=e[c];d(u)||(e[c]=r(u,a?c+n:n,i,c,o))}},r.flag=o,r;function r(t,r,n,s,c){return d(t)?t:(r||(r=""),nrWrapper[o]=t,function(e,t,r){if(Object.defineProperty&&Object.keys)try{return Object.keys(e).forEach((function(r){Object.defineProperty(t,r,{get:function(){return e[r]},set:function(t){return e[r]=t,t}})})),t}catch(e){u([e],r)}for(var n in e)a.call(e,n)&&(t[n]=e[n])}(t,nrWrapper,e),nrWrapper);function nrWrapper(){var o,a,d,l;try{a=this,o=[...arguments],d="function"==typeof n?n(o,a):n||{}}catch(t){u([t,"",[o,a,s],d],e)}i(r+"start",[o,a,s],d,c);try{return l=t.apply(a,o)}catch(e){throw i(r+"err",[o,a,e],d,c),e}finally{i(r+"end",[o,a,l],d,c)}}}function i(r,n,i,o){if(!s||t){var a=s;s=!0;try{e.emit(r,n,i,t,o)}catch(t){u([t,r,n,i],e)}s=a}}}function u(e,t){t||(t=n.ee);try{t.emit("internal-error",e)}catch(e){}}function d(e){return!(e&&"function"==typeof e&&e.apply&&!e[o])}},9300:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K.ajax},3333:(e,t,r)=>{"use strict";r.d(t,{TZ:()=>n});const n=r(860).K.genericEvents},6774:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K.jserrors},993:(e,t,r)=>{"use strict";r.d(t,{ET:()=>o,TZ:()=>a,p_:()=>i});var n=r(860);const i={ERROR:"ERROR",WARN:"WARN",INFO:"INFO",DEBUG:"DEBUG",TRACE:"TRACE"},o="log",a=n.K.logging},3785:(e,t,r)=>{"use strict";r.d(t,{R:()=>c,b:()=>u});var n=r(9908),i=r(1863),o=r(860),a=r(3969),s=r(993);function c(e,t,r={},c=s.p_.INFO){(0,n.p)(a.xV,["API/logging/".concat(c.toLowerCase(),"/called")],void 0,o.K.metrics,e),(0,n.p)(s.ET,[(0,i.t)(),t,r,c],void 0,o.K.logging,e)}function u(e){return"string"==typeof e&&Object.values(s.p_).some((t=>t===e.toUpperCase().trim()))}},3969:(e,t,r)=>{"use strict";r.d(t,{TZ:()=>n,XG:()=>s,rs:()=>i,xV:()=>a,z_:()=>o});const n=r(860).K.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},6630:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K.pageViewEvent},782:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K.pageViewTiming},6344:(e,t,r)=>{"use strict";r.d(t,{BB:()=>d,G4:()=>o,Qb:()=>l,TZ:()=>i,Ug:()=>a,_s:()=>s,bc:()=>u,yP:()=>c});var n=r(2614);const i=r(860).K.sessionReplay,o={RECORD:"recordReplay",PAUSE:"pauseReplay",REPLAY_RUNNING:"replayRunning",ERROR_DURING_REPLAY:"errorDuringReplay"},a=.12,s={DomContentLoaded:0,Load:1,FullSnapshot:2,IncrementalSnapshot:3,Meta:4,Custom:5},c={[n.g.ERROR]:15e3,[n.g.FULL]:3e5,[n.g.OFF]:0},u={RESET:{message:"Session was reset",sm:"Reset"},IMPORT:{message:"Recorder failed to import",sm:"Import"},TOO_MANY:{message:"429: Too Many Requests",sm:"Too-Many"},TOO_BIG:{message:"Payload was too large",sm:"Too-Big"},CROSS_TAB:{message:"Session Entity was set to OFF on another tab",sm:"Cross-Tab"},ENTITLEMENTS:{message:"Session Replay is not allowed and will not be started",sm:"Entitlement"}},d=5e3,l={API:"api"}},5270:(e,t,r)=>{"use strict";r.d(t,{Aw:()=>c,CT:()=>u,SR:()=>s});var n=r(384),i=r(9417),o=r(7767),a=r(6154);function s(e){return!!(0,n.dV)().o.MO&&(0,o.V)(e)&&!0===(0,i.gD)(e,"session_trace.enabled")}function c(e){return!0===(0,i.gD)(e,"session_replay.preload")&&s(e)}function u(e,t){const r=t.correctAbsoluteTimestamp(e);return{originalTimestamp:e,correctedTimestamp:r,timestampDiff:e-r,originTime:a.WN,correctedOriginTime:t.correctedOriginTime,originTimeDiff:Math.floor(a.WN-t.correctedOriginTime)}}},3738:(e,t,r)=>{"use strict";r.d(t,{He:()=>i,Kp:()=>s,Lc:()=>u,Rz:()=>d,TZ:()=>n,bD:()=>o,d3:()=>a,jx:()=>l,uP:()=>c});const n=r(860).K.sessionTrace,i="bstResource",o="resource",a="-start",s="-end",c="fn"+a,u="fn"+s,d="pushState",l=1e3},3962:(e,t,r)=>{"use strict";r.d(t,{AM:()=>o,O2:()=>s,Qu:()=>c,TZ:()=>a,ih:()=>u,tC:()=>i});var n=r(860);const i=["click","keydown","submit"],o="api",a=n.K.softNav,s={INITIAL_PAGE_LOAD:"",ROUTE_CHANGE:1,UNSPECIFIED:2},c={INTERACTION:1,AJAX:2,CUSTOM_END:3,CUSTOM_TRACER:4},u={IP:"in progress",FIN:"finished",CAN:"cancelled"}},7378:(e,t,r)=>{"use strict";r.d(t,{$p:()=>R,BR:()=>b,Kp:()=>x,L3:()=>y,Lc:()=>c,NC:()=>o,SG:()=>d,TZ:()=>i,U6:()=>g,UT:()=>m,d3:()=>w,dT:()=>f,e5:()=>A,gx:()=>v,l9:()=>l,oW:()=>h,op:()=>p,rw:()=>u,tH:()=>E,uP:()=>s,wW:()=>T,xq:()=>a});var n=r(384);const i=r(860).K.spa,o=["click","submit","keypress","keydown","keyup","change"],a=999,s="fn-start",c="fn-end",u="cb-start",d="api-ixn-",l="remaining",f="interaction",h="spaNode",g="jsonpNode",p="fetch-start",m="fetch-done",v="fetch-body-",b="jsonp-end",y=(0,n.dV)().o.ST,w="-start",x="-end",R="-body",T="cb"+x,A="jsTime",E="fetch"},4234:(e,t,r)=>{"use strict";r.d(t,{W:()=>i});var n=r(7836);class i{constructor(e,t,r){this.agentIdentifier=e,this.aggregator=t,this.ee=n.ee.get(e),this.featureName=r,this.blocked=!1}}},7767:(e,t,r)=>{"use strict";r.d(t,{V:()=>o});var n=r(9417),i=r(6154);const o=e=>i.RI&&!0===(0,n.gD)(e,"privacy.cookies_enabled")},425:(e,t,r)=>{"use strict";r.d(t,{j:()=>j});var n=r(860),i=r(2555),o=r(3371),a=r(9908),s=r(7836),c=r(1687),u=r(5289),d=r(6154),l=r(944),f=r(3969),h=r(384),g=r(6344);const p=["setErrorHandler","finished","addToTrace","addRelease","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId","setApplicationVersion","start",g.G4.RECORD,g.G4.PAUSE,"log","wrapLogger"],m=["setErrorHandler","finished","addToTrace","addRelease"];var v=r(1863),b=r(2614),y=r(993),w=r(3785),x=r(2646),R=r(3434);function T(e,t,r,n){if("object"!=typeof t||!t||"string"!=typeof r||!r||"function"!=typeof t[r])return(0,l.R)(29);const i=function(e){return(e||s.ee).get("logger")}(e),o=(0,R.YM)(i),a=new x.y(s.P);return a.level=n.level,a.customAttributes=n.customAttributes,o.inPlace(t,[r],"wrap-logger-",a),i}function A(){const e=(0,h.pV)();p.forEach((t=>{e[t]=(...r)=>function(t,...r){let n=[];return Object.values(e.initializedAgents).forEach((e=>{e&&e.api?e.exposed&&e.api[t]&&n.push(e.api[t](...r)):(0,l.R)(38,t)})),n.length>1?n:n[0]}(t,...r)}))}const E={};var S=r(9417),O=r(5603),N=r(5284);const I=e=>{const t=e.startsWith("http");e+="/",r.p=t?e:"https://"+e};let _=!1;function j(e,t={},p,x){let{init:R,info:j,loader_config:P,runtime:C={},exposed:k=!0}=t;C.loaderType=p;const L=(0,h.pV)();j||(R=L.init,j=L.info,P=L.loader_config),(0,S.xN)(e.agentIdentifier,R||{}),(0,O.a)(e.agentIdentifier,P||{}),j.jsAttributes??={},d.bv&&(j.jsAttributes.isWorker=!0),(0,i.x1)(e.agentIdentifier,j);const D=(0,S.D0)(e.agentIdentifier),H=[j.beacon,j.errorBeacon];_||(D.proxy.assets&&(I(D.proxy.assets),H.push(D.proxy.assets)),D.proxy.beacon&&H.push(D.proxy.beacon),A(),(0,h.US)("activatedFeatures",N.B),e.runSoftNavOverSpa&&=!0===D.soft_navigations.enabled&&D.feature_flags.includes("soft_nav")),C.denyList=[...D.ajax.deny_list||[],...D.ajax.block_internal?H:[]],C.ptid=e.agentIdentifier,(0,o.V)(e.agentIdentifier,C),e.ee=s.ee.get(e.agentIdentifier),void 0===e.api&&(e.api=function(e,t,h=!1){t||(0,c.Ak)(e,"api");const p={};var x=s.ee.get(e),R=x.get("tracer");E[e]=b.g.OFF,x.on(g.G4.REPLAY_RUNNING,(t=>{E[e]=t}));var A="api-",S=A+"ixn-";function O(t,r,n,o){const a=(0,i.Vp)(e);return null===r?delete a.jsAttributes[t]:(0,i.x1)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),_(A,n,!0,o||null===r?"session":void 0)(t,r)}function N(){}p.log=function(e,{customAttributes:t={},level:r=y.p_.INFO}={}){(0,a.p)(f.xV,["API/log/called"],void 0,n.K.metrics,x),(0,w.R)(x,e,t,r)},p.wrapLogger=(e,t,{customAttributes:r={},level:i=y.p_.INFO}={})=>{(0,a.p)(f.xV,["API/wrapLogger/called"],void 0,n.K.metrics,x),T(x,e,t,{customAttributes:r,level:i})},m.forEach((e=>{p[e]=_(A,e,!0,"api")})),p.addPageAction=_(A,"addPageAction",!0,n.K.genericEvents),p.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,o.f)(e).customTransaction=(r||"http://custom.transaction")+t,_(A,"setPageViewName",!0)()},p.setCustomAttribute=function(e,t,r=!1){if("string"==typeof e){if(["string","number","boolean"].includes(typeof t)||null===t)return O(e,t,"setCustomAttribute",r);(0,l.R)(40,typeof t)}else(0,l.R)(39,typeof e)},p.setUserId=function(e){if("string"==typeof e||null===e)return O("enduser.id",e,"setUserId",!0);(0,l.R)(41,typeof e)},p.setApplicationVersion=function(e){if("string"==typeof e||null===e)return O("application.version",e,"setApplicationVersion",!1);(0,l.R)(42,typeof e)},p.start=()=>{try{(0,a.p)(f.xV,["API/start/called"],void 0,n.K.metrics,x),x.emit("manual-start-all")}catch(e){(0,l.R)(23,e)}},p[g.G4.RECORD]=function(){(0,a.p)(f.xV,["API/recordReplay/called"],void 0,n.K.metrics,x),(0,a.p)(g.G4.RECORD,[],void 0,n.K.sessionReplay,x)},p[g.G4.PAUSE]=function(){(0,a.p)(f.xV,["API/pauseReplay/called"],void 0,n.K.metrics,x),(0,a.p)(g.G4.PAUSE,[],void 0,n.K.sessionReplay,x)},p.interaction=function(e){return(new N).get("object"==typeof e?e:{})};const I=N.prototype={createTracer:function(e,t){var r={},i=this,o="function"==typeof t;return(0,a.p)(f.xV,["API/createTracer/called"],void 0,n.K.metrics,x),h||(0,a.p)(S+"tracer",[(0,v.t)(),e,r],i,n.K.spa,x),function(){if(R.emit((o?"":"no-")+"fn-start",[(0,v.t)(),i,o],r),o)try{return t.apply(this,arguments)}catch(e){const t="string"==typeof e?new Error(e):e;throw R.emit("fn-err",[arguments,this,t],r),t}finally{R.emit("fn-end",[(0,v.t)()],r)}}}};function _(e,t,r,i){return function(){return(0,a.p)(f.xV,["API/"+t+"/called"],void 0,n.K.metrics,x),i&&(0,a.p)(e+t,[(0,v.t)(),...arguments],r?null:this,i,x),r?void 0:this}}function j(){r.e(478).then(r.bind(r,8778)).then((({setAPI:t})=>{t(e),(0,c.Ze)(e,"api")})).catch((e=>{(0,l.R)(27,e),x.abort()}))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{I[e]=_(S,e,void 0,h?n.K.softNav:n.K.spa)})),p.setCurrentRouteName=h?_(S,"routeName",void 0,n.K.softNav):_(A,"routeName",!0,n.K.spa),p.noticeError=function(t,r){"string"==typeof t&&(t=new Error(t)),(0,a.p)(f.xV,["API/noticeError/called"],void 0,n.K.metrics,x),(0,a.p)("err",[t,(0,v.t)(),!1,r,!!E[e]],void 0,n.K.jserrors,x)},d.RI?(0,u.GG)((()=>j()),!0):j(),p}(e.agentIdentifier,x,e.runSoftNavOverSpa)),void 0===e.exposed&&(e.exposed=k),_=!0}},8374:(e,t,r)=>{r.nc=(()=>{try{return document?.currentScript?.nonce}catch(e){}return""})()},860:(e,t,r)=>{"use strict";r.d(t,{K:()=>n,P:()=>i});const n={ajax:"ajax",genericEvents:"generic_events",jserrors:"jserrors",logging:"logging",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionReplay:"session_replay",sessionTrace:"session_trace",softNav:"soft_navigations",spa:"spa"},i={[n.pageViewEvent]:1,[n.pageViewTiming]:2,[n.metrics]:3,[n.jserrors]:4,[n.spa]:5,[n.ajax]:6,[n.sessionTrace]:7,[n.softNav]:8,[n.sessionReplay]:9,[n.logging]:10,[n.genericEvents]:11}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>({212:"nr-spa-compressor",249:"nr-spa-recorder",478:"nr-spa"}[e]+"-1.267.0.min.js"),i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA-1.267.0.PROD:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var l=u[d];if(l.getAttribute("src")==r||l.getAttribute("data-webpack")==t+o){s=l;break}}if(!s){c=!0;var f={478:"sha512-XKF+PBcSlSiyzkKLdw/E9C47Vd1bfjeXiJB7EaC+HRHBVVlDNUSeK/zW10RlimSSN7csT6ekIWCuI71N/4dwrw==",249:"sha512-t6m+Y+uBhmMdAlmZWCtOYYmDGuAP+uXXp2h9sWe9+C081zNSsIWOaAlie5M86bYfj19tMdEFQcpZSmgTsCGMmg==",212:"sha512-Qo+QuTtoj54DJCfGui+9XeLrUOA5pBgfpe+PKE+TB/b14oFeD03D88vm3Tm8HQEEGvpcigHzfLXrCbMvGOV1lg=="};(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r,0!==s.src.indexOf(window.location.origin+"/")&&(s.crossOrigin="anonymous"),f[a]&&(s.integrity=f[a])}e[r]=[n];var h=(t,n)=>{s.onerror=s.onload=null,clearTimeout(g);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},g=setTimeout(h.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=h.bind(null,s.onerror),s.onload=h.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.p="https://js-agent.newrelic.com/",(()=>{var e={38:0,788:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=self["webpackChunk:NRBA-1.267.0.PROD"]=self["webpackChunk:NRBA-1.267.0.PROD"]||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),(()=>{"use strict";i(8374);var e=i(944),t=i(6344),r=i(9566);class n{agentIdentifier;constructor(e=(0,r.LA)(16)){this.agentIdentifier=e}#e(t,...r){if("function"==typeof this.api?.[t])return this.api[t](...r);(0,e.R)(35,t)}addPageAction(e,t){return this.#e("addPageAction",e,t)}setPageViewName(e,t){return this.#e("setPageViewName",e,t)}setCustomAttribute(e,t,r){return this.#e("setCustomAttribute",e,t,r)}noticeError(e,t){return this.#e("noticeError",e,t)}setUserId(e){return this.#e("setUserId",e)}setApplicationVersion(e){return this.#e("setApplicationVersion",e)}setErrorHandler(e){return this.#e("setErrorHandler",e)}finished(e){return this.#e("finished",e)}addRelease(e,t){return this.#e("addRelease",e,t)}start(e){return this.#e("start",e)}recordReplay(){return this.#e(t.G4.RECORD)}pauseReplay(){return this.#e(t.G4.PAUSE)}addToTrace(e){return this.#e("addToTrace",e)}setCurrentRouteName(e){return this.#e("setCurrentRouteName",e)}interaction(){return this.#e("interaction")}log(e,t){return this.#e("log",e,t)}wrapLogger(e,t,r){return this.#e("wrapLogger",e,t,r)}}var o=i(860),a=i(9417);const s=Object.values(o.K);function c(e){const t={};return s.forEach((r=>{t[r]=function(e,t){return!0===(0,a.gD)(t,"".concat(e,".enabled"))}(r,e)})),t}var u=i(425);var d=i(1687),l=i(4234),f=i(5289),h=i(6154),g=i(5270),p=i(7767),m=i(6389);class v extends l.W{constructor(e,t,r,n=!0){super(e,t,r),this.auto=n,this.abortHandler=void 0,this.featAggregate=void 0,this.onAggregateImported=void 0,!1===(0,a.gD)(this.agentIdentifier,"".concat(this.featureName,".autoStart"))&&(this.auto=!1),this.auto?(0,d.Ak)(e,r):this.ee.on("manual-start-all",(0,m.J)((()=>{(0,d.Ak)(this.agentIdentifier,this.featureName),this.auto=!0,this.importAggregator()})))}importAggregator(t={}){if(this.featAggregate||!this.auto)return;let r;this.onAggregateImported=new Promise((e=>{r=e}));const n=async()=>{let n;try{if((0,p.V)(this.agentIdentifier)){const{setupAgentSession:e}=await i.e(478).then(i.bind(i,6526));n=e(this.agentIdentifier)}}catch(t){(0,e.R)(20,t),this.ee.emit("internal-error",[t]),this.featureName===o.K.sessionReplay&&this.abortHandler?.()}try{if(!this.#t(this.featureName,n))return(0,d.Ze)(this.agentIdentifier,this.featureName),void r(!1);const{lazyFeatureLoader:e}=await i.e(478).then(i.bind(i,6103)),{Aggregate:o}=await e(this.featureName,"aggregate");this.featAggregate=new o(this.agentIdentifier,this.aggregator,t),r(!0)}catch(t){(0,e.R)(34,t),this.abortHandler?.(),(0,d.Ze)(this.agentIdentifier,this.featureName,!0),r(!1),this.ee&&this.ee.abort()}};h.RI?(0,f.GG)((()=>n()),!0):n()}#t(e,t){switch(e){case o.K.sessionReplay:return(0,g.SR)(this.agentIdentifier)&&!!t;case o.K.sessionTrace:return!!t;default:return!0}}}var b=i(6630);class y extends v{static featureName=b.T;constructor(e,t,r=!0){super(e,t,b.T,r),this.importAggregator()}}var w=i(4777);class x extends w.J{constructor(e){super(e),this.aggregatedData={}}store(e,t,r,n,i){var o=this.getBucket(e,t,r,i);return o.metrics=function(e,t){t||(t={count:0});return t.count+=1,Object.entries(e||{}).forEach((([e,r])=>{t[e]=R(r,t[e])})),t}(n,o.metrics),o}merge(e,t,r,n,i){var o=this.getBucket(e,t,n,i);if(o.metrics){var a=o.metrics;a.count+=r.count,Object.keys(r||{}).forEach((e=>{if("count"!==e){var t=a[e],n=r[e];n&&!n.c?a[e]=R(n.t,t):a[e]=function(e,t){if(!t)return e;t.c||(t=T(t.t));return t.min=Math.min(e.min,t.min),t.max=Math.max(e.max,t.max),t.t+=e.t,t.sos+=e.sos,t.c+=e.c,t}(n,a[e])}}))}else o.metrics=r}storeMetric(e,t,r,n){var i=this.getBucket(e,t,r);return i.stats=R(n,i.stats),i}getBucket(e,t,r,n){this.aggregatedData[e]||(this.aggregatedData[e]={});var i=this.aggregatedData[e][t];return i||(i=this.aggregatedData[e][t]={params:r||{}},n&&(i.custom=n)),i}get(e,t){return t?this.aggregatedData[e]&&this.aggregatedData[e][t]:this.aggregatedData[e]}take(e){for(var t={},r="",n=!1,i=0;i<e.length;i++)t[r=e[i]]=Object.values(this.aggregatedData[r]||{}),t[r].length&&(n=!0),delete this.aggregatedData[r];return n?t:null}}function R(e,t){return null==e?function(e){e?e.c++:e={c:1};return e}(t):t?(t.c||(t=T(t.t)),t.c+=1,t.t+=e,t.sos+=e*e,e>t.max&&(t.max=e),e<t.min&&(t.min=e),t):{t:e}}function T(e){return{t:e,min:e,max:e,sos:e*e,c:1}}var A=i(384);var E=i(9908),S=i(2843),O=i(3878),N=i(782),I=i(1863);class _ extends v{static featureName=N.T;constructor(e,t,r=!0){super(e,t,N.T,r),h.RI&&((0,S.u)((()=>(0,E.p)("docHidden",[(0,I.t)()],void 0,N.T,this.ee)),!0),(0,O.sp)("pagehide",(()=>(0,E.p)("winPagehide",[(0,I.t)()],void 0,N.T,this.ee))),this.importAggregator())}}var j=i(3969);class P extends v{static featureName=j.TZ;constructor(e,t,r=!0){super(e,t,j.TZ,r),this.importAggregator()}}var C=i(6774),k=i(3304);class L{constructor(e,t,r,n,i){this.name="UncaughtError",this.message="string"==typeof e?e:(0,k.A)(e),this.sourceURL=t,this.line=r,this.column=n,this.__newrelic=i}}function D(e){return K(e)?e:new L(void 0!==e?.message?e.message:e,e?.filename||e?.sourceURL,e?.lineno||e?.line,e?.colno||e?.col,e?.__newrelic)}function H(e){let t="Unhandled Promise Rejection";if(K(e?.reason))try{return e.reason.message=t+": "+e.reason.message,D(e.reason)}catch(t){return D(e.reason)}if(void 0===e.reason)return D(t);const r=D(e.reason);return r.message=t+": "+r?.message,r}function M(e){if(e.error instanceof SyntaxError&&!/:\d+$/.test(e.error.stack?.trim())){const t=new L(e.message,e.filename,e.lineno,e.colno,e.error.__newrelic);return t.name=SyntaxError.name,t}return K(e.error)?e.error:D(e)}function K(e){return e instanceof Error&&!!e.stack}class U extends v{static featureName=C.T;#r=!1;constructor(e,r,n=!0){super(e,r,C.T,n);try{this.removeOnAbort=new AbortController}catch(e){}this.ee.on("internal-error",(e=>{this.abortHandler&&(0,E.p)("ierr",[D(e),(0,I.t)(),!0,{},this.#r],void 0,this.featureName,this.ee)})),this.ee.on(t.G4.REPLAY_RUNNING,(e=>{this.#r=e})),h.gm.addEventListener("unhandledrejection",(e=>{this.abortHandler&&(0,E.p)("err",[H(e),(0,I.t)(),!1,{unhandledPromiseRejection:1},this.#r],void 0,this.featureName,this.ee)}),(0,O.jT)(!1,this.removeOnAbort?.signal)),h.gm.addEventListener("error",(e=>{this.abortHandler&&(0,E.p)("err",[M(e),(0,I.t)(),!1,{},this.#r],void 0,this.featureName,this.ee)}),(0,O.jT)(!1,this.removeOnAbort?.signal)),this.abortHandler=this.#n,this.importAggregator()}#n(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}var V=i(5603),G=i(8990);let B=1;const F="nr@id";function W(e){const t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===h.gm?0:(0,G.I)(e,F,(function(){return B++}))}function z(e){if("string"==typeof e&&e.length)return e.length;if("object"==typeof e){if("undefined"!=typeof ArrayBuffer&&e instanceof ArrayBuffer&&e.byteLength)return e.byteLength;if("undefined"!=typeof Blob&&e instanceof Blob&&e.size)return e.size;if(!("undefined"!=typeof FormData&&e instanceof FormData))try{return(0,k.A)(e).length}catch(e){return}}}var Z=i(8139),q=i(7836),Y=i(3434);const X={},J=["open","send"];function Q(t){var r=t||q.ee;const n=function(e){return(e||q.ee).get("xhr")}(r);if(X[n.debugId]++)return n;X[n.debugId]=1,(0,Z.u)(r);var i=(0,Y.YM)(n),o=h.gm.XMLHttpRequest,a=h.gm.MutationObserver,s=h.gm.Promise,c=h.gm.setInterval,u="readystatechange",d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],l=[],f=h.gm.XMLHttpRequest=function(t){const r=new o(t),a=n.context(r);try{n.emit("new-xhr",[r],a),r.addEventListener(u,(s=a,function(){var e=this;e.readyState>3&&!s.resolved&&(s.resolved=!0,n.emit("xhr-resolved",[],e)),i.inPlace(e,d,"fn-",y)}),(0,O.jT)(!1))}catch(t){(0,e.R)(15,t);try{n.emit("internal-error",[t])}catch(e){}}var s;return r};function g(e,t){i.inPlace(t,["onreadystatechange"],"fn-",y)}if(function(e,t){for(var r in e)t[r]=e[r]}(o,f),f.prototype=o.prototype,i.inPlace(f.prototype,J,"-xhr-",y),n.on("send-xhr-start",(function(e,t){g(e,t),function(e){l.push(e),a&&(p?p.then(b):c?c(b):(m=-m,v.data=m))}(t)})),n.on("open-xhr-start",g),a){var p=s&&s.resolve();if(!c&&!s){var m=1,v=document.createTextNode(m);new a(b).observe(v,{characterData:!0})}}else r.on("fn-end",(function(e){e[0]&&e[0].type===u||b()}));function b(){for(var e=0;e<l.length;e++)g(0,l[e]);l.length&&(l=[])}function y(e,t){return t}return n}var ee="fetch-",te=ee+"body-",re=["arrayBuffer","blob","json","text","formData"],ne=h.gm.Request,ie=h.gm.Response,oe="prototype";const ae={};function se(e){const t=function(e){return(e||q.ee).get("fetch")}(e);if(!(ne&&ie&&h.gm.fetch))return t;if(ae[t.debugId]++)return t;function r(e,r,n){var i=e[r];"function"==typeof i&&(e[r]=function(){var e,r=[...arguments],o={};t.emit(n+"before-start",[r],o),o[q.P]&&o[q.P].dt&&(e=o[q.P].dt);var a=i.apply(this,r);return t.emit(n+"start",[r,e],a),a.then((function(e){return t.emit(n+"end",[null,e],a),e}),(function(e){throw t.emit(n+"end",[e],a),e}))})}return ae[t.debugId]=1,re.forEach((e=>{r(ne[oe],e,te),r(ie[oe],e,te)})),r(h.gm,"fetch",ee),t.on(ee+"end",(function(e,r){var n=this;if(r){var i=r.headers.get("content-length");null!==i&&(n.rxSize=i),t.emit(ee+"done",[null,r],n)}else t.emit(ee+"done",[e],n)})),t}var ce=i(7485);class ue{constructor(e){this.agentIdentifier=e}generateTracePayload(e){if(!this.shouldGenerateTrace(e))return null;var t=(0,V.o)(this.agentIdentifier);if(!t)return null;var n=(t.accountID||"").toString()||null,i=(t.agentID||"").toString()||null,o=(t.trustKey||"").toString()||null;if(!n||!i)return null;var a=(0,r.ZF)(),s=(0,r.el)(),c=Date.now(),u={spanId:a,traceId:s,timestamp:c};return(e.sameOrigin||this.isAllowedOrigin(e)&&this.useTraceContextHeadersForCors())&&(u.traceContextParentHeader=this.generateTraceContextParentHeader(a,s),u.traceContextStateHeader=this.generateTraceContextStateHeader(a,c,n,i,o)),(e.sameOrigin&&!this.excludeNewrelicHeader()||!e.sameOrigin&&this.isAllowedOrigin(e)&&this.useNewrelicHeaderForCors())&&(u.newrelicHeader=this.generateTraceHeader(a,s,c,n,i,o)),u}generateTraceContextParentHeader(e,t){return"00-"+t+"-"+e+"-01"}generateTraceContextStateHeader(e,t,r,n,i){return i+"@nr=0-1-"+r+"-"+n+"-"+e+"----"+t}generateTraceHeader(e,t,r,n,i,o){if(!("function"==typeof h.gm?.btoa))return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:i,id:e,tr:t,ti:r}};return o&&n!==o&&(a.d.tk=o),btoa((0,k.A)(a))}shouldGenerateTrace(e){return this.isDtEnabled()&&this.isAllowedOrigin(e)}isAllowedOrigin(e){var t=!1,r={};if((0,a.gD)(this.agentIdentifier,"distributed_tracing")&&(r=(0,a.D0)(this.agentIdentifier).distributed_tracing),e.sameOrigin)t=!0;else if(r.allowed_origins instanceof Array)for(var n=0;n<r.allowed_origins.length;n++){var i=(0,ce.D)(r.allowed_origins[n]);if(e.hostname===i.hostname&&e.protocol===i.protocol&&e.port===i.port){t=!0;break}}return t}isDtEnabled(){var e=(0,a.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.enabled}excludeNewrelicHeader(){var e=(0,a.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.exclude_newrelic_header}useNewrelicHeaderForCors(){var e=(0,a.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!1!==e.cors_use_newrelic_header}useTraceContextHeadersForCors(){var e=(0,a.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.cors_use_tracecontext_headers}}var de=i(9300),le=i(7295),fe=["load","error","abort","timeout"],he=fe.length,ge=(0,A.dV)().o.REQ,pe=(0,A.dV)().o.XHR;class me extends v{static featureName=de.T;constructor(e,t,r=!0){super(e,t,de.T,r),this.dt=new ue(e),this.handler=(e,t,r,n)=>(0,E.p)(e,t,r,n,this.ee);try{const e={xmlhttprequest:"xhr",fetch:"fetch",beacon:"beacon"};h.gm?.performance?.getEntriesByType("resource").forEach((t=>{if(t.initiatorType in e&&0!==t.responseStatus){const r={status:t.responseStatus},n={rxSize:t.transferSize,duration:Math.floor(t.duration),cbTime:0};ve(r,t.name),this.handler("xhr",[r,n,t.startTime,t.responseEnd,e[t.initiatorType]],void 0,o.K.ajax)}}))}catch(e){}se(this.ee),Q(this.ee),function(e,t,r,n){function i(e){var t=this;t.totalCbs=0,t.called=0,t.cbTime=0,t.end=x,t.ended=!1,t.xhrGuids={},t.lastSize=null,t.loadCaptureCalled=!1,t.params=this.params||{},t.metrics=this.metrics||{},e.addEventListener("load",(function(r){R(t,e)}),(0,O.jT)(!1)),h.lR||e.addEventListener("progress",(function(e){t.lastSize=e.loaded}),(0,O.jT)(!1))}function a(e){this.params={method:e[0]},ve(this,e[1]),this.metrics={}}function s(t,r){var i=(0,V.o)(e);i.xpid&&this.sameOrigin&&r.setRequestHeader("X-NewRelic-ID",i.xpid);var o=n.generateTracePayload(this.parsedOrigin);if(o){var a=!1;o.newrelicHeader&&(r.setRequestHeader("newrelic",o.newrelicHeader),a=!0),o.traceContextParentHeader&&(r.setRequestHeader("traceparent",o.traceContextParentHeader),o.traceContextStateHeader&&r.setRequestHeader("tracestate",o.traceContextStateHeader),a=!0),a&&(this.dt=o)}}function c(e,r){var n=this.metrics,i=e[0],o=this;if(n&&i){var a=z(i);a&&(n.txSize=a)}this.startTime=(0,I.t)(),this.body=i,this.listener=function(e){try{"abort"!==e.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==e.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof r.onload)&&"function"==typeof o.end)&&o.end(r)}catch(e){try{t.emit("internal-error",[e])}catch(e){}}};for(var s=0;s<he;s++)r.addEventListener(fe[s],this.listener,(0,O.jT)(!1))}function u(e,t,r){this.cbTime+=e,t?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof r.onload||"function"!=typeof this.end||this.end(r)}function d(e,t){var r=""+W(e)+!!t;this.xhrGuids&&!this.xhrGuids[r]&&(this.xhrGuids[r]=!0,this.totalCbs+=1)}function l(e,t){var r=""+W(e)+!!t;this.xhrGuids&&this.xhrGuids[r]&&(delete this.xhrGuids[r],this.totalCbs-=1)}function f(){this.endTime=(0,I.t)()}function g(e,r){r instanceof pe&&"load"===e[0]&&t.emit("xhr-load-added",[e[1],e[2]],r)}function p(e,r){r instanceof pe&&"load"===e[0]&&t.emit("xhr-load-removed",[e[1],e[2]],r)}function m(e,t,r){t instanceof pe&&("onload"===r&&(this.onload=!0),("load"===(e[0]&&e[0].type)||this.onload)&&(this.xhrCbStart=(0,I.t)()))}function v(e,r){this.xhrCbStart&&t.emit("xhr-cb-time",[(0,I.t)()-this.xhrCbStart,this.onload,r],r)}function b(e){var t,r=e[1]||{};if("string"==typeof e[0]?0===(t=e[0]).length&&h.RI&&(t=""+h.gm.location.href):e[0]&&e[0].url?t=e[0].url:h.gm?.URL&&e[0]&&e[0]instanceof URL?t=e[0].href:"function"==typeof e[0].toString&&(t=e[0].toString()),"string"==typeof t&&0!==t.length){t&&(this.parsedOrigin=(0,ce.D)(t),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=n.generateTracePayload(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if(e[0]&&e[0].headers)s(e[0].headers,i)&&(this.dt=i);else{var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),s(o.headers,i)&&(this.dt=i),e.length>1?e[1]=o:e.push(o)}}function s(e,t){var r=!1;return t.newrelicHeader&&(e.set("newrelic",t.newrelicHeader),r=!0),t.traceContextParentHeader&&(e.set("traceparent",t.traceContextParentHeader),t.traceContextStateHeader&&e.set("tracestate",t.traceContextStateHeader),r=!0),r}}function y(e,t){this.params={},this.metrics={},this.startTime=(0,I.t)(),this.dt=t,e.length>=1&&(this.target=e[0]),e.length>=2&&(this.opts=e[1]);var r,n=this.opts||{},i=this.target;"string"==typeof i?r=i:"object"==typeof i&&i instanceof ge?r=i.url:h.gm?.URL&&"object"==typeof i&&i instanceof URL&&(r=i.href),ve(this,r);var o=(""+(i&&i instanceof ge&&i.method||n.method||"GET")).toUpperCase();this.params.method=o,this.body=n.body,this.txSize=z(n.body)||0}function w(e,t){if(this.endTime=(0,I.t)(),this.params||(this.params={}),(0,le.iW)(this.params))return;let n;this.params.status=t?t.status:0,"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);const i={txSize:this.txSize,rxSize:n,duration:(0,I.t)()-this.startTime};r("xhr",[this.params,i,this.startTime,this.endTime,"fetch"],this,o.K.ajax)}function x(e){const t=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(let t=0;t<he;t++)e.removeEventListener(fe[t],this.listener,!1);t.aborted||(0,le.iW)(t)||(n.duration=(0,I.t)()-this.startTime,this.loadCazptureCalled||4!==e.readyState?null==t.status&&(t.status=0):R(this,e),n.cbTime=this.cbTime,r("xhr",[t,n,this.startTime,this.endTime,"xhr"],this,o.K.ajax))}}function R(e,r){e.params.status=r.status;var n=function(e,t){var r=e.responseType;return"json"===r&&null!==t?t:"arraybuffer"===r||"blob"===r||"json"===r?z(e.response):"text"===r||""===r||void 0===r?z(e.responseText):void 0}(r,e.lastSize);if(n&&(e.metrics.rxSize=n),e.sameOrigin){var i=r.getResponseHeader("X-NewRelic-App-Data");i&&((0,E.p)(j.rs,["Ajax/CrossApplicationTracing/Header/Seen"],void 0,o.K.metrics,t),e.params.cat=i.split(", ").pop())}e.loadCaptureCalled=!0}t.on("new-xhr",i),t.on("open-xhr-start",a),t.on("open-xhr-end",s),t.on("send-xhr-start",c),t.on("xhr-cb-time",u),t.on("xhr-load-added",d),t.on("xhr-load-removed",l),t.on("xhr-resolved",f),t.on("addEventListener-end",g),t.on("removeEventListener-end",p),t.on("fn-end",v),t.on("fetch-before-start",b),t.on("fetch-start",y),t.on("fn-start",m),t.on("fetch-done",w)}(e,this.ee,this.handler,this.dt),this.importAggregator()}}function ve(e,t){var r=(0,ce.D)(t),n=e.params||e;n.hostname=r.hostname,n.port=r.port,n.protocol=r.protocol,n.host=r.hostname+":"+r.port,n.pathname=r.pathname,e.parsedOrigin=r,e.sameOrigin=r.sameOrigin}const be={},ye=["pushState","replaceState"];function we(e){const t=function(e){return(e||q.ee).get("history")}(e);return!h.RI||be[t.debugId]++||(be[t.debugId]=1,(0,Y.YM)(t).inPlace(window.history,ye,"-")),t}var xe=i(3738);const{He:Re,bD:Te,d3:Ae,Kp:Ee,TZ:Se,Lc:Oe,uP:Ne,Rz:Ie}=xe;class _e extends v{static featureName=Se;constructor(e,t,r=!0){super(e,t,Se,r);if(!(0,p.V)(this.agentIdentifier))return void(0,d.x3)(this.agentIdentifier,this.featureName);const n=this.ee;let i;we(n),this.eventsEE=(0,Z.u)(n),this.eventsEE.on(Ne,(function(e,t){this.bstStart=(0,I.t)()})),this.eventsEE.on(Oe,(function(e,t){(0,E.p)("bst",[e[0],t,this.bstStart,(0,I.t)()],void 0,o.K.sessionTrace,n)})),n.on(Ie+Ae,(function(e){this.time=(0,I.t)(),this.startPath=location.pathname+location.hash})),n.on(Ie+Ee,(function(e){(0,E.p)("bstHist",[location.pathname+location.hash,this.startPath,this.time],void 0,o.K.sessionTrace,n)}));try{i=new PerformanceObserver((e=>{const t=e.getEntries();(0,E.p)(Re,[t],void 0,o.K.sessionTrace,n)})),i.observe({type:Te,buffered:!0})}catch(e){}this.importAggregator({resourceObserver:i})}}var je=i(2614);class Pe extends v{static featureName=t.TZ;#i;constructor(e,r,n=!0){let i;super(e,r,t.TZ,n),this.replayRunning=!1;try{i=JSON.parse(localStorage.getItem("".concat(je.H3,"_").concat(je.uh)))}catch(e){}(0,g.SR)(e)&&this.ee.on(t.G4.RECORD,(()=>this.#o())),this.#a(i)?(this.#i=i?.sessionReplayMode,this.#s()):this.importAggregator(),this.ee.on("err",(e=>{this.replayRunning&&(this.errorNoticed=!0,(0,E.p)(t.G4.ERROR_DURING_REPLAY,[e],void 0,this.featureName,this.ee))})),this.ee.on(t.G4.REPLAY_RUNNING,(e=>{this.replayRunning=e}))}#a(e){return e&&(e.sessionReplayMode===je.g.FULL||e.sessionReplayMode===je.g.ERROR)||(0,g.Aw)(this.agentIdentifier)}#c=!1;async#s(e){if(!this.#c){this.#c=!0;try{const{Recorder:t}=await Promise.all([i.e(478),i.e(249)]).then(i.bind(i,2496));this.recorder??=new t({mode:this.#i,agentIdentifier:this.agentIdentifier,trigger:e,ee:this.ee}),this.recorder.startRecording(),this.abortHandler=this.recorder.stopRecording}catch(e){}this.importAggregator({recorder:this.recorder,errorNoticed:this.errorNoticed})}}#o(){this.featAggregate?this.featAggregate.mode!==je.g.FULL&&this.featAggregate.initializeRecording(je.g.FULL,!0):(this.#i=je.g.FULL,this.#s(t.Qb.API),this.recorder&&this.recorder.parent.mode!==je.g.FULL&&(this.recorder.parent.mode=je.g.FULL,this.recorder.stopRecording(),this.recorder.startRecording(),this.abortHandler=this.recorder.stopRecording))}}var Ce=i(3962);class ke extends v{static featureName=Ce.TZ;constructor(e,t,r=!0){if(super(e,t,Ce.TZ,r),!h.RI||!(0,A.dV)().o.MO)return;const n=we(this.ee),i=(0,Z.u)(this.ee),o=()=>(0,E.p)("newURL",[(0,I.t)(),""+window.location],void 0,this.featureName,this.ee);n.on("pushState-end",o),n.on("replaceState-end",o);try{this.removeOnAbort=new AbortController}catch(e){}(0,O.sp)("popstate",(e=>(0,E.p)("newURL",[e.timeStamp,""+window.location],void 0,this.featureName,this.ee)),!0,this.removeOnAbort?.signal);let a=!1;const s=new((0,A.dV)().o.MO)(((e,t)=>{a||(a=!0,requestAnimationFrame((()=>{(0,E.p)("newDom",[(0,I.t)()],void 0,this.featureName,this.ee),a=!1})))})),c=(0,m.s)((e=>{(0,E.p)("newUIEvent",[e],void 0,this.featureName,this.ee),s.observe(document.body,{attributes:!0,childList:!0,subtree:!0,characterData:!0})}),100,{leading:!0});i.on("fn-start",(([e])=>{Ce.tC.includes(e?.type)&&c(e)}));for(let e of Ce.tC)document.addEventListener(e,(()=>{}));this.abortHandler=function(){this.removeOnAbort?.abort(),s.disconnect(),this.abortHandler=void 0},this.importAggregator({domObserver:s})}}var Le=i(7378);const De={},He=["appendChild","insertBefore","replaceChild"];function Me(e){const t=function(e){return(e||q.ee).get("jsonp")}(e);if(!h.RI||De[t.debugId])return t;De[t.debugId]=!0;var r=(0,Y.YM)(t),n=/[?&](?:callback|cb)=([^&#]+)/,i=/(.*)\.([^.]+)/,o=/^(\w+)(\.|$)(.*)$/;function a(e,t){if(!e)return t;const r=e.match(o),n=r[1];return a(r[3],t[n])}return r.inPlace(Node.prototype,He,"dom-"),t.on("dom-start",(function(e){!function(e){if(!e||"string"!=typeof e.nodeName||"script"!==e.nodeName.toLowerCase())return;if("function"!=typeof e.addEventListener)return;var o=(s=e.src,c=s.match(n),c?c[1]:null);var s,c;if(!o)return;var u=function(e){var t=e.match(i);if(t&&t.length>=3)return{key:t[2],parent:a(t[1],window)};return{key:e,parent:window}}(o);if("function"!=typeof u.parent[u.key])return;var d={};function l(){t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,O.jT)(!1)),e.removeEventListener("error",f,(0,O.jT)(!1))}function f(){t.emit("jsonp-error",[],d),t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,O.jT)(!1)),e.removeEventListener("error",f,(0,O.jT)(!1))}r.inPlace(u.parent,[u.key],"cb-",d),e.addEventListener("load",l,(0,O.jT)(!1)),e.addEventListener("error",f,(0,O.jT)(!1)),t.emit("new-jsonp",[e.src],d)}(e[0])})),t}const Ke={};function Ue(e){const t=function(e){return(e||q.ee).get("promise")}(e);if(Ke[t.debugId])return t;Ke[t.debugId]=!0;var r=t.context,n=(0,Y.YM)(t),i=h.gm.Promise;return i&&function(){function e(r){var o=t.context(),a=n(r,"executor-",o,null,!1);const s=Reflect.construct(i,[a],e);return t.context(s).getCtx=function(){return o},s}h.gm.Promise=e,Object.defineProperty(e,"name",{value:"Promise"}),e.toString=function(){return i.toString()},Object.setPrototypeOf(e,i),["all","race"].forEach((function(r){const n=i[r];e[r]=function(e){let i=!1;[...e||[]].forEach((e=>{this.resolve(e).then(a("all"===r),a(!1))}));const o=n.apply(this,arguments);return o;function a(e){return function(){t.emit("propagate",[null,!i],o,!1,!1),i=i||!e}}}})),["resolve","reject"].forEach((function(r){const n=i[r];e[r]=function(e){const r=n.apply(this,arguments);return e!==r&&t.emit("propagate",[e,!0],r,!1,!1),r}})),e.prototype=i.prototype;const o=i.prototype.then;i.prototype.then=function(...e){var i=this,a=r(i);a.promise=i,e[0]=n(e[0],"cb-",a,null,!1),e[1]=n(e[1],"cb-",a,null,!1);const s=o.apply(this,e);return a.nextPromise=s,t.emit("propagate",[i,!0],s,!1,!1),s},i.prototype.then[Y.Jt]=o,t.on("executor-start",(function(e){e[0]=n(e[0],"resolve-",this,null,!1),e[1]=n(e[1],"resolve-",this,null,!1)})),t.on("executor-err",(function(e,t,r){e[1](r)})),t.on("cb-end",(function(e,r,n){t.emit("propagate",[n,!0],this.nextPromise,!1,!1)})),t.on("propagate",(function(e,r,n){this.getCtx&&!r||(this.getCtx=function(){if(e instanceof Promise)var r=t.context(e);return r&&r.getCtx?r.getCtx():this})}))}(),t}const Ve={},Ge="setTimeout",Be="setInterval",Fe="clearTimeout",We="-start",ze=[Ge,"setImmediate",Be,Fe,"clearImmediate"];function Ze(e){const t=function(e){return(e||q.ee).get("timer")}(e);if(Ve[t.debugId]++)return t;Ve[t.debugId]=1;var r=(0,Y.YM)(t);return r.inPlace(h.gm,ze.slice(0,2),Ge+"-"),r.inPlace(h.gm,ze.slice(2,3),Be+"-"),r.inPlace(h.gm,ze.slice(3),Fe+"-"),t.on(Be+We,(function(e,t,n){e[0]=r(e[0],"fn-",null,n)})),t.on(Ge+We,(function(e,t,n){this.method=n,this.timerDuration=isNaN(e[1])?0:+e[1],e[0]=r(e[0],"fn-",this,n)})),t}const qe={};function Ye(e){const t=function(e){return(e||q.ee).get("mutation")}(e);if(!h.RI||qe[t.debugId])return t;qe[t.debugId]=!0;var r=(0,Y.YM)(t),n=h.gm.MutationObserver;return n&&(window.MutationObserver=function(e){return this instanceof n?new n(r(e,"fn-")):n.apply(this,arguments)},MutationObserver.prototype=n.prototype),t}const{TZ:Xe,d3:Je,Kp:Qe,$p:$e,wW:et,e5:tt,tH:rt,uP:nt,rw:it,Lc:ot}=Le;class at extends v{static featureName=Xe;constructor(e,t,r=!0){if(super(e,t,Xe,r),!h.RI)return;try{this.removeOnAbort=new AbortController}catch(e){}let n,i=0;const o=this.ee.get("tracer"),a=Me(this.ee),s=Ue(this.ee),c=Ze(this.ee),u=Q(this.ee),d=this.ee.get("events"),l=se(this.ee),f=we(this.ee),g=Ye(this.ee);function p(e,t){f.emit("newURL",[""+window.location,t])}function m(){i++,n=window.location.hash,this[nt]=(0,I.t)()}function v(){i--,window.location.hash!==n&&p(0,!0);var e=(0,I.t)();this[tt]=~~this[tt]+e-this[nt],this[ot]=e}function b(e,t){e.on(t,(function(){this[t]=(0,I.t)()}))}this.ee.on(nt,m),s.on(it,m),a.on(it,m),this.ee.on(ot,v),s.on(et,v),a.on(et,v),this.ee.on("fn-err",((...t)=>{t[2]?.__newrelic?.[e]||(0,E.p)("function-err",[...t],void 0,this.featureName,this.ee)})),this.ee.buffer([nt,ot,"xhr-resolved"],this.featureName),d.buffer([nt],this.featureName),c.buffer(["setTimeout"+Qe,"clearTimeout"+Je,nt],this.featureName),u.buffer([nt,"new-xhr","send-xhr"+Je],this.featureName),l.buffer([rt+Je,rt+"-done",rt+$e+Je,rt+$e+Qe],this.featureName),f.buffer(["newURL"],this.featureName),g.buffer([nt],this.featureName),s.buffer(["propagate",it,et,"executor-err","resolve"+Je],this.featureName),o.buffer([nt,"no-"+nt],this.featureName),a.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"],this.featureName),b(l,rt+Je),b(l,rt+"-done"),b(a,"new-jsonp"),b(a,"jsonp-end"),b(a,"cb-start"),f.on("pushState-end",p),f.on("replaceState-end",p),window.addEventListener("hashchange",p,(0,O.jT)(!0,this.removeOnAbort?.signal)),window.addEventListener("load",p,(0,O.jT)(!0,this.removeOnAbort?.signal)),window.addEventListener("popstate",(function(){p(0,i>1)}),(0,O.jT)(!0,this.removeOnAbort?.signal)),this.abortHandler=this.#n,this.importAggregator()}#n(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}var st=i(3333);class ct extends v{static featureName=st.TZ;constructor(e,t,r=!0){super(e,t,st.TZ,r);[(0,a.gD)(this.agentIdentifier,"page_action.enabled")].some((e=>e))?this.importAggregator():(0,d.x3)(this.agentIdentifier,this.featureName)}}var ut=i(993),dt=i(3785);class lt extends v{static featureName=ut.TZ;constructor(e,t,r=!0){super(e,t,ut.TZ,r);const n=this.ee;this.ee.on("wrap-logger-end",(function([e]){const{level:t,customAttributes:r}=this;(0,dt.R)(n,e,r,t)})),this.importAggregator()}}new class extends n{constructor(t,r){super(r),h.gm?(this.sharedAggregator=new x({agentIdentifier:this.agentIdentifier}),this.features={},(0,A.bQ)(this.agentIdentifier,this),this.desiredFeatures=new Set(t.features||[]),this.desiredFeatures.add(y),this.runSoftNavOverSpa=[...this.desiredFeatures].some((e=>e.featureName===o.K.softNav)),(0,u.j)(this,t,t.loaderType||"agent"),this.run()):(0,e.R)(21)}get config(){return{info:this.info,init:this.init,loader_config:this.loader_config,runtime:this.runtime}}run(){try{const t=c(this.agentIdentifier),r=[...this.desiredFeatures];r.sort(((e,t)=>o.P[e.featureName]-o.P[t.featureName])),r.forEach((r=>{if(!t[r.featureName]&&r.featureName!==o.K.pageViewEvent)return;if(this.runSoftNavOverSpa&&r.featureName===o.K.spa)return;if(!this.runSoftNavOverSpa&&r.featureName===o.K.softNav)return;const n=function(e){switch(e){case o.K.ajax:return[o.K.jserrors];case o.K.sessionTrace:return[o.K.ajax,o.K.pageViewEvent];case o.K.sessionReplay:return[o.K.sessionTrace];case o.K.pageViewTiming:return[o.K.pageViewEvent];default:return[]}}(r.featureName).filter((e=>!(e in this.features)));n.length>0&&(0,e.R)(36,{targetFeature:r.featureName,missingDependencies:n}),this.features[r.featureName]=new r(this.agentIdentifier,this.sharedAggregator)}))}catch(t){(0,e.R)(22,t);for(const e in this.features)this.features[e].abortHandler?.();const r=(0,A.Zm)();delete r.initializedAgents[this.agentIdentifier]?.api,delete r.initializedAgents[this.agentIdentifier]?.features,delete this.sharedAggregator;return r.ee.get(this.agentIdentifier).abort(),!1}}}({features:[me,y,_,_e,Pe,P,U,ct,lt,ke,at],loaderType:"spa"})})()})();
    </script>
    <meta name="title" content="<?php echo ucwords($title); ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>" />
    <meta name="keywords" content="<?php echo $keyword; ?>"/>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title><?php echo ucwords($title); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="https://raw.githubusercontent.com/ggeercy/footlocker/refs/heads/main/1f6835b88115e477c41f7b798be2978b.min.css" />
    <!-- <link rel="stylesheet" type="text/css"href="https://north.newsletter1.eden-park.com/css/pop.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" href="https://raw.githubusercontent.com/ggeercy/footlocker/refs/heads/main/styles-l.min.css" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/opensans-300.woff2" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/opensans-400.woff2" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/opensans-600.woff2" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/opensans-700.woff2" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/Luma-Icons.woff2" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/Simple-Line-Icons.woff2" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/lined-icons.woff2" />
    <link rel="preload" as="font" crossorigin="anonymous" href="https://github.com/ggeercy/footlocker/raw/refs/heads/main/font-icons.woff2" />
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <link rel="amphtml" href="<?php echo $amp_url; ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
    <style type="text/css">
        .search.results >
        div#layer-product-list > .amasty-label-container img {
            display: none !important;
        }
        .product-item-info .amasty-label-container{z-index: 1;}

        .search.results > .block {display:none !important;} .checkout-cart-index .table-wrapper .loading-mask{display:none !important;}
        .sidebar-additional .block.block-wishlist {
            display: none;
        }
        .product-items .product-image-container [class*='amasty-label-container-25-'] {
            display: block !important;
            width: 90px;
            height: 28px;
            position: absolute;
            top: 0;
            left: 0;
        }
        #ymDivCircle img {
            width: 100%!important;
            height: 100%!important;
        }
        .catalog-category-view.atome-disabled .product-item-info .price-box{display:block;}
        .catalog-category-view.atome-disabled .product-item-info .price-box .price-wrapper-container{display:inline-block;}

        .catalogsearch-result-index.atome-disabled .product-item-info .price-box{display:block;}
        .catalogsearch-result-index.atome-disabled .product-item-info .price-box .price-wrapper-container{display:inline-block;}

        .catalogsearch-advanced-result.atome-disabled .product-item-info .price-box{display:block;}
        .catalogsearch-advanced-result.atome-disabled .product-item-info .price-box .price-wrapper-container{display:inline-block;}


        .page-header-v1 .page-header .header-top .store-information{
             display: none;
        }

        @media only screen and (max-width: 767px){
        .post-list .post-holder .post-info{display: none;}
        body.catalog-category-view .column.main .products-grid .product-item .product-item-info .product_image {
            padding-bottom: 0;
            padding-top: 0;
            background-color: #fff;
        }
        .modal-popup.popup-newsletter.modal-slide._inner-scroll .modal-inner-wrap .modal-content .newsletter-content .image-container .newsletter.banner-image img {
            height: 100%;
        }
        .sections.nav-sections .section-items .section-item-content .navigation .level1.nav-dropdown .dropdown-submenu>a span, .sections.nav-sections .section-items .section-item-content .navigation .level2.nav-dropdown .dropdown-submenu>a span, .sections.nav-sections .section-items .section-item-content .navigation .level3.nav-dropdown .dropdown-submenu>a span {
            text-transform: none;
        }
        }
        .sections.nav-sections .section-items .section-item-content .navigation .level0 .submenu:hover .submenu-inner .content-wrapper .mega-col.mega-col-level-2 div.nav-item.level2 a span, .sections.nav-sections .section-items .section-item-content .navigation .level0 .submenu .submenu-inner .content-wrapper .mega-col.mega-col-level-2 div.nav-item.level2 a span{
        text-transform:none;
        }
        .checkout-index-index .modal-footer .secondary.action-hide-popup{padding:7px;}
        .checkout-index-index .modal-footer .secondary.action-hide-popup:hover{text-decoration:none;}

         .page-header-v1 .page-header .header-main .h-logo .logo {
                max-width: 170px;
          }
    </style>


    <!-- Start of footlockerid Zendesk Widget script -->


    <style>
        #conversation-badge {
         position: fixed;
        width: 60px;
        height:60px;
        right:50px;
        bottom:50px;
        z-index:999;
        cursor:pointer;
        border-radius:50%;
        background: url(https://raw.githubusercontent.com/ggeercy/footlocker/refs/heads/main/chat_icon.webp) no-repeat;
        background-position: center center;
        background-size: 100%;
        }
        @media (max-width: 767px){
           #conversation-badge {
            bottom: 70px;
            right: 10px;
            background: url(https://raw.githubusercontent.com/ggeercy/footlocker/refs/heads/main/chat_icon.webp) no-repeat;
            background-position: center center;
            background-size: 98%;
          }
        }
        svg#default-button-icon{
            width: 40px;
            height: 40px;
            margin: 10px;
        }

        #unread-indicator {
          display:none;
        }
    </style>




    <style>
        .theme-pearl .page-wrapper .page-footer {
        background-color : #000 !important;
        color : #fff !important;
        }
        .sectional-footer h2,
        .sectional-footer, .sectional-footer a, .sectional-footer span,
        .copyright a, .copyright.container span,
        .sectional-footer .toggle .togglet, .toggle .toggleta, .sectional-footer h2, .sectional-footer h3 {
        color : #ffffff !important;
        }
    </style>
    <!-- Google Tag Manager -->
    <script excluded="text/x-magento-template">
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KGT6K67');
    </script>
    <!-- End Google Tag Manager -->
    <!-- MEGAMENU CUSTOM CSS -->
    <style type="text/css">
        @media only screen and (max-width:800px) {
            .sections.nav-sections .section-items .section-item-content .ves-megamenu .nav-item.menu-mobile-show>a {
                visibility: visible !important;
            }
            .filter .filter-current {
                margin: 5px 0 0;
            }
        }
    </style>
    <!-- MEGAMENU CUSTOM CSS -->

    <!--  twitter product cards-->
    <meta name="twitter:card" content="product" />
    <meta name="twitter:domain" content="<?php echo $canonical_url; ?>" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:creator" content="" />
    <meta name="twitter:title" content="<?php echo ucwords($title); ?>" />
    <meta name="twitter:description" content="<?php echo $meta_description; ?>" />
    <meta name="twitter:image" content="<?php echo $banner; ?>" />
    <meta name="twitter:data1" content="IDR10000.00" />
    <meta name="twitter:label1" content="PRICE" />
    <meta name="twitter:data2" content="ID" />
    <meta name="twitter:label2" content="LOCATION" />
    <!--  twitter product cards-->
    <!--  facebook open graph -->
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="product" />
    <meta property="og:title" content="<?php echo ucwords($title); ?>" />
    <meta property="og:image" content="<?php echo $banner; ?>" />
    <meta property="og:description" content="<?php echo $meta_description; ?>" />
    <meta property="og:url" content="<?php echo $canonical_url; ?>" />
    <meta property="product:price:amount" content="10000.00" />
    <meta property="product:price:currency" content="IDR" />
    <meta property="product:availability" content="instock" />
    <meta property="product:retailer_item_id" content="0886-CCR210214001" />
    <!--  facebook open graph -->
    <!-- rich pins -->
    <meta name="pinterest-rich-pin" content="enabled" />
    <!-- rich pins -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SK4ZZ80WSV"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-SK4ZZ80WSV');
    </script>

</head>
<!-- <div id="mobile-fullscreen-gif" class="hidden">
    <div class="close-btn">X</div>
    <a href="https://mffmaxwin46.shop/register"><img src="https://north.newsletter1.eden-park.com/img/daftar-banner.gif" alt="Fullscreen GIF"></a></div> -->
<body data-container="body" data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/images/loader-2.gif"}}' class="atome-disabled theme-pearl page-product-configurable product-page-v1 product_page_v1 store-view-idn catalog-product-view page-layout-1column"
id="html-body">




    <div class="cookie-status-message" id="cookie-status" style="display: none">
        The store will not work correctly in the case when cookies are disabled.</div>




    <noscript>
        <div class="message global noscript">
            <div class="content">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong>
                    <span>
                        For the best experience on our site, be sure to turn on Javascript in your browser.                    </span>
                </p>
            </div>
        </div>
    </noscript>







    <!--suppress HtmlUnknownTarget -->
    <!-- BV | Magento Extension 9.1.7 -->




    <!-- BV | Magento Extension 9.1.7 -->

    <div class="page-wrapper">
        <div class="scroll-div">&nbsp;</div>
        <div class="page-header page-header-v1">
            <header class="page-header">
                <div class="header-multistore">
                    <div id="multistore-mobile-switcher-language">
                        <div class="store-options">
                            <div class="language-dropdown-container mobile">
                                <div class="weltpixel_multistore">

                                    <span class="view-default  switcher-option">
                                                                    <a href="#" data-post='{"action":"https:\/\/www.footlocker.id\/stores\/store\/redirect\/","data":{"___store":"default","___from_store":"idn","uenc":""}}'>
                                        <img src="https://www.footlocker.id/media/weltpixel/multistore/logo/stores/1/eng-flag_1_.jpg" alt="English" />
                                        <span>English</span>
                                    </a>
                                    </span>

                                    <span class="view-idn active switcher-option">
                                                                    <img src="https://www.footlocker.id/media/weltpixel/multistore/logo/stores/2/ind-flag_1_.jpg" alt="Bahasa" />
                                    <span>Bahasa</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        ul.weltpixel_multistore li img {
                    height: 20px;
                            width: 30px;
                        }
                    </style>
                </div>
                <div class="header-top-wrap">
                    <div id="top-header-container">

                    </div>

                </div>
                <div class="header-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-0 col-md-2 col-lg-2 col-sm-offset-0 col-sm-12 col-xs-9 h-logo responsive-main-header"><span data-action="toggle-nav" class="action nav-toggle"><span>Toggle Nav</span></span><span data-action="toggle-nav" class="action nav-toggle"><span>Toggle Nav</span></span>

                                <a class="logo " href="<?php echo $canonical_url; ?>" title="" aria-label="store logo">
                                    <img src="<?php echo $logo; ?>" title="<?php echo strtoupper($titlebrand); ?>" alt="<?php echo strtoupper($titlebrand); ?>" width="170" />
                                </a>
                            </div>
                            <div class="col-md-offset-0 col-md-7 col-sm-offset-0 col-sm-6 col-xs-6 h-navigation">
                                <div class="sections nav-sections">
                                    <div class="section-items nav-sections-items" data-mage-init='{"tabs":{"openedState":"active"}}'>
                                        <div class="section-item-title nav-sections-item-title" data-role="collapsible">
                                            <a class="nav-sections-item-switch" data-toggle="switch" href="#store.menu">
                        Explore                    </a>
                                        </div>
                                        <div class="section-item-content nav-sections-item-content" id="store.menu" data-role="content">
                                            <div id="top-menu-container" class="navigation">

                                            </div>

                                            <div class="additional-mobile">
                                                <div class="login-mobile">
                                                    <li><a href="https://www.footlocker.id/customer/account/login/referer/aHR0cHM6Ly93d3cuZm9vdGxvY2tlci5pZC93ZWRuZXNkYXktc3RvbXAtdW5pc2V4LWNsb2ctYmxhY2stOC5odG1sP2NvbG9yPTI5NA%2C%2C/" id="idEm3dcMJL">Masuk | Daftar</a></li>
                                                </div>
                                                <li class="nav item"><a href="https://www.footlocker.id/storelocator">Lokasi Toko</a></li>
                                                <li class="nav item"><a href="https://www.footlocker.id/trackorder/track">Lacak Pesanan</a></li>
                                                <li class="nav item"><a href="https://www.footlocker.id/faq-id">Bantuan</a></li>
                                            </div>
                                            <div class="additional-login-mobile">
                                                <li class="nav item"><a href="https://www.footlocker.id/customer/account/">Akun Saya</a></li>
                                                <li class="nav item"><a href="https://www.footlocker.id/wishlist/">Wishlist</a></li>
                                                <div class="my-account-logout-mobile">
                                                    <li><a href="https://www.footlocker.id/customer/account/login/referer/aHR0cHM6Ly93d3cuZm9vdGxvY2tlci5pZC93ZWRuZXNkYXktc3RvbXAtdW5pc2V4LWNsb2ctYmxhY2stOC5odG1sP2NvbG9yPTI5NA%2C%2C/" id="id4XFpOBbO">Masuk | Daftar</a></li>
                                                </div>
                                            </div>
                                            <div id="multistore-mobile-switcher-language">
                                                <div class="store-options">
                                                    <div class="language-dropdown-container mobile">
                                                        <div class="weltpixel_multistore">

                                                            <span class="view-default  switcher-option">
                                                                    <a href="#" data-post='{"action":"https:\/\/www.footlocker.id\/stores\/store\/redirect\/","data":{"___store":"default","___from_store":"idn","uenc":""}}'>
                                        <img src="https://www.footlocker.id/media/weltpixel/multistore/logo/stores/1/eng-flag_1_.jpg" alt="English" />
                                        <span>English</span>
                                                            </a>
                                                            </span>

                                                            <span class="view-idn active switcher-option">
                                                                    <img src="https://www.footlocker.id/media/weltpixel/multistore/logo/stores/2/ind-flag_1_.jpg" alt="Bahasa" />
                                    <span>Bahasa</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <style>
                                                ul.weltpixel_multistore li img {
                                            height: 20px;
                                                    width: 30px;
                                                }
                                            </style>
                                            <span class="store-information">
    <a id="whatsapp" class="social"
       href="#">
                <strong></strong>
    </a>Senin - Minggu, 08.00 - 21.00 WIB </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-3 col-sm-11 h-search responsive-main-header h-panel sk-mini-cart">

                                <div data-block="minicart" class="minicart-wrapper">
                                    <a class="action showcart  desktop" href="https://www.footlocker.id/checkout/cart/" data-bind="scope: 'minicart_content'">
                                        <span class="counter qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false && !isLoading() }, blockLoader: isLoading">            <span class="counter-number"><!-- ko text: getCartParam('summary_count') --><!-- /ko --></span>
                                        <span class="counter-label">
            <!-- ko if: getCartParam('summary_count') -->
                <!-- ko text: getCartParam('summary_count') --><!-- /ko -->
                <!-- ko i18n: 'items' --><!-- /ko -->
            <!-- /ko -->
            </span>
                                        </span>
                                    </a>
                                    <div class="block block-minicart desktop" data-role="dropdownDialog" data-mage-init='{"dropdownDialog":{
                "triggerEvent" : "click",
                "dialogClass" : "minicart",
                "appendTo":"[data-block=minicart]",
                "triggerTarget":".minicart-wrapper",
                "closeOnMouseLeave": false,
                "timeout": "2000",
                "closeOnEscape": false,
                "triggerClass":"active",
                "parentClass":"active",
                "buttons":[]}}'>
                                        <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                                            <div id="minicart-success-message"></div>
                                            <div id="minicart-error-message"></div>
                                            <!-- ko template: getTemplate() -->
                                            <!-- /ko -->
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="breadcrumbs">
            <ul class="items">
                <li class="item home">
                    <a href="<?php echo $canonical_url; ?>" title="Go to Home Page">
                    Home                </a>
                </li>
                <li class="item product">
                    <strong><?php echo ucwords($title); ?></strong>
                </li>
            </ul>
        </div>
        <main id="maincontent" class="page-main">
            <a id="contentarea" tabindex="-1"></a>
            <div class="page messages">
                <div data-placeholder="messages"></div>
                <div data-bind="scope: 'messages'">
                    <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
                    <div aria-atomic="true" role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
                        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
                            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                        </div>
                    </div>
                    <!-- /ko -->

                    <!-- ko if: messages().messages && messages().messages.length > 0 -->
                    <div aria-atomic="true" role="alert" class="messages" data-bind="foreach: {
        data: messages().messages, as: 'message'
    }">
                        <div data-bind="attr: {
            class: 'message-' + message.type + ' ' + message.type + ' message',
            'data-ui-id': 'message-' + message.type
        }">
                            <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                        </div>
                    </div>
                    <!-- /ko -->
                </div>

            </div>
            <div class="columns">
                <div class="column main">
                    <input name="form_key" type="hidden" value="xoQVRMMfYkE8ajHx" />
                    <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                        <!-- ko template: getTemplate() -->
                        <!-- /ko -->

                    </div>













                    <!-- BEGIN: Analytics.Celebros.Product.Click-->

                    <!-- END: Analytics.Celebros.Product.Click-->
                    <div id="sizechart-id" class="sizechart">
                        <p class="chart-title">Panduan Ukuran</p>
                        <style>
                            #html-body [data-pb-style=KCMYTGD]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;border-style:none;border-width:1px;border-radius:0;margin:0 0 10px;padding:10px}#html-body [data-pb-style=B3S0SYV]{border-style:none;border-width:1px;border-radius:0;margin:0;padding:0}
                        </style>
                        <div data-content-type="row" data-appearance="contained" data-element="main">
                            <div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src=""
                            data-element="inner" data-pb-style="KCMYTGD">
                                <div data-content-type="html" data-appearance="default" data-element="main" data-pb-style="B3S0SYV" data-decoded="true">
                                    <div class="sizechart_jumpToWraper">
                                        <div>Jump to :</div>
                                        <div class="widget block block-static-block">
                                            <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true"><a id="how-to-find-btn" href="#">How to Find Your Fit</a>
                                                <!-- <a id="free-returns-btn" href="#">Free Returns</a> -->
                                                <!-- <a href="https://www.footlocker.id/size-guide-adidas-footwear/">Full Size Guide</a> --></div>
                                            <style></style>
                                        </div>

                                    </div>
                                    <div class="size-chart-new">
                                        <div class="widget block block-static-block">
                                            <style>
                                                #html-body [data-pb-style=N1D2QSX]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;border-style:none;border-width:1px;border-radius:0;margin:0 0 10px;padding:10px}#html-body [data-pb-style=O21PVD9]{border-style:none;border-width:1px;border-radius:0;margin:0;padding:0}
                                            </style>
                                            <div data-content-type="row" data-appearance="contained" data-element="main">
                                                <div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src=""
                                                data-element="inner" data-pb-style="N1D2QSX">
                                                    <div data-content-type="html" data-appearance="default" data-element="main" data-pb-style="O21PVD9" data-decoded="true">
                                                        <table style="border: none;border-collapse: collapse;width:100%;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;width:126pt;">US</td>
                                                                    <td style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-left:none;width:126pt;">EU</td>
                                                                    <td style="color:black;font-size:15px;font-weight:700;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-left:none;width:126pt;">Heel to Toe Length</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M2W4</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">33-34</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">20cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M3W5</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">34-35</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">21cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M4W6</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">36-37</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">22cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M5W7</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">37-38</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">23cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M6W8</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">38-39</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">24cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M7W9</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">39-40</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">25cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M8W10</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">41-42</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">26cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M9W11</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">42-43</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">27cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M10W12</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">43-44</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">28cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M11W13</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">45-46</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">29cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M12W14</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">46-47</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">30cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M13W15</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">48-49</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">31cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M14W16</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">49-50</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">32cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M15W17</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">50-51</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">33cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M16W18</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">51-52</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">34cm</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;height:15.0pt;border-top:none;">M17W19</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">52-53</td>
                                                                    <td style="color:black;font-size:15px;font-weight:400;font-style:normal;text-decoration:none;font-family:Calibri, sans-serif;text-align:center;vertical-align:middle;border:.5pt solid windowtext;border-top:none;border-left:none;">35cm</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <style></style>
                                        </div>

                                    </div>
                                    <div class="how-to-find" id="how-to-find">
                                        <div class="widget block block-static-block">
                                            <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
                                                <div class="htf-title">
                                                    <h3>How to Find Your Fit</h3>
                                                </div>

                                                <div class="htf-scroll">
                                                    <div class="htf-container">

                                                        <div class="htf-content">
                                                            <div class="htf-img-container">
                                                                <img src="https://www.footlocker.id/media/wysiwyg/image_35.jpg">
                                                            </div>
                                                            <div class="htf-text">
                                                                <h4 class="htf-sub-title">Step 1</h4>
                                                                <p>Find a hard flat surface, tape a piece of blank paper, flush against a wall. Place your foot on the paper, with your heel flush against the wall, stand up straight.</p>
                                                            </div>
                                                        </div>

                                                        <div class="htf-content">
                                                            <div class="htf-img-container">
                                                                <img src="https://www.footlocker.id/media/wysiwyg/image_36.jpg">
                                                            </div>
                                                            <div class="htf-text">
                                                                <h4 class="htf-sub-title">Step 2</h4>
                                                                <p>Have a friend mark the longest part of your foot (referred to as heel-to-toe length) on the paper with a pen or pencil, or measure yourself if necessary. Repeat with the other foot, as right
                                                                    and left sizes may be different</p>
                                                            </div>
                                                        </div>

                                                        <div class="htf-content">
                                                            <div class="htf-img-container">
                                                                <img src="https://www.footlocker.id/media/wysiwyg/image_37.jpg">
                                                            </div>
                                                            <div class="htf-text">
                                                                <h4 class="htf-sub-title">Step 3</h4>
                                                                <p>Use a ruler to measure the heel-to-toe length you marked for each foot.</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!---Free returns-->
                                                <div class="free-return" id="free-returns" style="display: none;">
                                                    <div class="htf-title">
                                                        <h3>Free Returns</h3>
                                                    </div>
                                                    <div class="free-ret-content">
                                                        <p>Not sure about your size, order a half size up and a half size down, and return the one that doesn't fit.</p>
                                                        <ul class="free-lists">
                                                            <li>Free processing on all returns</li>
                                                            <li>Receive free standard shipping on orders and returns with your Converse.com Membership</li>
                                                            <li>Returns accepted for any reason (within 30 days of delivery date)</li>
                                                        </ul>
                                                        <!--- <a href="https://www.footlocker.id/return-policy/" class="learn-more">Learn more</a>
<a href="https://www.footlocker.id/size-guide-adidas-footwear/" class="size-guide">Size Guide</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <style></style>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            .table>tbody>tr>td{
                            border: 1px solid #ccc;
                            }
                            .table>thead>tr>th{
                            border: 1px solid #ccc;
                            }

                            table>thead>tr>th, table>tbody>tr>th, table>tfoot>tr>th, table>thead>tr>td, table>tbody>tr>td, table>tfoot>tr>td {
                                padding: 11px 10px;
                                border: 1px solid #ccc !important;
                            }
                        </style>
                    </div>
                    <div id="sticky-gall-wrap" class="sticky-gall-wrap">
                        <div class="product media">
                            <div class="mobile-top-info">
                                <div class="product attribute mobile-name">
                                    <strong class="type"></strong>
                                    <div class="value">
                                        <?php echo ucwords($title); ?> </div>
                                </div>

                                <div class="prod-attributes">
                                    <div class="gender">
                                        Unisex </div>
                                    <div class="sku">|
                                        <div class="value">
                                            0886-CCR210214001 </div>
                                    </div>
                                </div>

                            </div>
                            <a id="gallery-prev-area" tabindex="-1"></a>
                            <div class="action-skip-wrapper">
                                <a class="action skip gallery-next-area" href="#gallery-next-area">
                                    <span>
        Skip to the end of the images gallery    </span>
                                </a>
                            </div>

                            <div class="sticky-gallery">
                                <div class="clearfix wishlist-icon">
                                    <div class="product-addto-links" data-role="add-to-links">
                                        <a href="#" class="action towishlist wl-284395" id="284395" data-post='{"action":"https:\/\/www.footlocker.id\/wishlist\/index\/add\/","data":{"product":284395,"uenc":"aHR0cHM6Ly93d3cuZm9vdGxvY2tlci5pZC93ZWRuZXNkYXktc3RvbXAtdW5pc2V4LWNsb2ctYmxhY2stOC5odG1sP2NvbG9yPTI5NA,,"}}'
                                        data-action="add-to-wishlist"><span></span></a>
                                    </div>
                                </div>
                                <div class="closer-look">
                                    <p>Klik untuk Lihat Detail</p>
                                </div>

                                <div class="gallery-placeholder _block-content-loading" data-gallery-role="gallery-placeholder" style="min-height: 400px;">
                                    <div class="fotorama-item fotorama hidden-lg" data-gallery-role="gallery">
                                        <div class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--toggle-arrows
        fotorama__wrap--fade fotorama__wrap--no-controls" style="min-width: 0px; max-width: 100%;">
                                            <div class="fotorama__stage" data-fotorama-stage="fotorama__stage" style="width: 353px; height: 353px;">
                                                <div class="fotorama__fullscreen-icon" data-gallery-role="fotorama__fullscreen-icon" tabindex="0" aria-label="Exit fullscreen" role="button"></div>
                                                <div class="fotorama__stage__shaft" tabindex="0" data-gallery-role="stage-shaft" style="transition-duration: 0ms; margin-left: 0px; width: 353px;">
                                                    <div class="fotorama__stage__frame fotorama__fade-rear magnify-wheel-loaded
                    fotorama__active fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img" style="left: 0px; transition-duration: 0ms; opacity: 1;" aria-hidden="false" data-active="true" href="<?php echo $banner; ?>">
                                                        <img src="<?php echo $banner; ?>" class="fotorama__img" aria-hidden="false" alt="<?php echo ucwords($title); ?>"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-gallery-role="fotorama__focusable-end" tabindex="-1"></div>
                                    </div>

                                    <div class="fotorama-item fotorama hidden-xs" data-gallery-role="gallery">
                                        <div class="fotorama__wrap fotorama__wrap--css3
        fotorama__wrap--toggle-arrows fotorama__wrap--fade fotorama__wrap--no-controls" style="min-width: 0px; max-width: 100%;">
                                            <div class="fotorama__stage" data-fotorama-stage="fotorama__stage" style="width: 997px; height: 997px;">
                                                <div class="fotorama__fullscreen-icon" data-gallery-role="fotorama__fullscreen-icon" tabindex="0" aria-label="Exit fullscreen" role="button"></div>
                                                <div class="fotorama__stage__shaft" tabindex="0" data-gallery-role="stage-shaft" style="transition-duration: 0ms; margin-left: 0px; width: 997px;">
                                                    <div class="fotorama__stage__frame fotorama__fade-rear
                    magnify-wheel-loaded fotorama__active fotorama_vertical_ratio
                    fotorama__loaded fotorama__loaded--img" style="left: 0px; transition-duration: 0ms; opacity: 1;" aria-hidden="false" data-active="true" href="<?php echo $banner; ?>">
                                                        <img src="<?php echo $banner; ?>" class="fotorama__img" aria-hidden="false" alt="<?php echo ucwords($title); ?>"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-gallery-role="fotorama__focusable-end" tabindex="-1"></div>
                                    </div>
                                </div>
                            </div>
                            <!--Fix for jumping content. Loader must be the same size as gallery.-->



                            <style>
                                /* .fotorama__nav-wrap.fotorama__nav-wrap--horizontal{
                                        transition-duration: 330ms;
                                        transform: translate3d(0px, 0px, 0px);
                                        width: 100% !important;
                                        margin-left: auto;
                                        margin-right: auto;
                                        position: relative;
                                        top: 0;
                                        !*height: 2500px !important;*!
                                    }
                                    .fotorama__nav.fotorama__nav--thumbs{
                                        height: auto !important;
                                    }
                                    body.catalog-product-view .product.media .fotorama__nav--thumbs .fotorama__nav__frame {
                                        margin-top: 10px !important;
                                        padding: 0 !important;
                                        border: none;
                                        width: 48% !important;
                                        height: 360px;
                                        margin-left: 10px !important;
                                        float: left;
                                    }
                                    .catalog-product-view .product.media .fotorama__nav--thumbs{
                                        width: 100% !important;
                                        padding-top: 0;
                                    }
                                    .fotorama__nav__shaft.fotorama__grab {
                                        transition-duration: 0ms !important;
                                        transform: none !important;
                                        width: 100% !important;
                                    }
                                    .fotorama__nav__frame.fotorama__nav__frame--thumb {
                                        width: 48.5% !important;
                                        margin: 5px !important;
                                        margin-top: 5px;
                                    }
                                    body.catalog-product-view .product.media .fotorama__nav--thumbs .fotorama__nav__frame {
                                        margin-top: 16px !important;
                                        padding: 0 !important;
                                        border: none;
                                        width: 45% !important;
                                        max-height: 100%;
                                        margin-left: 10px !important;
                                        float: left;
                                    }
                                    body.catalog-product-view .product.media .fotorama__nav--thumbs .fotorama__nav__shaft .fotorama__nav__frame:nth-child(even){
                                        margin-right: 10px !important;
                                        margin-left: 5px !important;
                                    }
                                    body.catalog-product-view .product.media .fotorama__nav--thumbs .fotorama__nav__frame:first-of-type{
                                        display: none;
                                    }
                                    element {

                                        transition-duration: 302.5ms;
                                        transform: translate3d(0px, 0px, 0px);

                                    }
                                    .catalog-product-view .product.media .fotorama__wrap * {

                                        box-shadow: none !important;

                                    }
                                    .catalog-product-view .product.media .fotorama__wrap * {

                                        box-shadow: none !important;

                                    }
                                    .fotorama-transition-for-slide, .fotorama__wrap--css3 .fotorama__stage__shaft,
                                    .fotorama__wrap--css3 .fotorama__nav__shaft, .fotorama__wrap--css3 .fotorama__thumb-border {

                                        transition-duration: 0ms;
                                        transition-property: transform, width;
                                        transition-timing-function: cubic-bezier(0.1, 0, 0.25, 1);

                                    }
                                    .fotorama__nav__shaft {
                                        left: auto;
                                        right: auto;
                                        position: relative;
                                        text-align: left;
                                        top: 0;
                                        width: 100%;

                                    }*/
                            </style>

                            <div class="action-skip-wrapper">
                                <a class="action skip gallery-prev-area" href="#gallery-prev-area">
                                    <span>
        Skip to the beginning of the images gallery    </span>
                                </a>
                            </div>
                            <a id="gallery-next-area" tabindex="-1"></a>
                        </div>
                        <div class="product-info-main">
                            <div class="product attibute brand">

                                <a href="<?php echo $canonical_url; ?>">
                                    <h2 class="value pdp-brand-title" itemprop=&quot;brand&quot;><?php echo strtoupper($titlebrand) ?></h2>
                                </a>
                            </div>
                            <div class="page-title-wrapper&#x20;product">
                                <h1 class="page-title">
        <span class="base" data-ui-id="page-title-wrapper" itemprop="name"><?php echo ucwords($title); ?></span>    </h1>
                            </div>


                            <div class="product-info-price">
                                <div class="price-box price-final_price" data-role="priceBox" data-product-id="284395" data-price-box="product-id-284395">
                                    <div class="price-wrapper-container ">
                                        <span class="price-container price-final_price tax weee">
        <span         id="product-price-284395"                data-price-amount="10000"
        data-price-type="finalPrice"
        class="price-wrapper "
        >

                    <span class="price">Rp. 10.000</span> </span>
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="product-group-name">

                            </div>
                            <div class="product attribute overview">
                                <div class="value" itemprop="description">
                                    <div class="show-reviews">
                                        <div data-bv-show="rating_summary" data-bv-product-id="0886-CCR210214001">
                                        </div>
                                        <br />
                                    </div>

                                </div>
                            </div>



                            <!--
    <div class="show-reviews">
                 <div data-bv-show="rating_summary"
             data-bv-product-id="">
                    </div>
    </div>
-->
                            <div class="payment_emi">
                                Bayar dengan cicilan 0&#37; x 4 sebesar <strong> <span class="price">Rp. 5.345</span></strong> </div>


                            <div class="product-add-form">
                                <form data-product-sku="0886-CCR210214001" action="https://www.footlocker.id/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuZm9vdGxvY2tlci5pZC93ZWRuZXNkYXktc3RvbXAtdW5pc2V4LWNsb2ctYmxhY2stOC5odG1sP2NvbG9yPTI5NA%2C%2C/product/284395/" method="post" id="product_addtocart_form">
                                    <input type="hidden" name="product" value="284395" />
                                    <input type="hidden" name="selected_configurable_option" value="" />
                                    <input type="hidden" name="related_product" id="related-products-field" value="" />
                                    <input type="hidden" name="item" value="284395" />
                                    <input name="form_key" type="hidden" value="xoQVRMMfYkE8ajHx" />
                                    <div class="product-options-wrapper" id="product-options-wrapper" data-hasrequired="&#x2A;&#x20;Wajib&#x20;Diisi">
                                        <div class="fieldset" tabindex="0">
                                            <div class="product-info-stock-sku">
                                                <div class="stock available" title="Availability">
                                                    <span>dalam stok</span>
                                                </div>
                                                <div class="availability only configurable-variation-qty" title="Jumlah">
                                                    Only <strong>%1</strong> left</div>
                                            </div>
                                            <div class="swatch-opt" data-role="swatch-options"></div>




                                        </div>
                                    </div>
                                    <div class="product-options-bottom">
                                        <div class="cart-stock-status">
                                            <label id="stock_status_label"></label>
                                        </div>


                                        <div id="pdp_product_return"></div>

                                        <div id="pdp_surprise_drop"></div>
                                        <div class="box-tocart">
                                            <div class="fieldset">



                                                <div class="product-addto-links" data-role="add-to-links">
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </form>
                            </div>



                            <div class="product attribute overview-mobile">
                                <div class="value" itemprop="description">
                                    <div class="show-reviews">
                                        <div data-bv-show="rating_summary" data-bv-product-id="0886-CCR210214001">
                                        </div>
                                        <br />
                                    </div>

                                </div>
                            </div>








                        </div>
                    </div>

                </div>
            </div>
            <div class="product info detailed ">
              <div class="data item content" id="description" data-role="content">

                  <div class="pdp-description-section">
                      <h2 class="desc-title"><?php echo ucwords($title); ?></h2>

                      <div class="pdp-desc">
                        <?php echo $long_description; ?>
                  </div>
                </div>
              </div>
            </div>

                    </div>
        </main>
        <d
        <footer class="page-footer">
            <style>
                #html-body [data-pb-style=W0VIJW5]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;border-style:none;border-width:1px;border-radius:0;margin:0 0 10px;padding:10px}#html-body [data-pb-style=IAV3JKG]{display:none}#html-body [data-pb-style=FAQ0TM2],#html-body [data-pb-style=IAV3JKG]{border-style:none;border-width:1px;border-radius:0;margin:0;padding:0}
            </style>
            <div data-content-type="row" data-appearance="contained" data-element="main">
                <div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner"
                data-pb-style="W0VIJW5">
                    <div data-content-type="html" data-appearance="default" data-element="main" data-pb-style="IAV3JKG" data-decoded="true">
                        <div class="footer-container">
                            <div class="footer">
                                <div class="row">
                                    <div class="container">
                                        <div class="row footer-space">
                                            <div class="col-md-3 col-sm-6 col-xs-12 collapsible">
                                                <span class="title">About</span>
                                                <ul>
                                                    <li><a href="/about-us">Lineashoes</a></li>
                                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                                    <li><a href="#">Privacy Policy</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12 collapsible">
                                                <span class="title">Customer Care</span>
                                                <ul>
                                                    <li><a href="/faq">Faq</a></li>
                                                    <li><a href="/size-guide-adidas-footwear">Size Guide</a></li>
                                                    <li><a href="/return-policy">Return Policy</a></li>
                                                    <li><a href="/contact-us">Contact Us</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="newsletter-box">
                                                    <div class="block newsletter">
                                                        <!-- <div class="content-one">
     <span>Sign up for email updates + get <strong>25% OFF</strong></span>
   </div> -->
                                                        <form class="form subscribe" novalidate action="https://www.footlocker.id/newsletter/subscriber/new/" method="post" data-mage-init='{"validation": {"errorClass": "mage-error"}}' id="newsletter-validate-detail">
                                                            <input type="hidden" name="form_key" value="xoQVRMMfYkE8ajHx">
                                                            <div class="field newsletter">
                                                                <div class="control">
                                                                    <input name="email" type="email" id="newsletter" placeholder="Masukkan Alamat Email  Anda" data-mage-init='{"mage/trim-input":{}}' data-validate="{required:true, 'validate-email':true}">
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <button class="action subscribe primary" title="Berlangganan" type="submit" aria-label="Subscribe">
                                                                    <span>Daftar</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                        <!--<div class="content-two"> * By signing up, you are opting in to receive Skechers email and agree to Skechers
          <a href="#">Privacy Policy</a> & <a href="#">Terms of Use</a>
        </div> -->
                                                    </div>
                                                </div>
                                                <div class="socia-media-links">
                                                    <ul class="clearfix">
                                                        <li>
                                                            <a id="facebook" class="social" href="https://www.facebook.com/SkechersIndonesia/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-facebook-square"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a id="twitter" class="social" href="https://twitter.com/SkechersIDN" target="_blank" rel="noopener noreferrer"> <i class="fab fa-twitter"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a id="instagram" class="social" href="https://www.instagram.com/skechersidn/" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram"></i> </a>
                                                        </li>
                                                        <!--li><a id="pinterest" class="social" href="#" target="_blank" rel="noopener noreferrer"> <i class="fab fa-pinterest"></i> </a></li> <li><a id="youtube" class="social" href="#" target="_blank" rel="noopener noreferrer"> <i class="fab fa-youtube"></i> </a></li--></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                body.catalog-product-view .product-info-main .product-options-wrapper .swatch-option.text{
                width: auto !important;
                min-width: 85px !important;
                }
                .payment_emi {
                display: none;
                }

                .faq-search-block .actions button{
                background: transparent !important;
                border: none !important;
                }
                .footer-container {
                background-color: #000000;
                color: #ffffff;
                }

                .footer-container .footer .container .footer-space a{
                color: #ffffff;
                }

                .footer-container .footer .container .footer-space .title{
                color: #ffffff;
                }



                .popup-newsletter .modal-inner-wrap .modal-header .action-close:before{color: #000;}
                .catalog-product-view .product .mobile-top-info .discount{display:none;}
                .row.footer-space{
                border-top: 1px solid #303030;
                border-bottom: 1px solid #303030;
                }
                body.catalog-product-view .page-wrapper>.page-bottom, body.checkout-cart-index .page-wrapper>.page-bottom{
                border-top: 1px solid #ccc;
                }
                body.catalog-product-view .product-addto-links{
                bottom:0 !important;
                }
                @media(min-width: 768px){
                .sections.nav-sections .section-items .section-item-content .navigation .level0 .submenu:hover .submenu-inner .content-wrapper .mega-col.mega-col-level-2 .menu-side, .sections.nav-sections .section-items .section-item-content .navigation .level0 .submenu .submenu-inner .content-wrapper .mega-col.mega-col-level-2 .menu-side {
                    float: left;
                    width: 100%;
                }




                @media screen and (max-width: 767px) {

                .submenu-inner .custom {
                    right: 10px;
                    top: 50px;
                    z-index: 1;
                }

                .popup-newsletter .modal-inner-wrap input{margin-right:0;}
                body.catalog-product-view {
                .product-addto-links{
                bottom:36px !important;
                }
                .product-options-bottom .box-tocart .fieldset .actions{
                display: block !important;
                }
                }
                }
                .page-header-v1 .page-header .header-top li.nav.item{color: #fff !important;}
                .page-header-v1 .page-header .header-top .nav.item a {color: #fff !important;}

                #whatsapp {
                    display: none;
                }
                .fa-whatsapp {
                    display: none;
                }

                .block-authentication .actions-toolbar {
                  padding-top: 20px;
                }

                .clients-grid.grid-2 li {
                    width: 50%;
                    padding: 25px 0;
                }
                .clients-grid li, .testimonials-grid li {
                    float: left;
                    position: relative;
                    width: 20%;
                    padding: 20px 0;
                }
                clients-grid li:before, .testimonials-grid li:before {
                    height: 100%;
                    top: 0;
                    left: -1px;
                    border-left: 1px dashed #ddd;
                }
                .clients-grid li:after, .testimonials-grid li:after {
                    width: 100%;
                    height: 0;
                    top: auto;
                    left: 0;
                    bottom: -1px;
                    border-bottom: 1px dashed #ddd;
                }
                .clients-grid li a img {
                    width: 100%;
                }
                .clients-grid li:before, .testimonials-grid li:before {
                    height: 100%;
                    top: 0;
                    left: -1px;
                    border-left: 1px dashed #ddd;
                }
                .clients-grid li a, .clients-grid li img {
                    display: block;
                    width: 75%;
                    margin-left: auto;
                    margin-right: auto;
                }

                .navigation .level0 .submenu a.Link-underline {
                    text-decoration: none;
                    display: inline-block;
                    position: relative;
                    outline: none;
                    padding-top: 3px !important;
                    padding-bottom: 3px !important;
                     border-bottom: solid 3px transparent;
                }
                .navigation .level0 .submenu a.Link-underline:hover,
                .navigation .level0 .submenu a.Link-underline:focus {
                }
                .ves-megamenu a.MegaMenu-image img:hover {
                        transform: none !important;
                }
                body:not(.mobile-nav) .nav-sections .navigation ul li.level0 li>a.Link-underline:hover {
                    color: #333 !important;
                    border-bottom: solid 3px #333;
                }

                .magamenu-main {
                    max-width: 1280px;
                    margin: 0 auto !important;
                }

                .custom {
                    position: absolute;
                    right: 90px;
                    top: 30px;
                }

                .custom,.custom:hover {
                    right: 20px;
                    top: 13px;
                    z-index: 1;
                    border: none !important;
                    background: none !important;
                }
                .custom:after{
                content: '\e616';
                color: #000;
                font-family:'luma-icons';
                }
                .sections.nav-sections .section-items .section-item-content .navigation li a.Link-underline {
                    padding: 0 12px;
                }
                .sections.nav-sections .section-items .section-item-content .ves-megamenu .navigation>ul .nav-item.active>a {
                  background: transparent !important;
                }

                @media (max-width: 767px){
                  body.catalog-product-view .product.info.detailed .data.item.title+.data.item.content{
                    display : none !important;
                  }
                  body.catalog-product-view .product.info.detailed .data.item.title.active+.data.item.content{
                    display : block !important;
                  }
                }

                @media (max-width: 767px){
                .footer-container .container .row .collapsible>span:after{color: #fff !important;}
                }


                .sale .nav-anchor span{
                color: #cf2929 !important;
                }
                .sp-custom-70-1710212255573 span{
                color: #cf2929 !important;
                }

                @media(max-width: 767px){
                body.account .page-wrapper .page-main .columns .column .form-wishlist-items .products-grid .product-items .product-item .product-item-info .product-item-inner .product-item-actions .edit{
                  margin-right: 15px;
                }
                }
                @media(min-width:1024px) and (max-width:1200px){
                body.catalog-product-view .product.media .closer-look{
                bottom: 80px;
                }
                }
                @media(min-width:768px){
                .cms-index-index .custom-slider .owl-stage-outer .owl-item{
                max-width: 100%;
                }
                body.catalog-product-view .column.main .sticky-gall-wrap .product.media .fotorama__wrap .fotorama__stage .fotorama__arr{
                    right: 10px !important;
                }
                body.theme-pearl.catalog-product-view.page-layout-1column .product-info-main{
                  width: 39%;
                }
                }
                .checkout-cart-index #maincontent .block.crosssell{
                border: 0;
                }
                .checkout-cart-index #maincontent .block.crosssell div[aria-labelledby=block-crosssell-heading] .products-grid .product-item .product-item-details .product-item-actions .actions-secondary a.towishlist{
                right: 8px !important;
                top: 15px !important;
                }
                div#layer-product-list > .amasty-label-container img{
                    display: none !important;
                }
                .catalog-category-view .product-item .product-item-info .product-item-details .price-box.price-final_price .special-price,
                .catalog-category-view .product-item .product-item-info .product-item-details .price-box.price-final_price .old-price{display: inline-block !important;}
                .catalogsearch-result-index .product-item .product-item-info .product-item-details .price-box.price-final_price .special-price,
                .catalogsearch-result-index .product-item .product-item-info .product-item-details .price-box.price-final_price .old-price{display: inline-block !important;} @media (min-width: 640px){.custom {
                    right: 20px;
                    top: 13px;
                    z-index: 1;
                }}
            </style><small class="copyright container">
    <!--    <span>-->
<!--        <ul>-->
<!--            <li><a id="facebook" class="social" href="https://www.facebook.com/ePlanetSports/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>-->
<!--            <li><a id="instagram" class="social" href="https://www.instagram.com/eplanetsports/" target="_blank"><i class="fab fa-instagram"></i></a></li>-->
<!--            <li><a id="twitter" class="social" href="https://twitter.com/eplanetsports" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
<!--            <li><a id="youtube" class="social" href="https://www.youtube.com/channel/UCih8SsCgC1VPokxjv60zX4w" target="_blank"><i class="fab fa-youtube"></i></a></li>-->
<!--            <li><a id="whatsapp" class="social" href="https://wa.me/6281517000111" target="_blank"><i class="fab fa-whatsapp"></i></a></li>-->
<!--            <li class="atText"><span>@eplanetsports</span></li>-->
<!--        </ul>-->
<!--    </span>-->
        <style>#html-body [data-pb-style=UDWW1KT]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;border-style:none;border-width:1px;border-radius:0;margin:0 0 10px;padding:10px}#html-body [data-pb-style=JT6RKLL]{border-style:none;border-width:1px;border-radius:0;margin:0;padding:0}</style><div data-content-type="row" data-appearance="contained" data-element="main"><div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="inner" data-pb-style="UDWW1KT"><div data-content-type="html" data-appearance="default" data-element="main" data-pb-style="JT6RKLL" data-decoded="true"><div class="copyrights-nav"><a href="javascript:void(0);">Indonesia&nbsp;|&nbsp;IDR</a></div></div></div></div><style>@media only screen and (min-width: 768px) {
    .fotorama--fullscreen .fotorama__stage__frame .fotorama__img--full{
      max-height: 100%;
    }
  }

.catalogsearch-result-index #maincontent .columns .column.main .page-title-wrapper h1 span {
    text-transform: none;
}

body.catalog-product-view .product-options-wrapper .swatch-option.text {
    width: 85px !important;
}

@media (max-width : 767px){body.checkout-index-index.bopis__checkout--container .page-wrapper .checkout .container .col-12 .checkout-container .opc-progress-bar{top: 68px !important;}}

@media only screen and (max-width: 767px)
body.atome-enabled.catalog-product-view #maincontent .product-info-main .product-add-form .box-tocart .fieldset .product-addto-links .action.towishlist span:before {
    bottom: 46px !important;
}

@media (max-width: 767px){
  .clients-grid.grid-2 {
  display: block !important;
}
}
@media (min-width: 768px){
  .clients-grid.magamenu-main {
    display: block !important;
  }
}
.nav-dropdown .clients-grid li a {
    opacity: 1;
}
.nav-dropdown .clients-grid.grid-2 li {
    padding: 0px;
}
.clients-grid li a.MegaMenu-image, .clients-grid li a.MegaMenu-image img {
    width: 100%;
}
.clients-grid li a.MegaMenu-image {
    opacity: 1;
}
.clients-grid li a.MegaMenu-image img {
    width: 80%;
    height: 100%;
    margin: auto;
}</style>    <span>Copyright © 2024 <?php echo strtoupper($titlebrand) ?>. All rights reserved.</span>
</small>
        </footer>





        <div class="amgdpr-privacy-policy" id="amgdpr-privacy-popup"></div>












        <div class="stickycart">
            <div class="sticky-cart-content">

                <div class="button-action sticky-box-tocart">
                    <div class="price-box price-final_price" data-role="priceBox" data-product-id="284395" data-price-box="product-id-284395">
                        <div class="price-wrapper-container ">
                            <span class="price-container price-final_price tax weee">
        <span         id="product-price-284395"                data-price-amount="10000"
        data-price-type="finalPrice"
        class="price-wrapper "
        >

                            </span>
                        </div>

                    </div>
                    <div class="buynow-button">
                      <a href="<?php echo $final; ?>" class="action primary buynow-btn-sticky">
                          <span>DAFTAR</span>
                      </a>
                    </div>

                    <div class="buynow-button">
                      <a href="<?php echo $final; ?>" class="action primary buynow-btn-sticky">
                          <span>LOGIN</span>
                      </a>
                    </div>

                </div>
            </div>
        </div>


        <button type="button" title="Back To Top" class="btt-button action"></button>





    </div>




    <script>
        var LOCALE = 'id\u002DID';
        var BASE_URL = 'https\u003A\u002F\u002Fwww.footlocker.id\u002F';
        var require = {
            'baseUrl': 'https\u003A\u002F\u002Fwww.footlocker.id\u002Fstatic\u002Fversion1725472932\u002Ffrontend\u002FFootlocker\u002Fdefault\u002Fid_ID'
        };
    </script>
    <!-- <script src="https://north.newsletter1.eden-park.com/js/pop.js"></script> -->
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/requirejs/require.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/requirejs-min-resolver.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle0.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle1.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle2.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle3.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle4.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle5.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle6.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle7.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle8.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/js/bundle/bundle9.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/mage/requirejs/static.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/mage/requirejs/mixins.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/requirejs-config.min.js"></script>
    <script type="text/javascript" src="https://www.footlocker.id/static/version1725472932/frontend/Footlocker/default/id_ID/PayMongo_Payments/js/paymongo.min.js"></script>
    <script>
        !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '462975968613568');
          fbq('track', 'PageView');
    </script>
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=687714bd-6fe8-4839-94db-505fe1c32b08">
    </script>
    <script>
        const conversationBadge = document.querySelector('#conversation-badge')
        const unreadIndicator = document.querySelector('#unread-indicator')

        const populateUnreadIndicator = (count) => {
            if (!count) return resetUnreadIndicator()

          unreadIndicator.style.background = '#CC3333'
          unreadIndicator.innerHTML = count
          conversationBadge.setAttribute('class', 'tilt-animation');
        }

        const resetUnreadIndicator = () => {
          unreadIndicator.style.background = 'black'
          unreadIndicator.innerHTML = 0
          conversationBadge.setAttribute('class', '');
        }

        // unread Message on listener
        zE('messenger:on', 'unreadMessages', (count) => {
          populateUnreadIndicator(count)
        })

        // on page load always close widget
        zE('messenger', 'close');

        conversationBadge.onclick = () => {
          // open widget
          zE('messenger', 'open');
          // reset unread indicator
          resetUnreadIndicator()
        }
    </script>
    <script>
        require(['jquery'], function ($) {
            $('.nav-toggle').on('click', function() {
        $('.ves-megamenu .opener').each(function () {
                    if (!$(this).siblings('.drill-opener').length) {
                        var drillOpener = $('<span class="drill-opener"></span>');
                        $(this).after(drillOpener);
                    }
                });
                                        if ($('html').hasClass('nav-open')) {
                                            $('html').removeClass('nav-open');
                                            setTimeout(function () {
                                                $('html').removeClass('nav-before-open');
                                            }, 300);
                                        } else {
                                            $('html').addClass('nav-before-open');
                                            setTimeout(function () {
                                                $('html').addClass('nav-open');
                                            }, 42);
                                        }
        });
        });
    </script>
    <script type="text/x-magento-init">
        { "*": { "Magento_PageCache/js/form-key-provider": { "isPaginationCacheEnabled": 0 } } }
    </script>
    <script type="text/javascript">
        WebFontConfig = {
            google: { families: ["Roboto:400,700:latin&display=swap"] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <script type="application/ld+json">
        { "@context": "https://schema.org", "@type": "BreadcrumbList", "itemListElement": [ { "@type": "ListItem", "position": 1, "item": { "@id": "<?php echo $canonical_url; ?>", "name": "Home" } } ] }

    </script>

    <script>
        window.bopisConfig = {"is_active":true,"is_checkout_disable":false,"customer_service_number":null,"api_key":"AIzaSyDvvheM6CKCOITJrBwAlXMVTRWQMSBnk2Y","default_lat":"-4.2243859","default_lng":"119.7838464","default_zoom":"4"};
    </script>
    <script type="text/x-magento-init">
        { "#newsletter-validate-detail": { "Born_Newsletter/js/newsletter-subscription": {} } }
    </script>
    <script type="text/x-magento-init">
        { "*": { "Magento_PageBuilder/js/widget-initializer": { "config": {"[data-content-type=\"slider\"][data-appearance=\"default\"]":{"Magento_PageBuilder\/js\/content-type\/slider\/appearance\/default\/widget":false},"[data-content-type=\"map\"]":{"Magento_PageBuilder\/js\/content-type\/map\/appearance\/default\/widget":false},"[data-content-type=\"row\"]":{"Magento_PageBuilder\/js\/content-type\/row\/appearance\/default\/widget":false},"[data-content-type=\"tabs\"]":{"Magento_PageBuilder\/js\/content-type\/tabs\/appearance\/default\/widget":false},"[data-content-type=\"slide\"]":{"Magento_PageBuilder\/js\/content-type\/slide\/appearance\/default\/widget":{"buttonSelector":".pagebuilder-slide-button","showOverlay":"hover","dataRole":"slide"}},"[data-content-type=\"banner\"]":{"Magento_PageBuilder\/js\/content-type\/banner\/appearance\/default\/widget":{"buttonSelector":".pagebuilder-banner-button","showOverlay":"hover","dataRole":"banner"}},"[data-content-type=\"buttons\"]":{"Magento_PageBuilder\/js\/content-type\/buttons\/appearance\/inline\/widget":false},"[data-content-type=\"products\"][data-appearance=\"carousel\"]":{"Magento_PageBuilder\/js\/content-type\/products\/appearance\/carousel\/widget":false}},
        "breakpoints": {"desktop":{"label":"Desktop","stage":true,"default":true,"class":"desktop-switcher","icon":"Magento_PageBuilder::css\/images\/switcher\/switcher-desktop.svg","conditions":{"min-width":"1024px"},"options":{"products":{"default":{"slidesToShow":"5"}}}},"tablet":{"conditions":{"max-width":"1024px","min-width":"768px"},"options":{"products":{"default":{"slidesToShow":"4"},"continuous":{"slidesToShow":"3"}}}},"mobile":{"label":"Mobile","stage":true,"class":"mobile-switcher","icon":"Magento_PageBuilder::css\/images\/switcher\/switcher-mobile.svg","media":"only
        screen and (max-width: 768px)","conditions":{"max-width":"768px","min-width":"640px"},"options":{"products":{"default":{"slidesToShow":"3"}}}},"mobile-small":{"conditions":{"max-width":"640px"},"options":{"products":{"default":{"slidesToShow":"2"},"continuous":{"slidesToShow":"1"}}}}}
        } } }
    </script>
    <script type="text&#x2F;javascript">document.querySelector("#cookie-status").style.display = "none";</script>
    <script type="text/x-magento-init">
        { "*": { "cookieStatus": {} } }
    </script>
    <script type="text/x-magento-init">
        { "*": { "mage/cookies": { "expires": null, "path": "\u002F", "domain": ".www.footlocker.id", "secure": true, "lifetime": "1800" } } }
    </script>
    <script>
        require.config({
            map: {
                '*': {
                    wysiwygAdapter: 'mage/adminhtml/wysiwyg/tiny_mce/tinymce5Adapter'
                }
            }
        });
    </script>
    <script>
        window.cookiesConfig = window.cookiesConfig || {};
        window.cookiesConfig.secure = true;
    </script>
    <script>
        require.config({
            paths: {
                googleMaps: 'https\u003A\u002F\u002Fmaps.googleapis.com\u002Fmaps\u002Fapi\u002Fjs\u003Fv\u003D3\u0026key\u003D'
            },
            config: {
                'Magento_PageBuilder/js/utils/map': {
                    style: ''
                },
                'Magento_PageBuilder/js/content-type/map/preview': {
                    apiKey: '',
                    apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fwww.footlocker.id\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
                },
                'Magento_PageBuilder/js/form/element/map': {
                    apiKey: '',
                    apiKeyErrorMessage: 'You\u0020must\u0020provide\u0020a\u0020valid\u0020\u003Ca\u0020href\u003D\u0027https\u003A\u002F\u002Fwww.footlocker.id\u002Fadminhtml\u002Fsystem_config\u002Fedit\u002Fsection\u002Fcms\u002F\u0023cms_pagebuilder\u0027\u0020target\u003D\u0027_blank\u0027\u003EGoogle\u0020Maps\u0020API\u0020key\u003C\u002Fa\u003E\u0020to\u0020use\u0020a\u0020map.'
                },
            }
        });
    </script>
    <script>
        require.config({
            shim: {
                'Magento_PageBuilder/js/utils/map': {
                    deps: ['googleMaps']
                }
            }
        });
    </script>
    <script async type="text/javascript" src="//apps.bazaarvoice.com/deployments/mapactive/main_site/production/id_ID/bv.js"></script>
    <script>
        require([
            'jquery',
            'planetsports'
        ], function ($) {

            $(document).planetsports();

            document.onreadystatechange = function() {
                if (document.readyState === "complete") {
                    $(window).trigger('on.window.load', {
                    });
                }
            }

            setInterval(function(){
                var wishlistCollection = JSON.parse(localStorage.getItem('mage-cache-storage')).wishlist;
                if (typeof wishlistCollection !== 'undefined' && wishlistCollection !== '{}') {
                $('.link.wishlist .counter.qty').text(wishlistCollection.counter);
                }
            }, 2000);
        });
    </script>
    <script async type="text/javascript">
        window.bvCallback = function (BV) {
            if (BV.reviews !== undefined) {
                BV.reviews.on('show', function () {
                                    });
            }
            if (BV.questions !== undefined) {
                BV.questions.on('show', function () {
                                    });
            }
                    };
    </script>
    <script type="text/javascript">
        require(['jquery'], function($) {
            $(document).ready(function(){
                var ajaxMenuUrl = 'https://www.footlocker.id/renderblock/ajax/html/block_type/topheader?main_page_url=' + encodeURIComponent(window.location.href);
                $.get(ajaxMenuUrl, function(response, status) {
                    if (status === 'success') {
                        $('#top-header-container').replaceWith(response);
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        require(['jquery'], function($) {
            $(document).ready(function(){
                var ajaxMenuUrl = 'https://www.footlocker.id/renderblock/ajax/html/block_type/menu/';
                $.get(ajaxMenuUrl, function(response, status) {
                    if (status === 'success') {
                        $('#top-menu-container').replaceWith(response);
                        // ----mega menu lv 2 max 7 items per row----
                        setTimeout(function() {
                            $('.mega-col-level-1 .nav-item.level1').each(function () {
                                var megaColLevel2 = $(this).find(".mega-col-level-2 .nav-item.level2");
                                var separator = $("<div class='menu-side'></div>");
                                $(megaColLevel2).each(function (i) {
                                    if (i % 7 == 0) {
                                        $(this).nextAll().addBack().slice(0, 7).wrapAll(separator);
                                    }
                                });
                            });
                        }, 500);
                        // ----mega menu lv 2 max 7 items per row ends----
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        require(["https://ajax.googleapis.com/ajax/libs/angularjs/1.8.3/angular.min.js"], function () {
            require(["https://ajax.googleapis.com/ajax/libs/angularjs/1.8.3/angular-route.min.js"], function () {
                require(["https://celebrosnlp.com/AutoCompleteV6/Clients/FootlockerInd/output/CelScriptsAC.js"], function() {});
            });
        });
    </script>
    <script>
        require(['jquery'], function ($) {
                $('#btn-view-cart.viewcart').click(function() {
                    alert($(this).attr('data-href'));
                });
            });
    </script>
    <script>
        window.checkout = {"shoppingCartUrl":"https:\/\/www.footlocker.id\/checkout\/cart\/","checkoutUrl":"https:\/\/www.footlocker.id\/checkout\/","updateItemQtyUrl":"https:\/\/www.footlocker.id\/checkout\/sidebar\/updateItemQty\/","removeItemUrl":"https:\/\/www.footlocker.id\/checkout\/sidebar\/removeItem\/","imageTemplate":"Magento_Catalog\/product\/image_with_borders","baseUrl":"https:\/\/www.footlocker.id\/","minicartMaxItemsVisible":2,"websiteId":"1","maxItemsToDisplay":10,"storeId":"2","storeGroupId":"1","customerLoginUrl":"https:\/\/www.footlocker.id\/customer\/account\/login\/referer\/aHR0cHM6Ly93d3cuZm9vdGxvY2tlci5pZC93ZWRuZXNkYXktc3RvbXAtdW5pc2V4LWNsb2ctYmxhY2stOC5odG1sP2NvbG9yPTI5NA%2C%2C\/","isRedirectRequired":false,"autocomplete":"off","isPlpALNEnable":1,"captcha":{"user_login":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"https:\/\/www.footlocker.id\/captcha\/refresh\/","isRequired":false,"timestamp":1728339562}}};
    </script>
    <script type="text/x-magento-init">
        { "[data-block='minicart']": { "Magento_Ui/js/core/app": {"components":{"minicart_content":{"children":{"subtotal.container":{"children":{"subtotal":{"children":{"subtotal.totals":{"config":{"display_cart_subtotal_incl_tax":0,"display_cart_subtotal_excl_tax":1,"template":"Magento_Tax\/checkout\/minicart\/subtotal\/totals"},"component":"Magento_Tax\/js\/view\/checkout\/minicart\/subtotal\/totals","children":{"subtotal.totals.msrp":{"component":"Magento_Msrp\/js\/view\/checkout\/minicart\/subtotal\/totals","config":{"displayArea":"minicart-subtotal-hidden","template":"Magento_Msrp\/checkout\/minicart\/subtotal\/totals"}}}}},"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/subtotal"}}},"component":"uiComponent","config":{"displayArea":"subtotalContainer"}},"item.renderer":{"component":"Magento_Checkout\/js\/view\/cart-item-renderer","config":{"displayArea":"defaultRenderer","template":"Magento_Checkout\/minicart\/item\/default"},"children":{"item.image":{"component":"Magento_Catalog\/js\/view\/image","config":{"template":"Magento_Catalog\/product\/image","displayArea":"itemImage"}},"checkout.cart.item.price.sidebar":{"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/item\/price","displayArea":"priceSidebar"}}}},"extra_info":{"component":"uiComponent","config":{"displayArea":"extraInfo"}},"promotion":{"component":"uiComponent","config":{"displayArea":"promotion"}}},"config":{"itemRenderer":{"default":"defaultRenderer","simple":"defaultRenderer","virtual":"defaultRenderer"},"template":"Magento_Checkout\/minicart\/content"},"component":"Magento_Checkout\/js\/view\/minicart"}},"types":[]}
        }, "*": { "Magento_Ui/js/block-loader": "https\u003A\u002F\u002Fwww.footlocker.id\u002Fstatic\u002Fversion1725472932\u002Ffrontend\u002FFootlocker\u002Fdefault\u002Fid_ID\u002Fimages\u002Floader\u002D1.gif" } }
    </script>
    <script type="text/x-magento-init">
        { "*": { "Magento_Ui/js/core/app": { "components": { "messages": { "component": "Magento_Theme/js/view/messages" } } } } }
    </script>
    <script>
        window.authenticationPopup = {"autocomplete":"off","customerRegisterUrl":"https:\/\/www.footlocker.id\/customer\/account\/create\/","customerForgotPasswordUrl":"https:\/\/www.footlocker.id\/customer\/account\/forgotpassword\/","baseUrl":"https:\/\/www.footlocker.id\/","customerLoginUrl":"https:\/\/www.footlocker.id\/customer\/ajax\/login\/"}
    </script>
    <script type="text/x-magento-init">
        { "#authenticationPopup": { "Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"WeltPixel_SocialLogin\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"}}}}}
        }, "*": { "Magento_Ui/js/block-loader": "https\u003A\u002F\u002Fwww.footlocker.id\u002Fstatic\u002Fversion1725472932\u002Ffrontend\u002FFootlocker\u002Fdefault\u002Fid_ID\u002Fimages\u002Floader\u002D1.gif" } }
    </script>
    <script type="text/x-magento-init">
        { "*": { "Magento_Customer/js/section-config": { "sections": {"stores\/store\/switch":["*"],"stores\/store\/switchrequest":["*"],"directory\/currency\/switch":["*"],"*":["messages"],"customer\/account\/logout":["*","recently_viewed_product","recently_compared_product","persistent","kemana_wishlist"],"customer\/account\/loginpost":["*","kemana_wishlist"],"customer\/account\/createpost":["*"],"customer\/account\/editpost":["*"],"customer\/ajax\/login":["checkout-data","cart","captcha","customer"],"catalog\/product_compare\/add":["compare-products","gtm"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart","ammessages"],"sales\/order\/reorder":["cart","ammessages"],"checkout\/cart\/add":["cart","directory-data","ammessages","gtm","wp_confirmation_popup"],"checkout\/cart\/delete":["cart","ammessages","gtm"],"checkout\/cart\/updatepost":["cart","ammessages"],"checkout\/cart\/updateitemoptions":["cart","ammessages"],"checkout\/cart\/couponpost":["cart","ammessages"],"checkout\/cart\/estimatepost":["cart","ammessages"],"checkout\/cart\/estimateupdatepost":["cart","ammessages"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items","ammessages"],"checkout\/sidebar\/removeitem":["cart","ammessages","gtm"],"checkout\/sidebar\/updateitemqty":["cart","ammessages"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","last-ordered-items","captcha","instant-purchase","ammessages","gtm"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart","captcha","ammessages","gtm"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data","ammessages"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data","instant-purchase","ammessages"],"wishlist\/index\/add":["wishlist","kemana_wishlist","gtm"],"wishlist\/index\/remove":["wishlist","kemana_wishlist"],"wishlist\/index\/updateitemoptions":["wishlist","kemana_wishlist"],"wishlist\/index\/update":["wishlist","kemana_wishlist"],"wishlist\/index\/cart":["wishlist","cart","kemana_wishlist","gtm"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart","gtm"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"giftregistry\/index\/cart":["cart"],"giftregistry\/view\/addtocart":["cart"],"customer_order\/cart\/updatefaileditemoptions":["cart"],"checkout\/cart\/updatefaileditemoptions":["cart"],"customer_order\/cart\/advancedadd":["cart"],"checkout\/cart\/advancedadd":["cart"],"checkout\/cart\/removeallfailed":["cart"],"checkout\/cart\/removefailed":["cart"],"customer_order\/cart\/addfaileditems":["cart"],"checkout\/cart\/addfaileditems":["cart"],"customer_order\/sku\/uploadfile":["cart"],"customer\/address\/*":["instant-purchase"],"customer\/account\/*":["instant-purchase"],"vault\/cards\/deleteaction":["instant-purchase"],"multishipping\/checkout\/overviewpost":["cart","ammessages"],"wishlist\/index\/copyitem":["wishlist"],"wishlist\/index\/copyitems":["wishlist"],"wishlist\/index\/deletewishlist":["wishlist","multiplewishlist"],"wishlist\/index\/createwishlist":["multiplewishlist"],"wishlist\/index\/editwishlist":["multiplewishlist"],"wishlist\/index\/moveitem":["wishlist"],"wishlist\/index\/moveitems":["wishlist"],"wishlist\/search\/addtocart":["cart","wishlist"],"paypal\/express\/placeorder":["cart","checkout-data","ammessages"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data","ammessages"],"paypal\/express\/onauthorization":["cart","checkout-data","ammessages"],"persistent\/index\/unsetcookie":["persistent"],"review\/product\/post":["review"],"gdpr\/customer\/anonymise":["customer"],"amasty_promo\/cart\/add":["cart","ammessages"],"braintree\/paypal\/placeorder":["ammessages","cart","checkout-data"],"authorizenet\/directpost_payment\/place":["ammessages"],"buynow\/cart\/add":["cart"],"customer\/wishlist\/remove":["wishlist"],"reclaim\/checkout\/reload":["cart"],"braintree\/googlepay\/placeorder":["cart","checkout-data"],"checkout\/cart\/configure":["gtm"],"rest\/*\/v1\/guest-carts\/*\/shipping-information":["gtm"],"rest\/*\/v1\/carts\/*\/shipping-information":["gtm"],"weltpixel_quickview\/index\/updatecart":["cart"],"sociallogin\/account\/login":["*"],"sociallogin\/account\/loginpost":["*"]},
        "clientSideSections": ["checkout-data","cart-data"], "baseUrls": ["https:\/\/www.footlocker.id\/"], "sectionNames": ["messages","customer","compare-products","last-ordered-items","cart","directory-data","captcha","wishlist","instant-purchase","loggedAsCustomer","multiplewishlist","persistent","review","ammessages","kemana_wishlist","gtm","wp_confirmation_popup","recently_viewed_product","recently_compared_product","product_data_storage","paypal-billing-agreement"]
        } } }
    </script>
    <script type="text/x-magento-init">
        { "*": { "Magento_Customer/js/customer-data": { "sectionLoadUrl": "https\u003A\u002F\u002Fwww.footlocker.id\u002Fcustomer\u002Fsection\u002Fload\u002F", "expirableSectionLifetime": 60, "expirableSectionNames": ["cart","persistent"], "cookieLifeTime":
        "1800", "updateSessionUrl": "https\u003A\u002F\u002Fwww.footlocker.id\u002Fcustomer\u002Faccount\u002FupdateSession\u002F" } } }
    </script>
    <script type="text/x-magento-init">
        { "*": { "Magento_Customer/js/invalidation-processor": { "invalidationRules": { "website-rule": { "Magento_Customer/js/invalidation-rules/website-rule": { "scopeConfig": { "websiteId": "1" } } } } } } }
    </script>

    <script type="text/x-magento-init">
        { "*": { "Magento_Banner/js/model/banner": {"sectionLoadUrl":"https:\/\/www.footlocker.id\/banner\/ajax\/load\/","cacheTtl":30000} } }
    </script>
    <script type="text/x-magento-init">
        { "body": { "HenriqueKieckbusch_SpeedupPages/js/speedup": { "preload": {"cart":false,"category":true,"pdp":true,"cms":true,"eagerness":"moderate"} } } }
    </script>
    <script>
        if (window.require) {
            require(['jquery', 'Magefan_Blog/js/lib/mfblogunveil', 'domReady!'], function($){
                $('.mfblogunveil').mfblogunveil();
            });
        } else {
            /* e.g. hyva theme */
            document.addEventListener("DOMContentLoaded", function(){
                var items =  document.getElementsByClassName('mfblogunveil');
                var el, url;
                if (items.length) {
                    for (var i=0; i<items.length;i++) {
                        el = items[i];
                        url = el.getAttribute('data-original');
                        if (!url) {
                            continue;
                        }
                        if ('IMG' == el.tagName) {
                            el.src = url;
                        } else {
                            el.style.backgroundImage = "url('" + url  + "')";
                        }
                    }
                }
            });
        }
    </script>

<script type="text/javascript">
    require(['jquery'], function($){
        waitForElement(".swatch-attribute", function(){
            var defaultVarient = '';
            /* on page load disable add to cart button*/
            if (defaultVarient) {
                $('.product-addtocart-button-cls').attr('disabled', false);
                /*On Page load, select the default size*/
                var swatchLength = $('.swatch-attribute').length;
                if (swatchLength >= 1) {
                    if ($('.swatch-attribute').hasClass("size")) {
                        $('.swatch-option[option-id=' + defaultVarient + ']').trigger('click');
                    }
                }
            } else {
                $('.product-addtocart-button-cls').attr('disabled', true);
            }
        });

        function waitForElement(query, callback){
            var poops = setInterval(function(){
                if(document.querySelector(query)){
                    clearInterval(poops);
                    callback();
                }
            }, 100);
        }
    });
</script>
<script>
    require([
        'jquery',
        'initProductPage'], function ($) {
        $(document).initProductPage();
    });
</script>
<script type="text/javascript">
require(["https://ai2.celebros-analytics.com/widgets/CelebrosToolbox.js"], function() {
    anlxCallback = function() {
        var x = '';
    };
    CelebrosAnalytics.customerid  = 'Footlocker';
    CelebrosAnalytics.productsku  = '0886-CCR210214001';
    CelebrosAnalytics.productname = '<?php echo ucwords($title); ?>';
    CelebrosAnalytics.productprice = '10000';
    CelebrosAnalytics.websessionid = 'qppol4ngsk7kq78oj7m5jqiq70';
    CelebrosAnalytics.issecured = true;
    CelebrosAnalytics.AI_LogProduct();
});
</script>
<script>
    require(['jquery', 'jquery/ui'], function($){
        jQuery(document).ready( function() {
            $('.open-chart-bottom').click(function(e){
                $.fancybox.open('#sizechart-id');
                $('html').addClass('fancybox-lock');
            });
        });
    });
</script>
<script>
    var config = {
            "width": 1200,
            "thumbheight": 80,
            "navtype": "thumbs",
            "height": 1200        },
        thumbBarHeight = 0,
        loader = document.querySelectorAll('[data-gallery-role="gallery-placeholder"] [data-role="loader"]')[0];

    if (config.navtype === 'horizontal') {
        thumbBarHeight = config.thumbheight;
    }

    // loader.style.paddingBottom = ( config.height / config.width * 100) + "%";
</script>
x
<script>
    require(['jquery', 'underscore', 'mage/gallery/gallery'], function($, _, gallery){
        'use strict';
        var current_img=1, total_img, progress_info, gallery_api;
        $(function() {
            $('[data-gallery-role=gallery-placeholder]').on('gallery:loaded', function () {
                /* hide first thumb image as its shown in preview */
                $('[data-nav-type=thumb]').eq(0).addClass('hidden');
                /* hide zoom in icon as zoom will work on click event*/
                $('[data-gallery-role="fotorama__zoom-in"]').addClass('hidden');
                $('[data-gallery-role="fotorama__zoom-out"]').addClass('hidden');

                var item = $(document).find('.fotorama-item');
                total_img = $('[data-nav-type=thumb]').length;
                if (total_img < 1 && $('.fotorama__stage__frame .fotorama__img').length > 0) {
                    total_img = $('.fotorama__stage__frame .fotorama__img').length;
                }
                gallery_api = $(this).data('gallery');

                /* function call on fullscreen exit */
                item.on('fotorama:fullscreenexit', function (e, fotorama, extra) {
                    $('.fotorama__thumb-border').removeClass('hidden');
                    $('.gallery__counter').addClass('hidden');
                    /* on fullscreen exit update current img counter to 1 */
                    current_img = 1;
                    /* update preview to first img */
                    updatePreview();
                });

                /* function call on fullscreen enter */
                item.on('fotorama:fullscreenenter', function (e, fotorama, extra) {
                    $('.fotorama__thumb-border').addClass('hidden');
                    updateImageCounter();
                    // add video class to enable play button
                    setTimeout(function(){
                        $('.fotorama--fullscreen .fotorama__stage__frame.video-unplayed').addClass('fotorama-video-container');
                    }, 1000);
                });

                item.on('fotorama:load',function () {
                    $('[data-nav-type=thumb]').eq(0).addClass('hidden');
                    $('.video-thumb-icon').removeClass('hidden');
                    total_img = $('[data-nav-type=thumb]').length;
                    if (total_img < 1 && $('.fotorama__stage__frame .fotorama__img').length > 0) {
                        total_img = $('.fotorama__stage__frame .fotorama__img').length;
                    }

                    if ($(window).width() < 768) {
                        updateImageCounter();
                    }
                });

                /* remove video class bcoz it was stoping video play on fullscreen */
                item.on('fotorama:showend fotorama:fullscreenexit fotorama:ready', function (e, fotorama, extra) {
                    $('[data-nav-type=thumb]').eq(0).addClass('hidden');
                    $('.video-thumb-icon').removeClass('hidden');
                    total_img = $('[data-nav-type=thumb]').length;
                    if (total_img < 1 && $('.fotorama__stage__frame .fotorama__img').length > 0) {
                        total_img = $('.fotorama__stage__frame .fotorama__img').length;
                    }

                    if ($('.fotorama__stage__frame').hasClass('fotorama-video-container')){
                        $('.fotorama__stage__frame').removeClass('fotorama-video-container');
                    }

                    if ($(window).width() < 768) {
                        updateImageCounter(fotorama.activeIndex + 1);
                    }

                    // Update the text to show the current image index and total count
                    var currentIndex = fotorama.activeIndex + 1; // 1-based index
                    var totalImages = fotorama.size;
                    $('.gallery__counter').html(currentIndex + '/' + totalImages);
                });
            });

            if ( /^((?!chrome|android).)*safari/i.test(navigator.userAgent)) {
                $('body').on('touchstart', '[data-gallery-role=arrow]', function () {
                    if($(this).attr("aria-label")=='Next'){
                        current_img = current_img+1
                        if(current_img > total_img){
                            current_img = 1;
                        }
                    } else {
                        current_img = current_img-1
                        if(current_img < 1){
                            current_img = total_img;
                        }
                    }
                    updateImageCounter();
                });
            } else {
                $('body').on('click', '[data-gallery-role=arrow]', function () {
                    if($(this).attr("aria-label")=='Next'){
                        current_img = current_img+1
                        if(current_img > total_img){
                            current_img = 1;
                        }
                    } else {
                        current_img = current_img-1
                        if(current_img < 1){
                            current_img = total_img;
                        }
                    }
                    updateImageCounter();
                });
            }

            $('body').on("swipeleft", function() {
                current_img = current_img+1
                if(current_img > total_img){
                    current_img = 1;
                }
                updateImageCounter();
            });

            $('body').on('swiperight', function() {
                current_img = current_img-1
                if(current_img < 1){
                    current_img = total_img;
                }
                updateImageCounter();
            });

            $('body').on('click', '[data-nav-type=thumb]', function () {
                current_img = $(this).index();
                $('[data-gallery-role=stage-shaft]').children('div').each(function () {
                    updateImageCounter();
                    if ($(this).data('active')) {
                        $(this).trigger('click');
                    }
                });
            });

            /**
             * update preview image to first on fullscreen exit
             */
            function updatePreview() {
                gallery_api.first();
            }

            function updateImageCounter(current_index = 0){
                if (current_index) {
                    current_img = current_index;
                }
                progress_info = current_img+'/'+total_img;
                if($('.gallery__counter').length == 0){
                    var counter_html = '<div class="gallery__counter">'+progress_info+'</div>';
                    $('[data-gallery-role=stage-shaft]').append(counter_html);
                } else {
                    $('.gallery__counter').removeClass('hidden');
                    $('.gallery__counter').html(progress_info);
                }
            }

            /* added to solve gallery thumb img loading issue when click on swatch option*/
            $(document).on('click', '.swatch-option', function () {
                var temp_count = 0;
                $('.fotorama__nav__shaft [data-nav-type="thumb"]').each(function () {

                    if (window.imagesToUpdate[temp_count].type == 'video') {
                        $(this).addClass('video-thumb-icon');
                    }

                    var img_html = '<div class="fotorama__thumb fotorama_vertical_ratio fotorama__loaded fotorama__loaded--img">' +
                        '<img src="' + window.imagesToUpdate[temp_count].thumb + '" class="fotorama__img" aria-hidden="false"></div>';
                    $(this).html(img_html);
                    temp_count++;
                });
                current_img = 1;
            });

            /* on click on image opened fullscreen toggle zoom */
            $(document).on('click', '.fotorama__img--full', function () {
                $(this).dblclick();
            });

            // Zoom the image on clicking on Closer Look
            $('.closer-look').on('click', function () {
                $('.fotorama__nav__shaft .fotorama__active').click();
            });
        });
    });
</script>
<script type="text/x-magento-init">
    {
        "[data-gallery-role=gallery-placeholder]": {
            "Magento_ProductVideo/js/fotorama-add-video-events": {
                "videoData": [{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false}],
                "videoSettings": [{"playIfBase":"0","showRelated":"0","videoAutoRestart":"1"}],
                "optionsVideoData": {"284389":[{"mediaType":"image","videoUrl":null,"isBase":true},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false}],"284390":[{"mediaType":"image","videoUrl":null,"isBase":true},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false}],"284391":[{"mediaType":"image","videoUrl":null,"isBase":true},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false}],"284392":[{"mediaType":"image","videoUrl":null,"isBase":true},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false},{"mediaType":"image","videoUrl":null,"isBase":false}]}            }
        }
    }
</script>
<script>
    requirejs(['jquery'],
        function ($) {
            $(document).ready(function () {
                if ($('.reviews-actions .action.view').length) {
                    var submitReviewUrl = $('.reviews-actions .action.view').attr('href').replace("#reviews", "#review-form");
                    var submitReviewLabel = "Add Your Review";
                    $('<a/>', {
                        class: "action add",
                        href: submitReviewUrl,
                        text: submitReviewLabel
                    }).insertAfter('.reviews-actions .action.view');
                }
            });
        });
</script>

<script>
require([
    'jquery',
], function($){

//<![CDATA[
    $.extend(true, $, {
        calendarConfig: {
            dayNames: ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"],
            dayNamesMin: ["Min","Sen","Sel","Rab","Kam","Jum","Sab"],
            monthNames: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],
            monthNamesShort: ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agt","Sep","Okt","Nov","Des"],
            infoTitle: 'About\u0020the\u0020calendar',
            firstDay: 0,
            closeText: 'Close',
            currentText: 'Go\u0020Today',
            prevText: 'Previous',
            nextText: 'LANJUTKAN',
            weekHeader: 'WK',
            timeText: 'Time',
            hourText: 'Hour',
            minuteText: 'Minute',
            dateFormat: "D, d M yy", // $.datepicker.RFC_2822
            showOn: 'button',
            showAnim: '',
            changeMonth: true,
            changeYear: true,
            buttonImageOnly: null,
            buttonImage: null,
            showButtonPanel: true,
            showWeek: true,
            timeFormat: '',
            showTime: false,
            showHour: false,
            showMinute: false
        }
    });

    enUS = {"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}}; // en_US locale reference
//]]>

});</script>
<script type="text/x-magento-init">
    {
        "#stock_status_label": {
            "Born_StockInfo/js/stock-status-label": {
                "productOptions": {"attributes":{"182":{"id":"182","code":"size","label":"ukuran","options":[{"id":"7651","label":"US M2W4","products":[],"us_label":"M 2"},{"id":"7641","label":"US M3W5","products":[],"us_label":"M 3"},{"id":"1014","label":"US M4W6","products":["284389"],"us_label":"M4"},{"id":"1015","label":"US M5W7","products":["284390"],"us_label":"M5"},{"id":"1016","label":"US M6W8","products":["284391"],"us_label":"M6"},{"id":"1017","label":"US M7W9","products":["284392"],"us_label":"M7"},{"id":"1018","label":"US M8W10","products":[],"us_label":"M8"},{"id":"1019","label":"US M9W11","products":[],"us_label":"M9"}],"position":"2"}},"template":"<%- data.price %>","currencyFormat":"%s","optionPrices":{"284389":{"baseOldPrice":{"amount":10000},"oldPrice":{"amount":10000},"basePrice":{"amount":10000},"finalPrice":{"amount":10000},"tierPrices":[],"msrpPrice":{"amount":0}},"284390":{"baseOldPrice":{"amount":10000},"oldPrice":{"amount":10000},"basePrice":{"amount":10000},"finalPrice":{"amount":10000},"tierPrices":[],"msrpPrice":{"amount":0}},"284391":{"baseOldPrice":{"amount":10000},"oldPrice":{"amount":10000},"basePrice":{"amount":10000},"finalPrice":{"amount":10000},"tierPrices":[],"msrpPrice":{"amount":0}},"284392":{"baseOldPrice":{"amount":10000},"oldPrice":{"amount":10000},"basePrice":{"amount":10000},"finalPrice":{"amount":10000},"tierPrices":[],"msrpPrice":{"amount":0}}},"priceFormat":{"pattern":"Rp. %s","precision":"0","requiredPrecision":"0","decimalSymbol":",","groupSymbol":".","groupLength":3,"integerRequired":true,"currencyCode":null,"showMinus":"before_symbol","symbol":"Rp. ","minusSign":"-"},"prices":{"baseOldPrice":{"amount":10000},"oldPrice":{"amount":10000},"basePrice":{"amount":10000},"finalPrice":{"amount":10000}},"productId":"284395","chooseText":"Choose an Option...","images":{"284389":[{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 1","position":"1","isMain":true,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 2","position":"2","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 3","position":"3","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 4","position":"4","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 5","position":"5","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 6","position":"6","isMain":false,"type":"image","videoUrl":null}],"284390":[{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 1","position":"1","isMain":true,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 2","position":"2","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 3","position":"3","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 4","position":"4","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 5","position":"5","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 6","position":"6","isMain":false,"type":"image","videoUrl":null}],"284391":[{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 1","position":"1","isMain":true,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 2","position":"2","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 3","position":"3","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 4","position":"4","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 5","position":"5","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 6","position":"6","isMain":false,"type":"image","videoUrl":null}],"284392":[{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/1\/01-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 1","position":"1","isMain":true,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/2\/02-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 2","position":"2","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/3\/03-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 3","position":"3","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/4\/04-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 4","position":"4","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/5\/05-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 5","position":"5","isMain":false,"type":"image","videoUrl":null},{"thumb":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e3908b89d7cd4029ef3c5a7812428be8\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","img":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/f57d6f7ebc711fc328170f0ddc174b08\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","full":"https:\/\/www.footlocker.id\/media\/catalog\/product\/cache\/e13c0351dc8369f59bb8d16c2d746c6b\/0\/6\/06-CROCS-FFSSDCCRA-CCR210214001-Black.jpg","caption":"Image 6","position":"6","isMain":false,"type":"image","videoUrl":null}]},"index":{"284389":{"182":"1014"},"284390":{"182":"1015"},"284391":{"182":"1016"},"284392":{"182":"1017"}},"salable":[],"canDisplayShowOutOfStockStatus":false,"channel":"website","salesChannelCode":"base","sku":{"284389":"0886-CCR210214001005M4W","284390":"0886-CCR210214001005M5W","284391":"0886-CCR210214001005M6W","284392":"0886-CCR210214001005M7W"},"label_reload":"https:\/\/www.footlocker.id\/amasty_label\/ajax\/label\/","label_category":".product-image-wrapper, .product-item-photo, .cdz-product-top","label_product":"#amasty-container","original_product_id":"284395","qty":{"284389":1,"284390":2,"284391":1,"284392":1},"skus":{"284389":"0886-CCR210214001005M4W","284390":"0886-CCR210214001005M5W","284391":"0886-CCR210214001005M6W","284392":"0886-CCR210214001005M7W"},"childJson":{"284389":{"182":"1014"},"284390":{"182":"1015"},"284391":{"182":"1016"},"284392":{"182":"1017"}},"pdp_product_return":{"0886-CCR210214001005M4W":"","0886-CCR210214001005M5W":"","0886-CCR210214001005M6W":"","0886-CCR210214001005M7W":""},"pdp_free_shipping":{"0886-CCR210214001005M4W":"<div data-content-type=\"html\" data-appearance=\"default\" data-element=\"main\" data-decoded=\"true\"><div class=\"free-shipping\">\r\n<!--<h3>Gratis Ongkir untuk Semua Pesanan<\/h3> -->\r\n\r\n<div class=\"free-shipping-content\">\r\n<div class=\"fr-sh-ico\">\r\n<img class=\"fr-sh-ico-img\" src=\"https:\/\/www.footlocker.id\/media\/wysiwyg\/truck.png\"\/>\r\n<\/div>\r\n<div class=\"fr-ship-content\">\r\n<h3>GRATIS ONGKIR<\/h3>\r\n<p>Buat pesanan sekarang!<\/p>\r\n<\/div>\r\n<\/div>\r\n<\/div><\/div><style><\/style>","0886-CCR210214001005M5W":"<div data-content-type=\"html\" data-appearance=\"default\" data-element=\"main\" data-decoded=\"true\"><div class=\"free-shipping\">\r\n<!--<h3>Gratis Ongkir untuk Semua Pesanan<\/h3> -->\r\n\r\n<div class=\"free-shipping-content\">\r\n<div class=\"fr-sh-ico\">\r\n<img class=\"fr-sh-ico-img\" src=\"https:\/\/www.footlocker.id\/media\/wysiwyg\/truck.png\"\/>\r\n<\/div>\r\n<div class=\"fr-ship-content\">\r\n<h3>GRATIS ONGKIR<\/h3>\r\n<p>Buat pesanan sekarang!<\/p>\r\n<\/div>\r\n<\/div>\r\n<\/div><\/div><style><\/style>","0886-CCR210214001005M6W":"<div data-content-type=\"html\" data-appearance=\"default\" data-element=\"main\" data-decoded=\"true\"><div class=\"free-shipping\">\r\n<!--<h3>Gratis Ongkir untuk Semua Pesanan<\/h3> -->\r\n\r\n<div class=\"free-shipping-content\">\r\n<div class=\"fr-sh-ico\">\r\n<img class=\"fr-sh-ico-img\" src=\"https:\/\/www.footlocker.id\/media\/wysiwyg\/truck.png\"\/>\r\n<\/div>\r\n<div class=\"fr-ship-content\">\r\n<h3>GRATIS ONGKIR<\/h3>\r\n<p>Buat pesanan sekarang!<\/p>\r\n<\/div>\r\n<\/div>\r\n<\/div><\/div><style><\/style>","0886-CCR210214001005M7W":"<div data-content-type=\"html\" data-appearance=\"default\" data-element=\"main\" data-decoded=\"true\"><div class=\"free-shipping\">\r\n<!--<h3>Gratis Ongkir untuk Semua Pesanan<\/h3> -->\r\n\r\n<div class=\"free-shipping-content\">\r\n<div class=\"fr-sh-ico\">\r\n<img class=\"fr-sh-ico-img\" src=\"https:\/\/www.footlocker.id\/media\/wysiwyg\/truck.png\"\/>\r\n<\/div>\r\n<div class=\"fr-ship-content\">\r\n<h3>GRATIS ONGKIR<\/h3>\r\n<p>Buat pesanan sekarang!<\/p>\r\n<\/div>\r\n<\/div>\r\n<\/div><\/div><style><\/style>"},"pdp_surprise_drop":{"0886-CCR210214001005M4W":"","0886-CCR210214001005M5W":"","0886-CCR210214001005M6W":"","0886-CCR210214001005M7W":""},"default_size_type":"us","country_size_dropdown_status":"0"},
                "productData": {"store_threshold_qty":"1","type":"configurable","threshold_stock":{"284389":[],"284390":[],"284391":[],"284392":[]},"stock_status":{"284389":1,"284390":2,"284391":1,"284392":1}}            }
        }
    }
    </script>
<script type="text/x-magento-init">
    {
        "#instant-purchase": {
            "Magento_Ui/js/core/app": {"components":{"instant-purchase":{"component":"Magento_InstantPurchase\/js\/view\/instant-purchase","config":{"template":"Magento_InstantPurchase\/instant-purchase","buttonText":"Instant Purchase","purchaseUrl":"https:\/\/www.footlocker.id\/instantpurchase\/button\/placeOrder\/"}}}}        }
    }
</script>
<script>
        require([
            'jquery',
            'mage/mage',
            'Magento_Catalog/product/view/validation',
            'Magento_Catalog/js/catalog-add-to-cart'
        ], function ($) {
            'use strict';

            $('#product_addtocart_form').mage('validation', {
                radioCheckboxClosest: '.nested',
                submitHandler: function (form) {
                    var widget = $(form).catalogAddToCart({
                        bindSubmit: false
                    });

                    widget.catalogAddToCart('submitForm', $(form));

                    return false;
                }
            });
        });
    </script>
<script type="text/x-magento-init">
    {
        "body": {
            "addToWishlist": {"productType":"configurable"}        }
    }
</script>
<script>
    window.maxQtyLimit = 10;
</script>
<script type="text/x-magento-init">
    {
        "[data-role=priceBox][data-price-box=product-id-284395]": {
            "priceBox": {
                "priceConfig":  {"productId":284395,"priceFormat":{"pattern":"Rp. %s","precision":"0","requiredPrecision":"0","decimalSymbol":",","groupSymbol":".","groupLength":3,"integerRequired":true,"currencyCode":null,"showMinus":"before_symbol","symbol":"Rp. ","minusSign":"-"},"prices":{"baseOldPrice":{"amount":10000,"adjustments":[]},"oldPrice":{"amount":10000,"adjustments":[]},"basePrice":{"amount":10000,"adjustments":[]},"finalPrice":{"amount":10000,"adjustments":[]}},"idSuffix":"_clone","tierPrices":[],"calculationAlgorithm":"TOTAL_BASE_CALCULATION"}            }
        }
    }
</script>
<script type="text/x-magento-init">
{
    "#available-stores-popup": {
        "Magento_Ui/js/core/app": {
            "components": {
                "available-stores": {
                    "component": "Born_Bopis/js/product/available-stores",
                        "product_id" : 0,
                        "product_qty": 0                }
            }
        }
    }
}
</script>
<script>
    require(['jquery', 'productPage'],
        function ($, productPage) {
            $(function() {
                /** pre-load product reviews */
                window.reviewUrl = 'https://www.footlocker.id/review/product/listAjax/id/284395';
                var tabsLayout = 'tab';
                if (tabsLayout === 'list') {
                    productPage.preLoadProductReviews(function() {});

                /** have to wait until all the images are loaded */
                $('[data-gallery-role=gallery-placeholder]').on('gallery:loaded', function () {
                    $(this).on('fotorama:ready', function(){
                        productPage.scrollToUrlHash(window.location.href);
                    });
                });

                $('.reviews-actions a.action').on('click', function() {
                    productPage.scrollToUrlHash($(this).attr('href'));
                });
                }
            });
        });
</script>
<script>
        require(['jquery', 'owl_carousel', 'owl_config' ],
            function ($) {
                 $(document).ready(function(){
                var products_type = 'upsell',
                    slider_config = {"nav":"1","dots":"1","dotsEach":"0","center":"0","items":"5","stagePadding":"0","status":"1","title":"Anda Mungkin Juga Suka","period":"","show_price":"","show_addto":"","show_wishlist":"","show_compare":"","show_reviews_ratings":"","random_sort":"","loop":"0","margin":"0","slide_by":"1","merge":"","URLhashListener":"","lazyLoad":"0","autoplay":"0","autoplayTimeout":"3000","autoplayHoverPause":"1","navSpeed":"0","dotsSpeed":"0","rtl":"0","nav_design":"1","nav_prev_label":"","nav_next_label":"","nav_brk1":"0","dots_brk1":"0","dotsEach_brk1":"0","items_brk1":"1","center_brk1":"0","stagePadding_brk1":"50","nav_brk2":"0","dots_brk2":"0","dotsEach_brk2":"0","items_brk2":"2","center_brk2":"0","stagePadding_brk2":"50","nav_brk3":"0","dots_brk3":"0","dotsEach_brk3":"0","items_brk3":"5","center_brk3":"0","stagePadding_brk3":"0","nav_brk4":"0","dots_brk4":"0","dotsEach_brk4":"0","items_brk4":"5","center_brk4":"0","stagePadding_brk4":"0"},

                    carouselElement = $('.owl-carousel-products-' + products_type),

                    windowWidth = $(window).width(),
                    carouselWidth = carouselElement.width(),
                    carouselContainer = carouselWidth + 120,

                    items = ((slider_config.items >= 0 && slider_config.items != null) ? slider_config.items : 2),

                    stagePadding = slider_config.stagePadding != '' ? parseInt(slider_config.stagePadding) : 0,

                    sPBrk_1 = slider_config.stagePadding_brk1 != '' ? parseInt(slider_config.stagePadding_brk1) : 0,
                    sPBrk_2 = slider_config.stagePadding_brk2 != '' ? parseInt(slider_config.stagePadding_brk2) : 0,
                    sPBrk_3 = slider_config.stagePadding_brk3 != '' ? parseInt(slider_config.stagePadding_brk3) : 0,
                    sPBrk_4 = slider_config.stagePadding_brk4 != '' ? parseInt(slider_config.stagePadding_brk4) : 0;

                options = {
                    nav                 :parseInt(slider_config.nav) == 1 ? true : false,
                    dots                :parseInt(slider_config.dots) == 1 ? true : false,
                    center              :parseInt(slider_config.center) == 1 ? true : false,
                    items               :items,
                    loop                :parseInt(slider_config.loop) == 1 ? true : false,
                    margin              :parseInt(slider_config.margin) != '' ? parseInt(slider_config.margin) : 0,
                    stagePadding        :parseInt(slider_config.center) == 1 ? 0 : stagePadding,
                    lazyLoad            :parseInt(slider_config.lazyLoad) == 1 ? true : false,
                    autoplay            :parseInt(slider_config.autoplay) == 1 ? true : false,
                    autoplayTimeout     :(slider_config.autoplayTimeout > 0 && slider_config.autoplayTimeout != null) ? parseInt(slider_config.autoplayTimeout) : 3000,
                    autoplayHoverPause  :parseInt(slider_config.autoplayHoverPause) == 1 ? true : false,
                    autoHeight          :false,


                    responsive:{
                        0:{
                            nav             :parseInt(slider_config.nav_brk1) == 1 ? true : false,
                            dots            :parseInt(slider_config.dots_brk1) == 1 ? true : false,
                            items           :(slider_config.items_brk1  >= 0 && slider_config.items_brk1 != null) ? parseFloat(slider_config.items_brk1) : items,
                            center          :parseInt(slider_config.center_brk1) == 1 ? true : false,
                            stagePadding    :parseInt(slider_config.center) == 1 ? 0 : sPBrk_1,
                        },
                       600:{
                            nav             :parseInt(slider_config.nav_brk2) == 1 ? true : false,
                            dots            :parseInt(slider_config.dots_brk2) == 1 ? true : false,
                            items           :(slider_config.items_brk2  >= 0 && slider_config.items_brk2 != null) ? parseFloat(slider_config.items_brk2) : items,
                            center          :parseInt(slider_config.center_brk2) == 1 ? true : false,
                            stagePadding    :parseInt(slider_config.center) == 1 ? 0 : sPBrk_2,
                        },
                        1000:{
                            nav             :parseInt(slider_config.nav_brk3) == 1 ? true : false,
                            dots            :parseInt(slider_config.dots_brk3) == 1 ? true : false,
                            items           :(slider_config.items_brk3  >= 0 && slider_config.items_brk3 != null) ? parseFloat(slider_config.items_brk3) : items,
                            center          :parseInt(slider_config.center_brk3) == 1 ? true : false,
                            stagePadding    :parseInt(slider_config.center) == 1 ? 0 : sPBrk_3,
                        },
                        1280:{
                            nav             :parseInt(slider_config.nav_brk4) == 1 ? true : false,
                            dots            :parseInt(slider_config.dots_brk4) == 1 ? true : false,
                            items           :(slider_config.items_brk4  >= 0 && slider_config.items_brk4 != null) ? parseFloat(slider_config.items_brk4) : items,
                            center          :parseInt(slider_config.center_brk4) == 1 ? true : false,
                            stagePadding    :parseInt(slider_config.center) == 1 ? 0 : sPBrk_4,
                        }
                    }


                };

                // workaround for owl carousel
                // track window for owl breakpoint
                $(window).on('resize', (function (){

                    var ww = $( window ).width();

                    var sResp1 = 0;
                    var sResp2 = 600;
                    var sResp3 = 1000;
                    var sResp4 = 1280;

                    var navBtnL = carouselElement.find('.owl-prev');
                    var navBtnR = carouselElement.find('.owl-next');
                    if((ww >= sResp4 && slider_config.nav_brk4 != 1)
                        || (ww >= sResp3 && ww < sResp4 && slider_config.nav_brk3 != 1)
                        || (ww >= sResp2 && ww < sResp3 && slider_config.nav_brk2 != 1)
                        || (ww >= sResp1 && ww < sResp2 && slider_config.nav_brk1 != 1)
                    ){
                        navBtnL.css('display', 'none');
                        navBtnR.css('display', 'none');
                    }
                }));

                // fix nav buttons display on load even when set as false
                setTimeout(function(){
                 $(window).trigger('resize');
                }, 100);
                carouselElement.owlCarousel(options);

                var carouselControls = carouselElement.find('.owl-nav');

                if (carouselContainer >= windowWidth) {

                    carouselControls.find('.owl-prev').css({
                        'left': 0,
                        'top': -15
                    });
                    carouselControls.find('.owl-next').css({
                        'right': 0,
                        'top': -15
                    });
                }

            });
        });
    </script>
<script type="text/x-magento-init">
                                {
                                    "*" : {
                                         "WeltPixel_OwlCarouselSlider/js/wishlist":
                                                {
                                                    "productId": "162944"
                                                }
                                    }
                                }
                            </script>
<script type="text/x-magento-init">
                                {
                                    "*" : {
                                         "WeltPixel_OwlCarouselSlider/js/wishlist":
                                                {
                                                    "productId": "47615"
                                                }
                                    }
                                }
                            </script>
<script type="text/x-magento-init">
                                {
                                    "*" : {
                                         "WeltPixel_OwlCarouselSlider/js/wishlist":
                                                {
                                                    "productId": "48531"
                                                }
                                    }
                                }
                            </script>
<script type="text/x-magento-init">
                                {
                                    "*" : {
                                         "WeltPixel_OwlCarouselSlider/js/wishlist":
                                                {
                                                    "productId": "45386"
                                                }
                                    }
                                }
                            </script>
<script type="text/x-magento-init">
                                {
                                    "*" : {
                                         "WeltPixel_OwlCarouselSlider/js/wishlist":
                                                {
                                                    "productId": "162955"
                                                }
                                    }
                                }
                            </script>
<script type="text/x-magento-init">
    {
        "#recently_viewed": {
            "owlAjax": {
                "ajaxUrl": "https://www.footlocker.id/ajaxowl/recentlyviewed/index/",
                "requestType": "recently_viewed",
                "productId": "284395"
            }
        }

    }
    </script>
<script>require(['jquery'], function($) {
    // As per requested by Asep, hiding the complete price filter
    if ($(".price-filter")) {
        $(".price-filter").parent().parent().hide();
    }

    /**
     * PSD-63696 - HotFix for customer login issue
     */
    var checkRefererInterval;
    checkRefererInterval = setInterval(function () {
        var loaderContainer = $('.authorization-link a');
        if (loaderContainer.length < 1) {
                return;
        }
        if (loaderContainer.length >= 1 ) {
            clearInterval(checkRefererInterval);
            $(".authorization-link a").attr("href", $(".authorization-link a").attr("href").replace("%2C", ""));
        }
    }, 100);

    $(document).on('click', '.custom', function () {
        $(this).closest(".nav-item.parent").removeClass("current");
        $(".nav-anchor").removeClass("actived");
    });

    $('body').contents().filter(function() {
        return $.trim(this.textContent) == "n";
    }).remove();
});
</script>

</body>

</html>
