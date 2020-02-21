<?php

namespace App\Validates;

class AutenticarValidate{
    public static function validateAuth(){
        try{
            $validates  = [
                'email' => 'Informe seu email!',
                'password' => 'Informe uma senha!',
            ];

            foreach ($validates as $key => $value) {
                if(!isset($_POST[$key]) || (isset($_POST[$key]) && empty($_POST[$key]))){
                    throw new \Exception($value);
                }
            }

            return $_POST;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }
}