<x-layout>
    <x-slot name="content">
        <h1>3ARL's BLOG</h1>

        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                </h1>

                <div>{{ $post->excerpt}}</div>
            </article>
        @endforeach
    </x-slot>
</x-layout>
