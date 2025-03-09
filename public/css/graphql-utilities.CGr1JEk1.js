import{h6 as F,pT as M,a as x,pU as U,pV as v,D as E,mI as L,n8 as B,n6 as w,n3 as N,n5 as a,nq as V,np as H,mY as W,m$ as G,nn as u,bQ as b,lw as I,pW as Y,pX as _,pY as K,pZ as C,p_ as Q,p$ as c}from"./app.DCvXxO1S.js";const Te=F(function({controller:t,receiver:n}){const{root:s}=n.attached,{children:i}=M(n,s),{renderComponent:r,renderText:d}=t.renderer;return x(E,{children:i.map(o=>{switch(o.kind){case v:return r({parent:s,component:o,receiver:n,controller:t,key:o.id});case U:return d({parent:s,text:o,receiver:n,key:o.id});default:return null}})})});class X extends Error{name="ReceiptError"}function De(e,t={pollingTimeoutReached:!1,skipToThankYouPage:!1,waitingForPostPurchaseDone:!1}){switch(e.__typename){case"ProcessingReceipt":case"WaitingReceipt":return{status:"processing",id:e.id,pollAt:Date.now()+e.pollDelay};case"ProcessedReceipt":{if(e.postPurchasePageRequested&&e.postPurchaseVaultedPaymentMethodStatus==="NOT_READY"&&!t.pollingTimeoutReached)return{status:"polling_for_order",id:e.id,token:e.token};const n={amount:parseFloat(e.purchaseOrder.totalAmountToPay.amount),currencyCode:e.purchaseOrder.totalAmountToPay.currencyCode},s=L(e.purchaseOrder.note);return{status:"processed",id:e.id,token:e.token,redirectUrl:e.redirectUrl||null,confirmationPage:{url:e.confirmationPage.url,shouldRedirect:e.confirmationPage.shouldRedirect},analytics:{checkoutCompletedEventId:e.analytics?.checkoutCompletedEventId||null,emitConversionEvent:e.analytics?.emitConversionEvent||!1},orderIdentity:{buyerIdentifier:e.orderIdentity.buyerIdentifier,id:e.orderIdentity.id},paymentDetails:{paymentCardBrand:e.paymentDetails?.paymentCardBrand,creditCardLastFourDigits:e.paymentDetails?.creditCardLastFourDigits,paymentAmount:e.paymentDetails?.paymentAmount?.amount,paymentCurrency:e.paymentDetails?.paymentAmount?.currencyCode,paymentGateway:e.paymentDetails?.paymentGateway,financialPendingReason:e.paymentDetails?.financialPendingReason,paymentDescriptor:e.paymentDetails?.paymentDescriptor,buyerActionInfo:e.paymentDetails?.buyerActionInfo??void 0},purchaseOrder:{email:$(e.purchaseOrder.buyerIdentity),phone:Z(e.purchaseOrder.buyerIdentity),checkoutCompletionTarget:e.purchaseOrder.checkoutCompletionTarget,shippingAddress:j(e.purchaseOrder.delivery),billingAddress:J(e.purchaseOrder.payment),paymentLines:se(e.purchaseOrder.payment),deliveryNext:te(e.purchaseOrder.delivery,s),deliveryExpectations:ne(e.purchaseOrder.deliveryExpectations),paymentDue:B(e.purchaseOrder.payment,n),runningTotal:n,merchandiseLines:me(e.purchaseOrder.merchandise),totalTaxes:e.purchaseOrder.tax.totalTaxAmountV2?h(e.purchaseOrder.tax.totalTaxAmountV2):void 0,metafields:e.purchaseOrder.metafields},purchaseOrderNumber:e.poNumber??void 0,orderCreationStatus:ce(e.orderCreationStatus),postPurchasePageUrl:e.postPurchasePageUrl,postPurchaseVaultingStatus:le(e.postPurchaseVaultedPaymentMethodStatus),postPurchasePageRequested:e.postPurchasePageRequested,shopPayArtifact:{optIn:e.purchaseOrder.shopPayArtifact?.optIn??void 0},shopAppLinksAndResources:{qrCodeUrl:e.shopAppLinksAndResources.qrCodeUrl,mobileUrl:e.shopAppLinksAndResources.mobileUrl,canTrackOrderUpdates:e.shopAppLinksAndResources.canTrackOrderUpdates,shopInstallmentsViewSchedules:e.shopAppLinksAndResources.shopInstallmentsViewSchedules,installmentsHighlightEligible:e.shopAppLinksAndResources.installmentsHighlightEligible,shopInstallmentsMobileUrl:e.shopAppLinksAndResources.shopInstallmentsMobileUrl,mobileUrlAttributionPayload:e.shopAppLinksAndResources.mobileUrlAttributionPayload,shopAppEligible:e.shopAppLinksAndResources.shopAppEligible,shopAppQrCodeKillswitch:e.shopAppLinksAndResources.shopAppQrCodeKillswitch,shopPayOrder:e.shopAppLinksAndResources.shopPayOrder,buyerHasShopApp:e.shopAppLinksAndResources?.buyerHasShopApp??void 0,buyerHasShopPay:e.shopAppLinksAndResources?.buyerHasShopPay??void 0,orderUpdateOptions:e.shopAppLinksAndResources.orderUpdateOptions},skipToThankYouPage:!!t.skipToThankYouPage,waitingForPostPurchaseDone:!1,eligibleForMarketingOptIn:e.eligibleForMarketingOptIn,recurringTotals:w(e.purchaseOrder.recurringTotals),deferredTotal:N(e.purchaseOrder.deferredTotal??void 0),checkoutTotalBeforeTaxesAndShipping:e.purchaseOrder.checkoutTotalBeforeTaxesAndShipping?a(e.purchaseOrder.checkoutTotalBeforeTaxesAndShipping):void 0,checkoutTotal:a(e.purchaseOrder.checkoutTotal),checkoutTotalTaxes:e.purchaseOrder.checkoutTotalTaxes?a(e.purchaseOrder.checkoutTotalTaxes):void 0,taxes:V({...e.purchaseOrder.tax,totalTaxAmount:e.purchaseOrder.tax.totalTaxAmountV2??void 0}),legacyRepresentProductsAsFees:e.purchaseOrder.legacyRepresentProductsAsFees,totalSavings:a(e.purchaseOrder.totalSavings),subtotal:a(e.purchaseOrder.subtotalBeforeTaxesAndShipping),landedCostDetails:e.purchaseOrder.landedCostDetails?.incotermInformation??void 0,dutiesIncluded:e.purchaseOrder.dutiesIncluded??void 0,duties:fe(e.purchaseOrder.tax.totalDutyAmount),paymentFlexibilityPaymentTermsTemplate:e.paymentFlexibilityPaymentTermsTemplate??void 0,optionalDuties:e.purchaseOrder.optionalDuties?H(e.purchaseOrder.optionalDuties):void 0,discountLines:pe(e.purchaseOrder.discounts),tipLines:Pe(e.purchaseOrder.tip),hasOnlyDeferredShipping:e.purchaseOrder.hasOnlyDeferredShipping,acceptEmailMarketing:Ae(e.purchaseOrder.buyerIdentity),acceptSmsMarketing:be(e.purchaseOrder.buyerIdentity),smsMarketingPhone:Ie(e.purchaseOrder.buyerIdentity),note:e.purchaseOrder.note.message??void 0,paymentMethods:_e(e.purchaseOrder.payment.paymentLines),customerId:e.customerId??void 0,isFirstOrder:e.isFirstOrder??void 0,buyerIdentity:e.purchaseOrder.buyerIdentity?W(e.purchaseOrder.buyerIdentity):void 0,subtotalBeforeReductions:a(e.purchaseOrder.subtotalBeforeReductions),customAttributes:e.purchaseOrder.note?.customAttributes??void 0,legacySubtotalBeforeTaxesShippingAndFees:a(e.purchaseOrder.legacySubtotalBeforeTaxesShippingAndFees),legacyMerchandiseLinesAsFees:G(e.purchaseOrder.legacyAggregatedMerchandiseTermsAsFees)}}case"FailedReceipt":return{status:"failed",id:e.id,failure:oe(e.processingError)};case"ActionRequiredReceipt":return{status:"action_required",id:e.id,action:de(e.action),timeout:ue(e)};default:throw new X(`Unknown receipt type: ${e.__typename}`)}}function $(e){const{contactMethod:t}=e;return t?.__typename==="PurchaseOrderEmailContactMethod"?t.email:void 0}function Z(e){const{contactMethod:t}=e;return t?.__typename==="PurchaseOrderSMSContactMethod"?t.phoneNumber:void 0}function j(e){const t=e.deliveryLines.find(s=>s.destinationAddress)?.destinationAddress,n=t?.__typename==="StreetAddress"?t:void 0;return n?u(n):void 0}function z(e,t){if(e?.paymentMethod?.__typename!=="WalletPaymentMethod")return;const n=e?.paymentMethod?.walletContent.billingAddress??t??void 0;return n?u(n):void 0}function J(e){const t=e.billingAddress?.__typename==="StreetAddress"?e.billingAddress:void 0,n=e.paymentLines.find(r=>r.paymentMethod.__typename==="WalletPaymentMethod");if(n)return z(n,t);const i=e.paymentLines.map(r=>r.paymentMethod).filter(r=>r.__typename==="DirectPaymentMethod"||r.__typename==="LocalPaymentMethod"||r.__typename==="OffsitePaymentMethod"||r.__typename==="ManualPaymentMethod"||r.__typename==="CustomPaymentMethod"||r.__typename==="PaymentOnDeliveryMethod").find(r=>r.billingAddress.__typename==="StreetAddress")?.billingAddress??t??void 0;return i?u(i):void 0}function R(e){if(!(e?.__typename!=="PickupInStoreLocation"&&e?.__typename!=="PickupPointLocation")){if(e?.__typename==="PickupPointLocation"){const{name:t,carrierCode:n,carrierName:s,carrierLogoUrl:i,fromDeliveryOptionGenerator:r,address:d}=e;return{name:t,address:u(d),carrierName:s,carrierCode:n,carrierLogoUrl:i,fromDeliveryOptionGenerator:r,type:e?.__typename}}return{name:e.name,address:u(e.address),instructions:e.instructions,type:e?.__typename}}}function q(e,t){const n={handle:e.deliveryStrategy.handle,title:e.deliveryStrategy.title,description:e.deliveryStrategy.description??void 0,cost:a(e.lineAmount),costAfterDiscounts:a(e.lineAmountAfterDiscounts),estimatedTimeInTransit:void 0,methodType:e.deliveryStrategy.methodType,brandedPromise:e.deliveryStrategy.brandedPromise,pickupLocation:R(e.deliveryStrategy.pickupLocation),deliveryPromisePresentmentTitle:e.deliveryStrategy.deliveryPromisePresentmentTitle,metafields:[],priceBreakdown:ee(e.deliveryStrategy.deliveryStrategyBreakdown,t)};return!n||n.methodType==="NONE"?{status:"not_required",type:e.groupType,targetMerchandiseLines:f(e.targetMerchandise,t)}:{status:"available",methods:[n],selectedDeliveryMethodHandle:n.handle,type:e.groupType,targetMerchandiseLines:f(e.targetMerchandise,t),availableOn:e.availableOn}}function ee(e,t){if(e)return e.map(({amount:n,discountRecurringCycleLimit:s,excludeFromDeliveryOptionPrice:i,targetMerchandise:r})=>({amount:a(n),discountRecurringCycleLimit:s??void 0,excludeFromDeliveryOptionPrice:i,targetMerchandiseLines:f(r,t)}))}function f(e,t){return e.reduce((n,s)=>{if(s.__typename!=="PurchaseOrderMerchandiseLine"&&s.__typename!=="PurchaseOrderBundleLineComponent"&&s.__typename!=="PurchaseOrderLineComponent")return n;const{stableId:i,merchandise:r,quantity:d}=s;if(r.__typename==="ProductVariantSnapshot"){const o=Oe(d),l=r.image?{...r.image,altText:r.image.altText||void 0}:void 0;return[...n,{id:r.variantId,digest:r.digest,title:r.productTitle,stableId:i,requiresShipping:t?!1:r.requiresShipping??!0,properties:_(r.properties),subtitle:r.title??void 0,sellingPlan:C(r.sellingPlan),quantity:o,image:l}]}return n},[])}function te(e,t){return{status:"filled",lines:e.deliveryLines.map(s=>q(s,t))}}function ne(e){return e?{status:"filled",deliveryExpectationLines:e.map(t=>({deliveryOptionHandle:void 0,deliveryStrategyHandle:t.deliveryStrategyHandle,brandedPromise:t.brandedPromise?{name:t.brandedPromise.name,logoUrl:t.brandedPromise.logoUrl,handle:t.brandedPromise.handle,darkThemeLogoUrl:t.brandedPromise.darkThemeLogoUrl,lightThemeLogoUrl:t.brandedPromise.lightThemeLogoUrl}:void 0,minDeliveryDateTime:void 0,maxDeliveryDateTime:void 0,deliveryExpectationPresentmentTitle:t.deliveryExpectationPresentmentTitle,promiseProviderApiClientId:void 0,returnability:t.returnability?.returnable}))}:{status:"unavailable",deliveryExpectationLines:null}}function re(e,t){const n=e.paymentMethod.__typename==="PurchaseOrderGiftCardPaymentMethod",s=t.paymentMethod.__typename==="PurchaseOrderGiftCardPaymentMethod";return n&&!s?-1:!n&&s?1:0}function se(e){return e.paymentLines.filter(t=>!t.due).sort(re).map(t=>({...ae(t.paymentMethod),cost:h(t.amount),specialInstructions:t.postPaymentMessage??void 0}))}function h(e){if(e!=null)return{amount:parseFloat(e.amount),currencyCode:e.currencyCode}}function ae(e){switch(e.__typename){case"DirectPaymentMethod":return{method:{type:"direct",sessionId:e.sessionId,paymentMethodIdentifier:e.paymentMethodIdentifier??"",brand:e.creditCard?.brand??void 0,creditCardLastFourDigits:e.creditCard?.lastDigits??void 0,vaultingAgreement:e.vaultingAgreement}};case"CustomerCreditCardPaymentMethod":return{method:{type:b.CreditCard,token:e.token,billingAddress:u(e.billingAddress),brand:e.brand,firstDigits:e.firstDigits??void 0,displayLastDigits:e.displayLastDigits,defaultPaymentMethod:e.defaultPaymentMethod,deletable:e.deletable,requiresCvvConfirmation:e.requiresCvvConfirmation}};case"PaymentOnDeliveryMethod":return{method:{type:"paymentOnDelivery",additionalDetails:e.additionalDetails??"",paymentInstructions:e.paymentInstructions??"",paymentMethodIdentifier:e.paymentMethodIdentifier??"",availablePresentmentCurrencies:[]}};case"PurchaseOrderGiftCardPaymentMethod":return{method:{type:"giftCard",code:e.code,balance:h(e.balance)}};case"WalletPaymentMethod":return{method:{type:"wallet",name:e.name,walletContent:ie(e.walletContent)}};case"WalletsPlatformPaymentMethod":return{method:{type:"walletsPlatformPaymentMethod",name:e.name,walletParams:e.walletParams}};case"LocalPaymentMethod":return{method:{type:"local",paymentMethodIdentifier:e.paymentMethodIdentifier??"",name:e.name}};case"DeferredPaymentMethod":return{method:{type:"deferred"}};case"ManualPaymentMethod":return{method:{type:"manualPayment",name:e.name,id:e.id,additionalDetails:e.additionalDetails??"",paymentInstructions:e.paymentInstructions??"",paymentMethodIdentifier:e.paymentMethodIdentifier??"",availablePresentmentCurrencies:[]}};case"CustomPaymentMethod":return{method:{type:"customManualPayment",name:e.name,id:e.id,additionalDetails:e.additionalDetails??"",paymentInstructions:e.paymentInstructions??"",paymentMethodIdentifier:e.paymentMethodIdentifier??"",availablePresentmentCurrencies:[]}};case"PaypalBillingAgreementPaymentMethod":return{method:{type:b.PayPal,token:e.token,billingAddress:u(e.billingAddress)}};case"OffsitePaymentMethod":return{method:{type:"offsite",paymentMethodIdentifier:e.paymentMethodIdentifier??void 0,name:e.name}};case"RedeemablePaymentMethod":switch(e.redemptionSource){case"CUSTOM":return{method:{type:"redeemable",redemptionSource:e.redemptionSource,redemptionContent:e.redemptionContent}};case"SHOP_CASH":return{method:{type:"redeemable",redemptionSource:e.redemptionSource,redemptionContent:e.redemptionContent}};default:return{method:{type:"redeemable",redemptionSource:e.redemptionSource}}}case"CustomOnsitePaymentMethod":return{method:{type:"customOnsite",paymentMethodIdentifier:e.paymentMethodIdentifier??void 0,name:e.name}};default:return{method:{type:"other"}}}}function ie(e){switch(e.__typename){case"ShopifyInstallmentsWalletContent":return{autoPayEnabled:e.autoPayEnabled,billingAddress:I(e.billingAddress),disclosureDetails:e.disclosureDetails,installmentsToken:e.installmentsToken,creditCardBrand:e.creditCard?.brand??void 0,creditCardLastFourDigits:e.creditCard?.lastDigits??void 0};case"ShopPayWalletContent":return{billingAddress:I(e.billingAddress),paymentMethod:e.paymentMethod,paymentAttributes:e.paymentAttributes,paymentMethodIdentifier:e.paymentMethodIdentifier}}}function oe(e){switch(e.__typename){case"InventoryClaimFailure":case"InventoryReservationFailure":return{type:"inventory"};case"PaymentFailed":return{type:"payment",code:e.code,hasOffsitePaymentMethod:e.hasOffsitePaymentMethod};case"DiscountUsageLimitExceededFailure":return{type:"discount"};case"OrderCreationFailure":case"OrderCreationSchedulingFailure":return{type:"order"};case"CustomerPersistenceFailure":return{type:"customer_persistence"};default:return{type:"other"}}}function de(e){switch(e.__typename){case"CompletePaymentChallenge":return{type:"complete_payment_challenge",offsiteRedirect:e.offsiteRedirect,url:e.url};case"CompletePaymentChallengeV2":return{type:"complete_payment_challenge_v2",challengeType:e.challengeType,challengeData:e.challengeData}}}function ue(e){const t=e.timeout;return t?{millisecondsRemaining:t.millisecondsRemaining}:void 0}function ce(e){switch(e.__typename){case"OrderCreationSucceeded":return{status:"created"};case"OrderCreationPending":default:return{status:"processing"}}}function le(e){switch(e){case"READY":return"ready";case"NOT_READY":return"notReady";case"EXPIRED":return"expired";case"DISABLED_FEATURE":return"disabled"}}function me(e){const{taxesIncluded:t,merchandiseLines:n}=e,s=n.map(p).filter(Boolean);return{taxesIncluded:t,lines:s}}function p(e){const{stableId:t,merchandise:n,lineAllocations:s,quantity:i,recurringTotal:r,__typename:d}=e;if(n.__typename==="ProductVariantSnapshot"){const o={id:n.variantId,deferredAmount:a(n.deferredAmount),digest:n.digest,giftCard:n.giftCard,image:Y(n.image),itemPrice:a(n.price),lineAllocations:s.map(ye),options:n.options,productId:n.productId,productType:n.productType,properties:_(n.properties),recurringTotal:r?K(r):void 0,requiresShipping:n.requiresShipping,sellingPlan:C(n.sellingPlan),sku:n.sku,stableId:t,subtitle:n.title??void 0,taxCode:n.taxCode,taxable:n.taxable,title:n.productTitle,productUrl:n.productUrl??void 0,untranslatedTitle:n.untranslatedTitle,untranslatedSubtitle:n.untranslatedSubtitle??"",typename:n.__typename,variantId:n.variantId,vendor:n.vendor,weight:n.weight};return d==="PurchaseOrderMerchandiseLine"?{...o,legacyFee:e.legacyFee,lineComponents:e.lineComponents.map(p).filter(Boolean),components:e.components.map(p).filter(Boolean),quantity:i.items,totalPrice:a(e.lineAmount)}:{...o,legacyFee:!1,quantity:i,totalPrice:a(e.totalAmount),...d==="PurchaseOrderLineComponent"?{componentCapabilities:e.componentCapabilities,componentSource:e.componentSource??void 0}:{}}}}function ye(e){const{stableId:t,quantity:n,totalAmountAfterDiscounts:s,totalAmountAfterLineDiscounts:i,totalAmountBeforeReductions:r,checkoutPriceAfterDiscounts:d,checkoutPriceBeforeReductions:o,discountAllocations:l,unitPrice:m}=e,g=m?{...m,price:a(m.price)}:null,T=l.reduce((P,D)=>{const{discount:k,amount:S}=D,A=Q(k);return A!==void 0&&P.push({discountDetails:A,amount:a(S)}),P},[]);return{stableId:t,quantity:n,totalAmountAfterDiscounts:a(s),totalAmountAfterLineDiscounts:a(i),totalAmountBeforeReductions:a(r),checkoutPriceAfterDiscounts:a(d),checkoutPriceBeforeReductions:a(o),allocations:T,unitPrice:g}}function fe(e){return e?{status:"available_total",totalDuty:a(e)}:{status:"unavailable",reason:""}}function pe(e){return{lines:e.lines.map(he).filter(n=>!!n)}}function he(e){switch(e.discount.__typename){case"CustomDiscount":return{title:e.discount.title,description:e.discount.description??void 0,amount:a(e.lineAmount),allocations:y([...e.deliveryAllocations,...e.merchandiseAllocations]),discount:c(e.discount)};case"CodeDiscount":return{title:e.discount.title,amount:a(e.lineAmount),allocations:y([...e.deliveryAllocations,...e.merchandiseAllocations]),discount:c(e.discount)};case"DiscountCodeTrigger":return{title:e.discount.code,discount:c(e.discount)};case"AutomaticDiscount":return{title:e.discount.title,amount:a(e.lineAmount),allocations:y([...e.deliveryAllocations,...e.merchandiseAllocations]),discount:c(e.discount)};default:return}}function y(e){return e.map(t=>({target:{index:t.index,amount:a(t.amount),stableId:t.stableId,type:t.targetType}}))}function Pe(e){return e.tipLines.map(t=>({amount:a(t.amount)}))}function Ae(e){return O(e)??e.marketingConsent.some(t=>t.__typename==="PurchaseOrderEmailContactMethod")}function be(e){return O(e)??e.marketingConsent.some(t=>t.__typename==="PurchaseOrderSMSContactMethod")}function Ie(e){return e.marketingConsent.find(n=>n.__typename==="PurchaseOrderSMSContactMethod")?.phoneNumber??""}function O(e){if(e.customer?.__typename==="DecodedCustomerProfile"||e.customer?.__typename==="BusinessCustomerProfile")return e.customer.acceptsEmailMarketing}function _e(e){const t=Ce(e);return t?[t]:[]}function Ce(e){const t=e.map(n=>n.paymentMethod).find(n=>n.__typename==="LocalPaymentMethod");if(t)return{type:"local",name:t.name,displayName:t.displayName??"",additionalParameters:[],paymentMethodIdentifier:t.paymentMethodIdentifier??"",orderingIndex:Number.MAX_SAFE_INTEGER}}function Oe(e){return typeof e=="number"?e:e.__typename==="PurchaseOrderMerchandiseQuantityByItem"?e.items:0}export{Te as R,De as r};
