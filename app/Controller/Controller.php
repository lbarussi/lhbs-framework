<?php
    use Config\Redirect;
    use Config\View;
    use Config\Response;
    use Config\Request;
    if(!function_exists('view')){
        function view($view, $masterpage = null, $data = null){
            try{
                View::view($view, $masterpage, $data);
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }

    if(!function_exists('redirect')){
        function redirect(){
            try{
                return Redirect::redirect();
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }

    if(!function_exists('response')){
        function response(){
            try{
                return Response::response();
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }

    if(!function_exists('request')){
        function request(){
            try{
                return Request::request();
            }catch(\Exception $ex){
                throw new \Exception($ex->getMessage());
            }
        }
    }



    
?>