<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Writer;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    public function get3Article(){
    $articles = Article::with('writer')->take(3)->get();
    return view('home', compact('articles'));
}

    public function details($id){
        $article = Article::with('writer')->find($id);

        if (!$article) {
            abort(404, 'Article not found');
        }

        return view('articleDetails', compact('article'));
    }

    public function getArticleByWriter($writerId){
        $writer = Writer::findOrFail($writerId);
        $articles = Article::with('writer')->where('writer_id', $writerId)->get();
        return view('articlesByWriter', compact('writer', 'articles'));
    }

    public function getArticleByCat($cat){
        $articles = Article::with('category')->where('category_id', $cat)->get();
   
        return view('category.articleByCategory', compact('articles'));
    }

    public function pagenation(){
        $articles = Article::paginate(3);

        return view('popular', compact('articles'));
        

    }
}
