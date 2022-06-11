<?php

class Venda {

    const CUSTO_GALAO = 60.00;
    const LIT_GALAO = 18;
    const MET_POR_LIT = 3;
    
    
    public $metragem;

    public function __construct($metragem) {
        $this->metragem = $metragem;
    }

    private function calculaLitros() {
       return $this->metragem/$this::MET_POR_LIT;
    }

    public function calculaGaloes() {
        return ceil($this->calculaLitros()/$this::LIT_GALAO);
    }

    public function calculaCusto() {
        return $this->calculaGaloes()*$this::CUSTO_GALAO;
    }
}


?>