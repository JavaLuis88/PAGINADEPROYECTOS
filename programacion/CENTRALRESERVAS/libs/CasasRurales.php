<?php

class CasasRurales {

    public $id;
    public $ref;
    public $nombrecinto;
    public $direccion;
    public $ciudad;
    public $correorecinto;
    public $descripcion;
    public $borrado;
    public $precioahabitual;
    public $imagenes;
    
    public function __construct($id, $ref, $nombrecinto, $direccion, $ciudad, $correorecinto, $descripcion, $borrado, $precioahabitual,$imagenes) {
        $this->id = urlencode($id);
        $this->ref = urlencode($ref);
        $this->nombrecinto = urlencode($nombrecinto);
        $this->direccion = urlencode($direccion);
        $this->ciudad = urlencode($ciudad);
        $this->correorecinto = urlencode($correorecinto);
        $this->descripcion = urlencode($descripcion);
        $this->borrado = urlencode($borrado);
        $this->precioahabitual = urlencode($precioahabitual);
        $this->imagenes=$imagenes;
        
    }
    
    
 
}
?>
