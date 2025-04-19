<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
   
    public function index(): View
    {
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 

    
    public function create(): View
    {
        return view('products.create');
    }

  
    public function store(ProductStoreRequest $request): RedirectResponse
    {
        //  $request->validated([
        //     'name'=>'required',
        //     'details'=>'required',
        //  ]);
        Product::create($request->validated());

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    }

    
    public function show(Product $product): View
    {
        return view('products.show',compact('product'));
    }

    
    public function edit(Product $product): View
    {
        return view('products.edit',compact('product'));
    }

   
    public function update(ProductUpdateRequest $request, Product $product): RedirectResponse
    {
    
        $product->update($request->validated());

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}