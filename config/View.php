<?php
    namespace Config;
    Use Config\Base;
    Use Config\Session;
    class View{
        public static function view($view, $master, $data = null){
            try{
                Session::Start();
                $base = Base::base_url();
                $old = Session::Get('old');
                include 'Functions.php';
                if(empty($master)){
                    include_once '../View/'.$view.'.php' ;
                }else{
                    include_once '../View/'.$master.'.php';
                }

                Session::Remove('old');
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }
?>