<x-layout>
    <?php foreach ($posts as $post) : ?>
        <article>
            <a href="/posts/{{$post->slug}}">
                {{$post->title}}
            </a>
            <div>
                {{$post->excerpt}}
            </div>
        </article>
    <?php endforeach; ?>
</x-layout>
