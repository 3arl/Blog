<x-layout>

    <h2 class="b-center"><a href="/categories">Categories</a> </h2>

    @foreach ($posts->slice(0,5) as $post)
        <article>
            <h3>{{$post->title}}</h3>

            <p><a href="/users/{{$post->user->slug}}">{{$post->user->name}}</a> </p>

{{--            <h2><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></h2>--}}
            <div>
                {!! '<p>' . $post->excerpt . '</p>' !!}

                <a href="/posts/{{$post->slug}}">....</a>
            </div>
        </article>
    @endforeach


</x-layout>
