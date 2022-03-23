<x-layout>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h1>
            <p>By <a href="#">{{$post->author->username}}</a>
               in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </p>
            <div>
                {{$post->excerpt}}
            </div>
        </article>
    <?php endforeach; ?>
</x-layout>
