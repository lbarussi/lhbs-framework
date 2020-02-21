<?php
    namespace Config;
    use Config\Session;
    class Request{
        public static function request(){
            $instance = new static();
            return $instance;
        }

        public static function flashback(){
            try{
                $data = array('old' => $_REQUEST);
                Session::Set($data);
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }
?>