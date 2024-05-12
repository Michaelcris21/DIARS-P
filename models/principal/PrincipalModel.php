<?php
class PrincipalModel extends Query{
    private $con;
    public function __construct() {
        parent:: __construct();
    }
    public function getPrueba(){
        
        return $this->select("SELECT * FROM usuarios WHERE id = 1");
    }
}
?>