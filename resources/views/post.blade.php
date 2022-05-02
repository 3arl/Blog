<x-layout>
    <article>
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>

        <p><a href="#">{{$post->user->name}}</a> </p>

        <p >{{$post->category->name}}</p>

        <h1>{!!$post->title!!}</h1>

        <div>{!! $post->body !!}</div>

    </article>

    <a href="/">Back</a>
</x-layout>
