<x-layout>
    <article>
        <a href="/categories/{{$post->category->slug}}">...</a>

        <p >{{$post->category->name}}</p>

        <h1>{!!$post->title!!}</h1>

        <div>{!! $post->body !!}</div>

    </article>

    <a href="/">Back</a>
</x-layout>
