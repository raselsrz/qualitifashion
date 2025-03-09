<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="" />
    <link rel="canonical" href="https://Auramansfashion.com/" />
    <link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin />
    <title>
        {{get_option('sitename','')}} Fashion
    </title>

    {{-- crf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:site_name" content="Auramans Fashion" />
    <meta property="og:url" content="https://Auramansfashion.com/" />
    <meta property="og:title" content="Auramans Fashion" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Auramans Fashion" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Auramans Fashion" />
    <meta name="twitter:description" content="Auramans Fashion" />

    <script src="{{ asset('css/constants.js?v=132983761750457495441739714001')}}" defer="defer"></script>
    <script src="{{ asset('css/pubsub.js?v=158357773527763999511739714003')}}" defer="defer"></script>
    <script src="{{ asset('css/global.js?v=152862011079830610291739714001')}}" defer="defer"></script>
    <script src="{{ asset('css/details-disclosure.js?v=13653116266235556501739714001')}}" defer="defer"></script>
    <script src="{{ asset('css/details-modal.js?v=25581673532751508451739714001')}}" defer="defer"></script>
    <script src="{{ asset('css/search-form.js?v=133129549252120666541739714003')}}" defer="defer"></script>
    <script src="{{ asset('css/animations.js?v=88693664871331136111739714000')}}" defer="defer"></script>
    <script>
        window.performance && window.performance.mark && window.performance.mark("shopify.content_for_header.start");
    </script>
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/68175364233/digital_wallets/dialog" />
    <script async="async" src="/checkouts/internal/preloads.js?locale=en-BD"></script>

    <script>
        var Shopify = Shopify || {};
        Shopify.shop = "sxhnwm-di.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = { active: "BDT", rate: "1.0" };
        Shopify.country = "BD";
        Shopify.theme = { name: "Dawn", id: 140509479049, schema_name: "Dawn", schema_version: "15.2.0", theme_store_id: 887, role: "main" };
        Shopify.theme.handle = "null";
        Shopify.theme.style = { id: null, handle: null };
        Shopify.cdnHost = "Auramansfashion.com/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "/";
    </script>
    <script type="module">
        !(function (o) {
            (o.Shopify = o.Shopify || {}).modules = !0;
        })(window);
    </script>
    <script>
        !(function (o) {
            function n() {
                var o = [];
                function n() {
                    o.push(Array.prototype.slice.apply(arguments));
                }
                return (n.q = o), n;
            }
            var t = (o.Shopify = o.Shopify || {});
            (t.loadFeatures = n()), (t.autoloadFeatures = n());
        })(window);
    </script>
    <script id="shop-js-analytics" type="application/json">
        { "pageType": "index" }
    </script>
    <script id="__st">
        var __st = { a: 68175364233, offset: 21600, reqid: "f53f4a90-e96a-4e4d-b480-4849c780949e-1741372492", pageurl: "Auramansfashion.com\/", t: "prospect", u: "8c444ff29c17", cid: 7844388765833, p: "home" };
    </script>
    <script>
        window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script id="captcha-bootstrap">
        !(function () {
            "use strict";
            const t = "contact",
                e = "account",
                n = "new_comment",
                o = [
                    [t, t],
                    ["blogs", n],
                    ["comments", n],
                    [t, "customer"],
                ],
                c = [
                    [e, "customer_login"],
                    [e, "guest_login"],
                    [e, "recover_customer_password"],
                    [e, "create_customer"],
                ],
                r = (t) => t.map(([t, e]) => `form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`).join(","),
                a = (t) => () => (t ? [...document.querySelectorAll(t)].map((t) => t.form) : []);
            function s() {
                const t = [...o],
                    e = r(t);
                return a(e);
            }
            const i = "password",
                u = "form_key",
                d = ["recaptcha-v3-token", "g-recaptcha-response", "h-captcha-response", i],
                f = () => {
                    try {
                        return window.sessionStorage;
                    } catch {
                        return;
                    }
                },
                m = "__shopify_v",
                _ = (t) => t.elements[u];
            function p(t, e, n = !1) {
                try {
                    const o = window.sessionStorage,
                        c = JSON.parse(o.getItem(e)),
                        { data: r } = (function (t) {
                            const { data: e, action: n } = t;
                            return t[m] || n ? { data: e, action: n } : { data: t, action: n };
                        })(c);
                    for (const [e, n] of Object.entries(r)) t.elements[e] && (t.elements[e].value = n);
                    n && o.removeItem(e);
                } catch (o) {
                    console.error("form repopulation failed", { error: o });
                }
            }
            const l = "form_type",
                E = "cptcha";
            function T(t) {
                t.dataset[E] = !0;
            }
            const w = window,
                h = w.document,
                L = "Shopify",
                v = "ce_forms",
                y = "captcha";
            let A = !1;
            ((t, e) => {
                const n =
                    ((g = "f06e6c50-85a8-45c8-87d0-21a2b65856fe"),
                    (I = "https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.5.2.iife.js"),
                    (D = { infoText: "Protected by hCaptcha", privacyText: "Privacy", termsText: "Terms" }),
                    (t, e, n) => {
                        const o = w[L][v],
                            c = o.bindForm;
                        if (c) return c(t, g, e, D).then(n);
                        var r;
                        o.q.push([[t, g, e, D], n]), (r = I), A || (h.body.append(Object.assign(h.createElement("script"), { id: "captcha-provider", async: !0, src: r })), (A = !0));
                    });
                var g, I, D;
                (w[L] = w[L] || {}),
                    (w[L][v] = w[L][v] || {}),
                    (w[L][v].q = []),
                    (w[L][y] = w[L][y] || {}),
                    (w[L][y].protect = function (t, e) {
                        n(t, void 0, e), T(t);
                    }),
                    Object.freeze(w[L][y]),
                    (function (t, e, n, w, h, L) {
                        const [v, y, A, g] = (function (t, e, n) {
                                const i = e ? o : [],
                                    u = t ? c : [],
                                    d = [...i, ...u],
                                    f = r(d),
                                    m = r(i),
                                    _ = r(d.filter(([t, e]) => n.includes(e)));
                                return [a(f), a(m), a(_), s()];
                            })(w, h, L),
                            I = (t) => {
                                const e = t.target;
                                return e instanceof HTMLFormElement ? e : e && e.form;
                            },
                            D = (t) => v().includes(t);
                        t.addEventListener("submit", (t) => {
                            const e = I(t);
                            if (!e) return;
                            const n = D(e) && !e.dataset.hcaptchaBound && !e.dataset.recaptchaBound,
                                o = _(e),
                                c = g().includes(e) && (!o || !o.value);
                            (n || c) && t.preventDefault(),
                                c &&
                                    !n &&
                                    ((function (t) {
                                        try {
                                            if (!f()) return;
                                            !(function (t) {
                                                const e = f();
                                                if (!e) return;
                                                const n = _(t);
                                                if (!n) return;
                                                const o = n.value;
                                                o && e.removeItem(o);
                                            })(t);
                                            const e = Array.from(Array(32), () => Math.random().toString(36)[2]).join("");
                                            !(function (t, e) {
                                                _(t) || t.append(Object.assign(document.createElement("input"), { type: "hidden", name: u })), (t.elements[u].value = e);
                                            })(t, e),
                                                (function (t, e) {
                                                    const n = f();
                                                    if (!n) return;
                                                    const o = [...t.querySelectorAll(`input[type='${i}']`)].map(({ name: t }) => t),
                                                        c = [...d, ...o],
                                                        r = {};
                                                    for (const [a, s] of new FormData(t).entries()) c.includes(a) || (r[a] = s);
                                                    n.setItem(e, JSON.stringify({ [m]: 1, action: t.action, data: r }));
                                                })(t, e);
                                        } catch (e) {
                                            console.error("failed to persist form", e);
                                        }
                                    })(e),
                                    e.submit());
                        });
                        const S = (t, e) => {
                            t &&
                                !t.dataset[E] &&
                                (n(
                                    t,
                                    e.some((e) => e === t)
                                ),
                                T(t));
                        };
                        for (const o of ["focusin", "change"])
                            t.addEventListener(o, (t) => {
                                const e = I(t);
                                D(e) && S(e, y());
                            });
                        const B = e.get("form_key"),
                            M = e.get(l),
                            P = B && M;
                        t.addEventListener("DOMContentLoaded", () => {
                            const t = y();
                            if (P) for (const e of t) e.elements[l].value === M && p(e, B);
                            [...new Set([...A(), ...v().filter((t) => "true" === t.dataset.shopifyCaptcha)])].forEach((e) => S(e, t));
                        });
                    })(h, new URLSearchParams(w.location.search), n, t, e, ["guest_login"]);
            })(!0, !0);
        })();
    </script>
    <script
        integrity="sha256-EGCDRYTvIEOXsReXgqGwkAR+5Dl8tickSrieA/ZcQwc="
        data-source-attribution="shopify.loadfeatures"
        defer="defer"
        src="//Auramansfashion.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-1060834584ef204397b1179782a1b090047ee4397cb627244ab89e03f65c4307.js"
        crossorigin="anonymous"
    ></script>
    <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">
        var Shopify = Shopify || {};
        Shopify.PaymentButton = Shopify.PaymentButton || {
            isStorefrontPortableWallets: !0,
            init: function () {
                window.Shopify.PaymentButton.init = function () {};
                var t = document.createElement("script");
                (t.src = "https://Auramansfashion.com/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js"), (t.type = "module"), document.head.appendChild(t);
            },
        };
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.buyer_consent">
        function portableWalletsHideBuyerConsent(e) {
            var t = document.getElementById("shopify-buyer-consent"),
                n = document.getElementById("shopify-subscription-policy-button");
            t && n && (t.classList.add("hidden"), t.setAttribute("aria-hidden", "true"), n.removeEventListener("click", e));
        }
        function portableWalletsShowBuyerConsent(e) {
            var t = document.getElementById("shopify-buyer-consent"),
                n = document.getElementById("shopify-subscription-policy-button");
            t && n && (t.classList.remove("hidden"), t.removeAttribute("aria-hidden"), n.addEventListener("click", e));
        }
        window.Shopify?.PaymentButton && ((window.Shopify.PaymentButton.hideBuyerConsent = portableWalletsHideBuyerConsent), (window.Shopify.PaymentButton.showBuyerConsent = portableWalletsShowBuyerConsent));
    </script>
    <script data-source-attribution="shopify.dynamic_checkout.cart.bootstrap">
        document.addEventListener("DOMContentLoaded", function () {
            function t() {
                return document.querySelector("shopify-accelerated-checkout-cart, shopify-accelerated-checkout");
            }
            if (t()) Shopify.PaymentButton.init();
            else {
                new MutationObserver(function (e, n) {
                    t() && (Shopify.PaymentButton.init(), n.disconnect());
                }).observe(document.body, { childList: !0, subtree: !0 });
            }
        });
    </script>
    <script id="sections-script" data-sections="header" defer="defer" src="//Auramansfashion.com/cdn/shop/t/1/compiled_assets/scripts.js?9"></script>
    <script>
        window.performance && window.performance.mark && window.performance.mark("shopify.content_for_header.end");
    </script>

    <style data-shopify>
        @font-face {
            font-family: Assistant;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url("//Auramansfashion.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=4dfa1d5e96947b8f579a8420c798b87fb183d086841a305c2a61a04c5a65bc01")
                    format("woff2"),
                url("//Auramansfashion.com/cdn/fonts/assistant/assistant_n4.a2d012304becc2a26f1ded1acc136fcab85c9afd.woff?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=92281d7d733b0f96fa99f4452c4f400b723d23ea94253dd52802c0a7c420db5b")
                    format("woff");
        }

        @font-face {
            font-family: Assistant;
            font-weight: 700;
            font-style: normal;
            font-display: swap;
            src: url("//Auramansfashion.com/cdn/fonts/assistant/assistant_n7.3335c7bdaddf2501ddab87cdbd9be98f3870e10d.woff2?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=229db67991642f55ffeef969bfe63d7d5ec5e196f326910960b28cd50158b671")
                    format("woff2"),
                url("//Auramansfashion.com/cdn/fonts/assistant/assistant_n7.7c85f5c5cc1555de92cc7ef2790ee3cffe5237f5.woff?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=e42ce1b92d3f41012239b021e8e594460bc9f895e0c2c0f36d28f30784f825eb")
                    format("woff");
        }

        @font-face {
            font-family: Assistant;
            font-weight: 400;
            font-style: normal;
            font-display: swap;
            src: url("//Auramansfashion.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=4dfa1d5e96947b8f579a8420c798b87fb183d086841a305c2a61a04c5a65bc01")
                    format("woff2"),
                url("//Auramansfashion.com/cdn/fonts/assistant/assistant_n4.a2d012304becc2a26f1ded1acc136fcab85c9afd.woff?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=92281d7d733b0f96fa99f4452c4f400b723d23ea94253dd52802c0a7c420db5b")
                    format("woff");
        }

        :root,
        .color-scheme-1 {
            --color-background: 255, 255, 255;

            --gradient-background: #ffffff;

            --color-foreground: 18, 18, 18;
            --color-background-contrast: 191, 191, 191;
            --color-shadow: 18, 18, 18;
            --color-button: 18, 18, 18;
            --color-button-text: 255, 255, 255;
            --color-secondary-button: 255, 255, 255;
            --color-secondary-button-text: 18, 18, 18;
            --color-link: 18, 18, 18;
            --color-badge-foreground: 18, 18, 18;
            --color-badge-background: 255, 255, 255;
            --color-badge-border: 18, 18, 18;
            --payment-terms-background-color: rgb(255 255 255);
        }

        .color-scheme-2 {
            --color-background: 243, 243, 243;

            --gradient-background: #f3f3f3;

            --color-foreground: 18, 18, 18;
            --color-background-contrast: 179, 179, 179;
            --color-shadow: 18, 18, 18;
            --color-button: 18, 18, 18;
            --color-button-text: 243, 243, 243;
            --color-secondary-button: 243, 243, 243;
            --color-secondary-button-text: 18, 18, 18;
            --color-link: 18, 18, 18;
            --color-badge-foreground: 18, 18, 18;
            --color-badge-background: 243, 243, 243;
            --color-badge-border: 18, 18, 18;
            --payment-terms-background-color: rgb(243 243 243);
        }

        .color-scheme-3 {
            --color-background: 36, 40, 51;

            --gradient-background: #242833;

            --color-foreground: 255, 255, 255;
            --color-background-contrast: 47, 52, 66;
            --color-shadow: 18, 18, 18;
            --color-button: 255, 255, 255;
            --color-button-text: 0, 0, 0;
            --color-secondary-button: 36, 40, 51;
            --color-secondary-button-text: 255, 255, 255;
            --color-link: 255, 255, 255;
            --color-badge-foreground: 255, 255, 255;
            --color-badge-background: 36, 40, 51;
            --color-badge-border: 255, 255, 255;
            --payment-terms-background-color: rgb(36 40 51);
        }

        .color-scheme-4 {
            --color-background: 18, 18, 18;

            --gradient-background: #121212;

            --color-foreground: 255, 255, 255;
            --color-background-contrast: 146, 146, 146;
            --color-shadow: 18, 18, 18;
            --color-button: 255, 255, 255;
            --color-button-text: 18, 18, 18;
            --color-secondary-button: 18, 18, 18;
            --color-secondary-button-text: 255, 255, 255;
            --color-link: 255, 255, 255;
            --color-badge-foreground: 255, 255, 255;
            --color-badge-background: 18, 18, 18;
            --color-badge-border: 255, 255, 255;
            --payment-terms-background-color: rgb(18 18 18);
        }

        .color-scheme-5 {
            --color-background: 51, 79, 180;

            --gradient-background: #334fb4;

            --color-foreground: 255, 255, 255;
            --color-background-contrast: 23, 35, 81;
            --color-shadow: 18, 18, 18;
            --color-button: 255, 255, 255;
            --color-button-text: 51, 79, 180;
            --color-secondary-button: 51, 79, 180;
            --color-secondary-button-text: 255, 255, 255;
            --color-link: 255, 255, 255;
            --color-badge-foreground: 255, 255, 255;
            --color-badge-background: 51, 79, 180;
            --color-badge-border: 255, 255, 255;
            --payment-terms-background-color: rgb(51 79 180);
        }

        body,
        .color-scheme-1,
        .color-scheme-2,
        .color-scheme-3,
        .color-scheme-4,
        .color-scheme-5 {
            color: rgba(var(--color-foreground), 0.75);
            background-color: rgb(var(--color-background));
        }

        :root {
            --font-body-family: Assistant, sans-serif;
            --font-body-style: normal;
            --font-body-weight: 400;
            --font-body-weight-bold: 700;

            --font-heading-family: Assistant, sans-serif;
            --font-heading-style: normal;
            --font-heading-weight: 400;

            --font-body-scale: 1;
            --font-heading-scale: 1;

            --media-padding: px;
            --media-border-opacity: 0.05;
            --media-border-width: 1px;
            --media-radius: 0px;
            --media-shadow-opacity: 0;
            --media-shadow-horizontal-offset: 0px;
            --media-shadow-vertical-offset: 4px;
            --media-shadow-blur-radius: 5px;
            --media-shadow-visible: 0;

            --page-width: 120rem;
            --page-width-margin: 0rem;

            --product-card-image-padding: 0rem;
            --product-card-corner-radius: 0rem;
            --product-card-text-alignment: left;
            --product-card-border-width: 0rem;
            --product-card-border-opacity: 0.1;
            --product-card-shadow-opacity: 0;
            --product-card-shadow-visible: 0;
            --product-card-shadow-horizontal-offset: 0rem;
            --product-card-shadow-vertical-offset: 0.4rem;
            --product-card-shadow-blur-radius: 0.5rem;

            --collection-card-image-padding: 0rem;
            --collection-card-corner-radius: 0rem;
            --collection-card-text-alignment: left;
            --collection-card-border-width: 0rem;
            --collection-card-border-opacity: 0.1;
            --collection-card-shadow-opacity: 0;
            --collection-card-shadow-visible: 0;
            --collection-card-shadow-horizontal-offset: 0rem;
            --collection-card-shadow-vertical-offset: 0.4rem;
            --collection-card-shadow-blur-radius: 0.5rem;

            --blog-card-image-padding: 0rem;
            --blog-card-corner-radius: 0rem;
            --blog-card-text-alignment: left;
            --blog-card-border-width: 0rem;
            --blog-card-border-opacity: 0.1;
            --blog-card-shadow-opacity: 0;
            --blog-card-shadow-visible: 0;
            --blog-card-shadow-horizontal-offset: 0rem;
            --blog-card-shadow-vertical-offset: 0.4rem;
            --blog-card-shadow-blur-radius: 0.5rem;

            --badge-corner-radius: 4rem;

            --popup-border-width: 1px;
            --popup-border-opacity: 0.1;
            --popup-corner-radius: 0px;
            --popup-shadow-opacity: 0.05;
            --popup-shadow-horizontal-offset: 0px;
            --popup-shadow-vertical-offset: 4px;
            --popup-shadow-blur-radius: 5px;

            --drawer-border-width: 1px;
            --drawer-border-opacity: 0.1;
            --drawer-shadow-opacity: 0;
            --drawer-shadow-horizontal-offset: 0px;
            --drawer-shadow-vertical-offset: 4px;
            --drawer-shadow-blur-radius: 5px;

            --spacing-sections-desktop: 0px;
            --spacing-sections-mobile: 0px;

            --grid-desktop-vertical-spacing: 8px;
            --grid-desktop-horizontal-spacing: 8px;
            --grid-mobile-vertical-spacing: 4px;
            --grid-mobile-horizontal-spacing: 4px;

            --text-boxes-border-opacity: 0.1;
            --text-boxes-border-width: 0px;
            --text-boxes-radius: 0px;
            --text-boxes-shadow-opacity: 0;
            --text-boxes-shadow-visible: 0;
            --text-boxes-shadow-horizontal-offset: 0px;
            --text-boxes-shadow-vertical-offset: 4px;
            --text-boxes-shadow-blur-radius: 5px;

            --buttons-radius: 0px;
            --buttons-radius-outset: 0px;
            --buttons-border-width: 1px;
            --buttons-border-opacity: 1;
            --buttons-shadow-opacity: 0;
            --buttons-shadow-visible: 0;
            --buttons-shadow-horizontal-offset: 0px;
            --buttons-shadow-vertical-offset: 4px;
            --buttons-shadow-blur-radius: 5px;
            --buttons-border-offset: 0px;

            --inputs-radius: 0px;
            --inputs-border-width: 1px;
            --inputs-border-opacity: 0.55;
            --inputs-shadow-opacity: 0;
            --inputs-shadow-horizontal-offset: 0px;
            --inputs-margin-offset: 0px;
            --inputs-shadow-vertical-offset: 4px;
            --inputs-shadow-blur-radius: 5px;
            --inputs-radius-outset: 0px;

            --variant-pills-radius: 40px;
            --variant-pills-border-width: 1px;
            --variant-pills-border-opacity: 0.55;
            --variant-pills-shadow-opacity: 0;
            --variant-pills-shadow-horizontal-offset: 0px;
            --variant-pills-shadow-vertical-offset: 4px;
            --variant-pills-shadow-blur-radius: 5px;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
            font-size: calc(var(--font-body-scale) * 62.5%);
            height: 100%;
        }

        body {
            display: grid;
            grid-template-rows: auto auto 1fr auto;
            grid-template-columns: 100%;
            min-height: 100%;
            margin: 0;
            font-size: 1.5rem;
            letter-spacing: 0.06rem;
            line-height: calc(1 + 0.8 / var(--font-body-scale));
            font-family: var(--font-body-family);
            font-style: var(--font-body-style);
            font-weight: var(--font-body-weight);
        }

        @media screen and (min-width: 750px) {
            body {
                font-size: 1.6rem;
            }
        }
    </style>

    <link href="{{ asset('css/base.css?v=159841507637079171801739714000')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/component-cart-items.css?v=123238115697927560811739714001')}}" media="print" onload="this.media='all'" />
    <link
        rel="preload"
        as="font"
        href="//Auramansfashion.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=4dfa1d5e96947b8f579a8420c798b87fb183d086841a305c2a61a04c5a65bc01"
        type="font/woff2"
        crossorigin
    />

    <link
        rel="preload"
        as="font"
        href="//Auramansfashion.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=c3hobndtLWRpLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=c2hhaGluc2Fya2FyLmNvbQ&h3=cXVhbGl0aWZhc2hpb24uY29t&hmac=4dfa1d5e96947b8f579a8420c798b87fb183d086841a305c2a61a04c5a65bc01"
        type="font/woff2"
        crossorigin
    />

    <link rel="stylesheet" href="{{ asset('css/component-predictive-search.css?v=118923337488134913561739714001')}}" media="print" onload="this.media='all'" />
    <script>
        if (Shopify.designMode) {
            document.documentElement.classList.add("shopify-design-mode");
        }
    </script>
    <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch" />
    <script>
        (function () {
            if ("sendBeacon" in navigator && "performance" in window) {
                var session_token = document.cookie.match(/_shopify_s=([^;]*)/);
                function handle_abandonment_event(e) {
                    var entries = performance.getEntries().filter(function (entry) {
                        return /monorail-edge.shopifysvc.com/.test(entry.name);
                    });
                    if (!window.abandonment_tracked && entries.length === 0) {
                        window.abandonment_tracked = true;
                        var currentMs = Date.now();
                        var navigation_start = performance.timing.navigationStart;
                        var payload = {
                            shop_id: 68175364233,
                            url: window.location.href,
                            navigation_start,
                            duration: currentMs - navigation_start,
                            session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                            page_type: "index",
                        };
                        window.navigator.sendBeacon(
                            "https://monorail-edge.shopifysvc.com/v1/produce",
                            JSON.stringify({ schema_id: "online_store_buyer_site_abandonment/1.1", payload: payload, metadata: { event_created_at_ms: currentMs, event_sent_at_ms: currentMs } })
                        );
                    }
                }
                window.addEventListener("pagehide", handle_abandonment_event);
            }
        })();
    </script>
    <script id="web-pixels-manager-setup">
        (function d(d, e, n, o, r, i) {
            if (!Boolean(null === (t = null === (a = window.Shopify) || void 0 === a ? void 0 : a.analytics) || void 0 === t ? void 0 : t.replayQueue)) {
                var a,
                    t,
                    s = (function () {
                        var d = {
                                modern: /Edge?\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Firefox\/(1{2}[4-9]|1[2-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Chrom(ium|e)\/(9{2}|\d{3,})\.\d+(\.\d+|)|(Maci|X1{2}).+ Version\/(15\.\d+|(1[6-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(9{2}|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(15[._]\d+|(1[6-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Android.+Firefox\/(13[2-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|SamsungBrowser\/([2-9]\d|\d{3,})\.\d+/,
                                legacy: /Edge?\/(1[6-9]|[2-9]\d|\d{3,})\.\d+(\.\d+|)|Firefox\/(5[4-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)|Chrom(ium|e)\/(5[1-9]|[6-9]\d|\d{3,})\.\d+(\.\d+|)([\d.]+$|.*Safari\/(?![\d.]+ Edge\/[\d.]+$))|(Maci|X1{2}).+ Version\/(10\.\d+|(1[1-9]|[2-9]\d|\d{3,})\.\d+)([,.]\d+|)( \(\w+\)|)( Mobile\/\w+|) Safari\/|Chrome.+OPR\/(3[89]|[4-9]\d|\d{3,})\.\d+\.\d+|(CPU[ +]OS|iPhone[ +]OS|CPU[ +]iPhone|CPU IPhone OS|CPU iPad OS)[ +]+(10[._]\d+|(1[1-9]|[2-9]\d|\d{3,})[._]\d+)([._]\d+|)|Android:?[ /-](13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})(\.\d+|)(\.\d+|)|Mobile Safari.+OPR\/([89]\d|\d{3,})\.\d+\.\d+|Android.+Firefox\/(13[2-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+Chrom(ium|e)\/(13[1-9]|1[4-9]\d|[2-9]\d{2}|\d{4,})\.\d+(\.\d+|)|Android.+(UC? ?Browser|UCWEB|U3)[ /]?(15\.([5-9]|\d{2,})|(1[6-9]|[2-9]\d|\d{3,})\.\d+)\.\d+|SamsungBrowser\/(5\.\d+|([6-9]|\d{2,})\.\d+)|Android.+MQ{2}Browser\/(14(\.(9|\d{2,})|)|(1[5-9]|[2-9]\d|\d{3,})(\.\d+|))(\.\d+|)|K[Aa][Ii]OS\/(3\.\d+|([4-9]|\d{2,})\.\d+)(\.\d+|)/,
                            },
                            e = d.modern,
                            n = d.legacy,
                            o = navigator.userAgent;
                        return e.test(o) ? "modern" : (n.test(o), "legacy");
                    })(),
                    l = null != i ? i : { modern: "", legacy: "" };
                window.Shopify = window.Shopify || {};
                var u = window.Shopify;
                u.analytics = u.analytics || {};
                var c = u.analytics;
                (c.replayQueue = []),
                    (c.publish = function (d, e, n) {
                        return c.replayQueue.push([d, e, n]), !0;
                    });
                try {
                    self.performance.mark("wpm:start");
                } catch (d) {}
                var f = [n, "/wpm", "/b", r, s.substring(0, 1), ".js"].join(""),
                    h = l[s];
                !(function (d) {
                    var e = d.src,
                        n = d.async,
                        o = void 0 === n || n,
                        r = d.onload,
                        i = d.onerror,
                        a = d.sri,
                        t = document.createElement("script"),
                        s = document.head,
                        l = document.body;
                    (t.async = o),
                        (t.src = e),
                        a && ((t.integrity = a), (t.crossOrigin = "anonymous")),
                        r && t.addEventListener("load", r),
                        i && t.addEventListener("error", i),
                        s ? s.appendChild(t) : l ? l.appendChild(t) : console.error("Did not find a head or body element to append the script");
                })({
                    src: f,
                    async: !0,
                    onload: function () {
                        if (
                            !(function () {
                                var d, e;
                                return Boolean(null === (e = null === (d = window.Shopify) || void 0 === d ? void 0 : d.analytics) || void 0 === e ? void 0 : e.initialized);
                            })()
                        ) {
                            var n = window.webPixelsManager.init(d) || void 0;
                            if (n) {
                                e(n);
                                var o = window.Shopify.analytics;
                                o.replayQueue.forEach(function (d) {
                                    var e = d[0],
                                        o = d[1],
                                        r = d[2];
                                    n.publishCustomEvent(e, o, r);
                                }),
                                    (o.replayQueue = []),
                                    (o.publish = n.publishCustomEvent),
                                    (o.visitor = n.visitor),
                                    (o.initialized = !0);
                            }
                        }
                    },
                    onerror: function () {
                        var e = d.storefrontBaseUrl.replace(/\/$/, ""),
                            n = "".concat(e, "/.well-known/shopify/monorail/unstable/produce_batch"),
                            r = JSON.stringify({
                                metadata: { event_sent_at_ms: new Date().getTime() },
                                events: [
                                    {
                                        schema_id: "web_pixels_manager_load/3.1",
                                        payload: { version: o || "latest", bundle_target: s, page_url: self.location.href, status: "failed", surface: d.surface, error_msg: "".concat(f, " has failed to load") },
                                        metadata: { event_created_at_ms: new Date().getTime() },
                                    },
                                ],
                            });
                        try {
                            if (self.navigator.sendBeacon.bind(self.navigator)(n, r)) return !0;
                        } catch (d) {}
                        var i = new XMLHttpRequest();
                        try {
                            return i.open("POST", n, !0), i.setRequestHeader("Content-Type", "text/plain"), i.send(r), !0;
                        } catch (d) {
                            console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.");
                        }
                        return !1;
                    },
                    sri: (function (d) {
                        return "string" == typeof d && /^sha384-[A-Za-z0-9+/=]+$/.test(d);
                    })(h)
                        ? h
                        : "",
                });
            }
        })(
            {
                shopId: 68175364233,
                storefrontBaseUrl: "https://Auramansfashion.com",
                extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",
                surface: "storefront-renderer",
                enabledBetaFlags: ["6a396365"],
                webPixelsConfigList: [
                    {
                        id: "749469833",
                        configuration: '{"pixel_id":"655030750255936","pixel_type":"facebook_pixel"}',
                        eventPayloadVersion: "v1",
                        runtimeContext: "OPEN",
                        scriptVersion: "8d894c63179843e74a9691414b5ad83d",
                        type: "APP",
                        apiClientId: 2329312,
                        privacyPurposes: ["ANALYTICS", "MARKETING", "SALE_OF_DATA"],
                    },
                    { id: "shopify-app-pixel", configuration: "{}", eventPayloadVersion: "v1", runtimeContext: "STRICT", scriptVersion: "0290", apiClientId: "shopify-pixel", type: "APP", privacyPurposes: ["ANALYTICS", "MARKETING"] },
                    { id: "shopify-custom-pixel", eventPayloadVersion: "v1", runtimeContext: "LAX", scriptVersion: "0290", apiClientId: "shopify-pixel", type: "CUSTOM", privacyPurposes: ["ANALYTICS", "MARKETING"] },
                ],
                isMerchantRequest: false,
                effectiveTopLevelDomain: "",
                initData: {
                    shop: { name: "Auramans Fashion", paymentSettings: { currencyCode: "BDT" }, myshopifyDomain: "sxhnwm-di.myshopify.com", countryCode: "BD", storefrontUrl: "https:\/\/Auramansfashion.com" },
                    customer: { id: "7844388765833", email: "tennem@priyomail.net", firstName: null, lastName: null, ordersCount: 0, phone: null },
                    cart: {
                        cost: { totalAmount: { amount: 1150.0, currencyCode: "BDT" } },
                        lines: [
                            {
                                cost: { totalAmount: { amount: 1150.0, currencyCode: "BDT" } },
                                merchandise: {
                                    price: { amount: 1150.0, currencyCode: "BDT" },
                                    product: { title: "China Lacra Stitch Fabric", vendor: "Shahin Sarkar", id: "8006034456713", untranslatedTitle: "China Lacra Stitch Fabric", url: "\/products\/china-lacra-stitch-fabric", type: "" },
                                    id: "43379767181449",
                                    image: { src: "\/\/Auramansfashion.com\/cdn\/shop\/files\/2x.jpg?v=1740077515" },
                                    sku: "",
                                    title: "L \/ Solid Silver",
                                    untranslatedTitle: "L \/ Solid Silver",
                                },
                                quantity: 1,
                            },
                        ],
                        totalQuantity: 1,
                        attributes: [],
                        id: "Z2NwLWFzaWEtc291dGhlYXN0MTowMUpOUko4RVFCUVYyMUFWTU43NjdQWjQ0Mg",
                    },
                    checkout: null,
                    productVariants: [],
                    purchasingCompany: null,
                },
            },
            function pageEvents(webPixelsManagerAPI) {
                webPixelsManagerAPI.publish("page_viewed", {});
            },
            "https://Auramansfashion.com/cdn",
            "09e2685f32fbaed7c86bd22a538a6adf8fb247c0",
            "2aeb0b9aw97b8b9c7p85cdc250me813a410",
            { modern: "", legacy: "" }
        );
    </script>
    <script>
        window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = "BDT";
        var meta = { page: { pageType: "home", customerId: 7844388765833 } };
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }
    </script>
    <script>
        window.ShopifyAnalytics.merchantGoogleAnalytics = function () {};
    </script>
    <script class="analytics">
        (function () {
            var customDocumentWrite = function (content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery("body").append(content);
                }
            };

            var hasLoggedConversion = function (token) {
                if (token) {
                    return document.cookie.indexOf("loggedConversion=" + token) !== -1;
                }
                return false;
            };

            var setCookieIfConversion = function (token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = "loggedConversion=" + token + "; expires=" + twoMonthsFromNow;
                }
            };

            var trekkie = (window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || []);
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = ["identify", "page", "ready", "track", "trackForm", "trackLink"];
            trekkie.factory = function (method) {
                return function () {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function (config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName("script")[0];
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.onerror = function (e) {
                    var scriptFallback = document.createElement("script");
                    scriptFallback.type = "text/javascript";
                    scriptFallback.onerror = function (error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs,
                                    },
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === "function" && typeof window.Blob === "function" && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: "text/plain",
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful
                                } // XHR beacon

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open("POST", endpointUrl);
                                    xhr.setRequestHeader("Content-Type", "text/plain");
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf("iPhone; CPU iPhone OS 12_") !== -1 || window.navigator.userAgent.lastIndexOf("iPad; CPU OS 12_") !== -1;
                            },
                        };
                        Monorail.produce("monorail-edge.shopifysvc.com", "trekkie_storefront_load_errors/1.1", {
                            shop_id: 68175364233,
                            theme_id: 140509479049,
                            app_name: "storefront",
                            context_url: window.location.href,
                            source_url: "//Auramansfashion.com/cdn/s/trekkie.storefront.ee00ae5d5f7902c457139393886b62864391d5ea.min.js",
                        });
                    };
                    scriptFallback.async = true;
                    scriptFallback.src = "//Auramansfashion.com/cdn/s/trekkie.storefront.ee00ae5d5f7902c457139393886b62864391d5ea.min.js";
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = "//Auramansfashion.com/cdn/s/trekkie.storefront.ee00ae5d5f7902c457139393886b62864391d5ea.min.js";
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load({
                Trekkie: {
                    appName: "storefront",
                    development: false,
                    defaultAttributes: { shopId: 68175364233, isMerchantRequest: null, themeId: 140509479049, themeCityHash: "6435348975049306544", contentLanguage: "en", currency: "BDT" },
                    isServerSideCookieWritingEnabled: true,
                    monorailRegion: "shop_domain",
                },
                "Session Attribution": {},
                S2S: { facebookCapiEnabled: true, customerId: 7844388765833, source: "trekkie-storefront-renderer", apiClientId: 580111 },
            });

            var loaded = false;
            trekkie.ready(function () {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;

                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) {}
                document.write = originalDocumentWrite;

                window.ShopifyAnalytics.lib.page(null, { pageType: "home", customerId: 7844388765833, shopifyEmitted: true });

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/);
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);
                }
            });

            var eventsListenerScript = document.createElement("script");
            eventsListenerScript.async = true;
            eventsListenerScript.src = "//Auramansfashion.com/cdn/shopifycloud/shopify/assets/shop_events_listener-bbbf3223c550be0dd72914a2fa06aaa88eb8943e96f9ea31fb63e7e27e0f97f4.js";
            document.getElementsByTagName("head")[0].appendChild(eventsListenerScript);
        })();
    </script>
    <script
        defer
        src="https://Auramansfashion.com/cdn/shopifycloud/perf-kit/shopify-perf-kit-1.4.0.min.js"
        data-application="storefront-renderer"
        data-shop-id="68175364233"
        data-render-region="gcp-us-east1"
        data-page-type="index"
        data-theme-instance-id="140509479049"
        data-monorail-region="shop_domain"
        data-resource-timing-sampling-rate="10"
    ></script>
</head>