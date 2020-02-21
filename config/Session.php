<?php
    namespace Config;
    use App\database\Oracle;
    class Session{
        public static function Set($param){
            try{
                self::PHPSession();
                if(is_array($param)){
                    foreach($param as $name => $value){
                        $_SESSION[$name] = $value;
                    }
                }
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function Start(){
            try{
                self::PHPSession();
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function Get($sessionName){
            try{
                self::PHPSession();

                if(isset($_SESSION[$sessionName])){
                    return $_SESSION[$sessionName];
                }

            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function GetAll(){
            try{
                self::PHPSession();
                return $_SESSION;
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function Remove($index){
            try{
                self::PHPSession();
                if(isset($_SESSION[$index])){
                    unset($_SESSION[$index]);
                }
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function CreateSession($params){
            try {
                self::PHPSession();
                if(is_array($params)){
                    $time = 30*60;
                    $_SESSION['authenticate']['loggedin_time']=time()+$time;
                    foreach($params as $name => $value){
                        $_SESSION['authenticate'][$name] = $value;
                    }
                }
            }catch (\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function CheckSession(){
            try {
                self::PHPSession();

                if(isset($_SESSION['authenticate'])){
                    if((time() - $_SESSION['authenticate']['loggedin_time']) > 30){
                        self::Remove('authenticate');
                        return false;
                    }else{
                        return true;
                    }
                }else{
                    return false;
                }
            }catch (\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        public static function UpdateSession(){
            try {
                $time = 30*60;
                $_SESSION['authenticate']['loggedin_time']=time()+$time;
            }catch (\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }

        private static function PHPSession(){
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        }
    }
?>