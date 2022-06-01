<?php

    namespace Ingredients;

    class Caramel extends \App\DecorateurIngredient {
        protected \App\Boisson $boisson;

        public function __construct(\App\Boisson $boisson) {
            $this->boisson = $boisson;
        }

        public function getDescription(): string {
            return $this->boisson->getDescription() . " Caramel";
        }

        public function cout(): string {
            return 0.15 + $this->boisson->cout();
        }            
    }

?>