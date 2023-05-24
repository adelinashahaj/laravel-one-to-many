<?php

namespace App\Models;
use Illuminate\Support\Str; // <- da importare
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'slug'

    ];


    public static function generateSlug(string $title){
        return Str::slug($title, '-');

    }
}
