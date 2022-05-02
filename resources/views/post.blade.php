<x-layout>
    <article>
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>

        <p><a href="/users/{{$post->user->slug}}">{{$post->user->name}}</a> </p>

        <h1>{!!$post->title!!}</h1>

        <div>{!! '<p>' . $post->body . '</p>' !!}</div>

    </article>


</x-layout>
