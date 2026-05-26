<?php

require_once('db-class.php');

class Car extends Db {
    protected function get_brands() {
        $results = null;
        try {
            $results = $this->get_as_assoc("SELECT DISTINCT make FROM distinct_cars;");
        } catch (PDOException $e) {
            die("Fucked up: " . $e->getMessage());
        }
        return $results;
    }

    protected function get_cars_by_brand(string $make, int $limit = 50) {
        $results = null;
        try {
            $results = $this->get_as_assoc("SELECT * FROM distinct_cars WHERE make LIKE '%" . $make . "%' ORDER BY year DESC LIMIT " . $limit . ";");
        } catch (PDOException $e) {
            die("Fucked up: " . $e->getMessage());
        }
        return $results;
    }
}