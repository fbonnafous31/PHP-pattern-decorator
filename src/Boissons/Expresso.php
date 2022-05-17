<?php

    namespace App;

    class Expresso implements Boisson {

        public function __construct() {
            $this->description = "Expresso";
        }

        public function getDescription(): string {
            return $this->description;
        }

        public function cout() {
            return 1.99;
        }
            
    }

?>