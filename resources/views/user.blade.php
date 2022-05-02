<x-layout>
    <h1 class="b-center b-white" style="position:sticky; top: 3.4rem">{{$user->name}} </h1>
    <article>

    </article>

    @foreach($categories as $category)
        <h1 class="b-center">{{$category->name}}</h1>

        @foreach ($user->posts->where('category','=',$category) as $post)
            <article>

                <h3>{{$post->title}}</h3>

                <div>
                    {{ $post->excerpt}}
                    <a href="/posts/{{$post->slug}}">...</a>
                </div>
            </article>
        @endforeach
    @endforeach
    <h1><a href="/categories">Categories</a></h1>


</x-layout>
