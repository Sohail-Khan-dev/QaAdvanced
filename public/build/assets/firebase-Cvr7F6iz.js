const ct=()=>{};var ce={};/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const De=function(e){const t=[];let n=0;for(let r=0;r<e.length;r++){let a=e.charCodeAt(r);a<128?t[n++]=a:a<2048?(t[n++]=a>>6|192,t[n++]=a&63|128):(a&64512)===55296&&r+1<e.length&&(e.charCodeAt(r+1)&64512)===56320?(a=65536+((a&1023)<<10)+(e.charCodeAt(++r)&1023),t[n++]=a>>18|240,t[n++]=a>>12&63|128,t[n++]=a>>6&63|128,t[n++]=a&63|128):(t[n++]=a>>12|224,t[n++]=a>>6&63|128,t[n++]=a&63|128)}return t},lt=function(e){const t=[];let n=0,r=0;for(;n<e.length;){const a=e[n++];if(a<128)t[r++]=String.fromCharCode(a);else if(a>191&&a<224){const i=e[n++];t[r++]=String.fromCharCode((a&31)<<6|i&63)}else if(a>239&&a<365){const i=e[n++],s=e[n++],o=e[n++],c=((a&7)<<18|(i&63)<<12|(s&63)<<6|o&63)-65536;t[r++]=String.fromCharCode(55296+(c>>10)),t[r++]=String.fromCharCode(56320+(c&1023))}else{const i=e[n++],s=e[n++];t[r++]=String.fromCharCode((a&15)<<12|(i&63)<<6|s&63)}}return t.join("")},Ce={byteToCharMap_:null,charToByteMap_:null,byteToCharMapWebSafe_:null,charToByteMapWebSafe_:null,ENCODED_VALS_BASE:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",get ENCODED_VALS(){return this.ENCODED_VALS_BASE+"+/="},get ENCODED_VALS_WEBSAFE(){return this.ENCODED_VALS_BASE+"-_."},HAS_NATIVE_SUPPORT:typeof atob=="function",encodeByteArray(e,t){if(!Array.isArray(e))throw Error("encodeByteArray takes an array as a parameter");this.init_();const n=t?this.byteToCharMapWebSafe_:this.byteToCharMap_,r=[];for(let a=0;a<e.length;a+=3){const i=e[a],s=a+1<e.length,o=s?e[a+1]:0,c=a+2<e.length,l=c?e[a+2]:0,f=i>>2,h=(i&3)<<4|o>>4;let y=(o&15)<<2|l>>6,p=l&63;c||(p=64,s||(y=64)),r.push(n[f],n[h],n[y],n[p])}return r.join("")},encodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?btoa(e):this.encodeByteArray(De(e),t)},decodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?atob(e):lt(this.decodeStringToByteArray(e,t))},decodeStringToByteArray(e,t){this.init_();const n=t?this.charToByteMapWebSafe_:this.charToByteMap_,r=[];for(let a=0;a<e.length;){const i=n[e.charAt(a++)],o=a<e.length?n[e.charAt(a)]:0;++a;const l=a<e.length?n[e.charAt(a)]:64;++a;const h=a<e.length?n[e.charAt(a)]:64;if(++a,i==null||o==null||l==null||h==null)throw new dt;const y=i<<2|o>>4;if(r.push(y),l!==64){const p=o<<4&240|l>>2;if(r.push(p),h!==64){const ot=l<<6&192|h;r.push(ot)}}}return r},init_(){if(!this.byteToCharMap_){this.byteToCharMap_={},this.charToByteMap_={},this.byteToCharMapWebSafe_={},this.charToByteMapWebSafe_={};for(let e=0;e<this.ENCODED_VALS.length;e++)this.byteToCharMap_[e]=this.ENCODED_VALS.charAt(e),this.charToByteMap_[this.byteToCharMap_[e]]=e,this.byteToCharMapWebSafe_[e]=this.ENCODED_VALS_WEBSAFE.charAt(e),this.charToByteMapWebSafe_[this.byteToCharMapWebSafe_[e]]=e,e>=this.ENCODED_VALS_BASE.length&&(this.charToByteMap_[this.ENCODED_VALS_WEBSAFE.charAt(e)]=e,this.charToByteMapWebSafe_[this.ENCODED_VALS.charAt(e)]=e)}}};class dt extends Error{constructor(){super(...arguments),this.name="DecodeBase64StringError"}}const ut=function(e){const t=De(e);return Ce.encodeByteArray(t,!0)},Oe=function(e){return ut(e).replace(/\./g,"")},ft=function(e){try{return Ce.decodeString(e,!0)}catch(t){console.error("base64Decode failed: ",t)}return null};/**
 * @license
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function ht(){if(typeof self<"u")return self;if(typeof window<"u")return window;if(typeof global<"u")return global;throw new Error("Unable to locate global object.")}/**
 * @license
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const pt=()=>ht().__FIREBASE_DEFAULTS__,gt=()=>{if(typeof process>"u"||typeof ce>"u")return;const e=ce.__FIREBASE_DEFAULTS__;if(e)return JSON.parse(e)},mt=()=>{if(typeof document>"u")return;let e;try{e=document.cookie.match(/__FIREBASE_DEFAULTS__=([^;]+)/)}catch{return}const t=e&&ft(e[1]);return t&&JSON.parse(t)},bt=()=>{try{return ct()||pt()||gt()||mt()}catch(e){console.info(`Unable to get __FIREBASE_DEFAULTS__ due to: ${e}`);return}},Re=()=>{var e;return(e=bt())===null||e===void 0?void 0:e.config};/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class yt{constructor(){this.reject=()=>{},this.resolve=()=>{},this.promise=new Promise((t,n)=>{this.resolve=t,this.reject=n})}wrapCallback(t){return(n,r)=>{n?this.reject(n):this.resolve(r),typeof t=="function"&&(this.promise.catch(()=>{}),t.length===1?t(n):t(n,r))}}}function wt(){const e=typeof chrome=="object"?chrome.runtime:typeof browser=="object"?browser.runtime:void 0;return typeof e=="object"&&e.id!==void 0}function ke(){try{return typeof indexedDB=="object"}catch{return!1}}function Be(){return new Promise((e,t)=>{try{let n=!0;const r="validate-browser-context-for-indexeddb-analytics-module",a=self.indexedDB.open(r);a.onsuccess=()=>{a.result.close(),n||self.indexedDB.deleteDatabase(r),e(!0)},a.onupgradeneeded=()=>{n=!1},a.onerror=()=>{var i;t(((i=a.error)===null||i===void 0?void 0:i.message)||"")}}catch(n){t(n)}})}function It(){return!(typeof navigator>"u"||!navigator.cookieEnabled)}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const _t="FirebaseError";class R extends Error{constructor(t,n,r){super(n),this.code=t,this.customData=r,this.name=_t,Object.setPrototypeOf(this,R.prototype),Error.captureStackTrace&&Error.captureStackTrace(this,P.prototype.create)}}class P{constructor(t,n,r){this.service=t,this.serviceName=n,this.errors=r}create(t,...n){const r=n[0]||{},a=`${this.service}/${t}`,i=this.errors[t],s=i?Et(i,r):"Error",o=`${this.serviceName}: ${s} (${a}).`;return new R(a,o,r)}}function Et(e,t){return e.replace(vt,(n,r)=>{const a=t[r];return a!=null?String(a):`<${r}?>`})}const vt=/\{\$([^}]+)}/g;function B(e,t){if(e===t)return!0;const n=Object.keys(e),r=Object.keys(t);for(const a of n){if(!r.includes(a))return!1;const i=e[a],s=t[a];if(le(i)&&le(s)){if(!B(i,s))return!1}else if(i!==s)return!1}for(const a of r)if(!n.includes(a))return!1;return!0}function le(e){return e!==null&&typeof e=="object"}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const At=1e3,St=2,Tt=4*60*60*1e3,Dt=.5;function de(e,t=At,n=St){const r=t*Math.pow(n,e),a=Math.round(Dt*r*(Math.random()-.5)*2);return Math.min(Tt,r+a)}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function N(e){return e&&e._delegate?e._delegate:e}class v{constructor(t,n,r){this.name=t,this.instanceFactory=n,this.type=r,this.multipleInstances=!1,this.serviceProps={},this.instantiationMode="LAZY",this.onInstanceCreated=null}setInstantiationMode(t){return this.instantiationMode=t,this}setMultipleInstances(t){return this.multipleInstances=t,this}setServiceProps(t){return this.serviceProps=t,this}setInstanceCreatedCallback(t){return this.onInstanceCreated=t,this}}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const A="[DEFAULT]";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class Ct{constructor(t,n){this.name=t,this.container=n,this.component=null,this.instances=new Map,this.instancesDeferred=new Map,this.instancesOptions=new Map,this.onInitCallbacks=new Map}get(t){const n=this.normalizeInstanceIdentifier(t);if(!this.instancesDeferred.has(n)){const r=new yt;if(this.instancesDeferred.set(n,r),this.isInitialized(n)||this.shouldAutoInitialize())try{const a=this.getOrInitializeService({instanceIdentifier:n});a&&r.resolve(a)}catch{}}return this.instancesDeferred.get(n).promise}getImmediate(t){var n;const r=this.normalizeInstanceIdentifier(t==null?void 0:t.identifier),a=(n=t==null?void 0:t.optional)!==null&&n!==void 0?n:!1;if(this.isInitialized(r)||this.shouldAutoInitialize())try{return this.getOrInitializeService({instanceIdentifier:r})}catch(i){if(a)return null;throw i}else{if(a)return null;throw Error(`Service ${this.name} is not available`)}}getComponent(){return this.component}setComponent(t){if(t.name!==this.name)throw Error(`Mismatching Component ${t.name} for Provider ${this.name}.`);if(this.component)throw Error(`Component for ${this.name} has already been provided`);if(this.component=t,!!this.shouldAutoInitialize()){if(Rt(t))try{this.getOrInitializeService({instanceIdentifier:A})}catch{}for(const[n,r]of this.instancesDeferred.entries()){const a=this.normalizeInstanceIdentifier(n);try{const i=this.getOrInitializeService({instanceIdentifier:a});r.resolve(i)}catch{}}}}clearInstance(t=A){this.instancesDeferred.delete(t),this.instancesOptions.delete(t),this.instances.delete(t)}async delete(){const t=Array.from(this.instances.values());await Promise.all([...t.filter(n=>"INTERNAL"in n).map(n=>n.INTERNAL.delete()),...t.filter(n=>"_delete"in n).map(n=>n._delete())])}isComponentSet(){return this.component!=null}isInitialized(t=A){return this.instances.has(t)}getOptions(t=A){return this.instancesOptions.get(t)||{}}initialize(t={}){const{options:n={}}=t,r=this.normalizeInstanceIdentifier(t.instanceIdentifier);if(this.isInitialized(r))throw Error(`${this.name}(${r}) has already been initialized`);if(!this.isComponentSet())throw Error(`Component ${this.name} has not been registered yet`);const a=this.getOrInitializeService({instanceIdentifier:r,options:n});for(const[i,s]of this.instancesDeferred.entries()){const o=this.normalizeInstanceIdentifier(i);r===o&&s.resolve(a)}return a}onInit(t,n){var r;const a=this.normalizeInstanceIdentifier(n),i=(r=this.onInitCallbacks.get(a))!==null&&r!==void 0?r:new Set;i.add(t),this.onInitCallbacks.set(a,i);const s=this.instances.get(a);return s&&t(s,a),()=>{i.delete(t)}}invokeOnInitCallbacks(t,n){const r=this.onInitCallbacks.get(n);if(r)for(const a of r)try{a(t,n)}catch{}}getOrInitializeService({instanceIdentifier:t,options:n={}}){let r=this.instances.get(t);if(!r&&this.component&&(r=this.component.instanceFactory(this.container,{instanceIdentifier:Ot(t),options:n}),this.instances.set(t,r),this.instancesOptions.set(t,n),this.invokeOnInitCallbacks(r,t),this.component.onInstanceCreated))try{this.component.onInstanceCreated(this.container,t,r)}catch{}return r||null}normalizeInstanceIdentifier(t=A){return this.component?this.component.multipleInstances?t:A:t}shouldAutoInitialize(){return!!this.component&&this.component.instantiationMode!=="EXPLICIT"}}function Ot(e){return e===A?void 0:e}function Rt(e){return e.instantiationMode==="EAGER"}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class kt{constructor(t){this.name=t,this.providers=new Map}addComponent(t){const n=this.getProvider(t.name);if(n.isComponentSet())throw new Error(`Component ${t.name} has already been registered with ${this.name}`);n.setComponent(t)}addOrOverwriteComponent(t){this.getProvider(t.name).isComponentSet()&&this.providers.delete(t.name),this.addComponent(t)}getProvider(t){if(this.providers.has(t))return this.providers.get(t);const n=new Ct(t,this);return this.providers.set(t,n),n}getProviders(){return Array.from(this.providers.values())}}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */var d;(function(e){e[e.DEBUG=0]="DEBUG",e[e.VERBOSE=1]="VERBOSE",e[e.INFO=2]="INFO",e[e.WARN=3]="WARN",e[e.ERROR=4]="ERROR",e[e.SILENT=5]="SILENT"})(d||(d={}));const Bt={debug:d.DEBUG,verbose:d.VERBOSE,info:d.INFO,warn:d.WARN,error:d.ERROR,silent:d.SILENT},Mt=d.INFO,$t={[d.DEBUG]:"log",[d.VERBOSE]:"log",[d.INFO]:"info",[d.WARN]:"warn",[d.ERROR]:"error"},Ft=(e,t,...n)=>{if(t<e.logLevel)return;const r=new Date().toISOString(),a=$t[t];if(a)console[a](`[${r}]  ${e.name}:`,...n);else throw new Error(`Attempted to log a message with an invalid logType (value: ${t})`)};class Me{constructor(t){this.name=t,this._logLevel=Mt,this._logHandler=Ft,this._userLogHandler=null}get logLevel(){return this._logLevel}set logLevel(t){if(!(t in d))throw new TypeError(`Invalid value "${t}" assigned to \`logLevel\``);this._logLevel=t}setLogLevel(t){this._logLevel=typeof t=="string"?Bt[t]:t}get logHandler(){return this._logHandler}set logHandler(t){if(typeof t!="function")throw new TypeError("Value assigned to `logHandler` must be a function");this._logHandler=t}get userLogHandler(){return this._userLogHandler}set userLogHandler(t){this._userLogHandler=t}debug(...t){this._userLogHandler&&this._userLogHandler(this,d.DEBUG,...t),this._logHandler(this,d.DEBUG,...t)}log(...t){this._userLogHandler&&this._userLogHandler(this,d.VERBOSE,...t),this._logHandler(this,d.VERBOSE,...t)}info(...t){this._userLogHandler&&this._userLogHandler(this,d.INFO,...t),this._logHandler(this,d.INFO,...t)}warn(...t){this._userLogHandler&&this._userLogHandler(this,d.WARN,...t),this._logHandler(this,d.WARN,...t)}error(...t){this._userLogHandler&&this._userLogHandler(this,d.ERROR,...t),this._logHandler(this,d.ERROR,...t)}}const Pt=(e,t)=>t.some(n=>e instanceof n);let ue,fe;function Nt(){return ue||(ue=[IDBDatabase,IDBObjectStore,IDBIndex,IDBCursor,IDBTransaction])}function Lt(){return fe||(fe=[IDBCursor.prototype.advance,IDBCursor.prototype.continue,IDBCursor.prototype.continuePrimaryKey])}const $e=new WeakMap,Y=new WeakMap,Fe=new WeakMap,U=new WeakMap,ne=new WeakMap;function xt(e){const t=new Promise((n,r)=>{const a=()=>{e.removeEventListener("success",i),e.removeEventListener("error",s)},i=()=>{n(I(e.result)),a()},s=()=>{r(e.error),a()};e.addEventListener("success",i),e.addEventListener("error",s)});return t.then(n=>{n instanceof IDBCursor&&$e.set(n,e)}).catch(()=>{}),ne.set(t,e),t}function jt(e){if(Y.has(e))return;const t=new Promise((n,r)=>{const a=()=>{e.removeEventListener("complete",i),e.removeEventListener("error",s),e.removeEventListener("abort",s)},i=()=>{n(),a()},s=()=>{r(e.error||new DOMException("AbortError","AbortError")),a()};e.addEventListener("complete",i),e.addEventListener("error",s),e.addEventListener("abort",s)});Y.set(e,t)}let J={get(e,t,n){if(e instanceof IDBTransaction){if(t==="done")return Y.get(e);if(t==="objectStoreNames")return e.objectStoreNames||Fe.get(e);if(t==="store")return n.objectStoreNames[1]?void 0:n.objectStore(n.objectStoreNames[0])}return I(e[t])},set(e,t,n){return e[t]=n,!0},has(e,t){return e instanceof IDBTransaction&&(t==="done"||t==="store")?!0:t in e}};function Ht(e){J=e(J)}function Ut(e){return e===IDBDatabase.prototype.transaction&&!("objectStoreNames"in IDBTransaction.prototype)?function(t,...n){const r=e.call(V(this),t,...n);return Fe.set(r,t.sort?t.sort():[t]),I(r)}:Lt().includes(e)?function(...t){return e.apply(V(this),t),I($e.get(this))}:function(...t){return I(e.apply(V(this),t))}}function Vt(e){return typeof e=="function"?Ut(e):(e instanceof IDBTransaction&&jt(e),Pt(e,Nt())?new Proxy(e,J):e)}function I(e){if(e instanceof IDBRequest)return xt(e);if(U.has(e))return U.get(e);const t=Vt(e);return t!==e&&(U.set(e,t),ne.set(t,e)),t}const V=e=>ne.get(e);function Pe(e,t,{blocked:n,upgrade:r,blocking:a,terminated:i}={}){const s=indexedDB.open(e,t),o=I(s);return r&&s.addEventListener("upgradeneeded",c=>{r(I(s.result),c.oldVersion,c.newVersion,I(s.transaction),c)}),n&&s.addEventListener("blocked",c=>n(c.oldVersion,c.newVersion,c)),o.then(c=>{i&&c.addEventListener("close",()=>i()),a&&c.addEventListener("versionchange",l=>a(l.oldVersion,l.newVersion,l))}).catch(()=>{}),o}const zt=["get","getKey","getAll","getAllKeys","count"],Wt=["put","add","delete","clear"],z=new Map;function he(e,t){if(!(e instanceof IDBDatabase&&!(t in e)&&typeof t=="string"))return;if(z.get(t))return z.get(t);const n=t.replace(/FromIndex$/,""),r=t!==n,a=Wt.includes(n);if(!(n in(r?IDBIndex:IDBObjectStore).prototype)||!(a||zt.includes(n)))return;const i=async function(s,...o){const c=this.transaction(s,a?"readwrite":"readonly");let l=c.store;return r&&(l=l.index(o.shift())),(await Promise.all([l[n](...o),a&&c.done]))[0]};return z.set(t,i),i}Ht(e=>({...e,get:(t,n,r)=>he(t,n)||e.get(t,n,r),has:(t,n)=>!!he(t,n)||e.has(t,n)}));/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class qt{constructor(t){this.container=t}getPlatformInfoString(){return this.container.getProviders().map(n=>{if(Gt(n)){const r=n.getImmediate();return`${r.library}/${r.version}`}else return null}).filter(n=>n).join(" ")}}function Gt(e){const t=e.getComponent();return(t==null?void 0:t.type)==="VERSION"}const X="@firebase/app",pe="0.13.2";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const w=new Me("@firebase/app"),Kt="@firebase/app-compat",Yt="@firebase/analytics-compat",Jt="@firebase/analytics",Xt="@firebase/app-check-compat",Qt="@firebase/app-check",Zt="@firebase/auth",en="@firebase/auth-compat",tn="@firebase/database",nn="@firebase/data-connect",rn="@firebase/database-compat",an="@firebase/functions",sn="@firebase/functions-compat",on="@firebase/installations",cn="@firebase/installations-compat",ln="@firebase/messaging",dn="@firebase/messaging-compat",un="@firebase/performance",fn="@firebase/performance-compat",hn="@firebase/remote-config",pn="@firebase/remote-config-compat",gn="@firebase/storage",mn="@firebase/storage-compat",bn="@firebase/firestore",yn="@firebase/ai",wn="@firebase/firestore-compat",In="firebase";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Q="[DEFAULT]",_n={[X]:"fire-core",[Kt]:"fire-core-compat",[Jt]:"fire-analytics",[Yt]:"fire-analytics-compat",[Qt]:"fire-app-check",[Xt]:"fire-app-check-compat",[Zt]:"fire-auth",[en]:"fire-auth-compat",[tn]:"fire-rtdb",[nn]:"fire-data-connect",[rn]:"fire-rtdb-compat",[an]:"fire-fn",[sn]:"fire-fn-compat",[on]:"fire-iid",[cn]:"fire-iid-compat",[ln]:"fire-fcm",[dn]:"fire-fcm-compat",[un]:"fire-perf",[fn]:"fire-perf-compat",[hn]:"fire-rc",[pn]:"fire-rc-compat",[gn]:"fire-gcs",[mn]:"fire-gcs-compat",[bn]:"fire-fst",[wn]:"fire-fst-compat",[yn]:"fire-vertex","fire-js":"fire-js",[In]:"fire-js-all"};/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const M=new Map,En=new Map,Z=new Map;function ge(e,t){try{e.container.addComponent(t)}catch(n){w.debug(`Component ${t.name} failed to register with FirebaseApp ${e.name}`,n)}}function D(e){const t=e.name;if(Z.has(t))return w.debug(`There were multiple attempts to register component ${t}.`),!1;Z.set(t,e);for(const n of M.values())ge(n,e);for(const n of En.values())ge(n,e);return!0}function L(e,t){const n=e.container.getProvider("heartbeat").getImmediate({optional:!0});return n&&n.triggerHeartbeat(),e.container.getProvider(t)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const vn={"no-app":"No Firebase App '{$appName}' has been created - call initializeApp() first","bad-app-name":"Illegal App name: '{$appName}'","duplicate-app":"Firebase App named '{$appName}' already exists with different options or config","app-deleted":"Firebase App named '{$appName}' already deleted","server-app-deleted":"Firebase Server App has been deleted","no-options":"Need to provide options, when not being deployed to hosting via source.","invalid-app-argument":"firebase.{$appName}() takes either no argument or a Firebase App instance.","invalid-log-argument":"First argument to `onLog` must be null or a function.","idb-open":"Error thrown when opening IndexedDB. Original error: {$originalErrorMessage}.","idb-get":"Error thrown when reading from IndexedDB. Original error: {$originalErrorMessage}.","idb-set":"Error thrown when writing to IndexedDB. Original error: {$originalErrorMessage}.","idb-delete":"Error thrown when deleting from IndexedDB. Original error: {$originalErrorMessage}.","finalization-registry-not-supported":"FirebaseServerApp deleteOnDeref field defined but the JS runtime does not support FinalizationRegistry.","invalid-server-app-environment":"FirebaseServerApp is not for use in browser environments."},_=new P("app","Firebase",vn);/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class An{constructor(t,n,r){this._isDeleted=!1,this._options=Object.assign({},t),this._config=Object.assign({},n),this._name=n.name,this._automaticDataCollectionEnabled=n.automaticDataCollectionEnabled,this._container=r,this.container.addComponent(new v("app",()=>this,"PUBLIC"))}get automaticDataCollectionEnabled(){return this.checkDestroyed(),this._automaticDataCollectionEnabled}set automaticDataCollectionEnabled(t){this.checkDestroyed(),this._automaticDataCollectionEnabled=t}get name(){return this.checkDestroyed(),this._name}get options(){return this.checkDestroyed(),this._options}get config(){return this.checkDestroyed(),this._config}get container(){return this._container}get isDeleted(){return this._isDeleted}set isDeleted(t){this._isDeleted=t}checkDestroyed(){if(this.isDeleted)throw _.create("app-deleted",{appName:this._name})}}function Ne(e,t={}){let n=e;typeof t!="object"&&(t={name:t});const r=Object.assign({name:Q,automaticDataCollectionEnabled:!0},t),a=r.name;if(typeof a!="string"||!a)throw _.create("bad-app-name",{appName:String(a)});if(n||(n=Re()),!n)throw _.create("no-options");const i=M.get(a);if(i){if(B(n,i.options)&&B(r,i.config))return i;throw _.create("duplicate-app",{appName:a})}const s=new kt(a);for(const c of Z.values())s.addComponent(c);const o=new An(n,r,s);return M.set(a,o),o}function Sn(e=Q){const t=M.get(e);if(!t&&e===Q&&Re())return Ne();if(!t)throw _.create("no-app",{appName:e});return t}function E(e,t,n){var r;let a=(r=_n[e])!==null&&r!==void 0?r:e;n&&(a+=`-${n}`);const i=a.match(/\s|\//),s=t.match(/\s|\//);if(i||s){const o=[`Unable to register library "${a}" with version "${t}":`];i&&o.push(`library name "${a}" contains illegal characters (whitespace or "/")`),i&&s&&o.push("and"),s&&o.push(`version name "${t}" contains illegal characters (whitespace or "/")`),w.warn(o.join(" "));return}D(new v(`${a}-version`,()=>({library:a,version:t}),"VERSION"))}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Tn="firebase-heartbeat-database",Dn=1,k="firebase-heartbeat-store";let W=null;function Le(){return W||(W=Pe(Tn,Dn,{upgrade:(e,t)=>{switch(t){case 0:try{e.createObjectStore(k)}catch(n){console.warn(n)}}}}).catch(e=>{throw _.create("idb-open",{originalErrorMessage:e.message})})),W}async function Cn(e){try{const n=(await Le()).transaction(k),r=await n.objectStore(k).get(xe(e));return await n.done,r}catch(t){if(t instanceof R)w.warn(t.message);else{const n=_.create("idb-get",{originalErrorMessage:t==null?void 0:t.message});w.warn(n.message)}}}async function me(e,t){try{const r=(await Le()).transaction(k,"readwrite");await r.objectStore(k).put(t,xe(e)),await r.done}catch(n){if(n instanceof R)w.warn(n.message);else{const r=_.create("idb-set",{originalErrorMessage:n==null?void 0:n.message});w.warn(r.message)}}}function xe(e){return`${e.name}!${e.options.appId}`}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const On=1024,Rn=30;class kn{constructor(t){this.container=t,this._heartbeatsCache=null;const n=this.container.getProvider("app").getImmediate();this._storage=new Mn(n),this._heartbeatsCachePromise=this._storage.read().then(r=>(this._heartbeatsCache=r,r))}async triggerHeartbeat(){var t,n;try{const a=this.container.getProvider("platform-logger").getImmediate().getPlatformInfoString(),i=be();if(((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null&&(this._heartbeatsCache=await this._heartbeatsCachePromise,((n=this._heartbeatsCache)===null||n===void 0?void 0:n.heartbeats)==null)||this._heartbeatsCache.lastSentHeartbeatDate===i||this._heartbeatsCache.heartbeats.some(s=>s.date===i))return;if(this._heartbeatsCache.heartbeats.push({date:i,agent:a}),this._heartbeatsCache.heartbeats.length>Rn){const s=$n(this._heartbeatsCache.heartbeats);this._heartbeatsCache.heartbeats.splice(s,1)}return this._storage.overwrite(this._heartbeatsCache)}catch(r){w.warn(r)}}async getHeartbeatsHeader(){var t;try{if(this._heartbeatsCache===null&&await this._heartbeatsCachePromise,((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null||this._heartbeatsCache.heartbeats.length===0)return"";const n=be(),{heartbeatsToSend:r,unsentEntries:a}=Bn(this._heartbeatsCache.heartbeats),i=Oe(JSON.stringify({version:2,heartbeats:r}));return this._heartbeatsCache.lastSentHeartbeatDate=n,a.length>0?(this._heartbeatsCache.heartbeats=a,await this._storage.overwrite(this._heartbeatsCache)):(this._heartbeatsCache.heartbeats=[],this._storage.overwrite(this._heartbeatsCache)),i}catch(n){return w.warn(n),""}}}function be(){return new Date().toISOString().substring(0,10)}function Bn(e,t=On){const n=[];let r=e.slice();for(const a of e){const i=n.find(s=>s.agent===a.agent);if(i){if(i.dates.push(a.date),ye(n)>t){i.dates.pop();break}}else if(n.push({agent:a.agent,dates:[a.date]}),ye(n)>t){n.pop();break}r=r.slice(1)}return{heartbeatsToSend:n,unsentEntries:r}}class Mn{constructor(t){this.app=t,this._canUseIndexedDBPromise=this.runIndexedDBEnvironmentCheck()}async runIndexedDBEnvironmentCheck(){return ke()?Be().then(()=>!0).catch(()=>!1):!1}async read(){if(await this._canUseIndexedDBPromise){const n=await Cn(this.app);return n!=null&&n.heartbeats?n:{heartbeats:[]}}else return{heartbeats:[]}}async overwrite(t){var n;if(await this._canUseIndexedDBPromise){const a=await this.read();return me(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:a.lastSentHeartbeatDate,heartbeats:t.heartbeats})}else return}async add(t){var n;if(await this._canUseIndexedDBPromise){const a=await this.read();return me(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:a.lastSentHeartbeatDate,heartbeats:[...a.heartbeats,...t.heartbeats]})}else return}}function ye(e){return Oe(JSON.stringify({version:2,heartbeats:e})).length}function $n(e){if(e.length===0)return-1;let t=0,n=e[0].date;for(let r=1;r<e.length;r++)e[r].date<n&&(n=e[r].date,t=r);return t}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Fn(e){D(new v("platform-logger",t=>new qt(t),"PRIVATE")),D(new v("heartbeat",t=>new kn(t),"PRIVATE")),E(X,pe,e),E(X,pe,"esm2017"),E("fire-js","")}Fn("");var Pn="firebase",Nn="11.10.0";/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */E(Pn,Nn,"app");const je="@firebase/installations",re="0.6.18";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const He=1e4,Ue=`w:${re}`,Ve="FIS_v2",Ln="https://firebaseinstallations.googleapis.com/v1",xn=60*60*1e3,jn="installations",Hn="Installations";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Un={"missing-app-config-values":'Missing App configuration value: "{$valueName}"',"not-registered":"Firebase Installation is not registered.","installation-not-found":"Firebase Installation not found.","request-failed":'{$requestName} request failed with error "{$serverCode} {$serverStatus}: {$serverMessage}"',"app-offline":"Could not process request. Application offline.","delete-pending-registration":"Can't delete installation while there is a pending registration request."},C=new P(jn,Hn,Un);function ze(e){return e instanceof R&&e.code.includes("request-failed")}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function We({projectId:e}){return`${Ln}/projects/${e}/installations`}function qe(e){return{token:e.token,requestStatus:2,expiresIn:zn(e.expiresIn),creationTime:Date.now()}}async function Ge(e,t){const r=(await t.json()).error;return C.create("request-failed",{requestName:e,serverCode:r.code,serverMessage:r.message,serverStatus:r.status})}function Ke({apiKey:e}){return new Headers({"Content-Type":"application/json",Accept:"application/json","x-goog-api-key":e})}function Vn(e,{refreshToken:t}){const n=Ke(e);return n.append("Authorization",Wn(t)),n}async function Ye(e){const t=await e();return t.status>=500&&t.status<600?e():t}function zn(e){return Number(e.replace("s","000"))}function Wn(e){return`${Ve} ${e}`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function qn({appConfig:e,heartbeatServiceProvider:t},{fid:n}){const r=We(e),a=Ke(e),i=t.getImmediate({optional:!0});if(i){const l=await i.getHeartbeatsHeader();l&&a.append("x-firebase-client",l)}const s={fid:n,authVersion:Ve,appId:e.appId,sdkVersion:Ue},o={method:"POST",headers:a,body:JSON.stringify(s)},c=await Ye(()=>fetch(r,o));if(c.ok){const l=await c.json();return{fid:l.fid||n,registrationStatus:2,refreshToken:l.refreshToken,authToken:qe(l.authToken)}}else throw await Ge("Create Installation",c)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Je(e){return new Promise(t=>{setTimeout(t,e)})}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Gn(e){return btoa(String.fromCharCode(...e)).replace(/\+/g,"-").replace(/\//g,"_")}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Kn=/^[cdef][\w-]{21}$/,ee="";function Yn(){try{const e=new Uint8Array(17);(self.crypto||self.msCrypto).getRandomValues(e),e[0]=112+e[0]%16;const n=Jn(e);return Kn.test(n)?n:ee}catch{return ee}}function Jn(e){return Gn(e).substr(0,22)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function x(e){return`${e.appName}!${e.appId}`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Xe=new Map;function Qe(e,t){const n=x(e);Ze(n,t),Xn(n,t)}function Ze(e,t){const n=Xe.get(e);if(n)for(const r of n)r(t)}function Xn(e,t){const n=Qn();n&&n.postMessage({key:e,fid:t}),Zn()}let S=null;function Qn(){return!S&&"BroadcastChannel"in self&&(S=new BroadcastChannel("[Firebase] FID Change"),S.onmessage=e=>{Ze(e.data.key,e.data.fid)}),S}function Zn(){Xe.size===0&&S&&(S.close(),S=null)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const er="firebase-installations-database",tr=1,O="firebase-installations-store";let q=null;function ae(){return q||(q=Pe(er,tr,{upgrade:(e,t)=>{switch(t){case 0:e.createObjectStore(O)}}})),q}async function $(e,t){const n=x(e),a=(await ae()).transaction(O,"readwrite"),i=a.objectStore(O),s=await i.get(n);return await i.put(t,n),await a.done,(!s||s.fid!==t.fid)&&Qe(e,t.fid),t}async function et(e){const t=x(e),r=(await ae()).transaction(O,"readwrite");await r.objectStore(O).delete(t),await r.done}async function j(e,t){const n=x(e),a=(await ae()).transaction(O,"readwrite"),i=a.objectStore(O),s=await i.get(n),o=t(s);return o===void 0?await i.delete(n):await i.put(o,n),await a.done,o&&(!s||s.fid!==o.fid)&&Qe(e,o.fid),o}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function ie(e){let t;const n=await j(e.appConfig,r=>{const a=nr(r),i=rr(e,a);return t=i.registrationPromise,i.installationEntry});return n.fid===ee?{installationEntry:await t}:{installationEntry:n,registrationPromise:t}}function nr(e){const t=e||{fid:Yn(),registrationStatus:0};return tt(t)}function rr(e,t){if(t.registrationStatus===0){if(!navigator.onLine){const a=Promise.reject(C.create("app-offline"));return{installationEntry:t,registrationPromise:a}}const n={fid:t.fid,registrationStatus:1,registrationTime:Date.now()},r=ar(e,n);return{installationEntry:n,registrationPromise:r}}else return t.registrationStatus===1?{installationEntry:t,registrationPromise:ir(e)}:{installationEntry:t}}async function ar(e,t){try{const n=await qn(e,t);return $(e.appConfig,n)}catch(n){throw ze(n)&&n.customData.serverCode===409?await et(e.appConfig):await $(e.appConfig,{fid:t.fid,registrationStatus:0}),n}}async function ir(e){let t=await we(e.appConfig);for(;t.registrationStatus===1;)await Je(100),t=await we(e.appConfig);if(t.registrationStatus===0){const{installationEntry:n,registrationPromise:r}=await ie(e);return r||n}return t}function we(e){return j(e,t=>{if(!t)throw C.create("installation-not-found");return tt(t)})}function tt(e){return sr(e)?{fid:e.fid,registrationStatus:0}:e}function sr(e){return e.registrationStatus===1&&e.registrationTime+He<Date.now()}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function or({appConfig:e,heartbeatServiceProvider:t},n){const r=cr(e,n),a=Vn(e,n),i=t.getImmediate({optional:!0});if(i){const l=await i.getHeartbeatsHeader();l&&a.append("x-firebase-client",l)}const s={installation:{sdkVersion:Ue,appId:e.appId}},o={method:"POST",headers:a,body:JSON.stringify(s)},c=await Ye(()=>fetch(r,o));if(c.ok){const l=await c.json();return qe(l)}else throw await Ge("Generate Auth Token",c)}function cr(e,{fid:t}){return`${We(e)}/${t}/authTokens:generate`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function se(e,t=!1){let n;const r=await j(e.appConfig,i=>{if(!nt(i))throw C.create("not-registered");const s=i.authToken;if(!t&&ur(s))return i;if(s.requestStatus===1)return n=lr(e,t),i;{if(!navigator.onLine)throw C.create("app-offline");const o=hr(i);return n=dr(e,o),o}});return n?await n:r.authToken}async function lr(e,t){let n=await Ie(e.appConfig);for(;n.authToken.requestStatus===1;)await Je(100),n=await Ie(e.appConfig);const r=n.authToken;return r.requestStatus===0?se(e,t):r}function Ie(e){return j(e,t=>{if(!nt(t))throw C.create("not-registered");const n=t.authToken;return pr(n)?Object.assign(Object.assign({},t),{authToken:{requestStatus:0}}):t})}async function dr(e,t){try{const n=await or(e,t),r=Object.assign(Object.assign({},t),{authToken:n});return await $(e.appConfig,r),n}catch(n){if(ze(n)&&(n.customData.serverCode===401||n.customData.serverCode===404))await et(e.appConfig);else{const r=Object.assign(Object.assign({},t),{authToken:{requestStatus:0}});await $(e.appConfig,r)}throw n}}function nt(e){return e!==void 0&&e.registrationStatus===2}function ur(e){return e.requestStatus===2&&!fr(e)}function fr(e){const t=Date.now();return t<e.creationTime||e.creationTime+e.expiresIn<t+xn}function hr(e){const t={requestStatus:1,requestTime:Date.now()};return Object.assign(Object.assign({},e),{authToken:t})}function pr(e){return e.requestStatus===1&&e.requestTime+He<Date.now()}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function gr(e){const t=e,{installationEntry:n,registrationPromise:r}=await ie(t);return r?r.catch(console.error):se(t).catch(console.error),n.fid}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function mr(e,t=!1){const n=e;return await br(n),(await se(n,t)).token}async function br(e){const{registrationPromise:t}=await ie(e);t&&await t}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function yr(e){if(!e||!e.options)throw G("App Configuration");if(!e.name)throw G("App Name");const t=["projectId","apiKey","appId"];for(const n of t)if(!e.options[n])throw G(n);return{appName:e.name,projectId:e.options.projectId,apiKey:e.options.apiKey,appId:e.options.appId}}function G(e){return C.create("missing-app-config-values",{valueName:e})}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const rt="installations",wr="installations-internal",Ir=e=>{const t=e.getProvider("app").getImmediate(),n=yr(t),r=L(t,"heartbeat");return{app:t,appConfig:n,heartbeatServiceProvider:r,_delete:()=>Promise.resolve()}},_r=e=>{const t=e.getProvider("app").getImmediate(),n=L(t,rt).getImmediate();return{getId:()=>gr(n),getToken:a=>mr(n,a)}};function Er(){D(new v(rt,Ir,"PUBLIC")),D(new v(wr,_r,"PRIVATE"))}Er();E(je,re);E(je,re,"esm2017");/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const F="analytics",vr="firebase_id",Ar="origin",Sr=60*1e3,Tr="https://firebase.googleapis.com/v1alpha/projects/-/apps/{app-id}/webConfig",oe="https://www.googletagmanager.com/gtag/js";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const u=new Me("@firebase/analytics");/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Dr={"already-exists":"A Firebase Analytics instance with the appId {$id}  already exists. Only one Firebase Analytics instance can be created for each appId.","already-initialized":"initializeAnalytics() cannot be called again with different options than those it was initially called with. It can be called again with the same options to return the existing instance, or getAnalytics() can be used to get a reference to the already-initialized instance.","already-initialized-settings":"Firebase Analytics has already been initialized.settings() must be called before initializing any Analytics instanceor it will have no effect.","interop-component-reg-failed":"Firebase Analytics Interop Component failed to instantiate: {$reason}","invalid-analytics-context":"Firebase Analytics is not supported in this environment. Wrap initialization of analytics in analytics.isSupported() to prevent initialization in unsupported environments. Details: {$errorInfo}","indexeddb-unavailable":"IndexedDB unavailable or restricted in this environment. Wrap initialization of analytics in analytics.isSupported() to prevent initialization in unsupported environments. Details: {$errorInfo}","fetch-throttle":"The config fetch request timed out while in an exponential backoff state. Unix timestamp in milliseconds when fetch request throttling ends: {$throttleEndTimeMillis}.","config-fetch-failed":"Dynamic config fetch failed: [{$httpStatus}] {$responseMessage}","no-api-key":'The "apiKey" field is empty in the local Firebase config. Firebase Analytics requires this field tocontain a valid API key.',"no-app-id":'The "appId" field is empty in the local Firebase config. Firebase Analytics requires this field tocontain a valid app ID.',"no-client-id":'The "client_id" field is empty.',"invalid-gtag-resource":"Trusted Types detected an invalid gtag resource: {$gtagURL}."},g=new P("analytics","Analytics",Dr);/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Cr(e){if(!e.startsWith(oe)){const t=g.create("invalid-gtag-resource",{gtagURL:e});return u.warn(t.message),""}return e}function at(e){return Promise.all(e.map(t=>t.catch(n=>n)))}function Or(e,t){let n;return window.trustedTypes&&(n=window.trustedTypes.createPolicy(e,t)),n}function Rr(e,t){const n=Or("firebase-js-sdk-policy",{createScriptURL:Cr}),r=document.createElement("script"),a=`${oe}?l=${e}&id=${t}`;r.src=n?n==null?void 0:n.createScriptURL(a):a,r.async=!0,document.head.appendChild(r)}function kr(e){let t=[];return Array.isArray(window[e])?t=window[e]:window[e]=t,t}async function Br(e,t,n,r,a,i){const s=r[a];try{if(s)await t[s];else{const c=(await at(n)).find(l=>l.measurementId===a);c&&await t[c.appId]}}catch(o){u.error(o)}e("config",a,i)}async function Mr(e,t,n,r,a){try{let i=[];if(a&&a.send_to){let s=a.send_to;Array.isArray(s)||(s=[s]);const o=await at(n);for(const c of s){const l=o.find(h=>h.measurementId===c),f=l&&t[l.appId];if(f)i.push(f);else{i=[];break}}}i.length===0&&(i=Object.values(t)),await Promise.all(i),e("event",r,a||{})}catch(i){u.error(i)}}function $r(e,t,n,r){async function a(i,...s){try{if(i==="event"){const[o,c]=s;await Mr(e,t,n,o,c)}else if(i==="config"){const[o,c]=s;await Br(e,t,n,r,o,c)}else if(i==="consent"){const[o,c]=s;e("consent",o,c)}else if(i==="get"){const[o,c,l]=s;e("get",o,c,l)}else if(i==="set"){const[o]=s;e("set",o)}else e(i,...s)}catch(o){u.error(o)}}return a}function Fr(e,t,n,r,a){let i=function(...s){window[r].push(arguments)};return window[a]&&typeof window[a]=="function"&&(i=window[a]),window[a]=$r(i,e,t,n),{gtagCore:i,wrappedGtag:window[a]}}function Pr(e){const t=window.document.getElementsByTagName("script");for(const n of Object.values(t))if(n.src&&n.src.includes(oe)&&n.src.includes(e))return n;return null}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Nr=30,Lr=1e3;class xr{constructor(t={},n=Lr){this.throttleMetadata=t,this.intervalMillis=n}getThrottleMetadata(t){return this.throttleMetadata[t]}setThrottleMetadata(t,n){this.throttleMetadata[t]=n}deleteThrottleMetadata(t){delete this.throttleMetadata[t]}}const it=new xr;function jr(e){return new Headers({Accept:"application/json","x-goog-api-key":e})}async function Hr(e){var t;const{appId:n,apiKey:r}=e,a={method:"GET",headers:jr(r)},i=Tr.replace("{app-id}",n),s=await fetch(i,a);if(s.status!==200&&s.status!==304){let o="";try{const c=await s.json();!((t=c.error)===null||t===void 0)&&t.message&&(o=c.error.message)}catch{}throw g.create("config-fetch-failed",{httpStatus:s.status,responseMessage:o})}return s.json()}async function Ur(e,t=it,n){const{appId:r,apiKey:a,measurementId:i}=e.options;if(!r)throw g.create("no-app-id");if(!a){if(i)return{measurementId:i,appId:r};throw g.create("no-api-key")}const s=t.getThrottleMetadata(r)||{backoffCount:0,throttleEndTimeMillis:Date.now()},o=new Wr;return setTimeout(async()=>{o.abort()},Sr),st({appId:r,apiKey:a,measurementId:i},s,o,t)}async function st(e,{throttleEndTimeMillis:t,backoffCount:n},r,a=it){var i;const{appId:s,measurementId:o}=e;try{await Vr(r,t)}catch(c){if(o)return u.warn(`Timed out fetching this Firebase app's measurement ID from the server. Falling back to the measurement ID ${o} provided in the "measurementId" field in the local Firebase config. [${c==null?void 0:c.message}]`),{appId:s,measurementId:o};throw c}try{const c=await Hr(e);return a.deleteThrottleMetadata(s),c}catch(c){const l=c;if(!zr(l)){if(a.deleteThrottleMetadata(s),o)return u.warn(`Failed to fetch this Firebase app's measurement ID from the server. Falling back to the measurement ID ${o} provided in the "measurementId" field in the local Firebase config. [${l==null?void 0:l.message}]`),{appId:s,measurementId:o};throw c}const f=Number((i=l==null?void 0:l.customData)===null||i===void 0?void 0:i.httpStatus)===503?de(n,a.intervalMillis,Nr):de(n,a.intervalMillis),h={throttleEndTimeMillis:Date.now()+f,backoffCount:n+1};return a.setThrottleMetadata(s,h),u.debug(`Calling attemptFetch again in ${f} millis`),st(e,h,r,a)}}function Vr(e,t){return new Promise((n,r)=>{const a=Math.max(t-Date.now(),0),i=setTimeout(n,a);e.addEventListener(()=>{clearTimeout(i),r(g.create("fetch-throttle",{throttleEndTimeMillis:t}))})})}function zr(e){if(!(e instanceof R)||!e.customData)return!1;const t=Number(e.customData.httpStatus);return t===429||t===500||t===503||t===504}class Wr{constructor(){this.listeners=[]}addEventListener(t){this.listeners.push(t)}abort(){this.listeners.forEach(t=>t())}}async function qr(e,t,n,r,a){if(a&&a.global){e("event",n,r);return}else{const i=await t,s=Object.assign(Object.assign({},r),{send_to:i});e("event",n,s)}}async function Gr(e,t,n,r){{const a=await t;e("config",a,{update:!0,user_id:n})}}async function Kr(e,t,n,r){{const a=await t;e("config",a,{update:!0,user_properties:n})}}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Yr(){if(ke())try{await Be()}catch(e){return u.warn(g.create("indexeddb-unavailable",{errorInfo:e==null?void 0:e.toString()}).message),!1}else return u.warn(g.create("indexeddb-unavailable",{errorInfo:"IndexedDB is not available in this environment."}).message),!1;return!0}async function Jr(e,t,n,r,a,i,s){var o;const c=Ur(e);c.then(p=>{n[p.measurementId]=p.appId,e.options.measurementId&&p.measurementId!==e.options.measurementId&&u.warn(`The measurement ID in the local Firebase config (${e.options.measurementId}) does not match the measurement ID fetched from the server (${p.measurementId}). To ensure analytics events are always sent to the correct Analytics property, update the measurement ID field in the local config or remove it from the local config.`)}).catch(p=>u.error(p)),t.push(c);const l=Yr().then(p=>{if(p)return r.getId()}),[f,h]=await Promise.all([c,l]);Pr(i)||Rr(i,f.measurementId),a("js",new Date);const y=(o=s==null?void 0:s.config)!==null&&o!==void 0?o:{};return y[Ar]="firebase",y.update=!0,h!=null&&(y[vr]=h),a("config",f.measurementId,y),f.measurementId}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class Xr{constructor(t){this.app=t}_delete(){return delete T[this.app.options.appId],Promise.resolve()}}let T={},_e=[];const Ee={};let K="dataLayer",Qr="gtag",ve,H,Ae=!1;function Zr(){const e=[];if(wt()&&e.push("This is a browser extension environment."),It()||e.push("Cookies are not available."),e.length>0){const t=e.map((r,a)=>`(${a+1}) ${r}`).join(" "),n=g.create("invalid-analytics-context",{errorInfo:t});u.warn(n.message)}}function ea(e,t,n){Zr();const r=e.options.appId;if(!r)throw g.create("no-app-id");if(!e.options.apiKey)if(e.options.measurementId)u.warn(`The "apiKey" field is empty in the local Firebase config. This is needed to fetch the latest measurement ID for this Firebase app. Falling back to the measurement ID ${e.options.measurementId} provided in the "measurementId" field in the local Firebase config.`);else throw g.create("no-api-key");if(T[r]!=null)throw g.create("already-exists",{id:r});if(!Ae){kr(K);const{wrappedGtag:i,gtagCore:s}=Fr(T,_e,Ee,K,Qr);H=i,ve=s,Ae=!0}return T[r]=Jr(e,_e,Ee,t,ve,K,n),new Xr(e)}function ta(e=Sn()){e=N(e);const t=L(e,F);return t.isInitialized()?t.getImmediate():na(e)}function na(e,t={}){const n=L(e,F);if(n.isInitialized()){const a=n.getImmediate();if(B(t,n.getOptions()))return a;throw g.create("already-initialized")}return n.initialize({options:t})}function ra(e,t,n){e=N(e),Gr(H,T[e.app.options.appId],t).catch(r=>u.error(r))}function aa(e,t,n){e=N(e),Kr(H,T[e.app.options.appId],t).catch(r=>u.error(r))}function b(e,t,n,r){e=N(e),qr(H,T[e.app.options.appId],t,n,r).catch(a=>u.error(a))}const Se="@firebase/analytics",Te="0.10.17";function ia(){D(new v(F,(t,{options:n})=>{const r=t.getProvider("app").getImmediate(),a=t.getProvider("installations-internal").getImmediate();return ea(r,a,n)},"PUBLIC")),D(new v("analytics-internal",e,"PRIVATE")),E(Se,Te),E(Se,Te,"esm2017");function e(t){try{const n=t.getProvider(F).getImmediate();return{logEvent:(r,a,i)=>b(n,r,a,i)}}catch(n){throw g.create("interop-component-reg-failed",{reason:n})}}}ia();const sa=window.firebaseConfig||{},oa=Ne(sa),m=ta(oa),te={trackPageView:(e,t=null)=>{try{b(m,"page_view",{page_title:t||e,page_location:window.location.href,page_name:e}),console.log("Firebase Analytics: Page view tracked for",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackUserEngagement:(e,t={})=>{try{b(m,e,{...t,timestamp:new Date().toISOString(),user_agent:navigator.userAgent}),console.log("Firebase Analytics: Event tracked",e,t)}catch(n){console.error("Firebase Analytics Error:",n)}},trackButtonClick:(e,t=null)=>{try{b(m,"button_click",{button_name:e,page_name:t||window.location.pathname,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Button click tracked",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackFormSubmission:(e,t=!0,n=null)=>{try{b(m,"form_submission",{form_name:e,success:t,error_message:n,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Form submission tracked",e,t)}catch(r){console.error("Firebase Analytics Error:",r)}},trackQuizInteraction:(e,t=null,n=null,r=null)=>{try{b(m,"quiz_interaction",{action:e,quiz_id:t,question_id:n,category:r,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Quiz interaction tracked",e)}catch(a){console.error("Firebase Analytics Error:",a)}},trackBlogInteraction:(e,t=null,n=null)=>{try{b(m,"blog_interaction",{action:e,blog_id:t,category:n,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Blog interaction tracked",e)}catch(r){console.error("Firebase Analytics Error:",r)}},trackSearch:(e,t=0)=>{try{b(m,"search",{search_term:e,results_count:t,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Search tracked",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackNavigation:(e,t,n="link")=>{try{b(m,"navigation",{from_page:e,to_page:t,navigation_type:n,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Navigation tracked",e,"to",t)}catch(r){console.error("Firebase Analytics Error:",r)}},setUser:(e,t={})=>{try{ra(m,e),Object.keys(t).length>0&&aa(m,t),console.log("Firebase Analytics: User set",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackCustomEvent:(e,t={})=>{try{b(m,e,{...t,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Custom event tracked",e,t)}catch(n){console.error("Firebase Analytics Error:",n)}}};document.addEventListener("DOMContentLoaded",function(){const e=window.location.pathname,t=document.title;te.trackPageView(e,t),document.addEventListener("click",function(n){const r=n.target.closest("a");if(r&&r.href&&r.href.startsWith(window.location.origin)){const a=window.location.pathname,i=new URL(r.href).pathname;a!==i&&te.trackNavigation(a,i,"link")}})});window.firebaseAnalytics=te;
