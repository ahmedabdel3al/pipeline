<?php

namespace App;

class Pipe
{
    protected $line = [];
    protected $via;
    public function line($class)
    {
        array_push($this->line, $class);
        return $this;
    }
    public function process($payload)
    {

        foreach ($this->line as $line) {

            $payload =  $this->via ? call_user_func([$line, $this->via], $payload) : $line($payload);
        }
        return $payload;
    }
    public function via($method)
    {
        $this->via = $method;
        return $this;
    }
}
