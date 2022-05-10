<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::select(['products.id', 'products.name', 'status.name as status_name', 'categories.name as category_name', 'products.img'])
            ->JOIN('status', 'products.id_status', '=', 'status.id')
            ->JOIN('categories', 'products.id_category', '=', 'categories.id')
            ->GET();

        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::select(['products.id', 'products.name', 'products.img as img', 'status.name as status_name', 'categories.name as category_name'])
            ->JOIN('status', 'products.id_status', '=', 'status.id')
            ->JOIN('categories', 'products.id_category', '=', 'categories.id')
            ->WHERE('products.id', '=', $id)
            ->GET();

        return response()->json($data, 200);
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProductCategory($id)
    {
        $data = Product::select(['products.id', 'products.name', 'status.name as status_name', 'categories.name as category_name', 'products.img'])
            ->JOIN('status', 'products.id_status', '=', 'status.id')
            ->JOIN('categories', 'products.id_category', '=', 'categories.id')
            ->WHERE('categories.id', '=', $id)
            ->GET();

        return response()->json($data, 200);
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
