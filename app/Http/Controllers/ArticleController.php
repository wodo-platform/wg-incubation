<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::with('articleTags')->where('is_published', 1)->paginate();

        return Inertia::render('Articles', [
            'articles' => $articles,
        ]);
    }

    public function show(Article $article)
    {
    }
}
