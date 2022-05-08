<?php

class Aluno {
    const NUM_AULAS = 36;
    const APROVADO = 'AP';
    const REPROVADO_FALTA = 'RF';
    const REPROVADO_NOTA = 'RN';

    // Declarando ATRIBUTOS
    public $nomeCompleto;
    public $n1;
    public $n2;
    public $faltas;

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
    public function nomeCompleto(){
        $this::nomeCompleto = $this->aluno['nomeCompleto'];
     }
    // - identificar sobrenome
    public function sobreNome(){
        $this::nomes = explode(' ', $this->nomeCompleto);
     }
} // FECHA CLASSE
