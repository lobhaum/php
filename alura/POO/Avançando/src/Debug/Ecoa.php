<?php

namespace Alura\Banco\Debug;

    class Ecoa
    {
        private string $ecoa;

        public function __construct($ecoa)
        {
            $this->ecoa = $ecoa;
        }

        public function getEcoa(): string
        {
            return $this->ecoa;
        }
    }
