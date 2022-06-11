<?php

class Triangulo {

    const TYPE_EQUI = "Equilátero";
    const TYPE_ISO = "Isósceles";
    const TYPE_ESC = "Escaleno";
    
    
    private $lado1;
    private $lado2;
    private $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function verificaTriangulo() {
        if ($this->lado1 > ($this->lado2+$this->lado3)) {
            return false;
        } else
        if ($this->lado2 > ($this->lado1+$this->lado3)) {
            return false;
        } else
        if ($this->lado3 > ($this->lado1+$this->lado2)) {
            return false;
        } else return true;
    }

    public function verificaTipo() {
        if(($this->lado1 == $this->lado2)&&($this->lado2 == $this->lado3)&&($this->lado1 == $this->lado3)) {
			return($this::TYPE_EQUI);
		} else if(($this->lado1 != $this->lado2)&&($this->lado2 != $this->lado3)&&($this->lado1 != $this->lado3)) {
			return($this::TYPE_ESC);
		} else if(($this->lado1 != $this->lado2)||($this->lado2 != $this->lado3)||($this->lado1 != $this->lado3)) {
			return($this::TYPE_ISO);
		}
    }
}


?>