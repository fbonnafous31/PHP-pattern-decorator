<?php

    namespace App;

    abstract class DecorateurIngredient implements Boisson {
        public abstract function getDescription(): string;
        public abstract function cout();
    }

?>