<?php

namespace App\Http\Controllers;

class EpisodeController extends BaseController
{
    
    function __construct(){
        $this->entity = \App\Episode::class;
        $this->validations = [
            "name" => "required|string",
            "resume" => "required|string",
            "description" => "required|string",
            "duration" => "required|integer",
            "watch" => "required|boolean",
            "number" => "required|integer",
            "season" => "required|integer",
            "serie_id" => "required|integer"
        ];
    }
}