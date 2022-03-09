<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post

{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        $files = File::files(resource_path("posts"));
        $posts[];

        $document = YamlFrontMatter::parseFile($file);

        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        )

    }
    public static function find($slug)
    {
        base_path();
        $path =  resource_path("posts/{$slug}.html");
        if (!file_exists($path)){
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));
    }
}
