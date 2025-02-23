<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Halaman List Calon Customer',
                'author'=> '~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~',
                'body' => ''
            ],
            [
                'id' => 2,
                'title' => 'Halaman Customer sudah berlangganan',
                'author'=> '~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~',
                'body' => ' '
            ]
            ];

    }

    public static function find($id){
        return Arr::first(static::all(), function($post) use ($id) {
            return $post ['id'] == $id;
        });

        if(! $post) {
            abord(404);
        }
        return $post;
    }

}



