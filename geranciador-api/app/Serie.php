<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model{
    protected $fillable = [
        "name", "description", "user_id"
    ];

    protected $table = "serie";

}