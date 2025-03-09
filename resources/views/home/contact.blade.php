@extends('layouts.app')
@section('content') 
@include('include.header')



        <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
            <section id="shopify-section-template--17918930747529__main" class="shopify-section section">
                <link href="{{ asset('css/section-main-page.css?v=848677459125201531739714003')}}" rel="stylesheet" type="text/css" media="all" />
                <style data-shopify>
                    .section-template--17918930747529__main-padding {
                        padding-top: 27px;
                        padding-bottom: 27px;
                    }

                    @media screen and (min-width: 750px) {
                        .section-template--17918930747529__main-padding {
                            padding-top: 36px;
                            padding-bottom: 36px;
                        }
                    }
                </style>
                <div class="page-width page-width--narrow section-template--17918930747529__main-padding">
                    <h1 class="main-page-title page-title h0 scroll-trigger animate--fade-in">
                        Contact
                    </h1>
                    <div class="rte scroll-trigger animate--slide-in"></div>
                </div>
            </section>
            <section id="shopify-section-template--17918930747529__form" class="shopify-section section">
                <link href="{{ asset('css/section-contact-form.css?v=124756058432495035521739714003')}}" rel="stylesheet" type="text/css" media="all" />
                <style data-shopify>
                    .section-template--17918930747529__form-padding {
                        padding-top: 27px;
                        padding-bottom: 27px;
                    }

                    @media screen and (min-width: 750px) {
                        .section-template--17918930747529__form-padding {
                            padding-top: 36px;
                            padding-bottom: 36px;
                        }
                    }
                </style>
                <div class="color-scheme-1 gradient">
                    <div class="contact page-width page-width--narrow section-template--17918930747529__form-padding">
                        <h2 class="visually-hidden">যোগাযোগ ফর্ম</h2>
                        <form method="post" id="ContactForm" accept-charset="UTF-8" class="isolate scroll-trigger animate--slide-in" action="{{ route('contactStore') }}">
                            @csrf
                            
                            <div class="contact__fields">
                                <div class="field">
                                    <input class="field__input" autocomplete="name" type="text" id="ContactForm-name" name="name" value="" placeholder="নাম" />
                                    <label class="field__label" for="ContactForm-name">নাম</label>
                                </div>
                                <div class="field field--with-error">
                                    <input autocomplete="email" type="email" id="ContactForm-email" class="field__input" name="email" spellcheck="false" autocapitalize="off" value="" aria-required="true" placeholder="ইমেইল" />
                                    <label class="field__label" for="ContactForm-email">ইমেইল <span aria-hidden="true">*</span></label>
                                </div>
                            </div>
                            <div class="field">
                                <input type="tel" id="ContactForm-phone" class="field__input" autocomplete="tel" name="phone" pattern="[0-9\-]*" value="" placeholder="ফোন নম্বর" />
                                <label class="field__label" for="ContactForm-phone">ফোন নম্বর</label>
                            </div>
                            <div class="field">
                                <textarea rows="10" id="ContactForm-body" class="text-area field__input" name="message" placeholder="মন্তব্য"></textarea>
                                <label class="form__label field__label" for="ContactForm-body">মন্তব্য</label>
                            </div>
                            <div class="contact__button">
                                <button type="submit" class="button">
                                    পাঠান
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </section>
        </main>


@endsection
        