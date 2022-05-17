<?php

    namespace App;

    class Caramel extends DecorateurIngredient {
        protected Boisson $boisson;

        public function __construct(Boisson $boisson) {
            $this->boisson = $boisson;
        }

        public function getDescription(): string {
            return $this->boisson->getDescription() . " Lait";
        }

        public function cout(): string {
            return 0.1 + $this->boisson->cout();
        }            
    }

?>