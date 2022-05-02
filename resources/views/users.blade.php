<x-layout>

    @foreach ($users as $user)

        <h1><a href="/users/{{$user->slug}}" >{{$user->name}}</a></h1>

        @foreach($user->posts->slice(0,3) as $post)
            <article>

                <h1>{{$post->title}}</h1>

                <div>
                    {!! $post->excerpt !!}
                    <a href="/posts/{{$post->slug}}">...</a>
                </div>
            </article>
        @endforeach
    @endforeach

    <a href="/">Back</a>

</x-layout>
