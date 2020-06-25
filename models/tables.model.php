<?php

class AdopcionModelClass{
    public $id_adopcion;
    public $id_persona;
    public $id_mascota;
    public $fecha_adopcion;
    public $anotaciones;
    public $tipo;
    public $activo;
    public $centro;
    function __construct($adopcionArray){
        $this->id_adopcion = adopcionArray['id_adopcion'];
        $this->id_persona = adopcionArray['id_persona'];
        $this->id_mascota = adopcionArray['id_mascota'];
        $this->fecha_adopcion = adopcionArray['fecha_adopcion'];
        $this->anotaciones = adopcionArray['anotaciones'];
        $this->tipo = adopcionArray['tipo'];
        $this->activo = adopcionArray['activo'];
        $this->centro = adopcionArray['centro'];
    }

}

$adopcionModelArray = array(
    'id_adopcion' => 1,
    'id_persona' => 1,
    'id_mascota' => 1,
    'fecha_adopcion' => '20200623',
    'anotaciones' => 'esta es una anotacion',
    'tipo' => 'TEMPORAL',
    'activo' => 1,
    'centro' => 'CENTRO' 
);

 $adopcionModel = json_decode(json_encode((object) $adopcionModelArray), FALSE);

$domicilioModelArray = array(
'calle' => '',
'numero_ext' => 1, 
'interior' => '', 
'colonia' => '', 
'cp' => 1, 
'municipio' => '', 
'centro' => '', 
'estado' => '',
'activo' => ''
);

$donacionModelArray = array(
    'id_donacion'=> '',
    'centro' => '', 
    'fecha_donacion' => '',
    'nombre_donante' => '', 
    'rfc' => '', 
    'id_domicilio' => '',
    'telefono' => '', 
    'correo' => '', 
    'tipo_donacion' => '', 
    'monto' => '',
    'descripcion' => '',
    'activo' => ''

);

$mascotaModelArray = array(
    'id_mascota' => '', 
    'id_rescate' => '', 
    'nombre' => '', 
    'especie' => '', 
    'detalles_especie' => '', 
    'fecha_nac' => '',
    'condicion_rescate' => '',
    'fecha_desparasitacion' => '', 
    'fecha_esterilizacion' => '', 
    'complicaciones' => '', 
    'tratamiento' => '', 
    'anotaciones' => '', 
    'estatus' => '', 
    'activo' => '', 
    'fecha_alta' => '', 
    'centro' => ''
);

$personaModelArray = array(
    'id_persona'=> '', 
    'tipo_persona'=> '', 
    'nombre'=> '',
    'apellido_paterno'=> '',
    'apellido_materno'=> '',
    'fecha_nacimiento'=> '', 
    'celular'=> '',
    'telefono'=> '',
    'correo'=> '',
    'id_domicilio'=> '',        
    'fecha_alta'=> '',        
    'activo'=> '',        
    'centro'=> ''
);

$productoModelArray = array(
    'id_producto'=> '',
    'nombre'=> '',
    'tipo'=> '',
    'unidad_medida'=> '',
    'cantidad'=> '',
    'descripcion'=> '',
    'centro'=> '',
    'activo'=> '',
    'fecha_alta'=> ''
);

$reporteModelArray = array(
    'id_reporte'=>'',
    'tipo_reporte'=>'',
    'descripcion_reporte'=>'',
    'evaluacion_reporte'=>'',
    'fecha_reporte'=>'',
    'detalles_tipo'=>'',
    'centro'=>'',
    'detalles_evaluacion'=>''
);


$rescateModelArray = array (
    'id_rescate'=>'',
    'id_persona'=>'',
    'id_domicilio'=>'',
    'fecha_rescate'=>'',
    'anotaciones'=>'',
    'centro'=>'',
    'activo'=>''
);

$usuarioModelArray = array (
    'id_usuario' => '',
    'nombre_usuario' => '',
    'password' => '',
    'centro'   => '',
    'activo'   => '',
    'fecha_alta'   => '',
    'rol'   => ''
);

$vacunaMascotaModelArray = array (
    'id_vacuna_mascota' => '',
    'id_producto' => '',
    'id_mascota' => '',
    'fecha' => '',
    'centro' => ''
);