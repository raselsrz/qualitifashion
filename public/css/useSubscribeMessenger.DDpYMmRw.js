import{K as w,J as b,G as I,b1 as k,b5 as M,af as T}from"./app.DCvXxO1S.js";const v=()=>{const{myshopifyDomain:e}=w(),{checkoutSessionIdentifier:r}=b(),o=I();return{exchangeSessionTokenForCookie:k(async({token:u,origin:d,analytics_trace_id:i,in_checkout_profile_preview:t})=>{const{primary:h}=M(),n=new URLSearchParams({token:u,origin:d,shopify_domain:e});r&&n.set("checkout_token",r),i&&n.set("analytics_trace_id",i),t&&n.set("in_checkout_profile_preview",t),await fetch(`https://${h}${o.shopPaySession()}?${n.toString()}`,{method:"POST",keepalive:!0})},[r,e,o])}},_="shopify_pay",c=":";var a=(e=>(e.Closed="closed",e.EmailChanged="emailChanged",e.Error="error",e.Hidden="hidden",e.Loaded="loaded",e.LoggedIn="loggedIn",e.Ready="ready",e.RedirectWithEmailOnly="redirectWithEmailOnly",e.Resized="resized",e.ShareCaptchaToken="shareCaptchaToken",e))(a||{}),L=(e=>(e.AllowNoInitialEmail="allowNoInitialEmail",e.Create="create",e.Hidden="hidden",e.OriginChanged="originChanged",e.Ready="ready",e.CheckoutQueueToken="checkoutQueueToken",e))(L||{}),N=(e=>(e.ShopifyPayUserNotFound="shopify_pay_user_not_found",e))(N||{}),x=(e=>(e.FraudGuard="fraud_guard",e.InvalidEmail="invalid_email",e.InvalidPhone="invalid_phone",e.LimitExceeded="limit_exceeded",e.PhoneBlocked="phone_blocked",e.RecordNotFound="record_not_found",e))(x||{});function F(e,r={delimiter:c,messageKey:_}){return[r.messageKey,r.delimiter,JSON.stringify(e)].join("")}function O(e){return F(e)}function z(e,r){e&&e.contentWindow?.postMessage(O(r),"*")}function K({hostname:e,targetId:r,onLoaded:o,onClosed:m,onHidden:u,onError:d,onLoggedIn:i,onReady:t,onResized:h,onRedirectUserWithEmailOnly:n,onShareCaptchaToken:g,onEmailChange:y}){const f=k(s=>{switch(s.action){case a.Closed:return m?.();case a.Hidden:return u?.();case a.Error:return d?.(s.message,s.apiError,s.email);case a.Loaded:return o?.();case a.LoggedIn:return i?.(s.token,s.in_checkout_profile_preview,s.shop_pay_access_token);case a.Ready:return t?.(s.phoneNumber);case a.Resized:return h?.(parseInt(s.height,10));case a.RedirectWithEmailOnly:return n?.(s.email);case a.ShareCaptchaToken:return g?.(s.token);case a.EmailChanged:return y?.(s.email,s.isUserFound)}},[m,u,d,o,i,t,h,n,g,y]);T(()=>{const s=({data:l,origin:S})=>{if(S!==`https://${e}`||!l||typeof l!="string"||!l.includes(c))return;const[C,...E]=l.split(c);if(C===_)try{const p=JSON.parse(E.join(c));(r&&p.targetId===r||!r)&&f(p)}catch{}};return window.addEventListener("message",s),()=>{window.removeEventListener("message",s)}},[f,e,r])}export{x as A,N as M,L as S,K as a,z as p,v as u};
