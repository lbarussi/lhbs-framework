<?php
    namespace Config;
    use Config\Base;
    class URI{
        public function URI(){
            try{
                $uri = $_SERVER['REQUEST_URI'];
                //$uri = str_replace('//', '/', str_replace('other/framework/', '/', $uri));
                $uri = str_replace('//', '/', $uri);
                $param = strpos($uri, '?');
                if($param === false){
                    return $uri;   
                }else{
                    $uri = explode('?', $uri);
                    return $uri[0];
                }
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public function Method(){
            try{
                return $_SERVER['REQUEST_METHOD'];
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }
?>