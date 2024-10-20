<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return[
            [
                'id' => '1',
                'slug' => 'Judul-1',
                'title' => 'Judul 1',
                'author' => 'Muhamad Nabil',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis sit, laboriosam libero incidunt inventore aliquid sapiente. Provident minus fuga assumenda. Nulla non repellat aliquid, laboriosam qui corrupti exercitationem aut.'
            ],
            [
                'id' => '2',
                'slug' => 'Judul-2',
                'title' => 'Judul 2',
                'author' => 'Muhamad Nabil',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, iusto. Totam odit dicta quaerat iste nulla, officiis ea voluptatum dolores at iure temporibus maiores unde, eos pariatur? Laudantium, pariatur facere.'
            ]    
        ];
    }

    public static function find($slug):array{
        // return Arr::first(static::all(), function($post) use($slug){
        //     return $post['slug'] == $slug; 
        // });

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post){
            abort(404);
        }

        return $post;
    }
}