<x-layout>
    <h1>3ARL's BLOG</h1>
    <h2><a href="/categories">Categories</a> </h2>

    @foreach ($posts as $post)
        <article>
            <h1>{{$post->title}}</h1>

{{--            <h2><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></h2>--}}

            <div>
                {!! $post->excerpt !!}
                <a href="/posts/{{$post->slug}}">...</a>
            </div>
        </article>
    @endforeach
</x-layout>
