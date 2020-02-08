<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller{
    protected $entity;
    protected $validations;

    public function get(Request $request, $id = null){
        if(isset($id) && !empty($id)){
            $serie = $this->entity::find($id);
            if($serie == null){
                return response('', 204);
            }else{
                return $serie;
            }
        }else{
            if($request->has('limit') && $request->has('offset')){
                $limit = $request->get('limit');
                $offset = $request->get('offset');

                $itemsPage = 10;

                if($request->has('itensPage')){
                    $itemsPage = $request->get('itemsPage');
                }

                $series = $this->entity::offset($offset)
                                      ->limit($limit)
                                      ->paginate($itemsPage);
                                      
            }
            $series = $this->entity::paginate();
        }
    }

    public function post(Request $request){
        $this->validate($request, $this->validations);

        $serie = new $this->entity();
        $serie->fill($request->all());

        $serie->save();

        return $serie;
    }

    public function put(Request $request, $id){
        $this->validate($request, $this->validations);

        $serie = $this->entity::find($id);

        if($serie == null){
            return response('', 404);
        }

        $serie->fill($request->all());

        $serie->save();
        return $serie;
    }

    public function delete(Request $request, $id){
        $serie = $this->entity::find($id);

        if($serie == null){
            return response('', 404);
        }

        $serie->delete();
        return \response('', 204);
    }
}