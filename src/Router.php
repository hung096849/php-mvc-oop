<?php
namespace MVC;
class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/mvc/tasks")
        {
            $request->controller = "tasks";
            $request->action = "index";
            $request->params = [];
        }
        else if ($url == "/mvc/students"){
            
            $request->controller = "students";
            $request->action = "index";
            $request->params = [];
        }
        else if ($url == "/mvc/"){
            $request->controller = "students";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }

    }
}
?>