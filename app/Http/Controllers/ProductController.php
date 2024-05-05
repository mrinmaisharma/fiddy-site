<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products'=>$products]);
    }

    public function manageProducts()
    {
        return view('admin.manage-products');
    }

    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
            'description' => 'required',
        ]);

        $imageName = time() . '_' . $request->category . '.' . $request->image->extension();  
        $request->image->move(public_path('images/fiddy/products'), $imageName);

        Product::create([
            'image_path' => '/images/fiddy/products/' . $imageName,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')->with('success','Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id); // Assuming you're retrieving the product by its ID
        return view('your-view-name', $product);
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product'=>$product]);
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/fiddy/products'), $imageName);
            $product->update([
                'image_path' => '/images/fiddy/products/' . $imageName,
                'category' => $request->category,
                'description' => $request->description,
            ]);
        } else {
            $product->update([
                'category' => $request->category,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('products.index')->with('success','Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success','Product deleted successfully.');
    }
}
