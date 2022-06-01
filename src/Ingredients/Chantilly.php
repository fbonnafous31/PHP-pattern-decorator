<?php

    namespace Ingredients;

    class Chantilly extends \App\DecorateurIngredient {
        protected \App\Boisson $boisson;

        public function __construct(\App\Boisson $boisson) {
            $this->boisson = $boisson;
        }

        public function getDescription(): string {
            return $this->boisson->getDescription() . " Chantilly";
        }

        public function cout(): string {
            return 0.1 + $this->boisson->cout();
        }            
    }

?>