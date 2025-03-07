<a class="skip-to-content-link button visually-hidden" href="#MainContent">
    Skip to content
</a>
<!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--17918931173513__header" class="shopify-section shopify-section-group-header-group section-header">
    <link rel="stylesheet" href="{{ asset('css/component-list-menu.css?v=151968516119678728991739714001')}}" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('css/component-search.css?v=165164710990765432851739714001')}}" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('css/component-menu-drawer.css?v=147478906057189667651739714001')}}" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('css/component-cart-notification.css?v=54116361853792938221739714001')}}" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="{{ asset('css/component-price.css?v=70172745017360139101739714001" media="print')}}" onload="this.media='all'" />
    <style>
        header-drawer {
            justify-self: start;
            margin-left: -1.2rem;
        }
        @media screen and (min-width: 990px) {
            header-drawer {
                display: none;
            }
        }
        .menu-drawer-container {
            display: flex;
        }

        .list-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-menu--inline {
            display: inline-flex;
            flex-wrap: wrap;
        }

        summary.list-menu__item {
            padding-right: 2.7rem;
        }

        .list-menu__item {
            display: flex;
            align-items: center;
            line-height: calc(1 + 0.3 / var(--font-body-scale));
        }

        .list-menu__item--link {
            text-decoration: none;
            padding-bottom: 1rem;
            padding-top: 1rem;
            line-height: calc(1 + 0.8 / var(--font-body-scale));
        }

        @media screen and (min-width: 750px) {
            .list-menu__item--link {
                padding-bottom: 0.5rem;
                padding-top: 0.5rem;
            }
        }
    </style>
    <style data-shopify>
        .header {
            padding: 10px 3rem 10px 3rem;
        }

        .section-header {
            position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
            margin-bottom: 0px;
        }

        @media screen and (min-width: 750px) {
            .section-header {
                margin-bottom: 0px;
            }
        }

        @media screen and (min-width: 990px) {
            .header {
                padding-top: 20px;
                padding-bottom: 20px;
            }
        }
    </style>
    <script src="{{ asset('css/cart-notification.js?v=133508293167896966491739714000')}}" defer="defer"></script>
    <sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-scheme-1 gradient header-wrapper--border-bottom">
        <header class="header header--middle-left header--mobile-center page-width header--has-menu header--has-account">
            <header-drawer data-breakpoint="tablet">
                <details id="Details-menu-drawer-container" class="menu-drawer-container">
                    <summary class="header__icon header__icon--menu header__icon--summary link focus-inset" aria-label="Menu">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-hamburger" viewBox="0 0 18 16">
                                <path fill="currentColor" d="M1 .5a.5.5 0 1 0 0 1h15.71a.5.5 0 0 0 0-1zM.5 8a.5.5 0 0 1 .5-.5h15.71a.5.5 0 0 1 0 1H1A.5.5 0 0 1 .5 8m0 7a.5.5 0 0 1 .5-.5h15.71a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                <path
                                    fill="currentColor"
                                    d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z"
                                />
                            </svg>
                        </span>
                    </summary>
                    <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-scheme-1">
                        <div class="menu-drawer__inner-container">
                            <div class="menu-drawer__navigation-container">
                                <nav class="menu-drawer__navigation">
                                    <ul class="menu-drawer__menu has-submenu list-menu" role="list">
                                        <li>
                                            <a id="HeaderDrawer-home" href="/" class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active" aria-current="page">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a id="HeaderDrawer-shop" href="/collections/all" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                Shop
                                            </a>
                                        </li>
                                        <li>
                                            <a id="HeaderDrawer-contact" href="/pages/contact" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="menu-drawer__utility-links">
                                    <a href="https://shopify.com/68175364233/account?locale=en&region_country=BD" class="menu-drawer__account link focus-inset h5 medium-hide large-up-hide" rel="nofollow">
                                        <account-icon>
                                            <span class="svg-wrapper">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-account" viewBox="0 0 18 19">
                                                    <path
                                                        fill="currentColor"
                                                        fill-rule="evenodd"
                                                        d="M6 4.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8m5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15M9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </span>
                                        </account-icon>
                                        Account
                                    </a>
                                    <div class="menu-drawer__localization header-localization"></div>
                                    <ul class="list list-social list-unstyled" role="list"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </details>
            </header-drawer>
            <h1 class="header__heading">
                <a href="/" class="header__heading-link link link--text focus-inset"><span class="h2">Qualiti Fashion</span></a>
            </h1>

            <nav class="header__inline-menu">
                <ul class="list-menu list-menu--inline" role="list">
                    <li>
                        <a id="HeaderMenu-home" href="/" class="header__menu-item list-menu__item link link--text focus-inset" aria-current="page">
                            <span class="header__active-menu-item">Home</span>
                        </a>
                    </li>
                    <li>
                        <a id="HeaderMenu-shop" href="/collections/all" class="header__menu-item list-menu__item link link--text focus-inset">
                            <span>Shop</span>
                        </a>
                    </li>
                    <li>
                        <a id="HeaderMenu-contact" href="/pages/contact" class="header__menu-item list-menu__item link link--text focus-inset">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="header__icons header__icons--localization header-localization">
                <div class="desktop-localization-wrapper"></div>

                <details-modal class="header__search">
                    <details>
                        <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
                            <span>
                                <span class="svg-wrapper">
                                    <svg fill="none" class="icon icon-search" viewBox="0 0 18 19">
                                        <path
                                            fill="currentColor"
                                            fill-rule="evenodd"
                                            d="M11.03 11.68A5.784 5.784 0 1 1 2.85 3.5a5.784 5.784 0 0 1 8.18 8.18m.26 1.12a6.78 6.78 0 1 1 .72-.7l5.4 5.4a.5.5 0 1 1-.71.7z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </span>
                                <span class="svg-wrapper header__icon-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                        <path
                                            fill="currentColor"
                                            d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z"
                                        />
                                    </svg>
                                </span>
                            </span>
                        </summary>
                        <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
                            <div class="modal-overlay"></div>
                            <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                                <predictive-search class="search-modal__form" data-loading-text="Loading...">
                                    <form action="/search" method="get" role="search" class="search search-modal__form">
                                        <div class="field">
                                            <input
                                                class="search__input field__input"
                                                id="Search-In-Modal"
                                                type="search"
                                                name="q"
                                                value=""
                                                placeholder="Search"
                                                role="combobox"
                                                aria-expanded="false"
                                                aria-owns="predictive-search-results"
                                                aria-controls="predictive-search-results"
                                                aria-haspopup="listbox"
                                                aria-autocomplete="list"
                                                autocorrect="off"
                                                autocomplete="off"
                                                autocapitalize="off"
                                                spellcheck="false"
                                            />
                                            <label class="field__label" for="Search-In-Modal">Search</label>
                                            <input type="hidden" name="options[prefix]" value="last" />
                                            <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                                                <span class="svg-wrapper">
                                                    <svg fill="none" stroke="currentColor" class="icon icon-close" viewBox="0 0 18 18">
                                                        <circle cx="9" cy="9" r="8.5" stroke-opacity=".2" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.83 11.83 6.172 6.17M6.229 11.885l5.544-5.77" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <button class="search__button field__button" aria-label="Search">
                                                <span class="svg-wrapper">
                                                    <svg fill="none" class="icon icon-search" viewBox="0 0 18 19">
                                                        <path
                                                            fill="currentColor"
                                                            fill-rule="evenodd"
                                                            d="M11.03 11.68A5.784 5.784 0 1 1 2.85 3.5a5.784 5.784 0 0 1 8.18 8.18m.26 1.12a6.78 6.78 0 1 1 .72-.7l5.4 5.4a.5.5 0 1 1-.71.7z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>
                                            <div class="predictive-search__loading-state">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>
                                            </div>
                                        </div>

                                        <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                                    </form>
                                </predictive-search>
                                <button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                                    <span class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                            <path
                                                fill="currentColor"
                                                d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z"
                                            />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </details>
                </details-modal>

                <a href="https://shopify.com/68175364233/account?locale=en&region_country=BD" class="header__icon header__icon--account link focus-inset small-hide" rel="nofollow">
                    <account-icon>
                        <span class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-account" viewBox="0 0 18 19">
                                <path
                                    fill="currentColor"
                                    fill-rule="evenodd"
                                    d="M6 4.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-4a4 4 0 1 0 0 8 4 4 0 0 0 0-8m5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15M9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </span>
                    </account-icon>
                    <span class="visually-hidden">Account</span>
                </a>
                <a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">
                    <span class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-cart" viewBox="0 0 40 40">
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M20.5 6.5a4.75 4.75 0 0 0-4.75 4.75v.56h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.77-11.6h-3.16v-.57A4.75 4.75 0 0 0 20.5 6.5m3.75 5.31v-.56a3.75 3.75 0 1 0-7.5 0v.56zm-7.5 1h7.5v.56a3.75 3.75 0 1 1-7.5 0zm-1 0v.56a4.75 4.75 0 1 0 9.5 0v-.56h2.22l.71 10.67a4 4 0 0 1-3.99 4.27h-7.38a4 4 0 0 1-4-4.27l.72-10.67z"
                            />
                        </svg>
                    </span>

                    <span class="visually-hidden">Cart</span>
                    <div class="cart-count-bubble"><span aria-hidden="true">1</span><span class="visually-hidden">1 item</span></div>
                </a>
            </div>
        </header>
    </sticky-header>

    <cart-notification>
        <div class="cart-notification-wrapper page-width">
            <div id="cart-notification" class="cart-notification focus-inset color-scheme-1 gradient" aria-modal="true" aria-label="Item added to your cart" role="dialog" tabindex="-1">
                <div class="cart-notification__header">
                    <h2 class="cart-notification__heading caption-large text-body">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-checkmark" viewBox="0 0 12 9">
                            <path
                                fill="currentColor"
                                fill-rule="evenodd"
                                d="M11.35.643a.5.5 0 0 1 .006.707l-6.77 6.886a.5.5 0 0 1-.719-.006L.638 4.845a.5.5 0 1 1 .724-.69l2.872 3.011 6.41-6.517a.5.5 0 0 1 .707-.006z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        Item added to your cart
                    </h2>
                    <button type="button" class="cart-notification__close modal__close-button link link--text focus-inset" aria-label="Close">
                        <span class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                <path
                                    fill="currentColor"
                                    d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z"
                                />
                            </svg>
                        </span>
                    </button>
                </div>
                <div id="cart-notification-product" class="cart-notification-product"></div>
                <div class="cart-notification__links">
                    <a href="/cart" id="cart-notification-button" class="button button--secondary button--full-width">View cart</a>
                    <form action="/cart" method="post" id="cart-notification-form">
                        <button class="button button--primary button--full-width" name="checkout">
                            Check out
                        </button>
                    </form>
                    <button type="button" class="link button-label">Continue shopping</button>
                </div>
            </div>
        </div>
    </cart-notification>
    <style data-shopify>
        .cart-notification {
            display: none;
        }
    </style>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Qualiti Fashion",

            "sameAs": ["", "", "", "", "", "", "", "", ""],
            "url": "https:\/\/qualitifashion.com"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Qualiti Fashion",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https:\/\/qualitifashion.com\/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            },
            "url": "https:\/\/qualitifashion.com"
        }
    </script>
</div>
<!-- END sections: header-group -->