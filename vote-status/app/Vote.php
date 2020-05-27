<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function candidat()
    {
        $this->belongsTo('App\Candidat');
    }
    public function voter()
    {
        $this->belongsTo('App\Voter');
    }
}
