<?php

class ConnectionManager {

    public function connect() {
        $user = 'root';
        $password = '2X5ucs9bjf?';
        $db = 'cashout';
        $host = 'localhost';
        $port = 3306;
        
        // Create connection
        $conn = new PDO("mysql:host=$host;dbname=$db;port=$port", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if fail, exception will be thrown

        // Return connection object
        return $conn;
    }

}