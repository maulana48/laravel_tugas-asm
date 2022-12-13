<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File; 

class ProductController extends Controller
{
    public function index(){
        $listBarang = Product::all();
        return response()->json([
            'status' => true,
            'message' => 'Data product didapatkan',
            'data' => $listBarang
        ]);
    }
    public function show($id){
        $barang = Product::find($id);

        if(!$barang){
            return response()->json([
                'status' => true,
                'message' => 'Product tidak ditemukan',
                'data' => null
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data product didapatkan',
            'data' => $barang
        ]);
    }
    public function create(){
        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => null
        ]);
    }
    public function store(Request $request){
        $payload = $request->all();

        if($payload['foto']){
            $payload['foto'] = $request->file('foto')->store('img/product', ['disk' => 'public_uploads']);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'Foto barang tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['nama']){
            return response()->json([
                'status' => false,
                'message' => 'Nama barang tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['harga']){
            return response()->json([
                'status' => false,
                'message' => 'Harga barang tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['diskon']){
            return response()->json([
                'status' => false,
                'message' => 'Diskon barang tidak valid',
                'data' => null
            ]);
        }

        $barang = Product::create($payload);

        return response()->json([
            'status' => true,
            'message' => 'Product berhasil ditambahkan',
            'data' => $barang
        ]);
    }

    public function edit(Product $product){
        return response()->json([
            'status' => true,
            'message' => 'Success',
            'data' => null
        ]);
    }

    public function update(Request $request, $id){
        $payload = $request->all();

        if($request->file('foto')){
            $payload['foto'] = $request->file('foto')->store('img/product', ['disk' => 'public_uploads']);
        }
        
        if(!$payload['nama']){
            return response()->json([
                'status' => false,
                'message' => 'Nama barang tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['harga']){
            return response()->json([
                'status' => false,
                'message' => 'Harga barang tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['diskon']){
            return response()->json([
                'status' => false,
                'message' => 'Diskon barang tidak valid',
                'data' => null
            ]);
        }

        $barang = Product::find($id);
        
        if(!$barang){
            return response()->json([
                'status' => true,
                'message' => 'Barang tidak ditemukan',
                'data' => null
            ]);
        }

        $barang = $barang->update($payload);
        return response()->json([
            'status' => true,
            'message' => 'Data barang berhasil diupdate',
            'data' => $barang
        ]);
    }

    public function destroy(Request $request, $id){
        $barang = Product::find($id);

        File::delete(public_path($barang->foto));

        $barang = $barang->delete();


        return response()->json([
            'status' => true,
            'message' => 'Data barang berhasil dihapus',
            'data' => $barang
        ]);
    }
}
