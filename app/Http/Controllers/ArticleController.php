<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(2);

        return view('articles.index', [
            'articles' => $articles,
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
        ]);
        // simpan data artikel ke database
        Article::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'content' => request('content')
        ]);
        // redirect ke route dengan nama articles.index
        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
        ]);
    }

    public function update(Article $article)
    {
        $article->update([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect()->route('articles.index');
    }
}
