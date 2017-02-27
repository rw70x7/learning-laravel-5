<?php

namespace App\Http\Controllers;

use App\Article;
use App\Dog;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
       //$articless = Article::all();

       return view('articles.index');
    }

    public function show($id)
    {
        return 'wildcard';
    }

    public function create()
    {
        return view('articles.create');
    }
}
