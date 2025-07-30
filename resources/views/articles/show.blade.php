<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
        <p><em>Published on: {{ $article->created_at->format('d M Y') }}</em></p>
        <a href="{{ route('articles.index') }}" class="btn btn-primary">Back to Articles</a>
    </div>
    
    <p><a href="{{ route('articles.edit', $article->id) }}">Modifier</a></p>
    
    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Supprimer cet article ?')">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
</body>
</html>
