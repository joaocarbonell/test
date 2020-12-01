<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', [

            'article'=> $article
    ]);
    }

    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.articles', [

            'articles'=> $articles
        ]);

    }

}
