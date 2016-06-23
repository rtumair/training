<?php

class App
{
    protected $controller = 'StudentController';
    protected $method = 'index';
    protected $param = [];
    public function __construct()
    {
        $url = $this->parseUrl();
//        print_r($url);
        if (file_exists('../app/controllers/'. $url[0] .'Controller'.'.php')) {
            $this->controller = $url[0].'Controller';
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->controller.'.php';
//        echo $this->controller;
        $this->controller = new $this->controller();
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->param = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->param);
    }
    public function parseUrl()
    {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
//            print_r($url);
        }
    }
}