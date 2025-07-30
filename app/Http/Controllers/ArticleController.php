<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::All();
        return view('articles.index', compact('articles'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request) {
        $valideData =  $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        Article::create($valideData);

        return redirect()->route('articles.index')
            ->with('success', 'Article created successfully.');
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id) {
        $article = Article::findOrfail($id);

        $valideData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $article->update($valideData);

        return redirect()->route('articles.index')
            ->with('success', 'Article updated successfully.');
    }

    public function delete($id) {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Article deleted successfully.');
    }

    
}
