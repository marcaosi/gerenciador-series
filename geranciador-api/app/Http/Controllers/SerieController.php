<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends BaseController
{
    
    function __construct(){
        $this->entity = \App\Serie::class;
        $this->validations = [
            "name" => "required|string", 
            "description" => "required|string", 
            "user_id" => "required|integer"
        ];
    }

    public function getEpisodes(Request $request, $id){
        return \App\Episode::where("serie_id", "=", $id)->get();
    }
}