<?php

namespace Mauro\PHPUnit;

class SimpleService
{
    private $simple;

    public function __construct(Simple $simple)
    {
        $this->simple = $simple;
    }

    public function dividingService($arg)
    {
        return $this->simple->divide($arg);
    }
}