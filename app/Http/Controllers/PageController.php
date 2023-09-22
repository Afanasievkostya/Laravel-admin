<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use TCG\Voyager\Models\User;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class PageController extends Controller
{
    public function welcome()
    {
        $posts = DB::table('posts')->skip(2)->take(2)->get();
        $postOn = DB::table('posts')->where('id', 1)->get();
        $pages = Page::all();

        return view('welcome', ['posts' => $posts, 'postOn' => $postOn, 'pages' => $pages]);
    }

    public function addPosts()
    {
        $posts = DB::table('posts')->paginate(3);
        $chapters = Category::where('order', 1)->get();
        $categories = Category::where('order', 2)->get();


        return view('template.posts', ['posts' => $posts, 'chapters' => $chapters, 'categories' => $categories]);
    }

    public function addCategory($id)
    {
        $posts = DB::table('posts')->where('category_id', $id)->paginate(3);
        $category = Category::find($id);
        $chapters = Category::where('order', 1)->get();
        $categories = Category::where('order', 2)->get();

        return view('template.postsCategory', ['posts' => $posts, 'category' => $category, 'chapters' => $chapters, 'categories' => $categories]);
    }

    public function addPost($id)
    {
        $post = Post::find($id);
        $users = User::all();
        $comments = Comment::where('post_id', $id)->get()->reverse()->take(10);
        $sumComments = count($comments);

        return view('template.post', ['post' => $post, 'comments' => $comments, 'users' => $users, 'sumComments' => $sumComments]);
    }


    public function addAuthors()
    {
        $authors = Page::all();

       return view('template.authors', ['authors' => $authors]);
    }

    public function addRegisterCommentator() {

        return view('auth.registerCommentator');
    }

    public function addUpdeteComment($id) {

        $comment = Comment::find($id);

        return view('api.updeteComment', ['comment' => $comment]);
    }

    public function addContact() {

        return view('template.contact');
    }

}
