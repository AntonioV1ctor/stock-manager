<?php


class Database{
    private $host = "localhost";
    private $port = "3306";
    private $user = "root";
    private $dbName = "centralstore";
    private $password = "";
    public function conectar() {
        $url = "mysql:host=$this->host;port=$this->port;dbname=$this->dbName";
        $conect = new PDO($url, $this->user, $this->password);

        return $conect ;
    }
}