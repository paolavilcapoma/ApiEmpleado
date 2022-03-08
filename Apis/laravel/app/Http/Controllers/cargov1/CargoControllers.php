<?php

namespace App\Http\Controllers\cargov1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cargov1\cargo;
class CargoControllers extends Controller
{

    function obtenerLista()
    {
        $cargo = cargo::all();
        return $cargo;
    }

    public function create(Request $request)
    {
        $cargo = new cargo();
        $cargo->nombre = $request->nombre;
        $cargo->descripcion = $request->descripcion;
        $cargo->save();
        $response = new \stdClass();
        $response->success = true;
        return $cargo;
        return response()->json($response, 200);
    }

    function delete($idcargo)
    {
        $response = new \stdClass();
        $response->success = true;
        
        $cargo =  cargo::find($idcargo);
       
        if ($cargo) {
            $cargo->delete();
            $response_code = 500;
            return $cargo;
        } 
        else {
            $response->error = "el cargo ya fue eliminado";
            $response->success = true;
            $response->data = $cargo;
        }
        
        return response()->json($response, 200);
    }

    function update(Request $request)
    {
        $response = new \stdClass();
        $cargo =  cargo::find($request->idcargo);
        if ($cargo) {
            $cargo->nombre = $request->nombre;
            $cargo->descripcion = $request->descripcion;
            $cargo->save();
        }
        else{
            $response->success = true;
            $response->data = $cargo;
            $response->error = "idcargo no encontrado";
        }        

        return response()->json($response, 200);
    }

    function patch(Request $request, $idcargo)
    {
        $cargo =  cargo::find($request->$idcargo);
        if ($cargo) {
            if (isset($request->nombre))         $cargo->nombre = $request->nombre;
            if (isset($request->descripcion))       $cargo->descripcion = $request->descripcion;
            if (isset($request->nombre)) $cargo->save();
        }
        $response = new \stdClass();
        $response->success = true;
        $response->data = $cargo;
        return response()->json($response, 200);
    }

    function obtenerItem($idcargo)
    {
        $cargo =  cargo::find()($idcargo)->with("cargo");
        $response = new \stdClass();
        $response->success = true;
        
      
        return $cargo;
        return response()->json($response, 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = new \stdClass();
        $cargo = cargo::all();
        $response->succes = true;
        $response->data = $cargo;
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idcargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcargo)
    {
        //
    }
}
