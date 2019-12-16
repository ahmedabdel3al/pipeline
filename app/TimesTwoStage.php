<?php

namespace App;

class TimesTwoStage
{
    public function __invoke($payload)
    {
        return $payload * 2;
    }
}
