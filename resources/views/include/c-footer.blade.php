
</div>
</div>


@if(session('cart'))

<div class="i4DWM _1fragemnf _1fragemnc _1fragemt5">
<div class="_4QenE">
<aside>
    <div>
        <section class="_1fragem1y _1fragemlo">
            <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem46 _1fragem5z _1fragem2s">


                <h2 class="n8k95wf _1fragems8">আপনার কার্টে কিছু আইটেম আছে</h2>
                <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem46 _1fragem5z _1fragem2s">
                    <section class="_1fragem1y _1fragemlo">
                        <div style="--_16s97g73f:40vh;" class="_1mjy8kn6 _1fragemlo _16s97g73k">
                            
                            @foreach ($carts as $item)
                            
                            <div style="--_16s97g73f:40vh;" tabindex="0" role="group" scrollBehaviour="chain" class="_1mjy8kn1 _1mjy8kn0 _1fragemlo _1fragemok _1fragem1t _1fragemel _1fragemhs _1fragemci _1fragemjl _16s97g73k _1mjy8kn4 _1mjy8kn2 _1fragemjq _1fragemk5">
                                <div class="_6zbcq520 _1fragems8">
                                    <h3 id="ResourceList99" class="n8k95w1 n8k95w0 _1fragemlo n8k95w4">শপিং কার্ট</h3>
                                </div>
                                <div role="table" aria-labelledby="ResourceList99" class="_6zbcq56 _6zbcq55 _1fragem28 _1fragemns _6zbcq5o _6zbcq5c _1fragem3w _6zbcq516">
                                    <div role="rowgroup" class="_6zbcq54 _6zbcq53 _1fragem28 _1fragemns _6zbcq51d _6zbcq51c _1fragems8">
                                        <div role="row" class="_6zbcq51f _6zbcq51e _1fragem28 _1fragemmh _1fragemok _1fragem5p">
                                            <div role="columnheader" class="_6zbcq520 _1fragems8">প্রোডাক্ট ইমেজ</div>
                                            <div role="columnheader" class="_6zbcq520 _1fragems8">বিবরণ</div>
                                            <div role="columnheader" class="_6zbcq520 _1fragems8">পরিমাণ</div>
                                            <div role="columnheader" class="_6zbcq520 _1fragems8">দাম</div>
                                        </div>
                                    </div>
                                    <div role="rowgroup" class="_6zbcq54 _6zbcq53 _1fragem28 _1fragemns">
                                        <div role="row" class="_6zbcq51i _6zbcq51h _1fragem28 _1fragem1t _6zbcq51l _6zbcq510 _6zbcq51k">
                                            <div role="cell" class="_6zbcq51z _6zbcq51y _1fragem28 _1fragemns _6zbcq51t _6zbcq51q _1fragem78 _6zbcq51o">
                                                <div style="--_16s97g746:6.4rem;" class="_1fragem1y _1fragemlo _16s97g74b">
                                                    <div class="_5uqybw0 _1fragemlo _1fragem28 _1fragem73">
                                                        <div class="_5uqybw1 _1fragem28 _1fragemkp _1fragemny _1fragem3w _1fragem5p _1fragemmf _1fragemmk _1fragem73">
                                                            <div style="--_1m6j2n30:1;" class="_1m6j2n34 _1m6j2n33 _1fragemlo _1fragemt9 _1m6j2n3a _1m6j2n39 _1m6j2n35">
                                                                <picture>
                                                                    <source media="(min-width: 0px)" srcset="{{ asset('images/' . $item['image']) }}"/>
                                                                    <img src="{{ asset('images/' . $item['image']) }}" alt="প্রোডাক্ট ইমেজ" 
                                                                         class="_1m6j2n34 _1m6j2n33 _1fragemlo _1fragemt9 _1m6j2n3a _1m6j2n39 _1m6j2n35"/>
                                                                </picture>
                                                                <div class="_1m6j2n3m _1m6j2n3l _1fragemle">
                                                                    <div class="_99ss3s1 _99ss3s0 _1fragem2n _1fragemmh _1fragem6t _99ss3s7 _99ss3s4 _99ss3s2 _1fragemi7 _1fragemge _99ss3sk _99ss3sf _1fragemp3 _1fragemp8 _1fragempi _1fragempd">
                                                                        <span class="_99ss3sm _1fragems8">পরিমাণ</span>
                                                                        <span>{{ $item['quantity'] }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="cell" style="--_16s97g73w:6.4rem;" class="_6zbcq51z _6zbcq51y _1fragem28 _1fragemns _6zbcq51u _6zbcq51r _1fragem6t _6zbcq51p _6zbcq51n _1fragemmm _6zbcq51w _1fragemnv _16s97g741">
                                                <div class="_1fragem1y _1fragemlo dDm6x">
                                                    <p class="_1tx8jg70 _1fragemlo _1tx8jg7c _1tx8jg7b _1fragemo1 _1tx8jg71a _1tx8jg71q">{{ $item['name'] }}</p>
                                                    <div class="_1ip0g651 _1ip0g650 _1fragemlo _1fragem4v _1fragem6o _1fragem2s">
                                                        <p class="_1tx8jg70 _1fragemlo _1tx8jg7a _1tx8jg79 _1fragemo0 _1tx8jg71b _1tx8jg71q">{{ $item['size'] }} / {{ $item['color'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="cell" class="_6zbcq51z _6zbcq51y _1fragem28 _1fragemns _6zbcq51u _6zbcq51r _1fragem6t _6zbcq51o _6zbcq51x">
                                                <div class="_6zbcq520 _1fragems8">
                                                    <span class="_19gi7yt0 _19gi7yt19 _19gi7yt1t">{{ $item['quantity'] }}</span>
                                                </div>
                                            </div>
                                            <div role="cell" class="_6zbcq51z _6zbcq51y _1fragem28 _1fragemns _6zbcq51u _6zbcq51r _1fragem6t _6zbcq51p _6zbcq51n _1fragemmm">
                                                <div class="_197l2oft _1fragemns _1fragemmj _1fragem28 _1fragemlo Byb5s">
                                                    <span class="_19gi7yt0 _19gi7yt19 _19gi7yt1t notranslate">৳{{ $item['price'] }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            @endforeach



                            <div aria-hidden="true" class="_1r4exbt1 _1r4exbt0 _1fragemeq _1fragemcx _1fragemim _1fragemgt _1fragemle _1fragem28 _1fragemmh _1fragemq9 _1fragems7 _1r4exbtc _1r4exbta _1fragemrq _1r4exbt8 _1r4exbt6 _1fragemr9">
                                Scroll for more items
                                <span class="a8x1wu2 a8x1wu1 _1fragemok _1fragem1t _1fragemkk _1fragemka a8x1wug a8x1wuj a8x1wuh _1fragem1y a8x1wun a8x1wul a8x1wuy">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" focusable="false" aria-hidden="true" class="a8x1wu10 a8x1wuz _1fragem1y _1fragemok _1fragemkk _1fragemka _1fragemnr">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 1.4v11.2m0 0 4.9-4.9M7 12.6 2.1 7.7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </section>
                </div>



                <div id="gift-card-field" style="height:0px;" hidden class="_94sxtb1 _94sxtb0 _1fragemjv _1fragemk5 _1fragemlo _1fragemst _94sxtbb _94sxtb4 _1fragemsg">
                    <div></div>
                </div>
                <section class="_1fragem1y _1fragemlo">
                    <div class="nfgb6p2 _1fragems8">
                        <h3 id="MoneyLine-Heading99" class="n8k95w1 n8k95w0 _1fragemlo n8k95w4">খরচের সারাংশ</h3>
                    </div>
                    <div role="table" aria-labelledby="MoneyLine-Heading99">
                        <div role="rowgroup" class="nfgb6p2 _1fragems8">
                            <div role="row">
                                <div role="columnheader">আইটেম</div>
                                <div role="columnheader">মূল্য</div>
                            </div>
                        </div>
                        <div role="rowgroup" class="nfgb6p1 nfgb6p0 _1fragem2s nfgb6p3">
                            <div role="row" class="_1qy6ue60 _1qy6ue69 _1qy6ue61 _1qy6ue67 _1qy6ue65 _1fragem3h _1fragem5a _1fragem2s">
                                <div role="rowheader" class="_1qy6ue6b">
                                    <span class="_19gi7yt0 _19gi7yt19 _19gi7yt1t">উপমোট</span>
                                </div>
                                <div role="cell" class="_1qy6ue6c">
                                    <span id="subtotal" class="_19gi7yt0 _19gi7yt19 _19gi7yt1t notranslate">৳ {{ $total }}</span>
                                </div>
                            </div>
                            <div role="row" class="_1qy6ue60 _1qy6ue6a _1qy6ue61 _1qy6ue67 _1qy6ue65 _1fragem3h _1fragem5a _1fragem2s">
                                <div role="rowheader" class="_1qy6ue6b">
                                    <div class="_5uqybw0 _1fragemlo _1fragem28 _1fragem78">
                                        <div class="_5uqybw1 _1fragem28 _1fragemkp _1fragemny _1fragem3c _1fragem55 _1fragemmd _1fragemmh _1fragem78">
                                            <span class="_19gi7yt0 _19gi7yt19 _19gi7yt1t">শিপিং</span>
                                        </div>
                                    </div>
                                </div>
                                <div role="cell" class="_1qy6ue6c">
                                    <span id="shipping" class="_19gi7yt0 _19gi7yt7 _19gi7yt1a _19gi7yt1t notranslate">শিপিং ঠিকানা দিন</span>
                                </div>
                            </div>
                            <div role="row" class="_1x41w3p1 _1x41w3p0 _1fragem2s _1fragemmh _1x41w3p2">
                                <div role="rowheader" class="_1x41w3p6">
                                    <strong class="_19gi7yt0 _19gi7ytk _19gi7ytj _1fragemo3 _19gi7yt19 _19gi7yt1x">মোট</strong>
                                </div>
                                <div role="cell" class="_1x41w3p7">
                                    <div class="_5uqybw0 _1fragemlo _1fragem28 _1fragem78">
                                        <div class="_5uqybw1 _1fragem28 _1fragemkp _1fragemny _1fragem3h _1fragem5a _1fragemmg _1fragem78">
                                            <abbr class="_1qifbzv1 _1qifbzv0 _1fragemsc">
                                                <span class="_19gi7yt0 _19gi7yte _19gi7ytd _1fragemo0 _19gi7yt1a _19gi7yt1t notranslate">BDT</span>
                                            </abbr>
                                            <strong id="total" class="_19gi7yt0 _19gi7ytk _19gi7ytj _1fragemo3 _19gi7yt19 _19gi7yt1x notranslate">৳</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                

                
            </div>
        </section>
    </div>
</aside>
</div>
</div>

@endif

</div>
</div>
<div id="PortalHost"></div>
</div>
</div>
<div id="forwarding-external-new-window-message" aria-hidden="true" class="rij0560 _1fragems8">Opens external website in a new window.</div>
<div id="forwarding-new-window-message" aria-hidden="true" class="rij0560 _1fragems8">Opens in a new window.</div>
<div id="forwarding-external-message" aria-hidden="true" class="rij0560 _1fragems8">Opens external website.</div>
<div role="status" class="_14u2r6s0 _1fragems8"></div>
<div role="alert" class="_14u2r6s0 _1fragems8"></div>
<!--SSR APP RENDER SUCCESS-->
</div>

<script>

document.addEventListener('DOMContentLoaded', function () {
    const shippingMethods = document.querySelectorAll('input[name="shipping_methods"]');
    const subtotalElement = document.getElementById('subtotal');
    const shippingElement = document.getElementById('shipping');
    const totalElement = document.getElementById('total');

    // Extract the initial subtotal value (remove currency symbol and commas)
    const subtotal = parseFloat(subtotalElement.innerText.replace('৳', '').replace(',', ''));

    // Function to update shipping and total prices
    function updatePrices(shippingCost) {
        const total = subtotal + shippingCost; // Calculate total
        shippingElement.innerText = `৳${shippingCost.toFixed(2)}`;
        totalElement.innerText = `৳${total.toFixed(2)}`;
    }

    // Set default shipping method (Inside Dhaka City)
    const defaultShippingMethod = document.querySelector('input[name="shipping_methods"]:checked');
    if (defaultShippingMethod) {
        const defaultShippingCost = parseFloat(defaultShippingMethod.value);
        updatePrices(defaultShippingCost); // Update prices with default shipping cost
    }

    // Add event listeners for shipping method changes
    shippingMethods.forEach(method => {
        method.addEventListener('change', function () {
            const shippingCost = parseFloat(this.value); // Get selected shipping cost
            updatePrices(shippingCost); // Update prices
        });
    });
});

</script>



<script>
(function() {
var hasPersistedData = localStorage.getItem('__ui') != null;
if (hasPersistedData)
return;

var skeleton = document.querySelector('.LoadingShell');

if (skeleton) {
skeleton.addEventListener('transitionend', function afterSkeletonFade() {
skeleton.remove();
}, {
once: true
});
}

document.body.classList.remove('Loading');
if (performance.mark) {
try {
performance.mark('checkout:visible', {
detail: {
devtools: {
dataType: 'marker',
color: 'primary-dark',
tooltipText: 'The critical elements of checkout are visible to the buyer'
}
}
});
} catch (err) {}
}
}
)();
</script>
<script>
(function() {
var location = new URL(window.location);

["amazonCheckoutSessionId", "promiseId", "amazon_cancelled"].forEach(function(paramName) {
location.searchParams.delete(paramName);
});

window.history.replaceState(null, document.title, location);
}
)();
</script>
<script>
Object.defineProperty(window, Symbol.for('Shopify.checkout.htmlAvailable'), {
value: true,
writable: true,
configurable: true,
enumerable: false,
});
document.dispatchEvent(new Event('checkout:htmlavailable'));
</script>
</body>
</html>
