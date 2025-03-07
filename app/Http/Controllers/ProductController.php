<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use App\Models\Products;
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
        ]);
    
        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } elseif ($request->filled('image_url')) {
            $imageName = $request->image_url;
        }
    
        // Create product
        $product = Products::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'status' => 'active',
            'slug' => Str::slug($request->name),
        ]);
    
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
        ]);
    
        // Handle Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } elseif ($request->filled('image_url')) {
            $imageName = $request->image_url;
        }
    
        // Update product
        $product = Products::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
        ]);
    
        return redirect()->route('admin.product.edit', $product->id)->with('success', 'Product updated successfully!');
    }

    //delete product
    public function delete($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.product.productHome')->with('success', 'Product deleted successfully!');
    }


    //orderStore
    //        'name',
    // 'phone',
    // 'city',
    // 'address',

    public function orderStore(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string',
        ]);
    
        // Create order
        Forms::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'city' => $request->city,
            'address' => $request->address,
            'product_id' => json_encode($request->product),
            'subtotal' => $request->subtotal,
            'total' => $request->total,
        ]);

        session(['order_placed' => true]);

    
        return redirect()->route('thank-you')->with('success', 'Order placed successfully!');
    }
    


}
