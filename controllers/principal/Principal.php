<?php
class Principal extends Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data = $this->model->getPrueba();
        $this->views->getView('principal', 'index', $data);
    }
}
?>