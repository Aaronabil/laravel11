<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Pages']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Muhamad Nabil'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug){
    $posts = [
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

    $post = Arr::first($posts, function($post) use($slug){
        return $post['slug'] == $slug; 
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
