<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /* Show a list of all articles. */
    public static function index()
    {
        $articles = DB::table('articles')->get();

        return view('articles.articles', ['articles' => $articles]);
    }
    
    /* Show a list of all articles. */
    public function add()
    {
       
    }
}