<h1>List of Articles</h1>

@foreach($articles as $article)
    <div>
        <h2>{{$article->title}}</h2>
        <p>{{$article->content}}</p>
        <p>Written by {{$article->author}}</p>
    </div>
@endforeach
