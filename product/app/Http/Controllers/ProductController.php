<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return \view( 'addProduct' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $products = DB::table( 'products' )->get();
        return view( 'viewProduct' )->with( "productList", $products );
    }

    public function productList() {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        if ( $request->has( 'image' ) ) {
            $file = $request->file( 'image' );
            $extention = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $file_name = time() . '.' . $extention;

            if ( $extention == "png" || $extention == "jpg" || $extention == "jpge" ) {
                if ( $size < 4000000 ) {
                    if ( $file->move( 'upload', $file_name ) ) {
                        DB::table( 'products' )->insert( [
                            "name"  => $request->name,
                            'price' => $request->price,
                            'image' => $file_name,
                        ] );
                        return \redirect()->route( 'product.create' );
                    }
                } else {
                    echo "File size less than 4Mb";
                }
            } else {
                echo "png,jpg,jpge file are alllow";
            }
        } else {
            echo "File not found";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        $product = DB::table( 'products' )->find( $id );
        return \view( 'details' )->with( 'product', $product );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        $product = DB::table( 'products' )->find( $id );
        return \view( 'edit' )->with( 'product', $product );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {

        DB::table( 'products' )
            ->where( 'id', $id )
            ->update( [
                "name"  => $request->name,
                'price' => $request->price,
            ] );
        return \redirect()->route( 'product.create' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        $product = DB::table( 'products' )->where( 'id', $id )->delete();
        return \redirect()->route( 'product.create' );
    }

    public function delete( $id ) {
        $product = DB::table( 'products' )->where( 'id', $id )->delete();
        return \redirect()->route( 'product.create' );
    }
}
