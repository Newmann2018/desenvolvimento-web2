<?php

class Conexao extends PDO{
    private static $instancia;

    private function __construct(){
        $dsn= 'mysql:host=localhost;dbname=adocao';
        $usuario = 'root';
        $senha = '';
        
        parent::__construct($dsn, $usuario, $senha);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstancia() {
        if (self::$instancia == null) {
            self::$instancia = new Conexao();
        }

        return self::$instancia;
    }
}
?>