<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model{
    protected $fillable = [
        "name", "resume", "description", "duration", "watch", "number", "season", "serie_id"
    ];

    protected $table = "episode";
}