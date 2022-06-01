<?php

    namespace Boissons;

    class Sumatra implements \App\Boisson {

        public function __construct() {
            $this->description = "Sumatra";
        }

        public function getDescription(): string {
            return $this->description;
        }

        public function cout() {
            return .99;
        }
            
    }

?>