<?php
    namespace App\Middleware;
    use Config\Session;
    use Config\Redirect;
    class MiddlewareAuth{
        public function isLogged(){
            try{
                if(!Session::CheckSession()){

                    Redirect::redirect()->route('view.login')->with('error', 'Você não esta logado!');
                }
                Session::UpdateSession();
                return true;
            }catch(\Exception $ex){
                Redirect::redirect()->route('view.login')->with('error', $ex->getMessage());
            }
        }
    }
?>