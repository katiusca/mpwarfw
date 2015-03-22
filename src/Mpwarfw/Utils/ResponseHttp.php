<?php

namespace Mpwarfw\Utils;
use Mpwarfw\Template\TemplateSmarty;
use Mpwarfw\Template\TemplateTwig;

class ResponseHttp  extends Response {

    public function send()
    {

        if ($this->statusCode != parent::STATUS_CODE) {

            return header("HTTP/1.0 404 Not Found");
        }else{
            return $this->getContent();
        }
    }
}

