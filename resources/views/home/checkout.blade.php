@include('include.c-head')

<main id="checkout-main" class="djSdi">
    <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem4v _1fragem47 _1fragem6o _1fragem60 _1fragem2s">
        <form method="POST" id="Form178" action="{{ route('checkoutStore') }}">
            @csrf
            <div class="km09ry1 _1fragemlo">
                <div>
                    <section class="_197l2ofi _197l2ofg _1fragemnf _197l2ofp _197l2ofk _1fragemnb _1fragemt5 _1fragem1y _1fragemf0 _1fragemg0 _1fragemh3 _1fragemht _1fragemd7 _1frageme7 _1fragemiw _1fragemjm _1fragemlo">
                        <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem4v _1fragem6o _1fragem2s">
                            <div>
                                <div>
                                    <div>
                                        <div class="bSo96">
                                            <h2 class="n8k95w1 n8k95w0 _1fragemlo n8k95w2">চেকআউট</h2>                                        </div>
                                        <div class="_16s97g75f"></div>
                                        <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3w _1fragem5p _1fragem2s">
                                            <div>
                                                <div
                                                    style="--_16s97g7a: 1fr; --_16s97g7k: minmax(0, 1fr); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(0, 1fr);"
                                                    class="_1mrl40q0 _1fragemlo _1fragem3w _1fragem5p _1fragem2s _1fragemm8 _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
                                                >
                                                    <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
                                                        <div class="cektnc0 _1fragemlo cektnc5">
                                                            <label id="email-label" for="email" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
                                                                <span class="cektnca">
                                                                    <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">Email or mobile phone number</span>
                                                                </span>
                                                            </label>
                                                            <div class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh">
                                                                <input
                                                                    id="email"
                                                                    name="email"
                                                                    placeholder="Email or mobile phone number"
                                                                    required
                                                                    type="text"
                                                                    inputmode="text"
                                                                    aria-labelledby="email-label"
                                                                    value
                                                                    autocomplete="shipping email"
                                                                    autofocus
                                                                    autocapitalize="off"
                                                                    class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </section>
                    <div class="_1fragem1y _1fragemlo gfFXW">
                        <div class="_16s97g74v _16s97g760"></div>
                    </div>
                </div>
                <div>
                    <div>
                        <section class="_197l2ofi _197l2ofg _1fragemnf _197l2ofp _197l2ofk _1fragemnb _1fragemt5 _1fragem1y _1fragemf0 _1fragemg0 _1fragemh3 _1fragemht _1fragemd7 _1frageme7 _1fragemiw _1fragemjm _1fragemlo">
                            <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3w _1fragem5p _1fragem2s">
                                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3c _1fragem55 _1fragem2s">
                                    <h2 class="n8k95w1 n8k95w0 _1fragemlo n8k95w2">Delivery</h2>
                                </div>
                                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem4b _1fragem64 _1fragem2s">
                                    <section aria-label="Shipping address" class="_1fragem1y _1fragemlo">
                                        <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3w _1fragem5p _1fragem2s">
                                            <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem4b _1fragem64 _1fragem2s">
                                                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3w _1fragem5p _1fragem2s">
                                                    <div>
                                                        <div id="shippingAddressForm">
                                                            <div aria-hidden="false" aria-busy="false" class="r62YW">
                                                                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3w _1fragem5p _1fragem2s">
                                                                   
                                                                    <div
    style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);"
    class="_1mrl40q0 _1fragemlo _1fragem3w _1fragem5p _1fragem2s _1fragemm8 _1fragemm4 _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
>
    <div class="RD23h _1k3449n1 _1k3449n0 _1fragemng _10vrn9p1 _10vrn9p0 _10vrn9p4">
        <div>
            <div class="VZudx _1k3449n1 _1k3449n0 _1fragemng">
                <label for="Select97" class="QCxaD A9HkF">
                    <span class="XDBWz">
                        <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">দেশ/অঞ্চল</span>
                    </span>
                </label>
                <select name="countryCode" id="Select97" required autocomplete="shipping country" class="ZHJU6 _1k3449n5 _1k3449n3 _1fragemt5 oAlPg IWR5K tu1VS">
                    <option selected value="BD">বাংলাদেশ</option>
                </select>
                <div class="VXrUd">
                    <span class="a8x1wu2 a8x1wu1 _1fragemok _1fragem1t _1fragemkk _1fragemka a8x1wu9 a8x1wuj a8x1wuh _1fragem1y a8x1wum a8x1wul a8x1wuy">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 14 14"
                            focusable="false"
                            aria-hidden="true"
                            class="a8x1wu10 a8x1wuz _1fragem1y _1fragemok _1fragemkk _1fragemka _1fragemnr"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.9 5.6-4.653 4.653a.35.35 0 0 1-.495 0L2.1 5.6"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div
    style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);"
    class="_1mrl40q0 _1fragemlo _1fragem3w _1fragem5p _1fragem2s _1fragemm8 _1fragemm4 _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
>
    <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
        <div class="cektnc0 _1fragemlo cektnc5">
            <label id="TextField588-label" for="TextField588" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
                <span class="cektnca">
                    <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">প্রথম নাম</span>
                </span>
            </label>
            <div
                class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh"
            >
                <input
                    id="TextField588"
                    name="firstName"
                    placeholder="প্রথম নাম"
                    required
                    type="text"
                    aria-labelledby="TextField588-label"
                    value="{{ old('firstName') }}"
                    autocomplete="shipping given-name"
                    class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
                />
            </div>
        </div>

        @if($errors->has('firstName'))
        <span><p id="error-for-email" class="ksaxnz0 _1fragemn5">একটি প্রথম নাম লিখুন</p></span>
        @endif

    </div>

    <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
        <div class="cektnc0 _1fragemlo cektnc5">
            <label id="TextField589-label" for="TextField589" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
                <span class="cektnca">
                    <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">শেষ নাম</span>
                </span>
            </label>
            <div
                class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh"
            >
                <input
                    id="TextField589"
                    name="lastName"
                    placeholder="শেষ নাম"
                    required
                    type="text"
                    aria-required="true"
                    aria-labelledby="TextField589-label"
                    value="{{old('lastName')}}"
                    autocomplete="shipping family-name"
                    class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
                />
            </div>
        </div>

        @if($errors->has('lastName'))
        <span><p id="error-for-email" class="ksaxnz0 _1fragemn5">একটি শেষ নাম লিখুন</p></span>
        @endif

    </div>
</div>


<div
style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);"
class="_1mrl40q0 _1fragemlo _1fragem3w _1fragem5p _1fragem2s _1fragemm8 _1fragemm4 _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
>
<div class="wfKnD">
    <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3m _1fragem5f _1fragem2s">
        <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
            <div class="cektnc0 _1fragemlo cektnc5">
                <label id="TextField590-label" for="TextField590" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
                    <span class="cektnca">
                        <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">ঠিকানা</span>
                    </span>
                </label>
                <div
                    class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh"
                >
                    <input
                        id="TextField590"
                        name="address1"
                        placeholder="ঠিকানা"
                        required
                        type="text"
                        aria-required="true"
                        aria-labelledby="TextField590-label"
                        value
                        autocomplete="shipping address-line1"
                        class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
                    />
                </div>
            </div>

            @if($errors->has('address1'))
            <span><p id="error-for-email" class="ksaxnz0 _1fragemn5">একটি ঠিকানা লিখুন</p></span>
            @endif

        </div>
    </div>
</div>
</div>

<div
style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);"
class="_1mrl40q0 _1fragemlo _1fragem3w _1fragem5p _1fragem2s _1fragemm8 _1fragemm4 _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
>
<div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
    <div class="cektnc0 _1fragemlo cektnc5">
        <label id="TextField591-label" for="TextField591" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
            <span class="cektnca">
                <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">অ্যাপার্টমেন্ট, সুইট, ইত্যাদি (ঐচ্ছিক)</span>
            </span>
        </label>
        <div
            class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh"
        >
            <input
                id="TextField591"
                name="address2"
                placeholder="অ্যাপার্টমেন্ট, সুইট, ইত্যাদি (ঐচ্ছিক)"
                type="text"
                aria-required="false"
                aria-labelledby="TextField591-label"
                value="{{old('address2')}}"
                autocomplete="shipping address-line2"
                class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
            />
        </div>
    </div>
</div>
</div>


<div
style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);"
class="_1mrl40q0 _1fragemlo _1fragem3w _1fragem5p _1fragem2s _1fragemm8 _1fragemm4 _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
>
<div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
    <div class="cektnc0 _1fragemlo cektnc5">
        <label id="TextField592-label" for="TextField592" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
            <span class="cektnca">
                <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">শহর</span>
            </span>
        </label>
        <div
            class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh"
        >
            <input
                id="TextField592"
                name="city"
                placeholder="শহর"
                required
                type="text"
                aria-required="true"
                aria-labelledby="TextField592-label"
                value="{{old('city')}}"
                autocomplete="shipping address-level2"
                class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
            />
        </div>
    </div>

    @if($errors->has('city'))
    <span><p id="error-for-email" class="ksaxnz0 _1fragemn5">একটি শহর লিখুন</p></span>
    @endif
</div>

<div class="hDo51">
    <div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
        <div class="cektnc0 _1fragemlo cektnc5">
            <label id="TextField593-label" for="TextField593" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
                <span class="cektnca">
                    <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">পোস্টাল কোড (ঐচ্ছিক)</span>
                </span>
            </label>
            <div
                class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh"
            >
                <input
                    id="TextField593"
                    name="postalCode"
                    placeholder="পোস্টাল কোড (ঐচ্ছিক)"
                    required
                    type="text"
                    inputmode="numeric"
                    aria-required="true"
                    aria-labelledby="TextField593-label"
                    value="{{old('postalCode')}}"
                    autocomplete="shipping postal-code"
                    autocapitalize="characters"
                    class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
                />
            </div>
        </div>
    </div>
</div>
</div>

<div
style="--_16s97g7a: minmax(0, 1fr); --_16s97g7k: minmax(auto, max-content); --_16s97g71e: minmax(0, 1fr); --_16s97g71o: minmax(auto, max-content);"
class="_1mrl40q0 _1fragemlo _1fragem3w _1fragem5p _1fragem2s _1fragemm8 _1fragemm4 _16s97g7f _16s97g7p _16s97g71j _16s97g71t"
>
<div class="_7ozb2u2 _7ozb2u1 _1fragem3c _1fragem55 _1fragemlo _1fragem2s _10vrn9p1 _10vrn9p0 _10vrn9p4 _7ozb2u4 _7ozb2u3 _1fragemng">
    <div class="cektnc0 _1fragemlo cektnc5">
        <label id="TextField594-label" for="TextField594" class="cektnc3 cektnc1 _1fragemle _1fragems7 _1fragemt0 _1fragemsm _1fragemsh _1fragemsw _1fragemsx">
            <span class="cektnca">
                <span class="rermvf1 rermvf0 _1fragemjv _1fragemk5 _1fragem1y">ফোন</span>
            </span>
        </label>
        <div
            class="_7ozb2u6 _7ozb2u5 _1fragemlo _1fragem2s _1fragemnq _1fragemsm _1fragemsh _1fragemsw _1fragemsz _7ozb2uc _7ozb2ua _1fragemng _1fragemt5 _7ozb2ul _7ozb2uh"
        >
            <input
                id="TextField594"
                name="phone"
                placeholder="ফোন"
                required
                type="tel"
                aria-required="true"
                aria-labelledby="TextField594-label"
                value="{{old('phone')}}"
                autocomplete="tel"
                class="_7ozb2uq _7ozb2up _1fragemlo _1fragemt0 _1fragemok _1fragems6 _7ozb2ut _7ozb2us _1fragemsm _1fragemsh _1fragemsw _7ozb2u11 _7ozb2u1h _7ozb2ur"
            />
        </div>
    </div>

    @if($errors->has('phone'))
    <span><p id="error-for-email" class="ksaxnz0 _1fragemn5">একটি ফোন নম্বর লিখুন</p></span>
    @endif
</div>
</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3w _1fragem5p _1fragem2s">
                                                    <h3 class="n8k95w1 n8k95w0 _1fragemlo n8k95w3">শিপিং পদ্ধতি</h3>
                                                    <div class="jHvVd">
                                                        <div>
                                                            <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem46 _1fragem5z _1fragem2s">
                                                                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3m _1fragem5f _1fragem2s">
                                                                    <div class="sqcDF">
                                                                        <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem4v _1fragem6o _1fragem2s">
                                                                            <fieldset id="shipping_methods">
                                                                                <legend class="_1fragems8">একটি শিপিং পদ্ধতি নির্বাচন করুন</legend>
                                                                                <div class="yyi4nyd yyi4nyf yyi4nyg">
                                                                                    <div class="yyi4nyi yyi4nyj yyi4nyk yyi4nym yyi4nyq yyi4nyo _1fragemng _1fragemt5">
                                                                                        <div class="yyi4nyv yyi4nyu _1fragemlo _1fragem2s _1fragem5k yyi4nyy _1fragemnp yyi4nyz yyi4ny12 yyi4ny10 yyi4ny11 _1fragemnh _1fragemt5 yyi4ny1g yyi4nyw yyi4nyx">
                                                                                            <div class="_6hzjvo2 _1fragemlo">
                                                                                                <input
                                                                                                type="radio"
                                                                                                id="inside_dhaka"
                                                                                                name="shipping_methods"
                                                                                                class="_6hzjvo4 _6hzjvo3 _1fragemnp _1fragem1y _1fragemsm _1fragemsg _1fragemst _6hzjvo8
                                                                                                 _6hzjvo6 _1fragemt5"
                                                                                                value="{{get_option('dhaka_in_price','')}}"
                                                                                                checked 
                                                                                                />
                                                                                            </div>
                                                                                            <div>
                                                                                                <label
                                                                                                    for="inside_dhaka"
                                                                                                    data-option-selected="true"
                                                                                                    class="yyi4ny15 _1fragemnp"
                                                                                                >
                                                                                                    <div class="_1fragem1y _1fragemlo Is9PW"><p class="_1tx8jg70 _1fragemlo _1tx8jg71a _1tx8jg71q">ঢাকা সিটি ভিতর</p></div>
                                                                                                </label>
                                                                                                <div></div>
                                                                                            </div>
                                                                                            <div><strong translate="no" class="_19gi7yt0 _19gi7ytg _19gi7ytf _1fragemo1 _19gi7yt19 _19gi7yt1x notranslate">৳{{get_option('dhaka_in_price','')}}</strong>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="yyi4nyi yyi4nyj yyi4nyk yyi4nym yyi4nyq yyi4nyo _1fragemng _1fragemt5">
                                                                                        <div class="yyi4nyv yyi4nyu _1fragemlo _1fragem2s _1fragem5k yyi4nyy _1fragemnp yyi4nyz yyi4nyw yyi4nyx">
                                                                                            <div class="_6hzjvo2 _1fragemlo">
                                                                                                <input
                                                                                                    type="radio"
                                                                                                    id="outside_dhaka"
                                                                                                    name="shipping_methods"
                                                                                                    class="_6hzjvo4 _6hzjvo3 _1fragemnp _1fragem1y _1fragemsm _1fragemsg _1fragemst _6hzjvo8 _6hzjvo6 _1fragemt5"
                                                                                                    value="{{get_option('dhaka_out_price','')}}"
                                                                                                />
                                                                                            </div>
                                                                                            <div>
                                                                                                <label
                                                                                                    for="outside_dhaka"
                                                                                                    data-option-selected="false"
                                                                                                    class="yyi4ny15 _1fragemnp"
                                                                                                >
                                                                                                    <div class="_1fragem1y _1fragemlo Is9PW"><p class="_1tx8jg70 _1fragemlo _1tx8jg71a _1tx8jg71q">ঢাকার বাহিরে</p></div>
                                                                                                </label>
                                                                                                <div></div>
                                                                                            </div>
                                                                                            <div><strong translate="no" class="_19gi7yt0 _19gi7ytg _19gi7ytf _1fragemo1 _19gi7yt19 _19gi7yt1x notranslate">৳{{get_option('dhaka_out_price','')}}</strong></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem3w _1fragem5p _1fragem2s">
                                                    <button type="submit" class="_1m2hr9ge _1m2hr9gd _1fragemsx _1fragemlo _1fragemnp _1fragem2i _1fragemsq _1fragemss _1fragemsh _1m2hr9g1j _1m2hr9g1f _1fragemnj _1m2hr9g18 _1m2hr9g15 _1fragemsg _1fragems5 _1m2hr9g1s _1m2hr9g1q _1m2hr9g12 _1m2hr9gz _1m2hr9g14 _1m2hr9g13 _1fragemrp _1m2hr9g1d _1m2hr9g1b _1fragemsc" tabindex="-1">জমা দিন</button>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                        <div class="_1fragem1y _1fragemlo gfFXW">
                            <div class="_16s97g74v _16s97g760"></div>
                        </div>
                    </div>
                </div> 
                
            </div>
           
        </form>
    </div>
</main>

@include('include.c-footer')
