<?php

    namespace App;

    class Sumatra implements Boisson {

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