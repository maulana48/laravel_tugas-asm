<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class EController extends Controller
{
    public function index(){
        $listBarang = Product::all();
        return view('E-commerce.index', [
            'title' => 'E-Commerce',
            'icon' => 'keranjang.png',
            'listB' => collect($listBarang)
        ]);
    }
    public function show($id){
        $barang = Product::find($id);
        return view('E-commerce.show', [
            'title' => 'Product Detail',
            'icon' => 'keranjang.png',
            'barang' => $barang
        ]);
    }
    public function create(){
        return view('E-commerce.create', [
            'title' => 'Add Product',
            'icon' => 'keranjang.png',
        ]);
    }
    public function store(Request $request){
        $payload = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'diskon' => $request->diskon,
        ];
        if($request->file('foto')){
            $payload['foto'] = $request->file('foto')->store('img/product', ['disk' => 'public_uploads']);
        }
        Product::create($payload);
        return redirect()->back();
    }
}
