<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
 
    public function index()
    {
       $getproduk = Produk::all();
       return view('produk', compact('getproduk'));
    }

    public function destroy($id)
    {
        $getproduk = Produk::find($id);
        $getproduk->delete();
        return redirect()->back();
    }
}
