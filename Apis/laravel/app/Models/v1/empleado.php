<?php

namespace app\Models\v1;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasUUID;
    protected $table='empleado';
    protected $primarykey="id";
    //poner que el id no es incremental 
    public $incrementing=false;
    //y se debe especificar el tipo de dato
    protected $KeyTipe="string";
    protected $uuidFieldName='id';
    protected $nombre='Nombre';
    protected $apellido='Apellido';
    protected $direccion='Direccion';
    protected $dni='Dni';
    protected $telefono='Telefono';
    protected $cargo_id='cargo_id';

    function cargo(){
        return $this->belongsTo(cargo::class,"cargo_id");
    }
}   