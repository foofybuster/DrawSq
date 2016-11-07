<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $fillable = ['art_file', 'art_name', 'art_cat', 'art_endorse'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
