<?php
    include '../vendor/autoload.php';
    use Config\Route;
    use Routes\web;
    use Config\URI;

    class index{
        private $routes;
        private $uri;
        public function __construct(){
            $this->routes = new web();
            $this->uri = new URI();
        }

        public function init(){
            $this->routes->process();
            $method = $this->uri->Method();
            $routes = Route::routes();
            $uri = $this->uri->URI();
            if(isset($routes[$method][$uri])){
                if(isset($routes[$method][$uri]['middleware'])){
                    $mid = explode('@', $routes[$method][$uri]['middleware']);
                    $midClass = $mid[0];
                    $midCall = $mid[1];
                    $middleware = new $midClass();
                    if($middleware->$midCall()){
                        $call = explode('@', $routes[$method][$uri]['controller']);
                        $controller = 'App\\Controller\\'.$call[0];
                        $reflector = new ReflectionClass($controller);
                        include_once '../App/Controller/Controller.php';
                        include_once $reflector->getFileName();
                        $metodo = new $controller();
                        $met = $call[1];
                        $metodo->$met();
                    }
                }else{
                    $call = explode('@', $routes[$method][$uri]['controller']);
                    $controller = 'App\\Controller\\'.$call[0];
                    $reflector = new ReflectionClass($controller);
                    include_once '../App/Controller/Controller.php';
                    include_once $reflector->getFileName();
                    $metodo = new $controller();
                    $met = $call[1];
                    $metodo->$met();
                }
            }else{
                include_once '../App/Controller/Controller.php';
                response()->message(404, 'Solicitação não encontrada.');
            }
            
        }
    }

    $index = new index();
    $index->init();
?>