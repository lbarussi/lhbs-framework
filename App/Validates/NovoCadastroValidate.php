<?php
    namespace App\Validates;
    class NovoCadastroValidate{
        public static function validateAuth(){
            try{
                $validates  = [
                    'nome' => 'Informe seu nome!',
                    'nascimento' => 'Informe sua data de nascimento!',
                    'sexo' => 'Selecione seu sexo!',
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
?>