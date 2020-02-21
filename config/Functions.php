<?php
use Config\Route;
use Config\Redirect;
function route($route, $parameters = null){
    $url= Redirect::name($route);
    if(!empty($parameters)){
        $url = Redirect::mountParameters($url, $parameters);
    }
    return $url;
}
