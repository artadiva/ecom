<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
        $data_products= \App\Products::all();
        return view('products.index',compact('data_products'));
    }
    public function create(Request $request) //Membuat function untuk create data pada tabel products
    {
        \App\Products::create($request->all());
        return redirect('/products')->with('sukses','Data berhasil dimasukkan'); //with ini berarti untuk menambahkan pesan sukses
    }
    public function edit($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        return view('products/edit', ['products' => $products]); //memanggil file edit.blade.php pada folder products dan passing value 
    }
    public function update(Request $request,$id) // parameter request untuk menangkap data dari form
    {
        $products = \App\Products::find($id);
        $products->update($request->all());
        return redirect('/products')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $products = \App\Products::find($id);
        $products->delete();
        return redirect('/products')->with('sukses','Data berhasil didelete');
    }
    public function diskon($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        return view('products/diskon', ['products' => $products]); //memanggil file edit.blade.php pada folder products dan passing value 
    }
    public function diskon_insert(Request $request)
    {
       DB::table('discounts')->insert([
        'id_product' => $request->id_product,
        'percentage' => $request->percentage,
        'start' => $request->start,
        'end' => $request->end
        ]);
       return redirect('/products')->with('sukses','Data berhasil dimasukkan');
    }
    public function gambar($id)
    {
        $products = \App\Products::find($id); //ini berarti mengambil id dan disimpan pada variabel products
        return view('products/gambar', ['products' => $products]); //memanggil file edit.blade.php pada folder products dan passing value 
    }
}
