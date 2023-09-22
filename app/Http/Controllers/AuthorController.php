<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Show page.
     *
     * @param  string  $slug
     * @return Response
     */

     public function index($slug)
     {
         $page = Page::where('slug', $slug)->firstOrFail();

         return view('template.page', ['page' => $page]);
     }
}
