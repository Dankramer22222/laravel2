<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{



    protected $fillable
        = [
            'title',
            'slug',
            'category_id',
            'excerpt',
            'content_raw',
            'is_published',
            'published_at',
            'user_id',
        ];


}
