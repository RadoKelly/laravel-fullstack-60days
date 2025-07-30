<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARTICLES</title>
</head>

<body>
    <p>Nombre d'article disponible: {{ $articles->count() }}</p>

    @if ($articles->isEmpty())
        <p>Pas d'article disponible pour le moment.</p>
    @else
        <div class="article-content">
            @foreach ($articles as $article)
                <h1><a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a></h1>
                <p>{{ $article->content }}</p>
            @endforeach
        </div>
    @endif

</body>

</html>
