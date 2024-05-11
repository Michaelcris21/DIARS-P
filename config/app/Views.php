<?php
class Views{
    public function getview($ruta, $vista, $data="") {
        if ($ruta == 'principal') {
            $vista = 'views/' . $vista . '.php';
        }else {
            $vista = 'views/' . $ruta . $vista . '.php';
        }
        return $vista;
    }
}
?>