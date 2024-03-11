<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class SearchController extends Controller
{
    public function search(Request $request) {
        $articles = Article::query();
        $search = $request->search;
        if ($search) {
            $articles->where('name', 'LIKE', '%'.$search.'%')
                    ->orWhere('description', 'LIKE', '%'.$search.'%');
        };
        $articles = $articles->get();
        return view('presentation', [ 'articles' => $articles ]);
    }
}