<?php

namespace App;

class AddOneStage
{
    public function handle($payload)
    {

        $payload->number += 2;
        return $payload;
    }
}
