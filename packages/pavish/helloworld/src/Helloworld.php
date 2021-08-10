<?php

namespace Pavish\Helloworld;

class Helloworld
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}