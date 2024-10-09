<?php

class Banco {
    private $host = 'localhost';

    private $dbname = 'padaria';

    private $username = 'root';

    private $password = '';

    private $conexao;

    public function getConexao() {
        $this-> conexao = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
        return $this-> conexao;
    }

}

?>