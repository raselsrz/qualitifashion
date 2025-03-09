@extends('layouts.app') @section('content') @include('include.header')


<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--17918930616457__cart-items" class="shopify-section">
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-cart.css?v=164708765130180853531739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-cart-items.css?v=123238115697927560811739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-totals.css?v=15906652033866631521739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-price.css?v=70172745017360139101739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-discounts.css?v=152760482443307489271739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/quantity-popover.css?v=129068967981937647381739714003" rel="stylesheet" type="text/css" media="all" />
        

        <style data-shopify="">
            .section-template--17918930616457__cart-items-padding {
                padding-top: 27px;
                padding-bottom: 27px;
            }

            @media screen and (min-width: 750px) {
                .section-template--17918930616457__cart-items-padding {
                    padding-top: 36px;
                    padding-bottom: 36px;
                }
            }
        </style>
        <script src="//qualitifashion.com/cdn/shop/t/1/assets/cart.js?v=53973376719736494311739714001" defer="defer"></script>
        <script src="//qualitifashion.com/cdn/shop/t/1/assets/quantity-popover.js?v=987015268078116491739714003" defer="defer"></script>

        <cart-items class="gradient color-scheme-1 isolate section-template--17918930616457__cart-items-padding">
            <div class="page-width">
                <div class="title-wrapper-with-link">
                    <h1 class="title title--primary">আপনার কার্ট</h1>
                    <a href="{{ route('shop') }} " class="underlined-link">কেনাকাটা চালিয়ে যান</a>
                </div>
            
                <div class="cart__warnings">
                    <h1 class="cart__empty-text">আপনার কার্ট খালি</h1>
                    <a href="/collections/all" class="button">
                        কেনাকাটা চালিয়ে যান
                    </a>
                    <h2 class="cart__login-title">একটি অ্যাকাউন্ট আছে?</h2>
                    <p class="cart__login-paragraph"><a href="https://shopify.com/68175364233/account?locale=en&amp;region_country=BD" class="link underlined-link">লগ ইন করুন</a> দ্রুত চেকআউটের জন্য।</p>
                </div>
            
                <form action="/cart" class="cart__contents critical-hidden" method="post" id="cart">
                    <div class="cart__items" id="main-cart-items" data-id="template--17918930616457__cart-items">
                        <div class="js-contents">
                            <table class="cart-items">
                                <caption class="visually-hidden">
                                    আপনার কার্ট
                                </caption>
            
                                @if(session('cart'))
            
                                <thead>
                                    <tr>
                                        <th class="caption-with-letter-spacing" colspan="2" scope="col">
                                            পণ্য
                                        </th>
                                        <th class="medium-hide large-up-hide right caption-with-letter-spacing" colspan="1" scope="col">
                                            মোট
                                        </th>
                                        <th class="cart-items__heading--wide cart-items__heading--quantity small-hide caption-with-letter-spacing" colspan="1" scope="col">
                                            পরিমাণ
                                        </th>
                                        <th class="small-hide right caption-with-letter-spacing" colspan="1" scope="col">
                                            মোট
                                        </th>
                                    </tr>
                                </thead>
            
                                <tbody>
            
                                    @foreach ($carts as $item)
                                    <tr class="cart-item" id="CartItem-1">
                                        <td class="cart-item__media">
                                            <a href="/products/china-lacra-stitch-fabric?variant=43379766755465" class="cart-item__link" aria-hidden="true" tabindex="-1"> </a>
                                            <div class="cart-item__image-container gradient global-media-settings">
                                                <img
                                                    src="{{ asset('images/'.$item['image']) }}"
                                                    class="cart-item__image"
                                                    alt="China Lacra Stitch Fabric"
                                                    loading="lazy"
                                                    width="150"
                                                    height="200"
                                                />
                                            </div>
                                        </td>
            
                                        <td class="cart-item__details">
                                            <a 
                                             class="cart-item__name h4 break">
                                                {{ $item['name'] }}
                                            </a>
                                            <div class="product-option">
                                                টাকা {{ $item['price'] }}
                                            </div>
                                            <dl>
                                                <div class="product-option">
                                                    <dt>সাইজ:</dt>
                                                    <dd>{{ $item['size'] }}</dd>
                                                </div>
                                                <div class="product-option">
                                                    <dt>রঙ:</dt>
                                                    <dd>{{ $item['color'] }}</dd>
                                                </div>
                                            </dl>
                                        </td>
            
                                        <td class="cart-item__totals right medium-hide large-up-hide">
                                            <div class="cart-item__price-wrapper">
                                                <span class="price price--end">
                                                    টাকা {{ $item['total'] }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="cart-item__quantity">
                                            <quantity-popover>
                                                <div class="cart-item__quantity-wrapper quantity-popover-wrapper">
                                                    <label class="visually-hidden" for="Quantity-1">
                                                        পরিমাণ
                                                    </label>
                                                    <div class="quantity-popover-container">
                                                        <input type="hidden" name="id" value="{{ $item['product_id'] }}">
                                                        <quantity-input class="quantity cart-quantity">
                                                            <input class="quantity__input cart-quantity-input" readonly type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" step="1" data-id="{{ $item['product_id'] }}">
                                                        </quantity-input>
                                                    </div>
                                                    <a href="{{ route('cartDelete', $item['product_id']) }}" class="button button--tertiary" 
                                                        onclick="return confirm('আপনি কি নিশ্চিত যে আপনি এই আইটেমটি সরাতে চান?');">
                                                        <span class="svg-wrapper">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-remove" viewBox="0 0 16 16">
                                                                <path fill="currentColor" d="M14 3h-3.53a3.07 3.07 0 0 0-.6-1.65C9.44.82 8.8.5 8 .5s-1.44.32-1.87.85A3.06 3.06 0 0 0 5.53 3H2a.5.5 0 0 0 0 1h1.25v10c0 .28.22.5.5.5h8.5a.5.5 0 0 0 .5-.5V4H14a.5.5 0 0 0 0-1M6.91 1.98c.23-.29.58-.48 1.09-.48s.85.19 1.09.48c.2.24.3.6.36 1.02h-2.9c.05-.42.17-.78.36-1.02m4.84 11.52h-7.5V4h7.5z"></path>
                                                                <path fill="currentColor" d="M6.55 5.25a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 1 0v-6a.5.5 0 0 0-.5-.5m2.9 0a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 1 0v-6a.5.5 0 0 0-.5-.5"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </quantity-popover>
                                        </td>
            
                                        <td class="cart-item__totals right small-hide">
                                            <div class="cart-item__price-wrapper">
                                                <span class="price price--end">
                                                    টাকা {{ $item['total'] }}
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
            
                                @else
            
                                <tbody>
                                    <tr>
                                        <td colspan="5" class="cart-item__empty">
                                            আপনার কার্ট খালি
                                        </td>
                                    </tr>
                                </tbody>
                                @endif
            
                            </table>
                        </div>
                    </div>
            
                    <p class="visually-hidden" id="cart-live-region-text" aria-live="polite" role="status"></p>
                    <p class="visually-hidden" id="shopping-cart-line-item-status" aria-live="polite" aria-hidden="true" role="status">
                        লোড হচ্ছে...
                    </p>
                </form>
            </div>
            
        </cart-items>
    </div>
    <div id="shopify-section-template--17918930616457__cart-footer" class="shopify-section cart__footer-wrapper">
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-cart.css?v=164708765130180853531739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-totals.css?v=15906652033866631521739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-price.css?v=70172745017360139101739714001" rel="stylesheet" type="text/css" media="all" />
        <link href="//qualitifashion.com/cdn/shop/t/1/assets/component-discounts.css?v=152760482443307489271739714001" rel="stylesheet" type="text/css" media="all" />
        <style data-shopify="">
            .section-template--17918930616457__cart-footer-padding {
                padding-top: 15px;
                padding-bottom: 30px;
            }

            @media screen and (min-width: 750px) {
                .section-template--17918930616457__cart-footer-padding {
                    padding-top: 20px;
                    padding-bottom: 40px;
                }
            }
        </style>

@if (!empty($carts) && count($carts) > 0) 
    <div class="gradient color-scheme-1" id="main-cart-footer" data-id="template--17918930616457__cart-footer">
        <div class="page-width">
            <div class="cart__footer isolate section-template--17918930616457__cart-footer-padding">
                <div class="cart__blocks">
                    <div class="cart__ctas">
                        <a id="checkout" class="cart__checkout-button button" href="{{ route('checkout') }}">
                            চেকআউট করুন
                        </a>
                    </div>

                    <div id="cart-errors"></div>
                </div>
            </div>
        </div>
    </div>
@endif



    </div>
</main>




@endsection