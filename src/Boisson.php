<?php

    namespace App;
/*
    abstract class Boisson {
        private string $description = "Boisson inconnue";

        public function getDescription(): string {
            return $this->description;
        }

        public abstract function cout();
    } */
    interface Boisson {
        public function getDescription();
        public function cout();
    }

?>