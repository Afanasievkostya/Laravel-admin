<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request_data = $request->only('content', 'postId', 'userId');

        $validator = Validator::make($request_data, [
            "content" => ['required', 'string', 'nullable']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->messages()
            ])->setStatusCode(422);
        }

        $comment = Comment::create([
            'content' => $request->content,
            'user_id' => $request->userId,
            'post_id' => $request->postId
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request_data = $request->only('content');

        $validator = Validator::make($request_data, [
            "content" => ['required', 'string', 'nullable']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->messages()
            ])->setStatusCode(422);
        }

        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json([
                "status" => false,
                "message" => "Autor not found"
            ])->setStatusCode(404, "Autor not found");
        }

        $comment->content = $request_data["content"];

        $comment->save();

        return redirect('/home')->with('status', 'Редактирование комментария прошло успешно!');

        // return response()->json([
        //     "status" => true,
        //     "message" => "Article is update"
        // ])->setStatusCode(200, "Article is delete");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json([
                "status" => false,
                "message" => "Autor not found"
            ])->setStatusCode(404, "Autor not found");
        }

        $comment->delete();

        return redirect()->back()->with('status', 'Удаление комментария прошло успешно!');

        // return response()->json([
        //     "status" => true,
        //     "message" => "Article is delete"
        // ])->setStatusCode(200, "Article is delete");
    }
}
