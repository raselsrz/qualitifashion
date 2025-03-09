@extends('layouts.app') @section('content') @include('include.header')



        <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
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
                                All Product
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
        
        
        
                            @foreach ( $products as $product )
        
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
                                                    <span id="NoMediaStandardBadge-template--17918930681993__featured_collection-8006034456713" class="badge badge--bottom-left color-scheme-4">বিক্রয়</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
        
                            @endforeach
        
        
                            </ul>
                        </slider-component>
                        @if(count($products) > 12)

                        <div class="pagination pagination--bottom">
                            <div class="pagination__info">
                                <span class="pagination__info-text">
                                    প্রদর্শন করা হচ্ছে {{ $products->firstItem() }} - {{ $products->lastItem() }} থেকে {{ $products->total() }} টি পণ্য
                                </span>
                            </div>
                        
                            <div class="pagination-controls">
                                {{-- Previous Page --}}
                                @if ($products->onFirstPage())
                                    <span class="pagination__link pagination__link--disabled">← পূর্ববর্তী</span>
                                @else
                                    <a href="{{ $products->previousPageUrl() }}" class="pagination__link pagination__link--prev" aria-label="পূর্ববর্তী পৃষ্ঠা">← পূর্ববর্তী</a>
                                @endif
                        
                                {{-- Pagination Links --}}
                                <ul class="pagination-list">
                                    @foreach ($products->links()->elements[0] as $page => $url)
                                        <li class="pagination-list__item {{ $products->currentPage() == $page ? 'pagination--current' : '' }}">
                                            <a href="{{ $url }}" class="pagination__link">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                        
                                {{-- Next Page --}}
                                @if ($products->hasMorePages())
                                    <a href="{{ $products->nextPageUrl() }}" class="pagination__link pagination__link--next" aria-label="পরবর্তী পৃষ্ঠা">পরবর্তী →</a>
                                @else
                                    <span class="pagination__link pagination__link--disabled">পরবর্তী →</span>
                                @endif
                            </div>
                        </div>
                        
                        @endif
                        
                        




                    </div>
                </div>
            </section>
        </main>



@endsection