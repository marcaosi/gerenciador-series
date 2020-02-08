<?php

namespace App\Http\Controllers;

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
}