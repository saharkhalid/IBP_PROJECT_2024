<?php

namespace App\Http\Controllers\AdminPanel;

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
        return view('admin.product.index',[
            'data' => $data,
            'search' => ""
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->isActive = (Str::lower($request->isActive) === "true") ? true : false ;
        $data->save();
        return redirect(route('admin.product.show', ['id'=>$data->id]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product,$id)
    {
        $data= Product::find($id);
        return  view('admin.product.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $data = Product::find($id);
        return view('admin.product.edit',[
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        $data = Product::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->isActive = (Str::lower($request->isActive) === "true") ? true : false ;
        $data->save();
        return redirect(route('admin.product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $data= Product::find($id);
        $data->delete();
        return redirect(route('admin.product.index'));
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

        return view('admin.product.index',[
            'data' => $data,
            'search' => $searchTerm
        ]);
    }
}
