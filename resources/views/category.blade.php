<x-layout>
    <article>

        @foreach ($posts as $post)
            <article>
                <h1>{{$post->title}}</h1>

                <h2>{{$post->category->slug}}</h2>

                <div>
                    {{ $post->excerpt}}
                    <a href="/posts/{{$post->slug}}">...</a>
                </div>
            </article>
        @endforeach


    </article>

    <a href="/categories">Back</a>
</x-layout>
