<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // black list the field
    // protected $guarded = [];
    //
    // white list the field
    protected $fillable = ['user_id', 'title', 'body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
