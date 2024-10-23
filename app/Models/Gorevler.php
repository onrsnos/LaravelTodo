<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gorevler extends Model
{
    //

    protected $table = "gorevler";

    protected $fillable = [

        'name',
        'description',
        'status'

    ];

    
}
