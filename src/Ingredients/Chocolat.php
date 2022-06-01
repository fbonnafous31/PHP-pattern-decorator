<?php

    namespace Ingredients;

    class Chocolat extends \App\DecorateurIngredient {
        protected \App\Boisson $boisson;

        public function __construct(\App\Boisson $boisson) {
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