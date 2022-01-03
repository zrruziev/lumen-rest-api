<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $user_id = Auth::id();
        return Post::where('user_id', $user_id)->orderbY('id', 'desc')->get();
    }

    public function store(Request $request) {
        $user_id = Auth::user()->id;
        try{
            $post = new Post;
            $post->title = $request->title;
            $post->body = $request->body;
            $post->user_id = $user_id;
            // $post->save();
            // return $post;
            if ($post->save()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Post created successfully'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }

    }

    public function update(Request $request, $id) {
        try{
            $user_id = Auth::id();
            $post = Post::where('id', $id)->where('user_id', $user_id)->first();
            $post->title = $request->title;
            $post->body = $request->body;
            // $post->save();
            // return $post;
            if ($post->save()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Post updated successfully'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }

    }

    public function destroy($id) {
        try{
            $user_id = Auth::id();
            $post = Post::where('id', $id)->where('user_id', $user_id)->first();
            if ($post) {
                $post->delete();
                return response()->json([
                    'status' => 'success',
                    'message' => 'Post deleted successfully'
                ]);
            }
            else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Post not found'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }
}
