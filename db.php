<?php

class Database
{
    private $db;

    function __construct()
    {
        try {
            $this->db = new PDO("sqlite:" . __DIR__ . "/database.db");
        } catch (Exception $e) {
            echo "Unable to connect!";
            echo $e->getMessage();
            exit;
        }
    }

    function getDb()
    {
        return $this->db;
    }
}

$database = new Database();
