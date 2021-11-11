<?php
namespace MVC;
use MVC\Request;
use MVC\Router;
class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        // echo '<pre>';
        // var_dump($this->request);
        $controller = "MVC\Controllers\\".$this->request->controller."Controller";
        // // echo $controller;
        // // $something = new $controller();
        // return $something;
        return new $controller;
    }

}
?>