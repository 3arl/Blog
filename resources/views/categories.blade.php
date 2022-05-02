<x-layout>

    @foreach ($categories as $category)

        <h1 class="b-center"><a href="/categories/{{$category->slug}}" >{{$category->name}}</a> </h1>

        @foreach($category->posts->slice(0,3) as $post)
            <article>
                <h1>{{$post->title}}</h1>

                <p><a href="/users/{{$post->user->slug}}">{{$post->user->name}}</a> </p>

                <div>
                    {!! $post->excerpt !!}
                    <a href="/posts/{{$post->slug}}">...</a>
                </div>
            </article>
        @endforeach

    @endforeach

</x-layout>
