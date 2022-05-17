<?php

    namespace App;

    class Chocolat extends DecorateurIngredient {
        protected Boisson $boisson;

        public function __construct(Boisson $boisson) {
            $this->boisson = $boisson;
        }

        public function getDescription(): string {
            return $this->boisson->getDescription() . " Chocolat";
        }

        public function cout(): string {
            return 0.2 + $this->boisson->cout();
        }            
    }

?>