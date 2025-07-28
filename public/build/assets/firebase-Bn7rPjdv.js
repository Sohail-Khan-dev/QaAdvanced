const ut=()=>{};var le={};/**
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
 */const ke=function(e){const t=[];let n=0;for(let r=0;r<e.length;r++){let a=e.charCodeAt(r);a<128?t[n++]=a:a<2048?(t[n++]=a>>6|192,t[n++]=a&63|128):(a&64512)===55296&&r+1<e.length&&(e.charCodeAt(r+1)&64512)===56320?(a=65536+((a&1023)<<10)+(e.charCodeAt(++r)&1023),t[n++]=a>>18|240,t[n++]=a>>12&63|128,t[n++]=a>>6&63|128,t[n++]=a&63|128):(t[n++]=a>>12|224,t[n++]=a>>6&63|128,t[n++]=a&63|128)}return t},ft=function(e){const t=[];let n=0,r=0;for(;n<e.length;){const a=e[n++];if(a<128)t[r++]=String.fromCharCode(a);else if(a>191&&a<224){const i=e[n++];t[r++]=String.fromCharCode((a&31)<<6|i&63)}else if(a>239&&a<365){const i=e[n++],s=e[n++],o=e[n++],c=((a&7)<<18|(i&63)<<12|(s&63)<<6|o&63)-65536;t[r++]=String.fromCharCode(55296+(c>>10)),t[r++]=String.fromCharCode(56320+(c&1023))}else{const i=e[n++],s=e[n++];t[r++]=String.fromCharCode((a&15)<<12|(i&63)<<6|s&63)}}return t.join("")},Re={byteToCharMap_:null,charToByteMap_:null,byteToCharMapWebSafe_:null,charToByteMapWebSafe_:null,ENCODED_VALS_BASE:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",get ENCODED_VALS(){return this.ENCODED_VALS_BASE+"+/="},get ENCODED_VALS_WEBSAFE(){return this.ENCODED_VALS_BASE+"-_."},HAS_NATIVE_SUPPORT:typeof atob=="function",encodeByteArray(e,t){if(!Array.isArray(e))throw Error("encodeByteArray takes an array as a parameter");this.init_();const n=t?this.byteToCharMapWebSafe_:this.byteToCharMap_,r=[];for(let a=0;a<e.length;a+=3){const i=e[a],s=a+1<e.length,o=s?e[a+1]:0,c=a+2<e.length,l=c?e[a+2]:0,h=i>>2,p=(i&3)<<4|o>>4;let y=(o&15)<<2|l>>6,g=l&63;c||(g=64,s||(y=64)),r.push(n[h],n[p],n[y],n[g])}return r.join("")},encodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?btoa(e):this.encodeByteArray(ke(e),t)},decodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?atob(e):ft(this.decodeStringToByteArray(e,t))},decodeStringToByteArray(e,t){this.init_();const n=t?this.charToByteMapWebSafe_:this.charToByteMap_,r=[];for(let a=0;a<e.length;){const i=n[e.charAt(a++)],o=a<e.length?n[e.charAt(a)]:0;++a;const l=a<e.length?n[e.charAt(a)]:64;++a;const p=a<e.length?n[e.charAt(a)]:64;if(++a,i==null||o==null||l==null||p==null)throw new ht;const y=i<<2|o>>4;if(r.push(y),l!==64){const g=o<<4&240|l>>2;if(r.push(g),p!==64){const dt=l<<6&192|p;r.push(dt)}}}return r},init_(){if(!this.byteToCharMap_){this.byteToCharMap_={},this.charToByteMap_={},this.byteToCharMapWebSafe_={},this.charToByteMapWebSafe_={};for(let e=0;e<this.ENCODED_VALS.length;e++)this.byteToCharMap_[e]=this.ENCODED_VALS.charAt(e),this.charToByteMap_[this.byteToCharMap_[e]]=e,this.byteToCharMapWebSafe_[e]=this.ENCODED_VALS_WEBSAFE.charAt(e),this.charToByteMapWebSafe_[this.byteToCharMapWebSafe_[e]]=e,e>=this.ENCODED_VALS_BASE.length&&(this.charToByteMap_[this.ENCODED_VALS_WEBSAFE.charAt(e)]=e,this.charToByteMapWebSafe_[this.ENCODED_VALS.charAt(e)]=e)}}};class ht extends Error{constructor(){super(...arguments),this.name="DecodeBase64StringError"}}const pt=function(e){const t=ke(e);return Re.encodeByteArray(t,!0)},Fe=function(e){return pt(e).replace(/\./g,"")},gt=function(e){try{return Re.decodeString(e,!0)}catch(t){console.error("base64Decode failed: ",t)}return null};/**
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
 */function mt(){if(typeof self<"u")return self;if(typeof window<"u")return window;if(typeof global<"u")return global;throw new Error("Unable to locate global object.")}/**
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
 */const bt=()=>mt().__FIREBASE_DEFAULTS__,yt=()=>{if(typeof process>"u"||typeof le>"u")return;const e=le.__FIREBASE_DEFAULTS__;if(e)return JSON.parse(e)},wt=()=>{if(typeof document>"u")return;let e;try{e=document.cookie.match(/__FIREBASE_DEFAULTS__=([^;]+)/)}catch{return}const t=e&&gt(e[1]);return t&&JSON.parse(t)},It=()=>{try{return ut()||bt()||yt()||wt()}catch(e){console.info(`Unable to get __FIREBASE_DEFAULTS__ due to: ${e}`);return}},Be=()=>{var e;return(e=It())===null||e===void 0?void 0:e.config};/**
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
 */class Et{constructor(){this.reject=()=>{},this.resolve=()=>{},this.promise=new Promise((t,n)=>{this.resolve=t,this.reject=n})}wrapCallback(t){return(n,r)=>{n?this.reject(n):this.resolve(r),typeof t=="function"&&(this.promise.catch(()=>{}),t.length===1?t(n):t(n,r))}}}function _t(){const e=typeof chrome=="object"?chrome.runtime:typeof browser=="object"?browser.runtime:void 0;return typeof e=="object"&&e.id!==void 0}function Me(){try{return typeof indexedDB=="object"}catch{return!1}}function $e(){return new Promise((e,t)=>{try{let n=!0;const r="validate-browser-context-for-indexeddb-analytics-module",a=self.indexedDB.open(r);a.onsuccess=()=>{a.result.close(),n||self.indexedDB.deleteDatabase(r),e(!0)},a.onupgradeneeded=()=>{n=!1},a.onerror=()=>{var i;t(((i=a.error)===null||i===void 0?void 0:i.message)||"")}}catch(n){t(n)}})}function At(){return!(typeof navigator>"u"||!navigator.cookieEnabled)}/**
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
 */const vt="FirebaseError";class k extends Error{constructor(t,n,r){super(n),this.code=t,this.customData=r,this.name=vt,Object.setPrototypeOf(this,k.prototype),Error.captureStackTrace&&Error.captureStackTrace(this,N.prototype.create)}}class N{constructor(t,n,r){this.service=t,this.serviceName=n,this.errors=r}create(t,...n){const r=n[0]||{},a=`${this.service}/${t}`,i=this.errors[t],s=i?St(i,r):"Error",o=`${this.serviceName}: ${s} (${a}).`;return new k(a,o,r)}}function St(e,t){return e.replace(Dt,(n,r)=>{const a=t[r];return a!=null?String(a):`<${r}?>`})}const Dt=/\{\$([^}]+)}/g;function B(e,t){if(e===t)return!0;const n=Object.keys(e),r=Object.keys(t);for(const a of n){if(!r.includes(a))return!1;const i=e[a],s=t[a];if(de(i)&&de(s)){if(!B(i,s))return!1}else if(i!==s)return!1}for(const a of r)if(!n.includes(a))return!1;return!0}function de(e){return e!==null&&typeof e=="object"}/**
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
 */const Tt=1e3,Ct=2,Ot=4*60*60*1e3,kt=.5;function ue(e,t=Tt,n=Ct){const r=t*Math.pow(n,e),a=Math.round(kt*r*(Math.random()-.5)*2);return Math.min(Ot,r+a)}/**
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
 */function L(e){return e&&e._delegate?e._delegate:e}class A{constructor(t,n,r){this.name=t,this.instanceFactory=n,this.type=r,this.multipleInstances=!1,this.serviceProps={},this.instantiationMode="LAZY",this.onInstanceCreated=null}setInstantiationMode(t){return this.instantiationMode=t,this}setMultipleInstances(t){return this.multipleInstances=t,this}setServiceProps(t){return this.serviceProps=t,this}setInstanceCreatedCallback(t){return this.onInstanceCreated=t,this}}/**
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
 */const v="[DEFAULT]";/**
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
 */class Rt{constructor(t,n){this.name=t,this.container=n,this.component=null,this.instances=new Map,this.instancesDeferred=new Map,this.instancesOptions=new Map,this.onInitCallbacks=new Map}get(t){const n=this.normalizeInstanceIdentifier(t);if(!this.instancesDeferred.has(n)){const r=new Et;if(this.instancesDeferred.set(n,r),this.isInitialized(n)||this.shouldAutoInitialize())try{const a=this.getOrInitializeService({instanceIdentifier:n});a&&r.resolve(a)}catch{}}return this.instancesDeferred.get(n).promise}getImmediate(t){var n;const r=this.normalizeInstanceIdentifier(t==null?void 0:t.identifier),a=(n=t==null?void 0:t.optional)!==null&&n!==void 0?n:!1;if(this.isInitialized(r)||this.shouldAutoInitialize())try{return this.getOrInitializeService({instanceIdentifier:r})}catch(i){if(a)return null;throw i}else{if(a)return null;throw Error(`Service ${this.name} is not available`)}}getComponent(){return this.component}setComponent(t){if(t.name!==this.name)throw Error(`Mismatching Component ${t.name} for Provider ${this.name}.`);if(this.component)throw Error(`Component for ${this.name} has already been provided`);if(this.component=t,!!this.shouldAutoInitialize()){if(Bt(t))try{this.getOrInitializeService({instanceIdentifier:v})}catch{}for(const[n,r]of this.instancesDeferred.entries()){const a=this.normalizeInstanceIdentifier(n);try{const i=this.getOrInitializeService({instanceIdentifier:a});r.resolve(i)}catch{}}}}clearInstance(t=v){this.instancesDeferred.delete(t),this.instancesOptions.delete(t),this.instances.delete(t)}async delete(){const t=Array.from(this.instances.values());await Promise.all([...t.filter(n=>"INTERNAL"in n).map(n=>n.INTERNAL.delete()),...t.filter(n=>"_delete"in n).map(n=>n._delete())])}isComponentSet(){return this.component!=null}isInitialized(t=v){return this.instances.has(t)}getOptions(t=v){return this.instancesOptions.get(t)||{}}initialize(t={}){const{options:n={}}=t,r=this.normalizeInstanceIdentifier(t.instanceIdentifier);if(this.isInitialized(r))throw Error(`${this.name}(${r}) has already been initialized`);if(!this.isComponentSet())throw Error(`Component ${this.name} has not been registered yet`);const a=this.getOrInitializeService({instanceIdentifier:r,options:n});for(const[i,s]of this.instancesDeferred.entries()){const o=this.normalizeInstanceIdentifier(i);r===o&&s.resolve(a)}return a}onInit(t,n){var r;const a=this.normalizeInstanceIdentifier(n),i=(r=this.onInitCallbacks.get(a))!==null&&r!==void 0?r:new Set;i.add(t),this.onInitCallbacks.set(a,i);const s=this.instances.get(a);return s&&t(s,a),()=>{i.delete(t)}}invokeOnInitCallbacks(t,n){const r=this.onInitCallbacks.get(n);if(r)for(const a of r)try{a(t,n)}catch{}}getOrInitializeService({instanceIdentifier:t,options:n={}}){let r=this.instances.get(t);if(!r&&this.component&&(r=this.component.instanceFactory(this.container,{instanceIdentifier:Ft(t),options:n}),this.instances.set(t,r),this.instancesOptions.set(t,n),this.invokeOnInitCallbacks(r,t),this.component.onInstanceCreated))try{this.component.onInstanceCreated(this.container,t,r)}catch{}return r||null}normalizeInstanceIdentifier(t=v){return this.component?this.component.multipleInstances?t:v:t}shouldAutoInitialize(){return!!this.component&&this.component.instantiationMode!=="EXPLICIT"}}function Ft(e){return e===v?void 0:e}function Bt(e){return e.instantiationMode==="EAGER"}/**
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
 */class Mt{constructor(t){this.name=t,this.providers=new Map}addComponent(t){const n=this.getProvider(t.name);if(n.isComponentSet())throw new Error(`Component ${t.name} has already been registered with ${this.name}`);n.setComponent(t)}addOrOverwriteComponent(t){this.getProvider(t.name).isComponentSet()&&this.providers.delete(t.name),this.addComponent(t)}getProvider(t){if(this.providers.has(t))return this.providers.get(t);const n=new Rt(t,this);return this.providers.set(t,n),n}getProviders(){return Array.from(this.providers.values())}}/**
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
 */var d;(function(e){e[e.DEBUG=0]="DEBUG",e[e.VERBOSE=1]="VERBOSE",e[e.INFO=2]="INFO",e[e.WARN=3]="WARN",e[e.ERROR=4]="ERROR",e[e.SILENT=5]="SILENT"})(d||(d={}));const $t={debug:d.DEBUG,verbose:d.VERBOSE,info:d.INFO,warn:d.WARN,error:d.ERROR,silent:d.SILENT},Pt=d.INFO,Nt={[d.DEBUG]:"log",[d.VERBOSE]:"log",[d.INFO]:"info",[d.WARN]:"warn",[d.ERROR]:"error"},Lt=(e,t,...n)=>{if(t<e.logLevel)return;const r=new Date().toISOString(),a=Nt[t];if(a)console[a](`[${r}]  ${e.name}:`,...n);else throw new Error(`Attempted to log a message with an invalid logType (value: ${t})`)};class Pe{constructor(t){this.name=t,this._logLevel=Pt,this._logHandler=Lt,this._userLogHandler=null}get logLevel(){return this._logLevel}set logLevel(t){if(!(t in d))throw new TypeError(`Invalid value "${t}" assigned to \`logLevel\``);this._logLevel=t}setLogLevel(t){this._logLevel=typeof t=="string"?$t[t]:t}get logHandler(){return this._logHandler}set logHandler(t){if(typeof t!="function")throw new TypeError("Value assigned to `logHandler` must be a function");this._logHandler=t}get userLogHandler(){return this._userLogHandler}set userLogHandler(t){this._userLogHandler=t}debug(...t){this._userLogHandler&&this._userLogHandler(this,d.DEBUG,...t),this._logHandler(this,d.DEBUG,...t)}log(...t){this._userLogHandler&&this._userLogHandler(this,d.VERBOSE,...t),this._logHandler(this,d.VERBOSE,...t)}info(...t){this._userLogHandler&&this._userLogHandler(this,d.INFO,...t),this._logHandler(this,d.INFO,...t)}warn(...t){this._userLogHandler&&this._userLogHandler(this,d.WARN,...t),this._logHandler(this,d.WARN,...t)}error(...t){this._userLogHandler&&this._userLogHandler(this,d.ERROR,...t),this._logHandler(this,d.ERROR,...t)}}const xt=(e,t)=>t.some(n=>e instanceof n);let fe,he;function jt(){return fe||(fe=[IDBDatabase,IDBObjectStore,IDBIndex,IDBCursor,IDBTransaction])}function Ht(){return he||(he=[IDBCursor.prototype.advance,IDBCursor.prototype.continue,IDBCursor.prototype.continuePrimaryKey])}const Ne=new WeakMap,J=new WeakMap,Le=new WeakMap,V=new WeakMap,re=new WeakMap;function Ut(e){const t=new Promise((n,r)=>{const a=()=>{e.removeEventListener("success",i),e.removeEventListener("error",s)},i=()=>{n(I(e.result)),a()},s=()=>{r(e.error),a()};e.addEventListener("success",i),e.addEventListener("error",s)});return t.then(n=>{n instanceof IDBCursor&&Ne.set(n,e)}).catch(()=>{}),re.set(t,e),t}function Vt(e){if(J.has(e))return;const t=new Promise((n,r)=>{const a=()=>{e.removeEventListener("complete",i),e.removeEventListener("error",s),e.removeEventListener("abort",s)},i=()=>{n(),a()},s=()=>{r(e.error||new DOMException("AbortError","AbortError")),a()};e.addEventListener("complete",i),e.addEventListener("error",s),e.addEventListener("abort",s)});J.set(e,t)}let X={get(e,t,n){if(e instanceof IDBTransaction){if(t==="done")return J.get(e);if(t==="objectStoreNames")return e.objectStoreNames||Le.get(e);if(t==="store")return n.objectStoreNames[1]?void 0:n.objectStore(n.objectStoreNames[0])}return I(e[t])},set(e,t,n){return e[t]=n,!0},has(e,t){return e instanceof IDBTransaction&&(t==="done"||t==="store")?!0:t in e}};function zt(e){X=e(X)}function qt(e){return e===IDBDatabase.prototype.transaction&&!("objectStoreNames"in IDBTransaction.prototype)?function(t,...n){const r=e.call(z(this),t,...n);return Le.set(r,t.sort?t.sort():[t]),I(r)}:Ht().includes(e)?function(...t){return e.apply(z(this),t),I(Ne.get(this))}:function(...t){return I(e.apply(z(this),t))}}function Wt(e){return typeof e=="function"?qt(e):(e instanceof IDBTransaction&&Vt(e),xt(e,jt())?new Proxy(e,X):e)}function I(e){if(e instanceof IDBRequest)return Ut(e);if(V.has(e))return V.get(e);const t=Wt(e);return t!==e&&(V.set(e,t),re.set(t,e)),t}const z=e=>re.get(e);function xe(e,t,{blocked:n,upgrade:r,blocking:a,terminated:i}={}){const s=indexedDB.open(e,t),o=I(s);return r&&s.addEventListener("upgradeneeded",c=>{r(I(s.result),c.oldVersion,c.newVersion,I(s.transaction),c)}),n&&s.addEventListener("blocked",c=>n(c.oldVersion,c.newVersion,c)),o.then(c=>{i&&c.addEventListener("close",()=>i()),a&&c.addEventListener("versionchange",l=>a(l.oldVersion,l.newVersion,l))}).catch(()=>{}),o}const Gt=["get","getKey","getAll","getAllKeys","count"],Kt=["put","add","delete","clear"],q=new Map;function pe(e,t){if(!(e instanceof IDBDatabase&&!(t in e)&&typeof t=="string"))return;if(q.get(t))return q.get(t);const n=t.replace(/FromIndex$/,""),r=t!==n,a=Kt.includes(n);if(!(n in(r?IDBIndex:IDBObjectStore).prototype)||!(a||Gt.includes(n)))return;const i=async function(s,...o){const c=this.transaction(s,a?"readwrite":"readonly");let l=c.store;return r&&(l=l.index(o.shift())),(await Promise.all([l[n](...o),a&&c.done]))[0]};return q.set(t,i),i}zt(e=>({...e,get:(t,n,r)=>pe(t,n)||e.get(t,n,r),has:(t,n)=>!!pe(t,n)||e.has(t,n)}));/**
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
 */class Yt{constructor(t){this.container=t}getPlatformInfoString(){return this.container.getProviders().map(n=>{if(Jt(n)){const r=n.getImmediate();return`${r.library}/${r.version}`}else return null}).filter(n=>n).join(" ")}}function Jt(e){const t=e.getComponent();return(t==null?void 0:t.type)==="VERSION"}const Q="@firebase/app",ge="0.13.2";/**
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
 */const w=new Pe("@firebase/app"),Xt="@firebase/app-compat",Qt="@firebase/analytics-compat",Zt="@firebase/analytics",en="@firebase/app-check-compat",tn="@firebase/app-check",nn="@firebase/auth",rn="@firebase/auth-compat",an="@firebase/database",sn="@firebase/data-connect",on="@firebase/database-compat",cn="@firebase/functions",ln="@firebase/functions-compat",dn="@firebase/installations",un="@firebase/installations-compat",fn="@firebase/messaging",hn="@firebase/messaging-compat",pn="@firebase/performance",gn="@firebase/performance-compat",mn="@firebase/remote-config",bn="@firebase/remote-config-compat",yn="@firebase/storage",wn="@firebase/storage-compat",In="@firebase/firestore",En="@firebase/ai",_n="@firebase/firestore-compat",An="firebase";/**
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
 */const Z="[DEFAULT]",vn={[Q]:"fire-core",[Xt]:"fire-core-compat",[Zt]:"fire-analytics",[Qt]:"fire-analytics-compat",[tn]:"fire-app-check",[en]:"fire-app-check-compat",[nn]:"fire-auth",[rn]:"fire-auth-compat",[an]:"fire-rtdb",[sn]:"fire-data-connect",[on]:"fire-rtdb-compat",[cn]:"fire-fn",[ln]:"fire-fn-compat",[dn]:"fire-iid",[un]:"fire-iid-compat",[fn]:"fire-fcm",[hn]:"fire-fcm-compat",[pn]:"fire-perf",[gn]:"fire-perf-compat",[mn]:"fire-rc",[bn]:"fire-rc-compat",[yn]:"fire-gcs",[wn]:"fire-gcs-compat",[In]:"fire-fst",[_n]:"fire-fst-compat",[En]:"fire-vertex","fire-js":"fire-js",[An]:"fire-js-all"};/**
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
 */const M=new Map,Sn=new Map,ee=new Map;function me(e,t){try{e.container.addComponent(t)}catch(n){w.debug(`Component ${t.name} failed to register with FirebaseApp ${e.name}`,n)}}function T(e){const t=e.name;if(ee.has(t))return w.debug(`There were multiple attempts to register component ${t}.`),!1;ee.set(t,e);for(const n of M.values())me(n,e);for(const n of Sn.values())me(n,e);return!0}function x(e,t){const n=e.container.getProvider("heartbeat").getImmediate({optional:!0});return n&&n.triggerHeartbeat(),e.container.getProvider(t)}/**
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
 */const Dn={"no-app":"No Firebase App '{$appName}' has been created - call initializeApp() first","bad-app-name":"Illegal App name: '{$appName}'","duplicate-app":"Firebase App named '{$appName}' already exists with different options or config","app-deleted":"Firebase App named '{$appName}' already deleted","server-app-deleted":"Firebase Server App has been deleted","no-options":"Need to provide options, when not being deployed to hosting via source.","invalid-app-argument":"firebase.{$appName}() takes either no argument or a Firebase App instance.","invalid-log-argument":"First argument to `onLog` must be null or a function.","idb-open":"Error thrown when opening IndexedDB. Original error: {$originalErrorMessage}.","idb-get":"Error thrown when reading from IndexedDB. Original error: {$originalErrorMessage}.","idb-set":"Error thrown when writing to IndexedDB. Original error: {$originalErrorMessage}.","idb-delete":"Error thrown when deleting from IndexedDB. Original error: {$originalErrorMessage}.","finalization-registry-not-supported":"FirebaseServerApp deleteOnDeref field defined but the JS runtime does not support FinalizationRegistry.","invalid-server-app-environment":"FirebaseServerApp is not for use in browser environments."},E=new N("app","Firebase",Dn);/**
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
 */class Tn{constructor(t,n,r){this._isDeleted=!1,this._options=Object.assign({},t),this._config=Object.assign({},n),this._name=n.name,this._automaticDataCollectionEnabled=n.automaticDataCollectionEnabled,this._container=r,this.container.addComponent(new A("app",()=>this,"PUBLIC"))}get automaticDataCollectionEnabled(){return this.checkDestroyed(),this._automaticDataCollectionEnabled}set automaticDataCollectionEnabled(t){this.checkDestroyed(),this._automaticDataCollectionEnabled=t}get name(){return this.checkDestroyed(),this._name}get options(){return this.checkDestroyed(),this._options}get config(){return this.checkDestroyed(),this._config}get container(){return this._container}get isDeleted(){return this._isDeleted}set isDeleted(t){this._isDeleted=t}checkDestroyed(){if(this.isDeleted)throw E.create("app-deleted",{appName:this._name})}}function je(e,t={}){let n=e;typeof t!="object"&&(t={name:t});const r=Object.assign({name:Z,automaticDataCollectionEnabled:!0},t),a=r.name;if(typeof a!="string"||!a)throw E.create("bad-app-name",{appName:String(a)});if(n||(n=Be()),!n)throw E.create("no-options");const i=M.get(a);if(i){if(B(n,i.options)&&B(r,i.config))return i;throw E.create("duplicate-app",{appName:a})}const s=new Mt(a);for(const c of ee.values())s.addComponent(c);const o=new Tn(n,r,s);return M.set(a,o),o}function Cn(e=Z){const t=M.get(e);if(!t&&e===Z&&Be())return je();if(!t)throw E.create("no-app",{appName:e});return t}function _(e,t,n){var r;let a=(r=vn[e])!==null&&r!==void 0?r:e;n&&(a+=`-${n}`);const i=a.match(/\s|\//),s=t.match(/\s|\//);if(i||s){const o=[`Unable to register library "${a}" with version "${t}":`];i&&o.push(`library name "${a}" contains illegal characters (whitespace or "/")`),i&&s&&o.push("and"),s&&o.push(`version name "${t}" contains illegal characters (whitespace or "/")`),w.warn(o.join(" "));return}T(new A(`${a}-version`,()=>({library:a,version:t}),"VERSION"))}/**
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
 */const On="firebase-heartbeat-database",kn=1,F="firebase-heartbeat-store";let W=null;function He(){return W||(W=xe(On,kn,{upgrade:(e,t)=>{switch(t){case 0:try{e.createObjectStore(F)}catch(n){console.warn(n)}}}}).catch(e=>{throw E.create("idb-open",{originalErrorMessage:e.message})})),W}async function Rn(e){try{const n=(await He()).transaction(F),r=await n.objectStore(F).get(Ue(e));return await n.done,r}catch(t){if(t instanceof k)w.warn(t.message);else{const n=E.create("idb-get",{originalErrorMessage:t==null?void 0:t.message});w.warn(n.message)}}}async function be(e,t){try{const r=(await He()).transaction(F,"readwrite");await r.objectStore(F).put(t,Ue(e)),await r.done}catch(n){if(n instanceof k)w.warn(n.message);else{const r=E.create("idb-set",{originalErrorMessage:n==null?void 0:n.message});w.warn(r.message)}}}function Ue(e){return`${e.name}!${e.options.appId}`}/**
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
 */const Fn=1024,Bn=30;class Mn{constructor(t){this.container=t,this._heartbeatsCache=null;const n=this.container.getProvider("app").getImmediate();this._storage=new Pn(n),this._heartbeatsCachePromise=this._storage.read().then(r=>(this._heartbeatsCache=r,r))}async triggerHeartbeat(){var t,n;try{const a=this.container.getProvider("platform-logger").getImmediate().getPlatformInfoString(),i=ye();if(((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null&&(this._heartbeatsCache=await this._heartbeatsCachePromise,((n=this._heartbeatsCache)===null||n===void 0?void 0:n.heartbeats)==null)||this._heartbeatsCache.lastSentHeartbeatDate===i||this._heartbeatsCache.heartbeats.some(s=>s.date===i))return;if(this._heartbeatsCache.heartbeats.push({date:i,agent:a}),this._heartbeatsCache.heartbeats.length>Bn){const s=Nn(this._heartbeatsCache.heartbeats);this._heartbeatsCache.heartbeats.splice(s,1)}return this._storage.overwrite(this._heartbeatsCache)}catch(r){w.warn(r)}}async getHeartbeatsHeader(){var t;try{if(this._heartbeatsCache===null&&await this._heartbeatsCachePromise,((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null||this._heartbeatsCache.heartbeats.length===0)return"";const n=ye(),{heartbeatsToSend:r,unsentEntries:a}=$n(this._heartbeatsCache.heartbeats),i=Fe(JSON.stringify({version:2,heartbeats:r}));return this._heartbeatsCache.lastSentHeartbeatDate=n,a.length>0?(this._heartbeatsCache.heartbeats=a,await this._storage.overwrite(this._heartbeatsCache)):(this._heartbeatsCache.heartbeats=[],this._storage.overwrite(this._heartbeatsCache)),i}catch(n){return w.warn(n),""}}}function ye(){return new Date().toISOString().substring(0,10)}function $n(e,t=Fn){const n=[];let r=e.slice();for(const a of e){const i=n.find(s=>s.agent===a.agent);if(i){if(i.dates.push(a.date),we(n)>t){i.dates.pop();break}}else if(n.push({agent:a.agent,dates:[a.date]}),we(n)>t){n.pop();break}r=r.slice(1)}return{heartbeatsToSend:n,unsentEntries:r}}class Pn{constructor(t){this.app=t,this._canUseIndexedDBPromise=this.runIndexedDBEnvironmentCheck()}async runIndexedDBEnvironmentCheck(){return Me()?$e().then(()=>!0).catch(()=>!1):!1}async read(){if(await this._canUseIndexedDBPromise){const n=await Rn(this.app);return n!=null&&n.heartbeats?n:{heartbeats:[]}}else return{heartbeats:[]}}async overwrite(t){var n;if(await this._canUseIndexedDBPromise){const a=await this.read();return be(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:a.lastSentHeartbeatDate,heartbeats:t.heartbeats})}else return}async add(t){var n;if(await this._canUseIndexedDBPromise){const a=await this.read();return be(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:a.lastSentHeartbeatDate,heartbeats:[...a.heartbeats,...t.heartbeats]})}else return}}function we(e){return Fe(JSON.stringify({version:2,heartbeats:e})).length}function Nn(e){if(e.length===0)return-1;let t=0,n=e[0].date;for(let r=1;r<e.length;r++)e[r].date<n&&(n=e[r].date,t=r);return t}/**
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
 */function Ln(e){T(new A("platform-logger",t=>new Yt(t),"PRIVATE")),T(new A("heartbeat",t=>new Mn(t),"PRIVATE")),_(Q,ge,e),_(Q,ge,"esm2017"),_("fire-js","")}Ln("");var xn="firebase",jn="11.10.0";/**
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
 */_(xn,jn,"app");const Ve="@firebase/installations",ae="0.6.18";/**
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
 */const ze=1e4,qe=`w:${ae}`,We="FIS_v2",Hn="https://firebaseinstallations.googleapis.com/v1",Un=60*60*1e3,Vn="installations",zn="Installations";/**
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
 */const qn={"missing-app-config-values":'Missing App configuration value: "{$valueName}"',"not-registered":"Firebase Installation is not registered.","installation-not-found":"Firebase Installation not found.","request-failed":'{$requestName} request failed with error "{$serverCode} {$serverStatus}: {$serverMessage}"',"app-offline":"Could not process request. Application offline.","delete-pending-registration":"Can't delete installation while there is a pending registration request."},C=new N(Vn,zn,qn);function Ge(e){return e instanceof k&&e.code.includes("request-failed")}/**
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
 */function Ke({projectId:e}){return`${Hn}/projects/${e}/installations`}function Ye(e){return{token:e.token,requestStatus:2,expiresIn:Gn(e.expiresIn),creationTime:Date.now()}}async function Je(e,t){const r=(await t.json()).error;return C.create("request-failed",{requestName:e,serverCode:r.code,serverMessage:r.message,serverStatus:r.status})}function Xe({apiKey:e}){return new Headers({"Content-Type":"application/json",Accept:"application/json","x-goog-api-key":e})}function Wn(e,{refreshToken:t}){const n=Xe(e);return n.append("Authorization",Kn(t)),n}async function Qe(e){const t=await e();return t.status>=500&&t.status<600?e():t}function Gn(e){return Number(e.replace("s","000"))}function Kn(e){return`${We} ${e}`}/**
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
 */async function Yn({appConfig:e,heartbeatServiceProvider:t},{fid:n}){const r=Ke(e),a=Xe(e),i=t.getImmediate({optional:!0});if(i){const l=await i.getHeartbeatsHeader();l&&a.append("x-firebase-client",l)}const s={fid:n,authVersion:We,appId:e.appId,sdkVersion:qe},o={method:"POST",headers:a,body:JSON.stringify(s)},c=await Qe(()=>fetch(r,o));if(c.ok){const l=await c.json();return{fid:l.fid||n,registrationStatus:2,refreshToken:l.refreshToken,authToken:Ye(l.authToken)}}else throw await Je("Create Installation",c)}/**
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
 */function Ze(e){return new Promise(t=>{setTimeout(t,e)})}/**
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
 */function Jn(e){return btoa(String.fromCharCode(...e)).replace(/\+/g,"-").replace(/\//g,"_")}/**
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
 */const Xn=/^[cdef][\w-]{21}$/,te="";function Qn(){try{const e=new Uint8Array(17);(self.crypto||self.msCrypto).getRandomValues(e),e[0]=112+e[0]%16;const n=Zn(e);return Xn.test(n)?n:te}catch{return te}}function Zn(e){return Jn(e).substr(0,22)}/**
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
 */function j(e){return`${e.appName}!${e.appId}`}/**
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
 */const et=new Map;function tt(e,t){const n=j(e);nt(n,t),er(n,t)}function nt(e,t){const n=et.get(e);if(n)for(const r of n)r(t)}function er(e,t){const n=tr();n&&n.postMessage({key:e,fid:t}),nr()}let S=null;function tr(){return!S&&"BroadcastChannel"in self&&(S=new BroadcastChannel("[Firebase] FID Change"),S.onmessage=e=>{nt(e.data.key,e.data.fid)}),S}function nr(){et.size===0&&S&&(S.close(),S=null)}/**
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
 */const rr="firebase-installations-database",ar=1,O="firebase-installations-store";let G=null;function ie(){return G||(G=xe(rr,ar,{upgrade:(e,t)=>{switch(t){case 0:e.createObjectStore(O)}}})),G}async function $(e,t){const n=j(e),a=(await ie()).transaction(O,"readwrite"),i=a.objectStore(O),s=await i.get(n);return await i.put(t,n),await a.done,(!s||s.fid!==t.fid)&&tt(e,t.fid),t}async function rt(e){const t=j(e),r=(await ie()).transaction(O,"readwrite");await r.objectStore(O).delete(t),await r.done}async function H(e,t){const n=j(e),a=(await ie()).transaction(O,"readwrite"),i=a.objectStore(O),s=await i.get(n),o=t(s);return o===void 0?await i.delete(n):await i.put(o,n),await a.done,o&&(!s||s.fid!==o.fid)&&tt(e,o.fid),o}/**
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
 */async function se(e){let t;const n=await H(e.appConfig,r=>{const a=ir(r),i=sr(e,a);return t=i.registrationPromise,i.installationEntry});return n.fid===te?{installationEntry:await t}:{installationEntry:n,registrationPromise:t}}function ir(e){const t=e||{fid:Qn(),registrationStatus:0};return at(t)}function sr(e,t){if(t.registrationStatus===0){if(!navigator.onLine){const a=Promise.reject(C.create("app-offline"));return{installationEntry:t,registrationPromise:a}}const n={fid:t.fid,registrationStatus:1,registrationTime:Date.now()},r=or(e,n);return{installationEntry:n,registrationPromise:r}}else return t.registrationStatus===1?{installationEntry:t,registrationPromise:cr(e)}:{installationEntry:t}}async function or(e,t){try{const n=await Yn(e,t);return $(e.appConfig,n)}catch(n){throw Ge(n)&&n.customData.serverCode===409?await rt(e.appConfig):await $(e.appConfig,{fid:t.fid,registrationStatus:0}),n}}async function cr(e){let t=await Ie(e.appConfig);for(;t.registrationStatus===1;)await Ze(100),t=await Ie(e.appConfig);if(t.registrationStatus===0){const{installationEntry:n,registrationPromise:r}=await se(e);return r||n}return t}function Ie(e){return H(e,t=>{if(!t)throw C.create("installation-not-found");return at(t)})}function at(e){return lr(e)?{fid:e.fid,registrationStatus:0}:e}function lr(e){return e.registrationStatus===1&&e.registrationTime+ze<Date.now()}/**
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
 */async function dr({appConfig:e,heartbeatServiceProvider:t},n){const r=ur(e,n),a=Wn(e,n),i=t.getImmediate({optional:!0});if(i){const l=await i.getHeartbeatsHeader();l&&a.append("x-firebase-client",l)}const s={installation:{sdkVersion:qe,appId:e.appId}},o={method:"POST",headers:a,body:JSON.stringify(s)},c=await Qe(()=>fetch(r,o));if(c.ok){const l=await c.json();return Ye(l)}else throw await Je("Generate Auth Token",c)}function ur(e,{fid:t}){return`${Ke(e)}/${t}/authTokens:generate`}/**
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
 */async function oe(e,t=!1){let n;const r=await H(e.appConfig,i=>{if(!it(i))throw C.create("not-registered");const s=i.authToken;if(!t&&pr(s))return i;if(s.requestStatus===1)return n=fr(e,t),i;{if(!navigator.onLine)throw C.create("app-offline");const o=mr(i);return n=hr(e,o),o}});return n?await n:r.authToken}async function fr(e,t){let n=await Ee(e.appConfig);for(;n.authToken.requestStatus===1;)await Ze(100),n=await Ee(e.appConfig);const r=n.authToken;return r.requestStatus===0?oe(e,t):r}function Ee(e){return H(e,t=>{if(!it(t))throw C.create("not-registered");const n=t.authToken;return br(n)?Object.assign(Object.assign({},t),{authToken:{requestStatus:0}}):t})}async function hr(e,t){try{const n=await dr(e,t),r=Object.assign(Object.assign({},t),{authToken:n});return await $(e.appConfig,r),n}catch(n){if(Ge(n)&&(n.customData.serverCode===401||n.customData.serverCode===404))await rt(e.appConfig);else{const r=Object.assign(Object.assign({},t),{authToken:{requestStatus:0}});await $(e.appConfig,r)}throw n}}function it(e){return e!==void 0&&e.registrationStatus===2}function pr(e){return e.requestStatus===2&&!gr(e)}function gr(e){const t=Date.now();return t<e.creationTime||e.creationTime+e.expiresIn<t+Un}function mr(e){const t={requestStatus:1,requestTime:Date.now()};return Object.assign(Object.assign({},e),{authToken:t})}function br(e){return e.requestStatus===1&&e.requestTime+ze<Date.now()}/**
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
 */async function yr(e){const t=e,{installationEntry:n,registrationPromise:r}=await se(t);return r?r.catch(console.error):oe(t).catch(console.error),n.fid}/**
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
 */async function wr(e,t=!1){const n=e;return await Ir(n),(await oe(n,t)).token}async function Ir(e){const{registrationPromise:t}=await se(e);t&&await t}/**
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
 */function Er(e){if(!e||!e.options)throw K("App Configuration");if(!e.name)throw K("App Name");const t=["projectId","apiKey","appId"];for(const n of t)if(!e.options[n])throw K(n);return{appName:e.name,projectId:e.options.projectId,apiKey:e.options.apiKey,appId:e.options.appId}}function K(e){return C.create("missing-app-config-values",{valueName:e})}/**
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
 */const st="installations",_r="installations-internal",Ar=e=>{const t=e.getProvider("app").getImmediate(),n=Er(t),r=x(t,"heartbeat");return{app:t,appConfig:n,heartbeatServiceProvider:r,_delete:()=>Promise.resolve()}},vr=e=>{const t=e.getProvider("app").getImmediate(),n=x(t,st).getImmediate();return{getId:()=>yr(n),getToken:a=>wr(n,a)}};function Sr(){T(new A(st,Ar,"PUBLIC")),T(new A(_r,vr,"PRIVATE"))}Sr();_(Ve,ae);_(Ve,ae,"esm2017");/**
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
 */const P="analytics",Dr="firebase_id",Tr="origin",Cr=60*1e3,Or="https://firebase.googleapis.com/v1alpha/projects/-/apps/{app-id}/webConfig",ce="https://www.googletagmanager.com/gtag/js";/**
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
 */const f=new Pe("@firebase/analytics");/**
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
 */const kr={"already-exists":"A Firebase Analytics instance with the appId {$id}  already exists. Only one Firebase Analytics instance can be created for each appId.","already-initialized":"initializeAnalytics() cannot be called again with different options than those it was initially called with. It can be called again with the same options to return the existing instance, or getAnalytics() can be used to get a reference to the already-initialized instance.","already-initialized-settings":"Firebase Analytics has already been initialized.settings() must be called before initializing any Analytics instanceor it will have no effect.","interop-component-reg-failed":"Firebase Analytics Interop Component failed to instantiate: {$reason}","invalid-analytics-context":"Firebase Analytics is not supported in this environment. Wrap initialization of analytics in analytics.isSupported() to prevent initialization in unsupported environments. Details: {$errorInfo}","indexeddb-unavailable":"IndexedDB unavailable or restricted in this environment. Wrap initialization of analytics in analytics.isSupported() to prevent initialization in unsupported environments. Details: {$errorInfo}","fetch-throttle":"The config fetch request timed out while in an exponential backoff state. Unix timestamp in milliseconds when fetch request throttling ends: {$throttleEndTimeMillis}.","config-fetch-failed":"Dynamic config fetch failed: [{$httpStatus}] {$responseMessage}","no-api-key":'The "apiKey" field is empty in the local Firebase config. Firebase Analytics requires this field tocontain a valid API key.',"no-app-id":'The "appId" field is empty in the local Firebase config. Firebase Analytics requires this field tocontain a valid app ID.',"no-client-id":'The "client_id" field is empty.',"invalid-gtag-resource":"Trusted Types detected an invalid gtag resource: {$gtagURL}."},m=new N("analytics","Analytics",kr);/**
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
 */function Rr(e){if(!e.startsWith(ce)){const t=m.create("invalid-gtag-resource",{gtagURL:e});return f.warn(t.message),""}return e}function ot(e){return Promise.all(e.map(t=>t.catch(n=>n)))}function Fr(e,t){let n;return window.trustedTypes&&(n=window.trustedTypes.createPolicy(e,t)),n}function Br(e,t){const n=Fr("firebase-js-sdk-policy",{createScriptURL:Rr}),r=document.createElement("script"),a=`${ce}?l=${e}&id=${t}`;r.src=n?n==null?void 0:n.createScriptURL(a):a,r.async=!0,document.head.appendChild(r)}function Mr(e){let t=[];return Array.isArray(window[e])?t=window[e]:window[e]=t,t}async function $r(e,t,n,r,a,i){const s=r[a];try{if(s)await t[s];else{const c=(await ot(n)).find(l=>l.measurementId===a);c&&await t[c.appId]}}catch(o){f.error(o)}e("config",a,i)}async function Pr(e,t,n,r,a){try{let i=[];if(a&&a.send_to){let s=a.send_to;Array.isArray(s)||(s=[s]);const o=await ot(n);for(const c of s){const l=o.find(p=>p.measurementId===c),h=l&&t[l.appId];if(h)i.push(h);else{i=[];break}}}i.length===0&&(i=Object.values(t)),await Promise.all(i),e("event",r,a||{})}catch(i){f.error(i)}}function Nr(e,t,n,r){async function a(i,...s){try{if(i==="event"){const[o,c]=s;await Pr(e,t,n,o,c)}else if(i==="config"){const[o,c]=s;await $r(e,t,n,r,o,c)}else if(i==="consent"){const[o,c]=s;e("consent",o,c)}else if(i==="get"){const[o,c,l]=s;e("get",o,c,l)}else if(i==="set"){const[o]=s;e("set",o)}else e(i,...s)}catch(o){f.error(o)}}return a}function Lr(e,t,n,r,a){let i=function(...s){window[r].push(arguments)};return window[a]&&typeof window[a]=="function"&&(i=window[a]),window[a]=Nr(i,e,t,n),{gtagCore:i,wrappedGtag:window[a]}}function xr(e){const t=window.document.getElementsByTagName("script");for(const n of Object.values(t))if(n.src&&n.src.includes(ce)&&n.src.includes(e))return n;return null}/**
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
 */const jr=30,Hr=1e3;class Ur{constructor(t={},n=Hr){this.throttleMetadata=t,this.intervalMillis=n}getThrottleMetadata(t){return this.throttleMetadata[t]}setThrottleMetadata(t,n){this.throttleMetadata[t]=n}deleteThrottleMetadata(t){delete this.throttleMetadata[t]}}const ct=new Ur;function Vr(e){return new Headers({Accept:"application/json","x-goog-api-key":e})}async function zr(e){var t;const{appId:n,apiKey:r}=e,a={method:"GET",headers:Vr(r)},i=Or.replace("{app-id}",n),s=await fetch(i,a);if(s.status!==200&&s.status!==304){let o="";try{const c=await s.json();!((t=c.error)===null||t===void 0)&&t.message&&(o=c.error.message)}catch{}throw m.create("config-fetch-failed",{httpStatus:s.status,responseMessage:o})}return s.json()}async function qr(e,t=ct,n){const{appId:r,apiKey:a,measurementId:i}=e.options;if(!r)throw m.create("no-app-id");if(!a){if(i)return{measurementId:i,appId:r};throw m.create("no-api-key")}const s=t.getThrottleMetadata(r)||{backoffCount:0,throttleEndTimeMillis:Date.now()},o=new Kr;return setTimeout(async()=>{o.abort()},Cr),lt({appId:r,apiKey:a,measurementId:i},s,o,t)}async function lt(e,{throttleEndTimeMillis:t,backoffCount:n},r,a=ct){var i;const{appId:s,measurementId:o}=e;try{await Wr(r,t)}catch(c){if(o)return f.warn(`Timed out fetching this Firebase app's measurement ID from the server. Falling back to the measurement ID ${o} provided in the "measurementId" field in the local Firebase config. [${c==null?void 0:c.message}]`),{appId:s,measurementId:o};throw c}try{const c=await zr(e);return a.deleteThrottleMetadata(s),c}catch(c){const l=c;if(!Gr(l)){if(a.deleteThrottleMetadata(s),o)return f.warn(`Failed to fetch this Firebase app's measurement ID from the server. Falling back to the measurement ID ${o} provided in the "measurementId" field in the local Firebase config. [${l==null?void 0:l.message}]`),{appId:s,measurementId:o};throw c}const h=Number((i=l==null?void 0:l.customData)===null||i===void 0?void 0:i.httpStatus)===503?ue(n,a.intervalMillis,jr):ue(n,a.intervalMillis),p={throttleEndTimeMillis:Date.now()+h,backoffCount:n+1};return a.setThrottleMetadata(s,p),f.debug(`Calling attemptFetch again in ${h} millis`),lt(e,p,r,a)}}function Wr(e,t){return new Promise((n,r)=>{const a=Math.max(t-Date.now(),0),i=setTimeout(n,a);e.addEventListener(()=>{clearTimeout(i),r(m.create("fetch-throttle",{throttleEndTimeMillis:t}))})})}function Gr(e){if(!(e instanceof k)||!e.customData)return!1;const t=Number(e.customData.httpStatus);return t===429||t===500||t===503||t===504}class Kr{constructor(){this.listeners=[]}addEventListener(t){this.listeners.push(t)}abort(){this.listeners.forEach(t=>t())}}async function Yr(e,t,n,r,a){if(a&&a.global){e("event",n,r);return}else{const i=await t,s=Object.assign(Object.assign({},r),{send_to:i});e("event",n,s)}}async function Jr(e,t,n,r){{const a=await t;e("config",a,{update:!0,user_id:n})}}async function Xr(e,t,n,r){{const a=await t;e("config",a,{update:!0,user_properties:n})}}/**
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
 */async function Qr(){if(Me())try{await $e()}catch(e){return f.warn(m.create("indexeddb-unavailable",{errorInfo:e==null?void 0:e.toString()}).message),!1}else return f.warn(m.create("indexeddb-unavailable",{errorInfo:"IndexedDB is not available in this environment."}).message),!1;return!0}async function Zr(e,t,n,r,a,i,s){var o;const c=qr(e);c.then(g=>{n[g.measurementId]=g.appId,e.options.measurementId&&g.measurementId!==e.options.measurementId&&f.warn(`The measurement ID in the local Firebase config (${e.options.measurementId}) does not match the measurement ID fetched from the server (${g.measurementId}). To ensure analytics events are always sent to the correct Analytics property, update the measurement ID field in the local config or remove it from the local config.`)}).catch(g=>f.error(g)),t.push(c);const l=Qr().then(g=>{if(g)return r.getId()}),[h,p]=await Promise.all([c,l]);xr(i)||Br(i,h.measurementId),a("js",new Date);const y=(o=s==null?void 0:s.config)!==null&&o!==void 0?o:{};return y[Tr]="firebase",y.update=!0,p!=null&&(y[Dr]=p),a("config",h.measurementId,y),h.measurementId}/**
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
 */class ea{constructor(t){this.app=t}_delete(){return delete D[this.app.options.appId],Promise.resolve()}}let D={},_e=[];const Ae={};let Y="dataLayer",ta="gtag",ve,U,Se=!1;function na(){const e=[];if(_t()&&e.push("This is a browser extension environment."),At()||e.push("Cookies are not available."),e.length>0){const t=e.map((r,a)=>`(${a+1}) ${r}`).join(" "),n=m.create("invalid-analytics-context",{errorInfo:t});f.warn(n.message)}}function ra(e,t,n){na();const r=e.options.appId;if(!r)throw m.create("no-app-id");if(!e.options.apiKey)if(e.options.measurementId)f.warn(`The "apiKey" field is empty in the local Firebase config. This is needed to fetch the latest measurement ID for this Firebase app. Falling back to the measurement ID ${e.options.measurementId} provided in the "measurementId" field in the local Firebase config.`);else throw m.create("no-api-key");if(D[r]!=null)throw m.create("already-exists",{id:r});if(!Se){Mr(Y);const{wrappedGtag:i,gtagCore:s}=Lr(D,_e,Ae,Y,ta);U=i,ve=s,Se=!0}return D[r]=Zr(e,_e,Ae,t,ve,Y,n),new ea(e)}function aa(e=Cn()){e=L(e);const t=x(e,P);return t.isInitialized()?t.getImmediate():ia(e)}function ia(e,t={}){const n=x(e,P);if(n.isInitialized()){const a=n.getImmediate();if(B(t,n.getOptions()))return a;throw m.create("already-initialized")}return n.initialize({options:t})}function sa(e,t,n){e=L(e),Jr(U,D[e.app.options.appId],t).catch(r=>f.error(r))}function oa(e,t,n){e=L(e),Xr(U,D[e.app.options.appId],t).catch(r=>f.error(r))}function b(e,t,n,r){e=L(e),Yr(U,D[e.app.options.appId],t,n,r).catch(a=>f.error(a))}const De="@firebase/analytics",Te="0.10.17";function ca(){T(new A(P,(t,{options:n})=>{const r=t.getProvider("app").getImmediate(),a=t.getProvider("installations-internal").getImmediate();return ra(r,a,n)},"PUBLIC")),T(new A("analytics-internal",e,"PRIVATE")),_(De,Te),_(De,Te,"esm2017");function e(t){try{const n=t.getProvider(P).getImmediate();return{logEvent:(r,a,i)=>b(n,r,a,i)}}catch(n){throw m.create("interop-component-reg-failed",{reason:n})}}}ca();const R=window.firebaseConfig||{},la=["apiKey","authDomain","projectId","storageBucket","messagingSenderId","appId"],Ce=la.filter(e=>!R[e]);Ce.length>0&&(console.warn("Firebase configuration is incomplete. Missing keys:",Ce),console.warn("Please check your environment variables: FIREBASE_API_KEY, FIREBASE_AUTH_DOMAIN, FIREBASE_PROJECT_ID, FIREBASE_STORAGE_BUCKET, FIREBASE_MESSAGING_SENDER_ID, FIREBASE_APP_ID"));let Oe=null,u=null;try{R.apiKey&&R.projectId&&R.appId?(Oe=je(R),u=aa(Oe),console.log("Firebase Analytics initialized successfully")):console.warn("Firebase Analytics not initialized - missing required configuration")}catch(e){console.error("Error initializing Firebase:",e)}const ne={trackPageView:(e,t=null)=>{if(!u){console.warn("Firebase Analytics not available - page view not tracked");return}try{b(u,"page_view",{page_title:t||e,page_location:window.location.href,page_name:e}),console.log("Firebase Analytics: Page view tracked for",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackUserEngagement:(e,t={})=>{if(!u){console.warn("Firebase Analytics not available - user engagement not tracked");return}try{b(u,e,{...t,timestamp:new Date().toISOString(),user_agent:navigator.userAgent}),console.log("Firebase Analytics: Event tracked",e,t)}catch(n){console.error("Firebase Analytics Error:",n)}},trackButtonClick:(e,t=null)=>{if(!u){console.warn("Firebase Analytics not available - button click not tracked");return}try{b(u,"button_click",{button_name:e,page_name:t||window.location.pathname,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Button click tracked",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackFormSubmission:(e,t=!0,n=null)=>{if(!u){console.warn("Firebase Analytics not available - form submission not tracked");return}try{b(u,"form_submission",{form_name:e,success:t,error_message:n,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Form submission tracked",e,t)}catch(r){console.error("Firebase Analytics Error:",r)}},trackQuizInteraction:(e,t=null,n=null,r=null)=>{if(!u){console.warn("Firebase Analytics not available - quiz interaction not tracked");return}try{b(u,"quiz_interaction",{action:e,quiz_id:t,question_id:n,category:r,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Quiz interaction tracked",e)}catch(a){console.error("Firebase Analytics Error:",a)}},trackBlogInteraction:(e,t=null,n=null)=>{if(!u){console.warn("Firebase Analytics not available - blog interaction not tracked");return}try{b(u,"blog_interaction",{action:e,blog_id:t,category:n,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Blog interaction tracked",e)}catch(r){console.error("Firebase Analytics Error:",r)}},trackSearch:(e,t=0)=>{if(!u){console.warn("Firebase Analytics not available - search not tracked");return}try{b(u,"search",{search_term:e,results_count:t,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Search tracked",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackNavigation:(e,t,n="link")=>{if(!u){console.warn("Firebase Analytics not available - navigation not tracked");return}try{b(u,"navigation",{from_page:e,to_page:t,navigation_type:n,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Navigation tracked",e,"to",t)}catch(r){console.error("Firebase Analytics Error:",r)}},setUser:(e,t={})=>{if(!u){console.warn("Firebase Analytics not available - user not set");return}try{sa(u,e),Object.keys(t).length>0&&oa(u,t),console.log("Firebase Analytics: User set",e)}catch(n){console.error("Firebase Analytics Error:",n)}},trackCustomEvent:(e,t={})=>{if(!u){console.warn("Firebase Analytics not available - custom event not tracked");return}try{b(u,e,{...t,timestamp:new Date().toISOString()}),console.log("Firebase Analytics: Custom event tracked",e,t)}catch(n){console.error("Firebase Analytics Error:",n)}}};document.addEventListener("DOMContentLoaded",function(){const e=window.location.pathname,t=document.title;ne.trackPageView(e,t),document.addEventListener("click",function(n){const r=n.target.closest("a");if(r&&r.href&&r.href.startsWith(window.location.origin)){const a=window.location.pathname,i=new URL(r.href).pathname;a!==i&&ne.trackNavigation(a,i,"link")}})});window.firebaseAnalytics=ne;
