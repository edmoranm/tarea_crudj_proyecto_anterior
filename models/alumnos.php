<?php
require_once 'conexion.php';

class alumno extends Conexion
{
    public $alum_id;
    public $alum_nombre;
    public $alum_apellido;
    public $alum_grado;
    public $alum_arma;
    public $alum_nacionalidad;
    public $alum_situacion;


    public function __construct($args = [])
    {
        $this->alum_id = $args['alum_id'] ?? null;
        $this->alum_nombre = $args['alum_nombre'] ?? '';
        $this->alum_apellido = $args['alum_apellido'] ?? '';
        $this->alum_grado = $args['alum_grado'] ?? '';
        $this->alum_arma = $args['alum_arma'] ?? '';
        $this->alum_nacionalidad = $args['alum_nacionalidad'] ?? '';
        $this->alum_situacion = $args['alum_situacion'] ?? '';

    }

      public function guardar(){
        $sql = "INSERT INTO alumnos(alum_nombre, alum_apellido, alum_grado, alum_arma, alum_nacionalidad) values ('$this->alum_nombre','$this->alum_apellido', '$this->alum_grado', '$this->alum_arma', '$this->alum_nacionalidad')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

    public function buscar()
    {
        $sql = "SELECT * from alumnos where cli_situacion = 1 ";

        if($this->alum_nombre != ''){
            $sql .= " AND alum_nombre like '%$this->alum_nombre%' ";
        }
        if($this->alum_apellido != ''){
            $sql .= " AND alum_apellido like'%$this->alum_apellido%' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE alumnos SET alum_nombre = '$this->alum_nombre', alum_apellido = '$this->alum_apellido', alum_grado = '$this->alum_grado', alum_arma = '$this->alum_arma', alum_nacionalidad = '$this->alum_nacionalidad' WHERE alum_id = $this->alum_id ";
        $resultado = $this->ejecutar($sql);
        return $resultado;
    }    
   
    public function eliminar(){
        $sql = "UPDATE alumnos SET alum_situacion = 0 WHERE alum_id = '$this->alum_id' ";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
}