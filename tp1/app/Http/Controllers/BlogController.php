<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class BlogController extends Controller
{
    //
    public function show($id)
    {
        $article = Article::find($id);
        $category = Category::find($article->category_id);
        return view('blog.show', [
            'title'=> $article->title . ' - Organically',
            'article' => $article,
            'category' => $category
        ]);
    }
}
