<?php

namespace Newestindustry\Envconf;

class Envconf {

    public function __construct() {
        foreach (get_object_vars($this) as $name => $prop) {
            $envVar = getenv(strtoupper($name));
            if($envVar !== "") {

            }
        }
    }
}
