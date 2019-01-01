<?php

class homeController extends controller
{

    public function __construct()
    {
        session_start();
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        } else {
            header('Location: /usuarios/login');
        }
    }

    public function index()
    {

        $this->template('', 'home');
    }

}
