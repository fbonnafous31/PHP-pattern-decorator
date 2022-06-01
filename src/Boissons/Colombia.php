<?php

    namespace Boissons;

    class Colombia implements \App\Boisson {

        public function __construct() {
            $this->description = "Colombia";
        }

        public function getDescription(): string {
            return $this->description;
        }

        public function cout() {
            return .89;
        }
            
    }

?>