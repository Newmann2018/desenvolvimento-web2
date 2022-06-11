<?php

class Calculadora {
    const num1 = 'num1';
    const num2 = 'num2';
    const operacao = 'operacao';

    // Declarando ATRIBUTOS
    public $num1;
    public $num2;
    public $operacao;

    // MÉTODOS CONSTRUTORES
    public function __construct($num1,  $num2, $operacao) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operacao = $operacao;
    }
    
    public function calcula() {
        if($this->operacao == 'soma'){
            return $this->soma();
        }else if($this->operacao == 'subtrair'){
            return $this->subtrair();
        }else if($this->operacao == 'Multiplicacao'){
            return $this->Multiplicacao();
        }else{
            return $this->divisao();
        }
    
    }

    private function soma() {
        $soma = ($this->num1 + $this->num2); 
        return $soma;
    }

    private function subtrair() {
        $subtrair = ($this->num1 - $this->num2);
        return $subtrair;
    }
     private function Multiplicacao(){
         $Multiplicacao =($this->num1 * $this->num2);
         return $Multiplicacao;
     }
     private function divisao(){
         $divisao = ($this->num1/$this->num2);
         return $divisao;
     }
} 

   

    