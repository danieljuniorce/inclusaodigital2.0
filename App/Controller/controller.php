<?php
    
    class controller{


        public function view($viewName, $viewData = array()){
            extract($viewData);
            include 'App/View/'.$viewName.'.php';
        }

        public function template($viewName, $viewData = array()){
            include 'App/View/template.php';
        }

        public function LoadViewTemplate($viewName, $viewData = array()){
            extract($viewData);
            include 'App/View/'.$viewName.'.php';
        }


    }