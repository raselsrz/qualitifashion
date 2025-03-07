<!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--17918931140745__footer" class="shopify-section shopify-section-group-footer-group">
    <link href="{{ asset('css/section-footer.css?v=60318643098753476351739714003')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/component-newsletter.css?v=4727253280200485261739714001')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/component-list-menu.css?v=151968516119678728991739714001')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/component-list-payment.css?v=69253961410771838501739714001')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/component-list-social.css?v=35792976012981934991739714001')}}" rel="stylesheet" type="text/css" media="all" />
    <style data-shopify>
        .footer {
            margin-top: 0px;
        }

        .section-sections--17918931140745__footer-padding {
            padding-top: 27px;
            padding-bottom: 27px;
        }

        @media screen and (min-width: 750px) {
            .footer {
                margin-top: 0px;
            }

            .section-sections--17918931140745__footer-padding {
                padding-top: 36px;
                padding-bottom: 36px;
            }
        }
    </style>
    <footer class="footer color-scheme-1 gradient section-sections--17918931140745__footer-padding">
        <div class="footer__content-top page-width">
            <div class="footer-block--newsletter scroll-trigger animate--slide-in" data-cascade>
                <div class="footer-block__newsletter">
                    <h2 class="footer-block__heading inline-richtext">Subscribe to our emails</h2>
                    <form method="post" action="/contact#ContactFooter" id="ContactFooter" accept-charset="UTF-8" class="footer__newsletter newsletter-form">
                        <input type="hidden" name="form_type" value="customer" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="contact[tags]" value="newsletter" />
                        <div class="newsletter-form__field-wrapper">
                            <div class="field">
                                <input
                                    id="NewsletterForm--sections--17918931140745__footer"
                                    type="email"
                                    name="contact[email]"
                                    class="field__input"
                                    value=""
                                    aria-required="true"
                                    autocorrect="off"
                                    autocapitalize="off"
                                    autocomplete="email"
                                    placeholder="Email"
                                    required
                                />
                                <label class="field__label" for="NewsletterForm--sections--17918931140745__footer">
                                    Email
                                </label>
                                <button type="submit" class="newsletter-form__button field__button" name="commit" id="Subscribe" aria-label="Subscribe">
                                    <span class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                            <path
                                                fill="currentColor"
                                                fill-rule="evenodd"
                                                d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer__content-bottom scroll-trigger animate--slide-in" data-cascade>
            <div class="footer__content-bottom-wrapper page-width">
                <div class="footer__column footer__localization isolate"></div>
                <div class="footer__column footer__column--info">
                    <div class="footer__payment">
                        <span class="visually-hidden">Payment methods</span>
                        <ul class="list list-payment" role="list"></ul>
                    </div>
                </div>
            </div>
            <div class="footer__content-bottom-wrapper page-width">
                <div class="footer__copyright caption">
                    <small class="copyright__content">&copy; 2025, <a href="/" title="">Qualiti Fashion</a></small>
                    <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered by Shopify</a></small>
                    <ul class="policies list-unstyled">
                        <li>
                            <small class="copyright__content"><a href="/policies/privacy-policy">Privacy policy</a></small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- END sections: footer-group -->

<ul hidden>
    <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
    <li id="a11y-new-window-message">Opens in a new window.</li>
</ul>

<script>
    window.shopUrl = "https://qualitifashion.com";
    window.routes = {
        cart_add_url: "/cart/add",
        cart_change_url: "/cart/change",
        cart_update_url: "/cart/update",
        cart_url: "/cart",
        predictive_search_url: "/search/suggest",
    };

    window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
    };

    window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
    };

    window.quickOrderListStrings = {
        itemsAdded: `[quantity] items added`,
        itemAdded: `[quantity] item added`,
        itemsRemoved: `[quantity] items removed`,
        itemRemoved: `[quantity] item removed`,
        viewCart: `View cart`,
        each: `[money]/ea`,
        min_error: `This item has a minimum of [min]`,
        max_error: `This item has a maximum of [max]`,
        step_error: `You can only add this item in increments of [step]`,
    };

    window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
        recipientFormExpanded: `Gift card recipient form expanded`,
        recipientFormCollapsed: `Gift card recipient form collapsed`,
        countrySelectorSearchCount: `[count] countries/regions found`,
    };
</script>
<script src="{{ asset('css/predictive-search.js?v=57209189334897115771739714003')}}" defer="defer"></script>
