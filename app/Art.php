<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    public function user() {
        return $this->belongsTo(Users::class);
    }
}
