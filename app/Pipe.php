<?php

namespace App;

class Pipe
{
    protected $line = [];
    public function line($class)
    {
        array_push($this->line, $class);
        return $this;
    }
    public function process($payload)
    {
        foreach ($this->line as $line) {
            $payload = $line($payload);
        }
    }
}
