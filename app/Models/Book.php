<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'description',
        'image_url',
        'genre'
    ];

    public static function search($title=null){
        $query=self::query();
        if($title){
            $title=strtolower($title);
            $query->whereLike('title',$title)->get();
        }
        return $query;
    }
}
