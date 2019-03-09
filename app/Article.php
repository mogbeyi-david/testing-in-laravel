<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function scopeTrending($query)
    {
        return $query->orderBy('reads', 'desc')->get();
    }
}
