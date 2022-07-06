<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Game;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::where('is_published', 1)->paginate();

        $games = Game::online()
            ->forDashboard()
            ->paginate();

        return Inertia::render('Dashboard', [
            'articles' => $articles,
            'games' => $games,
        ]);
    }
}
