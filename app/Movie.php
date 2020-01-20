<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $fillable = [
      'genre',
      'title',
      'description',
      'year',
      'image',
    ];
}
