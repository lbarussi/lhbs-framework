<?php
    namespace Config;
    Use Config\Base;
    use Config\Session;
    use Config\Route;
    class Redirect{
        private static $route;
        private static $parameters;

        public static function redirect(){
            $instance = new static();
            return $instance;
        }
        
        public static function route($where, $parameters = null){
            try{
                self::$route = $where;
                self::$parameters = $parameters;
                $instance = new static();
                return $instance;
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function with($type, $message){
            try{
                $session = array($type => $message);
                Session::Set($session);
                $realRoute = self::name(self::$route);
                $realRoute = !empty($realRoute) ? $realRoute : self::$route;
                $redirect = $realRoute;
                $parameters = null;
                if(!empty(self::$parameters)){
                    $i=0;
                    foreach(self::$parameters as $key => $value){
                        if($i == 0){
                            $parameters = '?'.$key.'='.$value;
                        }else{
                            $parameters .= '&'.$key.'='.$value;
                        }
                        
                        $i++;
                    }
                }

                header('Location: '.$redirect.$parameters);
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function only(){
            try{
                $realRoute = self::name(self::$route);
                $realRoute = !empty($realRoute) ? $realRoute : self::$route;
                $parameters = null;
                if(!empty(self::$parameters)){
                    $i=0;
                    foreach(self::$parameters as $key => $value){
                        if($i == 0){
                            $parameters = '?'.$key.'='.$value;
                        }else{
                            $parameters .= '&'.$key.'='.$value;
                        }
                        
                        $i++;
                    }
                }

                header('Location: '.$realRoute.$parameters);
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function mountParameters($url, $param){
            try {
                if(!empty($param)){
                    $i=0;
                    $parameters=null;
                    foreach($param as $key => $value){
                        if($i == 0){
                            $parameters = '?'.$key.'='.$value;
                        }else{
                            $parameters .= '&'.$key.'='.$value;
                        }

                        $i++;
                    }
                    echo $url.$parameters;
                }
            }catch (\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function name($nameRoute){
            try{
                foreach(Route::routes() as $method => $meth){
                    foreach($meth as $route => $rout){
                        foreach($rout as $name => $nam){
                            if($name == 'name' && $nam == $nameRoute){
                                return Base::baseHTTP().$route;
                            }
                        }
                    }
                }
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }
?>