<?php
class Servicio extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Servicios';
        $data['subtitle'] = 'Nuestros servivios';
        $this->views->getView('principal/servicios/index', $data);
    }
}
