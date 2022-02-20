<?php
class db
{
    protected $connection;

    public function setconnection()
    {
        try {
            $this->connection = new PDO("mysql:host=localhost; dbname=library_managment", "root", "");
            //echo "connected";
        } catch (PDOException $e) {
            echo "Error";
        }
    }
}
