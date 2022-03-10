<x-layout>
    <?php foreach ($posts as $post) : ?>
        <article>
            <a href="/posts/{{$post->id}}">
                {{$post->title}}
            </a>
            <div>
                {{$post->excerpt}}
            </div>
        </article>
    <?php endforeach; ?>
</x-layout>
