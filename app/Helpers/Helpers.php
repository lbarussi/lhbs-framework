<?php

namespace App\Helpers;

class Helpers{
    public static function validaCPF($cpf = null) {
        if(empty($cpf)) {
            return false;
        }

        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        if (strlen($cpf) != 11) {
            return false;
        }

        else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            return false;

        } else {

            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }

    public static function validaData($data){
        try{
            if ( strlen($data) < 8){
                return false;
            }else{
                if(strpos($data, "/") !== FALSE){
                    $partes = explode("/", $data);
                    $dia = $partes[0];
                    $mes = $partes[1];
                    $ano = isset($partes[2]) ? $partes[2] : 0;

                    if (strlen($ano) < 4) {
                        return false;
                    } else {
                        if (checkdate($mes, $dia, $ano)) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }else{
                    return false;
                }
            }
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function formataDataUS($data){
        try{
            if ($data == "") return null;
            $corrige = explode("/", $data);
            $corrige = $corrige[2]."-".$corrige[1]."-".$corrige[0];
            return $corrige;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function formataDataBR($data){
        try{
            if ($data == "") return "";
            $corrige = explode("-",$data);
            $corrige = $corrige[2]."/".$corrige[1]."/".	$corrige[0];
            return $corrige;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function extracDateFromTimeUS($data){
        try{
            if ($data == "") return "";
            $ano = explode(" ",$data);
            $corrige = $ano[0];
            return $corrige;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function convertDateTimeBRFromUS($data){
        try{
            if ($data == "") return "";
            $corrige = explode("-",$data);
            $ano = explode(" ",$corrige[2]);
            $corrige = $ano[0]."/".$corrige[1]."/".	$corrige[0]." - ".$ano[1];
            return $corrige;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function extractTimeFromDateUS($data){
        try{
            if ($data == "") return "";
            $corrige = explode("-",$data);
            $ano = explode(" ",$corrige[2]);
            $corrige = $ano[1];
            return $corrige;
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public static function parseArray($collection){
        try{
            return json_decode(json_encode($collection), true);
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage);
        }
    }

    public static function numbersOnly($element){
        try{
            return preg_replace("/[^0-9]/", "",$element);
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage);
        }
    }

    public static function convertMoneyToUS($value){
        try{
            $valor = str_replace('R$', '', str_replace(' ', '', str_replace(',', '.', str_replace('.', '', $value))));
            if(empty($valor) || $valor == null){
                $valor='0.00';
            }
            return $valor;
        }catch (\Exception $ex){
            throw new \Exception($ex->getMessage);
        }
    }
}