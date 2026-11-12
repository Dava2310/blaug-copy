<x-site-layout title="">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->author }}</p><br/>
    {{ $article->content }}<br/><br/>

    <b>Comments section:</b><br/>
    @foreach($article->comments as $comment)
        <div>
            {{$comment->created_at}}<br/>
            {{$comment->content}}<br/>
        </div>
    @endforeach
</x-site-layout>
