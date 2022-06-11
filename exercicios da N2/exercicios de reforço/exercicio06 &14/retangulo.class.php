<?php

class Retangulo {

  private const TYPE_SQUARE = "Quadrado";
  private const TYPE_RECT = "Retângulo";

    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function verificaTipo() {
        if ($this->base == $this->altura) {
            return $this::TYPE_SQUARE;
        } else return $this::TYPE_RECT;
    }

    public function calculaArea() {
        return ($this->base * $this->altura);
    }

    public function calculaPerimetro() {
        return ($this->base + $this->altura)*2;
    }
}


?>