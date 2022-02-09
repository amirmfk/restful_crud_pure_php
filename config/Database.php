<?php

class Database
{
    private $host = '';
    private $dbname = 'myblog';
    private $username = '';
    private $password = '';
    private $conn;


    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error". $e->getMessage();
        };

        return $this->conn;
    }
}