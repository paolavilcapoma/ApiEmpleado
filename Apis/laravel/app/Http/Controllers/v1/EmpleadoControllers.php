<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\v1\empleado;
class EmpleadoControllers extends Controller
{

    function obtenerLista()
    {
        $empleado = empleado::all();
        return $empleado;
    }

    public function create(Request $request)
    {
        $empleado = new empleado();
        $empleado->nombre = $request->Nombre;
        $empleado->apellido = $request->Apellido;
        $empleado->direccion = $request->Direccion;
        $empleado->dni = $request->Dni;
        $empleado->telefono = $request->Telefono;
        $empleado->fec_nacimiento = $request->Fec_nacimiento;
        $empleado->save();
        $response = new \stdClass();
        $response->success = true;
        return $empleado;
        return response()->json($response, 200);
    }

    function delete($id)
    {
        $response = new \stdClass();
        $response->success = true;
        
        $empleado =  empleado::find($id);
       
        if ($empleado) {
            $empleado->delete();
            $response_code = 500;
            return $empleado;
        } 
        else {
            $response->error = "el empleado ya fue eliminado";
            $response->success = true;
            $response->data = $empleado;
        }
        
        return response()->json($response, 200);
    }

    function update(Request $request, $id)
    {
        $empleado =  empleado::find($request->$id);
        if ($empleado) {
            $empleado->nombre = $request->nombre;
            $empleado->apellido = $request->apellido;
            $empleado->direccion = $request->direccion;
            $empleado->dni = $request->dni;
            $empleado->telefono = $request->telefono;
            $empleado->fec_nacimiento = $request->fec_nacimiento;
            $empleado->save();
        }
        $response = new \stdClass();
        $response->success = true;
        $response->data = $empleado;

        return response()->json($response, 200);
    }

    function patch(Request $request, $id)
    {
        $empleado =  empleado::find($request->$id);
        if ($empleado) {
            if (isset($request->nombre))         $empleado->nombre = $request->nombre;
            if (isset($request->apellido))       $empleado->apellido = $request->apellido;
            if (isset($request->direccion))      $empleado->direccion = $request->direccion;
            if (isset($request->dni))            $empleado->dni = $request->dni;
            if (isset($request->telefono))       $empleado->telefono = $request->telefono;
            if (isset($request->fec_nacimiento)) $empleado->fec_nacimiento = $request->fec_nacimiento;
            if (isset($request->nombre)) $empleado->save();
        }
        $response = new \stdClass();
        $response->success = true;
        $response->data = $empleado;
        return response()->json($response, 200);
    }

    function obtenerItem($id)
    {
        $response = new \stdClass();
        $response->success = true;
        
        $empleado =  empleado::find($id);
        return $empleado;
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
        $empleado = empleado::all();
        $response->succes = true;
        $response->data = $empleado;
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function destroy($id)
    {
        //
    }
}
