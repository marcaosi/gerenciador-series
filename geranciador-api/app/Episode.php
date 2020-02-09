<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model{
    protected $fillable = [
        "name", "resume", "description", "duration", "watch", "number", "season", "serie_id"
    ];

    protected $table = "episode";

    protected $appends = [
        "links", "serie"
    ];

    public function getLinksAttribute(){
        return [
            "self" => "/episode/{$this->id}"
        ];
    }

    public function getSerieAttribute(){
        return \App\Serie::find($this->serie_id);
    }
}