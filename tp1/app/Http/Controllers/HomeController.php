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
        return view('index', [
        'title'=> 'Organically - Crecé con nosotros',
        'services'=> $services,
        'articles'=> $articles
        ]);
    }
}
