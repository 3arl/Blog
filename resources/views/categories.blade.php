<x-layout>
    <h1>3ARL's BLOG</h1>

    @foreach ($categories as $category)

        <article>
            <h1>{{$category->name}}</h1>

            <div>
                <a href="/categories/{{$category->slug}}">...</a>
            </div>
        </article>
    @endforeach

    <a href="/">Back</a>
</x-layout>
