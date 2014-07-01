<?php

namespace RndStuff\Silex\Traits;

use Knp\Command\Command;

trait KnpConsoleTrait
{
    public function addCommand(Command $command)
    {
        $this->extend('console', function ($console) use ($command) {
            $console->add($command);
            return $console;
        });
    }
} 