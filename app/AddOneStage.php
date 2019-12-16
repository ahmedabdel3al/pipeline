<?php

namespace App;

class AddOneStage
{
    public function __invoke($payload)
    {
        return $payload + 2;
    }
}
