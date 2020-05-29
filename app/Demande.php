<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRequest;
use Carbon\Carbon;

class Demande extends Model
{
    protected $guarded = [];

    protected $dates = [
        'birth_date'
    ];


}