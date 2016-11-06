<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $fillable = ['art_name', 'art_file'];
    public function user() {
        return $this->belongsTo(Users::class);
    }
}
