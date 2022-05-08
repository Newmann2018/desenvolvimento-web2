<?php

class Aluno {
    const NUM_AULAS = 36;
    const APROVADO = 'AP';
    const REPROVADO_FALTA = 'RF';
    const REPROVADO_NOTA = 'RN';

    // Declarando ATRIBUTOS
    private $nomeCompleto;
    public $n1;
    public $n2;
    public $faltas;

    // MÉTODOS CONSTRUTORES
    public function __construct($nomeCompleto, $n1, $n2, $faltas) {
        $this->nomeCompleto = $nomeCompleto;
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->faltas = $faltas;
    }
    
    public function calculaMedia() {
        $media = ($this->n1 + $this->n2) / 2;
        return $media;
    }

    public function calculaFrequencia() {
        $frequencia = ($this::NUM_AULAS - $this->faltas) / $this::NUM_AULAS * 100;
        return $frequencia;
    }

    public function verificaResultado() {
        $media = $this->calculaMedia();
        $frequencia = $this->calculaFrequencia();

        if ($frequencia >= 75) {
            if ($media >= 6) {
                return $this::APROVADO;
            } else {
                return $this::REPROVADO_NOTA;
            } // FECHA IF DA MEDIA
        } else {
            return $this::REPROVADO_FALTA;
        } // FECHA IF DA FREQUENCIA
    } // FECHA FUNÇÃO

    // FAÇAM EM CASA OS DOIS MÉTODOS
    // - identificar nome
    public function identificaNome() {
        // Troca explode pelo separaNome da classe
        $nomes = $this->separaNome();
        return $nomes[0];
    }

    // - identificar sobrenome
    public function identificaSobrenome() {
        // Troca explode pelo separaNome da classe
        $nomes = $this->separaNome();
        $ultimaPosicao = count($nomes) - 1;
        return $nomes[$ultimaPosicao];
    }

    private function separaNome() {
        return explode(' ', $this->nomeCompleto);
    }
} // FECHA CLASSE
