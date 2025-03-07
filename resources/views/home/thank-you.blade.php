@extends('layouts.app') 
@section('content')


<div class="cartflows-container">
            <div class="cartflows-primary">
                <div data-elementor-type="wp-post" data-elementor-id="46" class="elementor elementor-46" data-elementor-post-type="cartflows_step">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-2cd075e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2cd075e" data-element_type="section">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-97a2d3e" data-id="97a2d3e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-918519b elementor-widget elementor-widget-heading" data-id="918519b" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                Thank you!
অর্ডার করার জন্য ধন্যবাদ ।<br>আপনি চাইলে আমাদের হোয়াটসঅ্যাপে আপনিও এড হতে পারেন অথবা আমরা ফোন করে আপনাকে হোয়াটসঅ্যাপে এড করব
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-6d702a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6d702a6" data-element_type="section">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6971cce" data-id="6971cce" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-7957c0f elementor-widget elementor-widget-heading" data-id="7957c0f" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">হোয়াটসঅ্যাপ নাম্বার</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-363dc24 elementor-align-center elementor-widget elementor-widget-button" data-id="363dc24" data-element_type="widget" data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-lg" href="https://api.whatsapp.com/send/?phone=+880%201611-997474&#038;text&#038;type=phone_number&#038;app_absent=0">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-icon">
                                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path>
                                                            </svg>
                                                        </span>
                                                        <span class="elementor-button-text">{{get_option('phone','')}} </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-0318e9c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0318e9c" data-element_type="section">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-81d2d41" data-id="81d2d41" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-39a8bb7 elementor-widget elementor-widget-heading" data-id="39a8bb7" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">
                                                <a href="{{get_option('facebook','') }}" target="_blank" >আরো কেনাকাটা করুন</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
       

@endsection



@push('css')

<style>

    .cartflows-container {
        max-width: 800px !important;
        margin: 50px auto !important;
        padding: 20px !important;
        background: #fff !important;
        border-radius: 10px !important;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1) !important;
        text-align: center !important;
    }
    
    .cartflows-primary {
        padding: 20px !important;
    }
    
    .elementor-heading-title {
        font-size: 22px !important;
        font-weight: bold !important;
        color: #333 !important;
        margin-bottom: 20px !important;
    }
    
    .elementor-background-overlay {
        background: rgba(0, 0, 0, 0.1) !important;
        border-radius: 10px !important;
    }

    .elementor-heading-title{
        line-height: 1.5 !important;
    }
    
    .elementor-button {
        display: inline-block !important;
        background: #25D366 !important; /* WhatsApp Green */
        color: white !important;
        padding: 12px 20px !important;
        border-radius: 50px !important;
        text-decoration: none !important;
        font-size: 18px !important;
        font-weight: bold !important;
        transition: all 0.3s ease !important;
    }
    
    .elementor-button:hover {
        background: #1ebe57 !important;
    }
    
    .elementor-button-icon {
        display: inline-block !important;
        margin-right: 8px !important;
    }
    
    .elementor-section {
        margin-bottom: 20px !important;
        padding: 20px !important;
        border-radius: 10px !important;
    }
    
    .elementor-section:nth-child(odd) {
        background: #f9f9f9 !important;
    }

    .elementor-heading-title a{
        color: #007bff !important;
        text-decoration: none !important;
        font-size: 18px !important;
        font-weight: bold !important;
    }
    
    .elementor-section:nth-child(even) {
        background: #f1f1f1 !important;
    }
    
    .elementor-button-text {
        font-size: 16px !important;
    }
    
    .elementor-heading-title a {
        color: #007bff !important;
        text-decoration: none !important;
        font-size: 18px !important;
        font-weight: bold !important;
    }
    
    .elementor-heading-title a:hover {
        color: #0056b3 !important;
        text-decoration: underline !important;
    }
    
    </style>
    



@endpush