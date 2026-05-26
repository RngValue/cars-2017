<?php

class Db {
    private $dsn = "mysql:host=localhost;dbname=vroom";
    private $dbUsername = "root";
    private $dbPassword = "";

    protected $pdo = null;
    function get_pdo() { return $this->pdo; }

    protected function get_as_assoc(string $query) {
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement = null;
        return $results;
    }

    function __construct() {
        try {
            $this->pdo = new PDO($this->dsn, $this->dbUsername, $this->dbPassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Fucked up: " . $e.getMessage();
        }
    }

    function __destruct() {
        $this->pdo = null;
    }
}