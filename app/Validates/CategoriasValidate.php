<?php

namespace App\Validates;

class CategoriasValidate{
    public static function validateAuth(){
        try{
            $validates  = [
                'status' => 'Selecione o status!',
                'categoria' => 'Informe um nome para a categoria!',
                'tipo' => 'Selecione o tipo da categoria!',
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