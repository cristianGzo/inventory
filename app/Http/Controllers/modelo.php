<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modelo extends Controller
{
    //
    public function create(Request $request){

        if($request->isMethod('post')){
            $request->validate([
                'name'=>'required',
            ], [
                'name.required'=>'Proporciona el model'
            ]);
            $model= new Modelo();
            $model->name=$request->input('name');
            $model->save();

            return response()->json(['sucess'=> true, 'message'=>'Creado']);
        }

    }

    public function update(Request $request, $id){
        $validate= $request->validate([
            'name'=>'required|string|max:40',
        ],[
            'name.required'=>'Indique el nuedo dato',
            'name.string'=> 'El nombre debe sre una cadena de text',
            'name.max'=>'El nombre debe tener maximo 40 caracteres.',
        ]);

        $modelo=new Modelo();
        if(!$modelo){
            return reponse()->json([
                'sucess'=> false,
                'message'=> 'No existe el modelo'
            ]);

            $modelo->name=$request->input('name');
            $modelo->save();
            return response()->json([
                'success' => true,
                'message' => 'Modelo actualizado.',
                'data' => $modelo
            ]);
        }

    }

}
