function e(e,t,r,o){Object.defineProperty(e,t,{get:r,set:o,enumerable:!0,configurable:!0})}function t(e){return e&&e.__esModule?e.default:e}var r=globalThis,o={},i={},n=r.parcelRequiree178;null==n&&((n=function(e){if(e in o)return o[e].exports;if(e in i){var t=i[e];delete i[e];var r={id:e,exports:{}};return o[e]=r,t.call(r.exports,r,r.exports),r.exports}var n=Error("Cannot find module '"+e+"'");throw n.code="MODULE_NOT_FOUND",n}).register=function(e,t){i[e]=t},r.parcelRequiree178=n);var a=n.register;a("5H6Fu",function(e,t){let r=["http://localhost:2999/","http://localhost:3002/"];e.exports={getTargetOrigin:()=>{var e;return r.includes(null===(e=document)||void 0===e?void 0:e.referrer)?document.referrer:"https://trello.com".toString()}}}),a("dRVbC",function(t,r){e(t.exports,"canAccessLocalStorage",()=>o);let o=()=>{try{return localStorage.setItem("test","local"),localStorage.removeItem("test"),sessionStorage.setItem("test","session"),sessionStorage.removeItem("test"),!0}catch(e){return!1}}}),a("87Qd2",function(r,o){e(r.exports,"convertErrors",()=>s);var i=n("3AbJ1"),a=n("bNRli");let{Promise:l}=window.TrelloPowerUp,s=e=>l.resolve(e).catch(e=>{if(e){let r,o;try{o=JSON.parse(e.body),r=t(i).get(o,"error.message")}catch(e){}if(403===e.status&&o&&"usageLimits"===t(i).get(o,"error.errors[0].domain"))throw console.warn("Rate Limited!"),new a.GoogleDriveError.RateLimited(r);throw(0,a.errorForStatus)(e.status,r)}throw new a.GoogleDriveError.Unknown})}),a("bNRli",function(t,r){e(t.exports,"GoogleDriveError",()=>o),e(t.exports,"errorForStatus",()=>a);let o=window.TrelloPowerUp.util.makeErrorEnum("GoogleDrive",["BadRequest","Unauthorized","Forbidden","NotFound","TooManyRequests","InternalServerError","BadGateway","Unavailable","GatewayTimeout","Unknown","Cancelled","RateLimited"]),i={400:o.BadRequest,401:o.Unauthorized,403:o.Forbidden,404:o.NotFound,429:o.TooManyRequests,500:o.InternalServerError,502:o.BadGateway,503:o.Unavailable,504:o.GatewayTimeout},n=e=>Object.prototype.hasOwnProperty.call(i,e),a=(e,t)=>n(e)?new i[e](t):new o.Unknown(t)}),a("cgU5L",function(t,r){e(t.exports,"getGAPI",()=>s);var o=n("lUgnI"),i=n("bNRli"),a=n("iDJYa");let{Promise:l}=window.TrelloPowerUp,s=e=>l.try(async()=>{let t=await a.waitForGAPI,r=await (0,o.getToken)(e);if(!r)throw new i.GoogleDriveError.Unauthorized;return t.client.setToken({access_token:r}),t})}),a("lUgnI",function(t,r){e(t.exports,"getToken",()=>d);var o=n("bNRli");let{Promise:i}=window.TrelloPowerUp,a=e=>!!e.opener&&e.opener!==e&&e.opener.location.origin===e.location.origin,l=e=>a(e)?e.opener.sessionStorage:e.sessionStorage,s=async e=>{let t;return a(window)?await new i(e=>{t=t=>{t.origin===window.opener.location.origin&&"getRefreshToken"===t.data.message&&e(t.data.refreshToken)},window.addEventListener("message",t),window.opener.postMessage({message:"getRefreshToken"},window.opener.location.origin)}).timeout(2500).catch(i.TimeoutError,()=>null).catch(e=>(window.Sentry.captureException(e),null)).finally(()=>{window.removeEventListener("message",t)}):await e.get("member","private","refresh").catch(e=>(window.Sentry.captureException(e),null))},c=async e=>{let t=await s(e);if(!t)throw new o.GoogleDriveError.Unauthorized("Load Secret Failure");let r=await fetch("./refresh",{method:"POST",headers:{Authorization:`bearer ${t}`}});if(!r.ok)throw e.remove("member","private","refresh"),new o.GoogleDriveError.Unauthorized("Refresh Failure");let i=await r.json(),n=l(window);return n.setItem("access_token",i.access_token),n.setItem("id_token",i.id_token),n.setItem("token_expiry",Date.now()+1e3*i.expires_in),i.access_token},d=e=>i.try(async()=>{let t;let r=l(window);try{t=r.getItem("access_token")}catch(e){throw new o.GoogleDriveError.Unauthorized("SessionStorage Access Denied")}if(t){let o=r.getItem("token_expiry");return Date.now()>parseInt(o,10)?c(e):t}return c(e)})}),a("iDJYa",function(t,r){e(t.exports,"waitForGAPI",()=>n);let{Promise:o}=window.TrelloPowerUp,i=["https://www.googleapis.com/discovery/v1/apis/drive/v3/rest"];window.gapiReady=null;let n=new o(e=>{window.gapiReady=()=>{gapi.load("client",()=>{gapi.client.init({discoveryDocs:i}).then(()=>{e(gapi)},()=>{})}),window.gapiReady=null}})}),a("fxA2j",function(e,t){e.exports={defaultLocale:"en",supportedLocales:["cs","de","en","es","fi","fr","hu","it","ja","nb","nl","pl","pt-BR","ru","sv","th","tr","uk","vi","zh-Hans","zh-Hant"],resourceUrl:"./strings/f005343eb11c/{locale}.json"}});var l=n("5H6Fu"),s=n("dRVbC"),c=n("pJ9yq"),d=n("gV68j"),u=n("ccTqr"),g=n("87Qd2"),p=n("cgU5L"),w=n("bNRli"),c=n("pJ9yq");t(u).addPlugin(t(d));const{Promise:m}=window.TrelloPowerUp,h=(e,r,o)=>m.try(()=>{let i=(0,c.GoogleDriveURL).parse(r);return i.isGoogleDriveURL?m.try(async()=>{if(!(i.isFile||i.isFolder)||!i.id)return null;let r=t(u).get(i.id);if(r)return r;let o=await (0,p.getGAPI)(e);return(await (0,g.convertErrors)(o.client.request({path:`/drive/v3/files/${i.id||""}`,method:"GET",params:{supportsTeamDrives:!0,fields:"kind,id,name,teamDriveId,mimeType,trashed,explicitlyTrashed,webContentLink,webViewLink,iconLink,hasThumbnail,thumbnailLink,createdTime,modifiedTime,lastModifyingUser,size"}}))).result}).then(e=>{if(null==e)return null;t(u).set(e.id,e,Date.now()+3e5);let r={image:{url:e.thumbnailLink,logo:!e.thumbnailLink,y:"top",size:"contain"},title:e.name,contentLink:e.webContentLink,size:e.size,created:Date.parse(e.createdTime),modified:Date.parse(e.modifiedTime),description:e.description,mimeType:e.mimeType,isFolder:i.isFolder};return e.lastModifyingUser&&e.lastModifyingUser.displayName&&(r.modifiedBy=e.lastModifyingUser.displayName),r}).catch(w.GoogleDriveError.Unauthorized,()=>({image:{url:"./images/icon.svg",logo:!0},title:o||r,uninitialized:!0})).catch(()=>{throw e.NotHandled()}):null});var y=n("lUgnI"),w=n("bNRli"),f=n("fxA2j");const v=e=>{let t=[" Bytes"," KB"," MB"," GB"," TB"," PB"," EB"," ZB"," YB"];for(let r=1;r<t.length;r++)if(e<1024**r)return Math.round(e/1024**(r-1)*100)/100+(t[r-1]||"");return e},b="./images/icon.svg",{Promise:z}=window.TrelloPowerUp;window.TrelloPowerUp.initialize({"attachment-sections":(e,t)=>{if(!e.isMemberSignedIn())return[];let{entries:r}=t,o=r.filter(e=>(0,c.GoogleDriveURL).isFolder(e.url));return 0===o.length?[]:z.map(o,t=>{let r=h(e,t.url,t.name).then(e=>null==e?void 0:e.title).catch(()=>t.name||e.localizeKey("google_drive_folder"));return{id:t.id,claimed:[t],icon:b,title:()=>r,content:{type:"iframe",url:e.signUrl("./folder.html",{url:t.url})}}})},"attachment-thumbnail":(e,t)=>z.try(async()=>{if(!e.isMemberSignedIn())throw e.NotHandled();let r=null;try{r=await h(e,t.url,t.name)}catch(e){}if(null===r)throw e.NotHandled();if(r.url=t.url,r.openText=e.localizeKey("open_in_google_drive"),r.image.url||(r.image.url=b),r.uninitialized){if(!(0,s.canAccessLocalStorage)())throw e.NotHandled();r.initialize={type:"iframe",url:e.signUrl(window.TrelloPowerUp.util.relativeUrl("authorize-link.html"))}}return r}),"board-buttons":e=>[{icon:b,text:e.localizeKey("google_drive"),callback:e=>{let t=e=>e.popup({title:e.localizeKey("google_drive"),items:[{text:e.localizeKey("create_slides_presentation"),callback:e=>e.popup({title:e.localizeKey("generating_presentation"),url:"create-presentation.html",height:40})}]});return(0,y.getToken)(e).then(()=>t(e)).catch(w.GoogleDriveError.Unauthorized,()=>e.popup({title:e.localizeKey("authorize"),url:"authorize.html",callback:e=>t(e)}))}}],"card-buttons":e=>e.memberCanWriteToModel("card")?[{icon:b,text:e.localizeKey("google_drive"),callback:e=>e.popup({title:e.localizeKey("google_drive"),url:"card-menu.html",height:96})}]:[],"format-url":async(e,t)=>{if(!(0,c.GoogleDriveURL).parse(t.url).isGoogleDriveURL)throw e.NotHandled();let r=null;try{r=await h(e,t.url)}catch(e){}if(null===r)throw e.NotHandled();let{title:o,image:i,contentLink:n,size:a,mimeType:l,uninitialized:s,isFolder:d}=r;if(s)return{icon:b,text:t.url};if(d)return{icon:b,text:o,subtext:e.localizeKey("google_drive_folder"),...i.url&&{thumbnail:i.url}};let u=n&&!["application/vnd.google-apps.document"].includes(l);return{icon:b,text:o,subtext:((t,r)=>{if(t)return String(v(t));if(r.startsWith("application/vnd.google-apps."))switch(r.replace("application/vnd.google-apps.","")){case"document":return e.localizeKey("google_docs");case"spreadsheet":return e.localizeKey("google_sheets");case"presentation":return e.localizeKey("google_slides");case"form":return e.localizeKey("google_forms");case"drawing":return e.localizeKey("google_drawings");case"map":return e.localizeKey("google_my_maps");case"site":return e.localizeKey("google_sites");case"script":return e.localizeKey("google_apps_script");case"jam":return e.localizeKey("google_jamboard")}return""})(a,l),...i.url&&{thumbnail:i.url},...u&&{actions:[{text:e.localizeKey("download"),url:n}]}}},"remove-data":async e=>{let t=await (0,y.getToken)(e);await fetch(`https://oauth2.googleapis.com/revoke?token=${t}`,{method:"POST"}),sessionStorage.clear()},"show-settings":e=>e.popup({title:e.localizeKey("google_drive"),url:"auth-status.html"})},{targetOrigin:(0,l.getTargetOrigin)(),localization:t(f),Sentry:window.Sentry});
//# sourceMappingURL=index.a1964f61.js.map
