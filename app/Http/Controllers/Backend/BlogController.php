<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post\{ Post, Category };
use App\Models\User;
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::with(['user', 'category'])->latest()->paginate(5);
        return response()->json([
            'status' => true,
            'message' => 'Data posts didapatkan',
            'data' => $posts
        ]);
    }
    public function show($id){
        $post = Post::find($id);
        $latest = Post::with(['user', 'category'])->latest()->limit(3)->get();
        $i = $id - 1;
        $PVpost = Post::find($i);
        $i = $id + 1;
        $NXpost = Post::find($i);
        $user = $post->user;

        if(!$post){
            return response()->json([
                'status' => true,
                'message' => 'Postingan tidak ditemukan',
                'data' => null
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Data product didapatkan',
            'data' => [
                'post' => $post,
                'user' => $user,
                'PVpost' => $PVpost,
                'NXpost' => $NXpost,
                'latest' => $latest
            ]
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

        if($payload['image']){
            $payload['image'] = $request->file('image')->store('img/Blog', ['disk' => 'public_uploads']);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'Gambar post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['category_id']){
            return response()->json([
                'status' => false,
                'message' => 'Category post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['user_id']){
            return response()->json([
                'status' => false,
                'message' => 'Author post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['title']){
            return response()->json([
                'status' => false,
                'message' => 'Title post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['slug']){
            return response()->json([
                'status' => false,
                'message' => 'Slug post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['body']){
            return response()->json([
                'status' => false,
                'message' => 'Text post tidak valid',
                'data' => null
            ]);
        }

        $payload['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        $post = Post::create($payload);

        return response()->json([
            'status' => true,
            'message' => 'Post berhasil ditambahkan',
            'data' => $post
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

        if($payload['image']){
            $payload['image'] = $request->file('image')->store('img/Blog', ['disk' => 'public_uploads']);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'Gambar post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['category_id']){
            return response()->json([
                'status' => false,
                'message' => 'Category post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['user_id']){
            return response()->json([
                'status' => false,
                'message' => 'Author post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['title']){
            return response()->json([
                'status' => false,
                'message' => 'Title post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['slug']){
            return response()->json([
                'status' => false,
                'message' => 'Slug post tidak valid',
                'data' => null
            ]);
        }
        
        if(!$payload['body']){
            return response()->json([
                'status' => false,
                'message' => 'Text post tidak valid',
                'data' => null
            ]);
        }

        $post = Post::find($id)->update($payload);

        return response()->json([
            'status' => true,
            'message' => 'Data post berhasil diupdate',
            'data' => $post
        ]);
    }

    public function destroy(Request $request, $id){
        $post = Post::find($id);

        File::delete(public_path($post->image));

        $post = $post->delete();


        return response()->json([
            'status' => true,
            'message' => 'Data post berhasil dihapus',
            'data' => $post
        ]);
    }
}
