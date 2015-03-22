<?php


namespace Mpwarfw\Utils;


class UriAnalyzer {

    const POSITION_CONTROLLER = 1;
    const POSITION_ACTION = 2;
    const POSITION_PARAMETERS = 3;

    static public function getController($url){

        $controller = explode("/",$url)[self::POSITION_CONTROLLER];
        return $controller;
    }

    static public function getAction($url){

        $action = explode("/",$url)[self::POSITION_ACTION];
        return $action;
    }

    static public function getParameters($url){

        $parameters = array_slice(explode("/",$url), self::POSITION_PARAMETERS);
        return $parameters;
    }

    static public function compareParameters($parameters,$url){
        $parameters_method = count($parameters);
        $parameters_url = count(self::getParameters($url));
        if ($parameters_method== $parameters_url){
            return true;
        }else{
            return false;
        }

    }
}