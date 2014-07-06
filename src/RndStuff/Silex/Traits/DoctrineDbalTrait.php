<?php

namespace RndStuff\Silex\Traits;

use Doctrine\DBAL\Connection;

trait DoctrineDbalTrait
{
    /**
     * @param null $name
     * @return Connection
     */
    public function getDb($name = null)
    {
        if($name === null) {
            return $this['db'];
        }
        return $this['dbs'][$name];
    }
} 