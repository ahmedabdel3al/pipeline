<?php

namespace App;

class TimesTwoStage
{
    public function handle($payload)
    {
        $payload->number = 10;
        return $payload;
    }
}
