<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view("article.index");
    }

    public function show($id){
        $articlesData = json_decode(file_get_contents(public_path('js/articles.json')), true);

        $article = $articlesData[$id] ?? null;

        if (!$article) {
            abort(404);
        }

        return view('article.show', ['article' => $article]);
    }
}
