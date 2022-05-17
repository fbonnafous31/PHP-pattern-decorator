<?php

    namespace App;

    class Colombia implements Boisson {

        public function __construct() {
            $this->description = "Colombia";
        }

        public function getDescription(): string {
            return $this->description;
        }

        public function cout() {
            return 1.05;
        }
            
    }

?>