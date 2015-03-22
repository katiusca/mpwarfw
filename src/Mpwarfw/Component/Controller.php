<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 14/03/15
 * Time: 12:31
 */

namespace Mpwarfw\Component;
use Mpwarfw\Utils\Request;

abstract class Controller {


    abstract public function build(Request $request);

}