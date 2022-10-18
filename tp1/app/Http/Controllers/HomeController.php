<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        $articles = Article::all();
        $articlesShort = [];
        foreach($articles as $article) {
            $article->description = substr($article->description, 0, 150) . '...';
            $articlesShort[] = $article;
        }


        return view('index', [
        'title'=> 'Organically - Crecé con nosotros',
        'services'=> $services,
        'articles'=> $articlesShort
        ]);
    }
}
