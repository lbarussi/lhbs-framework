<?php
namespace Config;
class Route{
    private static $routes = array();
    private static $groups;
    private static $mid;
    private static $method;
    private static $realRoute;
    private static $controller;
    public static function get($key, $controller){
        try{
            $base = Base::base_uri(Base::base_url());
            $group = substr(self::$groups, 0, 1) == '/' ? $base.self::$groups : $base.'/'.self::$groups;
            $key = substr($key, 0, 1) == '/' ? $key : '/'.$key;
            self::$method = 'GET';
            self::$controller = $controller;
            if(!empty(self::$groups)){
                self::$realRoute = $group.$key;
                if(!empty(self::$mid)){
                    self::$routes['GET'][self::$realRoute ] = array('middleware' => 'App\\Middleware\\'.self::$mid, 'controller' => $controller);
                }else{
                    self::$routes['GET'][self::$realRoute ] = array('controller' => $controller);
                }
            }else{
                self::$realRoute = $base.$key;
                if(!empty(self::$mid)){
                    self::$routes['GET'][self::$realRoute] = array('middleware' => 'App\\Middleware\\'.self::$mid, 'controller' => $controller);
                }else{
                    self::$routes['GET'][self::$realRoute] = array('controller' => $controller);
                }
            }

            $instance = new static();
            return $instance;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function post($key, $controller){
        try{
            $base = Base::base_uri(Base::base_url());
            if(!empty(self::$groups)){
                $group = substr(self::$groups, 0, 1) == '/' ? $base.self::$groups : $base.'/'.self::$groups;
            }

            $key = substr($key, 0, 1) == '/' ? $key : '/'.$key;
            self::$controller = $controller;
            self::$method = 'POST';
            if(!empty(self::$groups)){
                self::$realRoute = $group.$key;
                if(!empty(self::$mid)){
                    self::$routes['POST'][self::$realRoute] = array('middleware' => 'App\\Middleware\\'.self::$mid, 'controller' => $controller);
                }else{
                    self::$routes['POST'][self::$realRoute] = array('controller' => $controller);
                }
            }else{
                self::$realRoute = $base.$key;
                if(!empty(self::$mid)){
                    self::$routes['POST'][self::$realRoute] = array('middleware' => 'App\\Middleware\\'.self::$mid, 'controller' => $controller);
                }else{
                    self::$routes['POST'][self::$realRoute] = array('controller' => $controller);
                }
            }

            $instance = new static();
            return $instance;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function routes(){
        return self::$routes;
    }

    public static function prefix($group, $callback){
        try{
            self::$groups = $group;
            $callback();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function middleware($mid, $callback){
        try{
            self::$mid = $mid;
            $callback();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function name($name){
        try{
            if(!empty(self::$mid)){
                self::$routes[self::$method][self::$realRoute] = array('middleware' => 'App\\Middleware\\'.self::$mid, 'controller' => self::$controller, 'name' => $name);
            }else{
                self::$routes[self::$method][self::$realRoute] = array('controller' => self::$controller, 'name' => $name);
            }
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }
}
?>