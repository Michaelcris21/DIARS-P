<?php
class Views
{
    public function getView($vista, $data = "")
    {
        require $vista = 'views/' . $vista . '.php';
    }
}
