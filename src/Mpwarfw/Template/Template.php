<?php

namespace Mpwarfw\Template;

interface Template {

    public function render();

    public function assignParameters($value);

}
