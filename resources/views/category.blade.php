<x-layout>
    <article>

        @foreach ($posts as $post)
            <article>
                <h2 class="b-center">{{$post->category->name}}</h2>

                <h1>{{$post->title}}</h1>

                <p><a href="/users/{{$post->user->slug}}">{{$post->user->name}}</a> </p>

                <div>
                    {{ $post->excerpt}}
                    <a href="/posts/{{$post->slug}}">...</a>
                </div>
            </article>
        @endforeach


    </article>

    <a href="/categories">Back</a>
</x-layout>
