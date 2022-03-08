<?php

namespace app\Models\cargov1;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    use HasUUID;
    protected $table='cargo';
    protected $primarykey="idcargo";
    //poner que el id no es incremental 
    public $incrementing=false;
    //y se debe especificar el tipo de dato
    protected $KeyTipe="string";
    protected $uuidFieldName='idcargo';
    protected $nombre='Nombre';
    protected $descripcion='descripcion';
    public function empleado(){
        return $this->hasMany(empleado::class,"cargo_id");
    }
}   