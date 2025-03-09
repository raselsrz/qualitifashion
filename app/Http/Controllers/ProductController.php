<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\CustomFields;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //all products
    public function index()
    {

        $products = Products::orderBy('id', 'desc')->paginate(10);

        return view('admin.pages.product.index', compact('products'));
    }

    //add product
    public function add()
    {
        return view('admin.pages.product.add');
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_url' => 'nullable|url',
            'colors' => 'nullable|array',
            'slider_img' => 'nullable|array',
            'slider_img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'nullable|array',
        ]);
    
        // Handle Main Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } elseif ($request->filled('image_url')) {
            $imageName = $request->image_url;
        }
    
        // Create Product
        $product = Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'status' => 'active',
            'slug' => Str::slug($request->name),
            'size' => json_encode($request->size ?? []),
            'slider_data' => json_encode([]), // Initialize as empty array
        ]);


        $old_price = $request->old_price;
        if ($old_price) {
            update_field('old_price', $old_price,'price',$product->id);
        }
    
        // Handle Slider Images with Colors
        $sliderImages = $request->file('slider_img');
        $colors = $request->colors;
        $sliderData = [];
    
        if (!empty($sliderImages)) {
            foreach ($sliderImages as $index => $img) {
                $imgName = time().'_'.$index.'.'.$img->extension();
                $img->move(public_path('images'), $imgName);
    
                $sliderData[] = [
                    'color' => $colors[$index] ?? null,
                    'image' => $imgName,
                ];
            }
    
            // Update product slider_data
            $product->slider_data = json_encode($sliderData);
            $product->save();
        }
    
        return redirect()->route('admin.product.edit', $product->id)->with('success', 'Product added successfully!');
    }
    

    //edit product
    public function edit($id)
    {
        $product = Products::findOrFail($id);

    

        return view('admin.pages.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,web,svg|max:2048',
            'image_url' => 'nullable|url',
            'colors' => 'nullable|array',
            'slider_img' => 'nullable|array',
            'slider_img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'nullable|array',
        ]);

        // Find product
        $product = Products::findOrFail($id);

        // Handle Main Image Upload
        $imageName = $product->image;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } elseif ($request->filled('image_url')) {
            $imageName = $request->image_url;
        }

        // Update Product
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $imageName;
        $product->slug = Str::slug($request->name);
        $product->size = json_encode($request->size ?? []);
        $product->save();

        $old_price = $request->old_price;
        if ($old_price) {
            update_field('old_price', $old_price,'price',$product->id);
        }

        // Handle Slider Images with Colors
        $sliderImages = $request->file('slider_img');
        $colors = $request->colors;
        $sliderData = [];

        if (!empty($sliderImages)) {
            foreach ($sliderImages as $index => $img) {
                $imgName = time().'_'.$index.'.'.$img->extension();
                $img->move(public_path('images'), $imgName);

                $sliderData[] = [
                    'color' => $colors[$index] ?? null,
                    'image' => $imgName,
                ];
            }

            // Update product slider_data
            $product->slider_data = json_encode($sliderData);
            $product->save();
        }

        return redirect()->route('admin.product.edit', $product->id)->with('success', 'Product updated successfully!');
    }

    //delete product
    public function delete($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product.productHome')->with('success', 'Product deleted successfully!');
    }


    //shop page
    public function shop()
    {
        $products = Products::orderBy('id', 'desc')->paginate(12);
    
        return view('home.shop', compact('products'));
    }


    //orderStore
    //        'name',
    // 'phone',
    // 'city',
    // 'address',

    public function checkoutStore(Request $request)
    {
        // Validate input
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address1' => 'required|string',
            'address2' => 'nullable|string',
            'postalCode' => 'nullable|string',
            'shipping_methods' => 'required|numeric',
        ]);
    
        // Calculate total price from cart
        $cart = session('cart', []);
        $total = 0;
    
        foreach ($cart as $item) {
            $total += $item['total'];
        }
    
        // Add shipping cost
        $shipping_methods = $request->shipping_methods;
        $total += $shipping_methods;
    
        // Create order
        $order = Forms::create([
            'name' => $request->firstName . ' ' . $request->lastName,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address1,
            'subtotal' => array_sum(array_column($cart, 'total')), // Store subtotal separately
            'total' => $total,
            'product_id' => json_encode($cart),
        ]);
    
        // Save optional fields if provided
        if ($request->postalCode) {
            update_field('postal_code', $request->postalCode, 'postal_code', $order->id);
        }
    
        if ($request->address2) {
            update_field('address2', $request->address2, 'address2', $order->id);
        }
    
        // Store order details in session
        session(['order' => [
            'name' => $request->firstName . ' ' . $request->lastName,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address1,
            'postalCode' => $request->postalCode,
            'address2' => $request->address2,
            'email' => $request->email,
            'total' => $total,
        ]]);
    
        // Clear cart session
        session()->forget('cart');
    
        return redirect()->route('thankyou')->with('success', 'Order placed successfully!');
    }
    

    //cart
    public function cart()
    {
        $carts = session('cart', []);
    
        return view('home.cart', compact('carts'));
    }


    //cartStore
    public function cartStore(Request $request)
    {
        $product = Products::findOrFail($request->id);
        $cart = session('cart', []);
    
        $found = false; // Flag to check if the product exists in the cart
    
        foreach ($cart as &$item) {
            if ($item['product_id'] == $request->id && $item['size'] == $request->size && $item['color'] == $request->color) {
                // If product with same size and color exists, update quantity & total price
                $item['quantity'] += $request->quantity;
                $item['total'] = $item['price'] * $item['quantity'];
                $found = true;
                break;
            }
        }
    
        // If the product is new, add it to the cart
        if (!$found) {
            $cart[] = [
                'product_id' => $request->id,
                'name' => $product->name,
                'image' => $product->image,
                'size' => $request->size,
                'color' => $request->color,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'total' => $product->price * $request->quantity,
            ];
        }
    
        session(['cart' => $cart]);
    
        return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
    }

    

    //cartDelete
    public function cartDelete($id)
    {
        $cart = session('cart', []);
    
        foreach ($cart as $index => $item) {
            if ($item['product_id'] == $id) {
                unset($cart[$index]);
                break;
            }
        }
    
        session(['cart' => $cart]);
    
        return redirect()->route('cart')->with('success', 'Product removed from cart successfully!');
    }



    //checkout
    public function checkout()
    {
        //if cart is empty redirect to shop
        if (empty(session('cart', []))) {
            return redirect()->route('shop')->with('error', 'Cart is empty!');
        }



        $carts = session('cart', []);

        //get total price
        $total = 0;
        foreach ($carts as $item) {
            $total += $item['total'];
        }
    
        return view('home.checkout', compact('carts', 'total'));
    }
    

    //thankyou
    public function thankyou()
    {
        //thankyou page only if order session exists
        if (!session('order')) {
            return redirect()->route('shop')->with('error', 'Order not found!');
        }



        $carts = session('cart', []);

        //total
        $total = 0;
        foreach ($carts as $item) {
            $total += $item['total'];
        }

        $order = session('order', []);

        return view('home.thank-you', compact('carts', 'total', 'order'));
    }
    


}
