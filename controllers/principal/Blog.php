<?php
class Blog extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Blogs';
        $data['subtitle'] = 'Entradas';
        $this->views->getView('principal/blog/index', $data);
    }
}
