<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'titre',
        'extrait',
        'contenu',
        'title',
        'extraitang',
        'contenus',
        // 'imageUrl'
       
    ];
    protected $table = "services";
    public $translatable = ['title,extraitang,contenus'];
}
