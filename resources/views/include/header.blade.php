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

        .menu-drawer {
    transform: translateX(-100%); /* Initially hidden off-screen */
    visibility: hidden;
    transition: transform 0.3s ease, visibility 0.3s ease;
}

.menu-drawer.open {
    transform: translateX(0%);
    visibility: visible;
}

.pagination {
    /* display: flex; */
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    padding: 20px 0;
    font-family: 'Poppins', sans-serif;
}


.pagination-list {
    display: flex;
    align-items: center;
    gap: 22px;
}

.pagination-controls {
    display: flex;
    align-items: center;
    gap: 8px;
}

.pagination__link {
    display: inline-block;
    padding: 10px 14px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 6px;
    color: #333;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
}

.pagination__link:hover {
    background-color: #000000;
    color: #fff;
    border-color: #0000;
}

.pagination--current .pagination__link {
    background-color: #000000;
    color: #fff;
    border-color: #000000;
    font-weight: bold;
    cursor: default;
}

.pagination__link--disabled {
    background-color: #121212;
    color: #ffffff;
    border: 1px solid #ddd;
    cursor: not-allowed;
    pointer-events: none;
}

/* Responsive */
@media (max-width: 600px) {
    .pagination {
        flex-direction: column;
        gap: 5px;
    }

    .pagination-list {
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination-controls {
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination__link {
        padding: 8px 12px;
        font-size: 14px;
    }
}


    </style>




<script>
    document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.querySelector(".header__icon");
    const menuDrawer = document.querySelector(".menu-drawer");

    menuButton.addEventListener("click", function () {
        menuDrawer.classList.toggle("open");
    });
});

</script>

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
                                            <a id="HeaderDrawer-home" href="{{ route('home') }}" class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active" aria-current="page">
                                                হোম
                                            </a>
                                        </li>
                                        <li>
                                            <a id="HeaderDrawer-shop" href="{{ route('shop') }}" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                শপ
                                            </a>
                                        </li>
                                        <li>
                                            <a id="HeaderDrawer-contact" href="{{ route('contact') }}" class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                যোগাযোগ
                                            </a>
                                        </li>
                                    </ul>
                                </nav>                                
                            </div>
                        </div>
                    </div>
                </details>
            </header-drawer>
            <h1 class="header__heading">
                <a href="/" class="header__heading-link link link--text focus-inset"><span class="h2">{{get_option('sitename','')}} Fashion</span></a>
            </h1>

            <nav class="header__inline-menu">
                <ul class="list-menu list-menu--inline" role="list">
                    <li>
                        <a id="HeaderMenu-home" href="{{ route('home') }}" class="header__menu-item list-menu__item link link--text focus-inset" aria-current="page">
                            <span class="{{ request()->is('/') ? 'header__active-menu-item' : '' }}">
                                হোম
                            </span>
                        </a>
                    </li>
                    <li>
                        <a id="HeaderMenu-shop" href="{{ route('shop') }}" class="header__menu-item list-menu__item link link--text focus-inset">
                            <span class="{{ request()->is('shop') ? 'header__active-menu-item' : '' }}">
                                শপ
                            </span>
                        </a>
                    </li>
                    <li>
                        <a id="HeaderMenu-contact" href="{{ route('contact') }}" class="header__menu-item list-menu__item link link--text focus-inset">
                            <span class="{{ request()->is('contact') ? 'header__active-menu-item' : '' }}">
                                যোগাযোগ</span>
                        </a>
                    </li>
                </ul>
            </nav>
            

            <div class="header__icons header__icons--localization header-localization">
                <div class="desktop-localization-wrapper"></div>

                <a href="{{ route('cart') }} " class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">
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
                    <div class="cart-count-bubble">
                        @if(session()->has('cart'))
                            <span aria-hidden="true">{{ count(session()->get('cart')) }}</span>
                            <span class="visually-hidden">{{ count(session()->get('cart')) }} items</span>
                        @else
                            <span aria-hidden="true">0</span>
                            <span class="visually-hidden">0 items</span>
                        @endif
                    </div>
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
                    <form action=" {{route('cart')  }} " method="post" id="cart-notification-form">
                        <button class="button button--primary button--full-width" type="submit" name="checkout">
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

</div>
<!-- END sections: header-group -->