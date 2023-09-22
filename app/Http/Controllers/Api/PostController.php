<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function postLike(Request $request)
    {
        $data = $request->only('id', 'like');
        $post = Post::find($data['id']);

        if (!$post) {
            return response()->json([
                "status" => false,
                "message" => "Article not found"
            ])->setStatusCode(404, "Article not found");
        }

        if (isset($_POST['next'])) {
            $data["like"]++;
            $post->like = $data["like"];
            $post->save();
        }

        if (isset($_POST['rever'])) {
            $data["like"]--;
            $post->like = $data["like"];
            $post->save();
        }

        return redirect()->back();
    }
}
