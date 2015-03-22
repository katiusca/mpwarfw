<?php

namespace Mpwarfw\Component;

use Mpwarfw\Utils\Request;
use Mpwarfw\Utils\ResponseHttp;
use Mpwarfw\Utils\ResponseJson;
use Mpwarfw\Utils\Session;
use Mpwarfw\Utils\UriAnalyzer;

class Bootstrap{

    private $mode;
    private $request;

   public function __construct($mode,Request $request){

       $this->mode= $mode;
       $this->request = $request;
   }

    public function execute(){

        $routing = new Routing();
        try{
            $controller_name = $routing->getController($this->request->getUri());
            $controller = new $controller_name();
            $controller_action =UriAnalyzer::getAction($this->request->getUri());
            return $controller->$controller_action($this->request);
        }catch (\Exception $e){

            echo $e->getMessage();
        }
    }


}

