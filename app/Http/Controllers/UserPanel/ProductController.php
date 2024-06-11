<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('user.product.index',[
            'data' => $data,
            'search' => ""
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product,$id)
    {
        $data= Product::find($id);
        return  view('user.product.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = Product::query();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'LIKE', "%$searchTerm%");
        }

        $query->orderBy('name', 'asc');

        $data = $query->get();

        return view('user.product.index',[
            'data' => $data,
            'search' => $searchTerm
        ]);
    }
}
