<?php
class PrincipalModel extends Query{
    private $con;
    public function __construct() {
        parent:: __construct();
    }

    public function getSliders(){
        
        return $this->selectAll("SELECT * FROM sliders");
    }

    public function getHabitaciones(){

        return $this->selectAll("SELECT * FROM habitaciones");

    }

    public function getDisponible($f_llegada, $f_salida, $habitacion){
        return $this->selectAll("SELECT * FROM reservas 
        WHERE fecha_ingreso <= '$f_salida' 
        AND fecha_salida >= '$f_llegada' AND id_habitacion = $habitacion;
        ");
    }

}
?>