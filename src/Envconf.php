<?php

class Envconf {
    public function __construct() {
        foreach (get_object_vars($this) as $name => $value) {
            $envVar = getenv(strtoupper($name));
            if($envVar) {
                if(is_array($value)) {
                    $this->{$name} = explode("|", $envVar);
                } else {
                    $this->{$name} = $envVar;
                }
            }
        }
    }
}
