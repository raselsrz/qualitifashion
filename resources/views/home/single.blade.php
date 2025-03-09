@extends('layouts.app') 
@section('content')


@include('include.header')

@php
$colors = json_decode($product->slider_data, true) ?? [];
@endphp


        <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
            <section id="shopify-section-template--17918930845833__main" class="shopify-section section">
                <product-info
                    id="MainProduct-template--17918930845833__main"
                    class="section-template--17918930845833__main-padding gradient color-scheme-1"
                    data-section="template--17918930845833__main"
                    data-product-id="7999306039433"
                    data-update-url="true"
                    data-url="/products/premium-micro-stich-panjabi"
                >
                    <link href="{{asset('css/section-main-product.css?v=161818056142182136911739714003')}}" rel="stylesheet" type="text/css" media="all" />
                    <link href="{{asset('css/component-accordion.css?v=7971072480289620591739714001')}}" rel="stylesheet" type="text/css" media="all" />
                    <link href="{{asset('css/component-price.css?v=70172745017360139101739714001')}}" rel="stylesheet" type="text/css" media="all" />
                    <link href="{{asset('css/component-slider.css?v=14039311878856620671739714001')}}" rel="stylesheet" type="text/css" media="all" />
                    <link href="{{asset('css/component-rating.css?v=179577762467860590411739714001')}}" rel="stylesheet" type="text/css" media="all" />
                    <link href="{{asset('css/component-deferred-media.css?v=14096082462203297471739714001')}}" rel="stylesheet" type="text/css" media="all" />

                    <link href="{{asset('css/component-product-variant-picker.css?v=101198305663325844211739714001')}}" rel="stylesheet" type="text/css" media="all" />
                    <link href="{{asset('css/component-swatch-input.css?v=61683592951238328641739714001')}}" rel="stylesheet" type="text/css" media="all" />
                    <link href="{{asset('css/component-swatch.css?v=6811383713633888781739714001')}}" rel="stylesheet" type="text/css" media="all" />

                    <style data-shopify>
                        .section-template--17918930845833__main-padding {
                            padding-top: 27px;
                            padding-bottom: 9px;
                        }

                        @media screen and (min-width: 750px) {
                            .section-template--17918930845833__main-padding {
                                padding-top: 36px;
                                padding-bottom: 12px;
                            }
                        }
                    </style>
                    <script src="{{asset('css/product-info.js?v=149160427226008204701739714003')}}" defer="defer"></script>
                    <script src="{{asset('css/product-form.js?v=82553749319723712671739714003')}}" defer="defer"></script>

                    <div class="page-width">
                        <div class="product product--large product--left product--stacked product--mobile-hide grid grid--1-col grid--2-col-tablet">
                            <div class="grid__item product__media-wrapper">
                                <media-gallery id="MediaGallery-template--17918930845833__main" role="region" class="product__column-sticky" aria-label="Gallery Viewer" data-desktop-layout="stacked">
                                    <div id="GalleryStatus-template--17918930845833__main" class="visually-hidden" role="status"></div>
                                    <slider-component id="GalleryViewer-template--17918930845833__main" class="slider-mobile-gutter">
                                        <a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--17918930845833__main">
                                            পণ্যের তথ্যের দিকে স্কিপ করুন
                                        </a>
                                        <!-- Product Media List -->
                                        <ul id="Slider-Gallery-template--17918930845833__main" class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile" role="list">
                                            <li
                                                id="Slide-template--17918930845833__main-26865504092297"
                                                class="product__media-item grid__item slider__slide is-active product__media-item--single scroll-trigger animate--fade-in"
                                                data-media-id="template--17918930845833__main-26865504092297"
                                            >
                                                <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height" style="--ratio: 0.8; --preview-ratio: 0.8;">
                                                    <modal-opener class="product__modal-opener product__modal-opener--image" data-modal="#ProductModal-template--17918930845833__main">
                                                        <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true">
                                                            <span class="svg-wrapper">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-plus" viewBox="0 0 19 19">
                                                                    <path fill="currentColor" fill-rule="evenodd" d="M4.667 7.94a.5.5 0 0 1 .499-.501l5.534-.014a.5.5 0 1 1 .002 1l-5.534.014a.5.5 0 0 1-.5-.5" clip-rule="evenodd" />
                                                                    <path fill="currentColor" fill-rule="evenodd" d="M7.926 4.665a.5.5 0 0 1 .501.498l.014 5.534a.5.5 0 1 1-1 .003l-.014-5.534a.5.5 0 0 1 .499-.501" clip-rule="evenodd" />
                                                                    <path
                                                                        fill="currentColor"
                                                                        fill-rule="evenodd"
                                                                        d="M12.832 3.03a6.931 6.931 0 1 0-9.802 9.802 6.931 6.931 0 0 0 9.802-9.802M2.323 2.323a7.931 7.931 0 0 1 11.296 11.136l4.628 4.628a.5.5 0 0 1-.707.707l-4.662-4.662A7.932 7.932 0 0 1 2.323 2.323"
                                                                        clip-rule="evenodd"
                                                                    />
                                                                </svg>
                                                            </span>
                                                        </span>
                                
                                                        <div class="loading__spinner hidden">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>
                                                        </div>
                                                        <div class="product__media media media--transparent">
                                                            <img
                                                                id="main-product-image"
                                                                src="{{ asset('images/' . ($colors[0]['image'] ?? 'default.jpg')) }}"
                                                                alt=""
                                                                srcset="{{ asset('images/' . ($colors[0]['image'] ?? 'default.jpg')) }}"
                                                                width="1946"
                                                                height="2433"
                                                                class="image-magnify-lightbox"
                                                                sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)"
                                                            />
                                                        </div>
                                                        <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="26865504092297">
                                                            <span class="visually-hidden">
                                                                মডালে মিডিয়া 1 খুলুন
                                                            </span>
                                                        </button>
                                                    </modal-opener>
                                                </div>
                                            </li>
                                        </ul>
                                
                                        <div class="slider-buttons quick-add-hidden small-hide">
                                            <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
                                                <span class="svg-wrapper">
                                                    <svg class="icon icon-caret" viewBox="0 0 10 6">
                                                        <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="slider-counter caption">
                                                <span class="slider-counter--current">1</span>
                                                <span aria-hidden="true"> / </span>
                                                <span class="visually-hidden">এর মধ্যে</span>
                                                <span class="slider-counter--total">1</span>
                                            </div>
                                            <button type="button" class="slider-button slider-button--next" name="next" aria-label="Slide right">
                                                <span class="svg-wrapper">
                                                    <svg class="icon icon-caret" viewBox="0 0 10 6">
                                                        <path fill="currentColor" fill-rule="evenodd" d="M9.354.646a.5.5 0 0 0-.708 0L5 4.293 1.354.646a.5.5 0 0 0-.708.708l4 4a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708" clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </slider-component>
                                </media-gallery>
                                
                            </div>
                            <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
                                <section id="ProductInfo-template--17918930845833__main" class="product__info-container product__column-sticky">
                                    <p class="product__text inline-richtext caption-with-letter-spacing">আমার দোকান</p>
                                    <div class="product__title">
                                        <h1>{{ $product->name }}</h1>
                                        <a href=" {{route('product', $product->slug)}} " class="product__title">
                                            <h2 class="h1">
                                                {{ $product->name }}
                                            </h2>
                                        </a>
                                    </div>
                                    <div id="price-template--17918930845833__main" role="status">
                                        <div class="price price--large price--on-sale price--show-badge">
                                            <div class="price__container">
                                                <div class="price__regular">
                                                    <span class="visually-hidden visually-hidden--inline">নিয়মিত দাম</span>
                                                    <span class="price-item price-item--regular">
                                                        Tk {{ $product->price }} BDT
                                                    </span>
                                                </div>
                                                <div class="price__sale">
                                                    <span class="visually-hidden visually-hidden--inline">নিয়মিত দাম</span>
                                                    <span>
                                                        <s class="price-item price-item--regular">
                                                            Tk {{ get_field('old_price','price',$product->id,'') }} BDT
                                                        </s>
                                                    </span>
                                                    <span class="visually-hidden visually-hidden--inline">বিক্রয় দাম</span>
                                                    <span class="price-item price-item--sale price-item--last">
                                                        Tk {{ $product->price }} BDT
                                                    </span>
                                                </div>
                                                <small class="unit-price caption hidden">
                                                    <span class="visually-hidden">ইউনিট দাম</span>
                                                    <span class="price-item price-item--last">
                                                        <span></span>
                                                        <span aria-hidden="true">/</span>
                                                        <span class="visually-hidden">&nbsp;প্রতি&nbsp;</span>
                                                        <span> </span>
                                                    </span>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <form method="post" action="/cart/add" id="product-form-installment-template--17918930845833__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data">
                                            <input type="hidden" name="form_type" value="product" />
                                            <input type="hidden" name="utf8" value="✓" />
                                            <input type="hidden" name="id" value="43374420033673" />

                                            <input type="hidden" name="product-id" value="7999306039433" />
                                            <input type="hidden" name="section-id" value="template--17918930845833__main" />
                                        </form>
                                    </div>
                                    <variant-selects id="variant-selects-template--17918930845833__main" data-section="template--17918930845833__main">
                                        
                                        
                                        <fieldset class="js product-form__input product-form__input--pill">
                                            <legend class="form__label">সাইজ</legend>

                                            @foreach(json_decode($product->size, true) ?? [] as $index => $size)
                                                <input
                                                    type="radio"
                                                    id="size-option-{{ $index }}"  {{-- Unique ID for each size --}}
                                                    name="size"
                                                    value="{{ $size['name'] ?? $size }}"
                                                    form="product-form-template--17918930845833__main"
                                                    @if($loop->first) checked @endif  {{-- Ensures the first option is checked --}}
                                                    data-product-url=""
                                                    data-option-value-id="3265055096969"
                                                />
                                                <label for="size-option-{{ $index }}">  {{-- Match label with input ID --}}
                                                    {{ $size['name'] ?? $size }}
                                                    <span class="visually-hidden label-unavailable">Variant sold out or unavailable</span> 
                                                </label>
                                            @endforeach


                                        

                                    </fieldset>
                                        
                                        
                                       

                                       <!-- Color Selection -->
                                    <fieldset class="js product-form__input product-form__input--swatch">
                                        <legend class="form__label">
                                            রঙ :
                                            <span data-selected-value>{{ $colors[0]['color'] ?? 'Black' }}</span>
                                        </legend>
                                        @foreach ($colors as $index => $color)
                                            <input
                                                type="radio"
                                                id="color-option-{{ $index }}" 
                                                name="color"
                                                value="{{ is_array($color) ? ($color['color'] ?? '') : $color }}"
                                                form="product-form-template--17918930845833__main"
                                                class="swatch-input__input"
                                                @if($loop->first) checked @endif
                                                data-product-url="{{ asset('images/' . ($color['image'] ?? 'default.jpg')) }}"
                                                data-option-value-id="3265055293577"
                                            />
                                            <label for="color-option-{{ $index }}" title="{{ $color['color'] ?? 'Color' }}" class="swatch-input__label">
                                                <span class="swatch" 
                                                    style="--swatch--background: url({{ asset('images/' . ($color['image'] ?? 'default.jpg')) }}); 
                                                        --swatch-focal-point: 50% 50%;">
                                                </span>
                                                <span class="visually-hidden">{{ $color['color'] ?? 'Color' }}</span>
                                                <span class="visually-hidden label-unavailable">Variant sold out or unavailable</span>
                                            </label>
                                        @endforeach
                                    </fieldset>

                                        
                                       
                                    </variant-selects>
                                    <div id="Quantity-Form-template--17918930845833__main" class="product-form__input product-form__quantity">
                                        <label class="quantity__label form__label" for="Quantity-template--17918930845833__main">
                                            পরিমাণ
                                            <span class="quantity__rules-cart hidden">
                                                <div class="loading__spinner hidden">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>
                                                </div>
                                                <span>(<span class="quantity-cart">0</span> কার্টে)</span>
                                            </span>
                                        </label>
                                        <div class="price-per-item__container">
                                            <quantity-input class="quantity" data-url="/products/premium-micro-stich-panjabi" data-section="template--17918930845833__main">
                                                <button class="quantity__button" name="minus" type="button">
                                                    <span class="visually-hidden">Premium Micro Stich Panjabi এর পরিমাণ কমান</span>
                                                    <span class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-minus" viewBox="0 0 10 2">
                                                            <path fill="currentColor" fill-rule="evenodd" d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 1 1 0 1H1A.5.5 0 0 1 .5 1" clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <input
                                                    class="quantity__input"
                                                    type="number"
                                                    name="quantity"
                                                    id="Quantity-template--17918930845833__main"
                                                    data-cart-quantity="0"
                                                    data-min="1"
                                                    min="1"
                                                    step="1"
                                                    value="1"
                                                    form="product-form-template--17918930845833__main"
                                                />
                                                <button class="quantity__button" name="plus" type="button">
                                                    <span class="visually-hidden">Premium Micro Stich Panjabi এর পরিমাণ বাড়ান</span>
                                                    <span class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-plus" viewBox="0 0 10 10">
                                                            <path
                                                                fill="currentColor"
                                                                fill-rule="evenodd"
                                                                d="M1 4.51a.5.5 0 0 0 0 1h3.5l.01 3.5a.5.5 0 0 0 1-.01V5.5l3.5-.01a.5.5 0 0 0-.01-1H5.5L5.49.99a.5.5 0 0 0-1 .01v3.5l-3.5.01z"
                                                                clip-rule="evenodd"
                                                            />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </quantity-input>
                                        </div>
                                        <div class="quantity__rules caption" id="Quantity-Rules-template--17918930845833__main"></div>
                                    </div>
                                    
                                    <div>
                                            <form
                                                method="post"
                                                action="{{ route('cartStore') }}"
                                                id="product-form-template--17918930845833__main"
                                                accept-charset="UTF-8"
                                               
                                                enctype="multipart/form-data"
                                                novalidate="novalidate"
                                                data-type="add-to-cart-form"
                                            >
                                            @csrf

                                                <input type="hidden" name="form_type" value="product" />
                                                <input type="hidden" name="utf8" value="✓" />
                                                <input type="hidden" name="id" value="{{ $product->id }}" />
                                                <div class="product-form__buttons">
                                                    <button id="ProductSubmitButton-template--17918930845833__main" type="submit" name="add" class="product-form__submit button button--full-width button--secondary">
                                                        <span>অর্ডার করুন</span>
                                                
                                                        <div class="loading__spinner hidden">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="spinner" viewBox="0 0 66 66"><circle stroke-width="6" cx="33" cy="33" r="30" fill="none" class="path" /></svg>
                                                        </div>
                                                    </button>
                                                    <div data-shopify="payment-button" class="shopify-payment-button">
                                                        <shopify-accelerated-checkout
                                                            recommended="null"
                                                            fallback='{"name":"buy_it_now","wallet_params":{}}'
                                                            access-token="0641da02ba9676af07509dd8dc4cc289"
                                                            buyer-country="BD"
                                                            buyer-locale="en"
                                                            buyer-currency="BDT"
                                                            variant-params='[{"id":43374420033673,"requiresShipping":true},{"id":43374420099209,"requiresShipping":true},{"id":43393684635785,"requiresShipping":true},{"id":43393684668553,"requiresShipping":true},{"id":43393684701321,"requiresShipping":true},{"id":43393684734089,"requiresShipping":true},{"id":43393684766857,"requiresShipping":true},{"id":43374420230281,"requiresShipping":true},{"id":43374420295817,"requiresShipping":true},{"id":43393684799625,"requiresShipping":true},{"id":43393684832393,"requiresShipping":true},{"id":43393684865161,"requiresShipping":true},{"id":43393684897929,"requiresShipping":true},{"id":43393684930697,"requiresShipping":true},{"id":43374420426889,"requiresShipping":true},{"id":43374420492425,"requiresShipping":true},{"id":43393684963465,"requiresShipping":true},{"id":43393684996233,"requiresShipping":true},{"id":43393685029001,"requiresShipping":true},{"id":43393685061769,"requiresShipping":true},{"id":43393685094537,"requiresShipping":true}]'
                                                            shop-id="68175364233"
                                                        >
                                                            <div class="shopify-payment-button__button" role="button" disabled aria-hidden="true" style="background-color: transparent; border: none;">
                                                                <div class="shopify-payment-button__skeleton">&nbsp;</div>
                                                            </div>
                                                        </shopify-accelerated-checkout>
                                                        <small id="shopify-buyer-consent" class="hidden" aria-hidden="true">
                                                            এই আইটেমটি একটি পুনরাবৃত্তি বা বিলম্বিত ক্রয়। অব্যাহত রাখার মাধ্যমে, আমি <span id="shopify-subscription-policy-button">বাতিলকরণ নীতির</span> সাথে একমত হই এবং আমি অনুমোদিত হব যাতে আপনি আমার
                                                            পেমেন্ট পদ্ধতিতে পৃষ্ঠায় তালিকাভুক্ত দাম, ফ্রিকোয়েন্সি এবং তারিখগুলির উপর ভিত্তি করে চার্জ করতে পারেন যতক্ষণ না আমার অর্ডার পূর্ণ হয় বা আমি এটি বাতিল করি, যদি অনুমোদিত হয়।
                                                        </small>
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" name="product-id" value="7999306039433" /><input type="hidden" name="section-id" value="template--17918930845833__main" />
                                            </form>


                                        <link href="{{asset('css/component-pickup-availability.css?v=34645222959864780961739714001')}}" rel="stylesheet" type="text/css" media="all" />
                                        <pickup-availability
                                            class="product__pickup-availabilities quick-add-hidden"
                                            data-root-url="/"
                                            data-variant-id="43374420033673"
                                            data-has-only-default-variant="false"
                                            data-product-page-color-scheme="gradient color-scheme-1"
                                        >
                                            <template>
                                                <pickup-availability-preview class="pickup-availability-preview">
                                                    <span class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-unavailable" viewBox="0 0 20 20">
                                                            <path
                                                                fill="#DE3618"
                                                                stroke="#fff"
                                                                d="M13.94 3.94 10 7.878l-3.94-3.94A1.499 1.499 0 1 0 3.94 6.06L7.88 10l-3.94 3.94a1.499 1.499 0 1 0 2.12 2.12L10 12.12l3.94 3.94a1.497 1.497 0 0 0 2.12 0 1.5 1.5 0 0 0 0-2.12L12.122 10l3.94-3.94a1.499 1.499 0 1 0-2.121-2.12z"
                                                            />
                                                        </svg>
                                                    </span>
                                                    <div class="pickup-availability-info">
                                                        <p class="caption-large">Couldn&#39;t load pickup availability</p>
                                                        <button class="pickup-availability-button link link--text underlined-link">
                                                            Refresh
                                                        </button>
                                                    </div>
                                                </pickup-availability-preview>
                                            </template>
                                        </pickup-availability>

                                        <script src="{{asset('css/pickup-availability.js?v=78418059211521962961739714003')}}" defer="defer"></script>
                                    </div>
                                    <div class="product__description rte quick-add-hidden">
                                        <p data-start="0" data-end="405" data-is-last-node="">
                                           {{ $product->description }}
                                        </p>
                                    </div>
                                    <script src="{{asset('css/share.js?v=13024540447964430191739714003')}}" defer="defer"></script>


                                    <a href="/products/premium-micro-stich-panjabi" class="link product__view-details animate-arrow">
                                        View full details
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-arrow" viewBox="0 0 14 10">
                                            <path
                                                fill="currentColor"
                                                fill-rule="evenodd"
                                                d="M8.537.808a.5.5 0 0 1 .817-.162l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 1 1-.708-.708L11.793 5.5H1a.5.5 0 0 1 0-1h10.793L8.646 1.354a.5.5 0 0 1-.109-.546"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </a>
                                </section>
                            </div>
                        </div>

                        <product-modal id="ProductModal-template--17918930845833__main" class="product-media-modal media-modal">
                            <div class="product-media-modal__dialog color-scheme-1 gradient" role="dialog" aria-label="Media gallery" aria-modal="true" tabindex="-1">
                                <button id="ModalClose-template--17918930845833__main" type="button" class="product-media-modal__toggle" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="icon icon-close" viewBox="0 0 18 17">
                                        <path
                                            fill="currentColor"
                                            d="M.865 15.978a.5.5 0 0 0 .707.707l7.433-7.431 7.579 7.282a.501.501 0 0 0 .846-.37.5.5 0 0 0-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 1 0-.707-.708L8.991 7.853 1.413.573a.5.5 0 1 0-.693.72l7.563 7.268z"
                                        />
                                    </svg>
                                </button>

                                <div class="product-media-modal__content color-scheme-1 gradient" role="document" aria-label="Media gallery" tabindex="0">
                                    
                                    @foreach (json_decode($product->slider_data, true) ?? [] as $color)
                                        <img
                                            class="global-media-settings global-media-settings--no-shadow product__media-item--variant"
                                            srcset="{{ asset('images/' . ($color['image'] ?? 'default.jpg')) }}"
                                            sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
                                            src="{{ asset('images/' . ($color['image'] ?? 'default.jpg')) }}"
                                            alt="Premium Micro Stich Panjabi"
                                            loading="lazy"
                                            width="1100"
                                            height="1375"
                                            data-media-id="{{ $color['id'] ?? '' }}"
                                        />
                                    @endforeach

                                </div>
                            </div>
                        </product-modal>

                        <script src="{{asset('css/product-modal.js?v=116616134454508949461739714003')}}" defer="defer"></script>
                        <script src="{{asset('css/media-gallery.js?v=53998976194532824491739714003')}}" defer="defer"></script>
                      
                    </div>
                </product-info>
            </section>











            <section id="shopify-section-template--17918930845833__related-products" class="shopify-section section">
                <link href="{{asset('css/component-card.css?v=120341546515895839841739714001')}}" rel="stylesheet" type="text/css" media="all" />
                <link href="{{asset('css/component-price.css?v=70172745017360139101739714001')}}" rel="stylesheet" type="text/css" media="all" />
                <link href="{{asset('css/section-related-products.css?v=80324771040738084201739714003')}}" rel="stylesheet" type="text/css" media="all" />

                <style data-shopify>
                    .section-template--17918930845833__related-products-padding {
                        padding-top: 27px;
                        padding-bottom: 21px;
                    }

                    @media screen and (min-width: 750px) {
                        .section-template--17918930845833__related-products-padding {
                            padding-top: 36px;
                            padding-bottom: 28px;
                        }
                    }
                </style>
                <div class="color-scheme-1 gradient">
                    <product-recommendations
                        class="related-products page-width section-template--17918930845833__related-products-padding isolate scroll-trigger animate--slide-in"
                        data-url="/recommendations/products?limit=4"
                        data-section-id="template--17918930845833__related-products"
                        data-product-id="7999306039433"
                    >
                    </product-recommendations>
                </div>
            </section>


            <section id="shopify-section-template--17918930681993__featured_collection" class="shopify-section section">
                <link href="{{asset('css/component-card.css?v=120341546515895839841739714001')}}" rel="stylesheet" type="text/css" media="all" />
                <link href="{{asset('css/component-price.css?v=70172745017360139101739714001')}}" rel="stylesheet" type="text/css" media="all" />
        
                <link href="{{asset('css/component-slider.css?v=14039311878856620671739714001')}}" rel="stylesheet" type="text/css" media="all" />
                <link href="{{asset('css/template-collection.css?v=58558206033505836701739714003')}}" rel="stylesheet" type="text/css" media="all" />
        
                <style data-shopify>
                    .section-template--17918930681993__featured_collection-padding {
                        padding-top: 33px;
                        padding-bottom: 27px;
                    }
        
                    @media screen and (min-width: 750px) {
                        .section-template--17918930681993__featured_collection-padding {
                            padding-top: 44px;
                            padding-bottom: 36px;
                        }
                    }
                </style>
                <div class="color-scheme-1 isolate gradient">
                    <div class="collection section-template--17918930681993__featured_collection-padding" id="collection-template--17918930681993__featured_collection" data-id="template--17918930681993__featured_collection">
                        <div class="collection__title title-wrapper title-wrapper--no-top-margin page-width">
                            <h2 class="title inline-richtext h2 scroll-trigger animate--slide-in">
                                আরও পণ্য
                            </h2>
                        </div>
        
                        <slider-component class="slider-mobile-gutter page-width page-width-desktop scroll-trigger animate--slide-in">
                            <ul
                                id="Slider-template--17918930681993__featured_collection"
                                data-id="template--17918930681993__featured_collection"
                                class="grid product-grid contains-card contains-card--product contains-card--standard grid--4-col-desktop grid--2-col-tablet-down"
                                role="list"
                                aria-label="Slider"
                            >
        
        
        
                            @foreach ( get_all_movies($product->id) as $product )
        
                                <li id="Slide-template--17918930681993__featured_collection-1" class="grid__item scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;">
                                    <link href="{{asset('css/component-rating.css?v=179577762467860590411739714001')}}" rel="stylesheet" type="text/css" media="all" />
                                    <link href="{{asset('css/component-volume-pricing.css?v=111870094811454961941739714001')}}" rel="stylesheet" type="text/css" media="all" />
        
                                    <link href="{{asset('css/component-price.css?v=70172745017360139101739714001')}}" rel="stylesheet" type="text/css" media="all" />
                                    <link href="{{asset('css/quick-order-list.css?v=129932180309343703061739714003')}}" rel="stylesheet" type="text/css" media="all" />
                                    <link href="{{asset('css/quantity-popover.css?v=129068967981937647381739714003')}}" rel="stylesheet" type="text/css" media="all" />
                                    <div class="card-wrapper product-card-wrapper underline-links-hover">
                                        <div class="card card--standard card--media" style="--ratio-percent: 133.33333333333334%;">
                                            <div class="card__inner color-scheme-2 gradient ratio" style="--ratio-percent: 133.33333333333334%;">
                                                <div class="card__media">
                                                    <div class="media media--transparent media--hover-effect">
                                                        <img
                                                            srcset="{{ asset('images/'.$product->image) }}"
                                                            
                                                            src="{{ asset('images/'.$product->image) }}"
                                                            sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt="China Lacra Stitch Fabric"
                                                            class="motion-reduce"
                                                            loading="lazy"
                                                            width="720"
                                                            height="960"
                                                        />
        
                                                        <img
                                                            srcset="{{ asset('images/'.$product->image) }}"
                                                            
                                                            src="{{ asset('images/'.$product->image) }}"
                                                            sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                            alt=""
                                                            class="motion-reduce"
                                                            loading="lazy"
                                                            width="720"
                                                            height="960"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="card__content">
                                                    <div class="card__information">
                                                        <h3 class="card__heading">
                                                            <a
                                                                href="{{ route('product', $product->slug) }}"
                                                                id="StandardCardNoMediaLink-template--17918930681993__featured_collection-8006034456713"
                                                                class="full-unstyled-link"
                                                                aria-labelledby="StandardCardNoMediaLink-template--17918930681993__featured_collection-8006034456713 NoMediaStandardBadge-template--17918930681993__featured_collection-8006034456713"
                                                            >
                                                                {{ $product->name }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="card__badge bottom left">
                                                        <span id="NoMediaStandardBadge-template--17918930681993__featured_collection-8006034456713" class="badge badge--bottom-left color-scheme-4">Sale</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__content">
                                                <div class="card__information">
                                                    <h3 class="card__heading h5" id="title-template--17918930681993__featured_collection-8006034456713">
                                                        <a
                                                            href="{{ route('product', $product->slug) }}"
                                                            id="CardLink-template--17918930681993__featured_collection-8006034456713"
                                                            class="full-unstyled-link"
                                                            aria-labelledby="CardLink-template--17918930681993__featured_collection-8006034456713 Badge-template--17918930681993__featured_collection-8006034456713"
                                                        >
                                                            {{ $product->name }}
                                                        </a>
                                                    </h3>
                                                    <div class="card-information">
                                                        <span class="caption-large light"></span>
                                                        <div class="price price--on-sale">
                                                            <div class="price__container">
                                                                <div class="price__regular">
                                                                    <span class="visually-hidden visually-hidden--inline">সাধারণ মূল্য</span>
                                                                    <span class="price-item price-item--regular">
                                                                        Tk {{ $product->price }} BDT
                                                                    </span>
                                                                </div>
                                                                <div class="price__sale">
                                                                    <span class="visually-hidden visually-hidden--inline">সাধারণ মূল্য</span>
                                                                    <span>
                                                                        <s class="price-item price-item--regular">
                                                                            Tk {{ get_field('old_price','price',$product->id,'') }} BDT
                                                                        </s>
                                                                    </span>
                                                                    <span class="visually-hidden visually-hidden--inline">ছাড়ের মূল্য</span>
                                                                    <span class="price-item price-item--sale price-item--last">
                                                                        Tk {{ $product->price }} BDT
                                                                    </span>
                                                                </div>
                                                                <small class="unit-price caption hidden">
                                                                    <span class="visually-hidden">ইউনিট মূল্য</span>
                                                                    <span class="price-item price-item--last">
                                                                        <span></span>
                                                                        <span aria-hidden="true">/</span>
                                                                        <span class="visually-hidden">&nbsp;প্রতি&nbsp;</span>
                                                                        <span> </span>
                                                                    </span>
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="card__badge bottom left"><span id="Badge-template--17918930681993__featured_collection-8006034456713" class="badge badge--bottom-left color-scheme-4">ছাড়</span></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </li>
        
                            @endforeach
        
        
                            </ul>
                        </slider-component>
                    </div>
                </div>
            </section>

        </main>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get all color radio buttons
                const colorInputs = document.querySelectorAll('input[name="color"]');
                const mainProductImage = document.getElementById('main-product-image');
            
                // Add event listener to each color input
                colorInputs.forEach(input => {
                    input.addEventListener('change', function() {
                        // Get the selected color's image URL from the data attribute
                        const selectedColorImage = this.getAttribute('data-product-url');
            
                        // Update the main product image source
                        if (selectedColorImage) {
                            mainProductImage.src = selectedColorImage;
                            mainProductImage.srcset = selectedColorImage;
                        }
                    });
                });
            });
            </script>
                           


@endsection