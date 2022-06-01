<?php

    namespace Boissons;

    class Expresso implements \App\Boisson {

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