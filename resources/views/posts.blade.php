<x-layout>
    <h1>3ARL's BLOG</h1>

    @foreach ($posts as $post)
        <article>
            <h1>
                {{$post->title}}
            </h1>

            <div>
                {{ $post->excerpt}}
                <a href="/posts/{{$post->id}}">...</a>
            </div>
        </article>
    @endforeach
</x-layout>
