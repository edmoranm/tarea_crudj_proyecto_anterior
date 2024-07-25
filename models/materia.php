<?php
require_once 'conexion.php';

class materia extends Conexion
{
    public $mat_id;
    public $mat_nombre;
    public $mat_situacion;


    public function __construct($args = [])
    {
        $this->mat_id = $args['mat_id'] ?? null;
        $this->mat_nombre = $args['mat_nombre'] ?? '';
        $this->mat_situacion = $args['mat_situacion'] ?? '';

    }

      public function guardar(){
        $sql = "INSERT INTO materias(mat_nombre) values ('$this->mat_nombre')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

    public function buscar()
    {
        $sql = "SELECT * from materias where mat_situacion = 1 ";

        if($this->mat_nombre != ''){
            $sql .= " AND mat_nombre like '%$this->mat_nombre%' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE materias SET mat_nombre = '$this->mat_nombre' WHERE mat_id = $this->mat_id ";
        $resultado = $this->ejecutar($sql);
        return $resultado;
    }    
   
    public function eliminar(){
        $sql = "UPDATE materias SET mat_situacion = 0 WHERE mat_id = '$this->mat_id' ";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
}