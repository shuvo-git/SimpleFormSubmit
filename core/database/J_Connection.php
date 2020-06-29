<?php
    class J_Connection{
        function __construct()
        {
            require_once(__DIR__.'/../../config/database.php');
            $this->db_params = $db_params; 
        }

        function getConnection()
        {
            $connection = new mysqli(
                $this->db_params['host'],
                $this->db_params['username'],
                $this->db_params['password'],
                $this->db_params['dbname']
            );


            if($connection->connect_error)
                die("Connection Failed: ".$connection->connect_error);

            return $connection;

        }
    }
?>