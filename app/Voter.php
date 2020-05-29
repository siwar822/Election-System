<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    public function vote()
    {
        $this->belongsTo('App\Vote');
    }
}
