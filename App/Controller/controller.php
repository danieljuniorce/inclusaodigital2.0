<?php
class controller
{

    public function view($viewPaste, $viewName, $viewData = array())
    {
        if ($viewPaste == '') {
            include 'App/View/' . $viewName . '.php';
        } else {
            include 'App/View/'.$viewPaste.'/'. $viewName . '.php';
        }
    }

    public function template($viewPaste, $viewName, $viewData = array())
    {
        include 'App/View/template.php';
    }

    public function LoadViewTemplate($viewPaste, $viewName, $viewData = array())
    {
        extract($viewData);

        if ($viewPaste == '') {
            include 'App/View/' . $viewName . '.php';
        } else {
            include 'App/View/'.$viewPaste.'/'. $viewName . '.php';
        }

    }

}
