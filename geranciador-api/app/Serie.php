<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model{
    protected $fillable = [
        "name", "description", "user_id"
    ];

    protected $table = "serie";

    protected $appends = [
        "links"
    ];

    public function getLinksAttribute(){
        return [
            "self" => "/serie/{$this->id}",
            "episodes" => "/serie/{$this->id}/episodes"
        ];
    }

}