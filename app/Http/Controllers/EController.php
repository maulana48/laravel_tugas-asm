<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File; 

class EController extends Controller
{
    public function index(){
        $listBarang = Product::all();
        return view('E-commerce.index', [
            'title' => 'E-Commerce',
            'icon' => 'keranjang.png',
            'listB' => $listBarang
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
        $rules = [
            'nama' => 'required|max:255',
            'harga' => 'required',
            'diskon' => 'required',
            'foto' => 'required',
        ];
        $payload = $request->validate($rules);
        if($payload['foto']){
            $payload['foto'] = $request->file('foto')->store('img/product', ['disk' => 'public_uploads']);
        }
        Product::create($payload);
        return redirect()->route('ec.index');
    }

    public function edit(Product $product){
        return view('E-commerce.edit', [
            'title' => 'Edit Product',
            'icon' => 'keranjang.png',
            'barang' => $product
        ]);
    }

    public function update(Request $request, Product $product){
        $rules = [
            'nama' => 'required|max:255',
            'harga' => 'required',
            'diskon' => 'required'
        ];
        $payload = $request->validate($rules);
        if($request->foto){
            $payload['foto'] = $request->file('foto')->store('img/product', ['disk' => 'public_uploads']);
        }
        $product->update($payload);
        return redirect()->route('ec.index');
    }

    public function destroy(Request $request, Product $product){
        File::delete(public_path('uploads/csv/img.png'));
        $product->delete();
        return redirect()->route('ec.index');
    }
}
