<?php
require_once 'conexion.php';

class alumno extends Conexion
{
    public $not_id;
    public $not_alumno;
    public $not_materia;
    public $not_puntos;
    public $not_resultado;
    public $not_situacion;


    public function __construct($args = [])
    {
        $this->not_id = $args['not_id'] ?? null;
        $this->not_alumno = $args['not_alumno'] ?? '';
        $this->not_materia = $args['not_materia'] ?? '';
        $this->not_puntos = $args['not_puntos'] ?? '';
        $this->not_resultado = $args['not_resultado'] ?? '';
        $this->not_situacion = $args['not_situacion'] ?? '';

    }

      public function guardar(){
        $sql = "INSERT INTO notas(not_alumno, not_materia, not_puntos, not_resultado) values ('$this->not_alumno','$this->not_materia', '$this->not_puntos', '$this->not_resultado')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

    public function buscar()
    {
        $sql = "SELECT * from notas where not_situacion = 1 ";

        if($this->not_alumno != ''){
            $sql .= " AND not_alumno like '%$this->not_alumno%' ";
        }
        if($this->not_materia != ''){
            $sql .= " AND not_materia like'%$this->not_materia%' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE notas SET not_alumno = '$this->not_alumno', not_materia = '$this->not_materia', not_puntos = '$this->not_puntos', not_resultado = '$this->not_resultado' WHERE not_id = $this->not_id ";
        $resultado = $this->ejecutar($sql);
        return $resultado;
    }    
   
    public function eliminar(){
        $sql = "UPDATE notas SET not_situacion = 0 WHERE not_id = '$this->not_id' ";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

    public function promedio($not_id)
    {
        $sql = "SELECT AVG(not_puntos) as promedio FROM notas WHERE not_alumno = $not_id AND not_situacion = '1'";

        $resultado = self::servir($sql);
        return $resultado;
    }

}

