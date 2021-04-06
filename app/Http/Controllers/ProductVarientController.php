<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_varient;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductVarientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product_varient::all();
        return view('admin.pages.product_variant.index', [
            'all_variant'  => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $variant = Variant::all();
        return view('admin.pages.product_variant.create', [
            'all_product' => $product,
            'all_variant' => $variant
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $feature_data = [
            'product_variant'  => $request->p_variant,
        ];



        Product_varient::create([
            'variant' => json_encode($feature_data),
            'product_id' => json_encode($request->product_id),
            'variant_id' => json_encode($request->variant_id),
        ]);


        return redirect()->route('product-variant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}