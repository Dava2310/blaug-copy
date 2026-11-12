<x-site-layout title="{{$article->title}}">
    <div>
        <h2>{{$article->title}}</h2>
        <p>{{$article->content}}</p>
        <p>Written by {{$article->author}}</p>
    </div>

    <h2>Comments</h2>

    {{-- Comments section --}}
    @foreach($article->comments as $comment)
        <div>
            {{$comment->created_at}} <br>
            {{$comment->content}} <br> <br>
        </div>
    @endforeach

    <a href="{{route('articles.index')}}">Go back to articles</a>
</x-site-layout>
