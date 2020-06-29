<?php

    require_once(__DIR__.'./database/J_Connection.php');

    class J_Model
    {
        function __construct()
        {
            $db = new J_Connection();
            $this->connection = $db->getConnection();
        }

        function create($tableName,$insertWhat){}

        function read($tableName,$args,$whereArgs){}

        function update($tableName,$whatToSet,$whereArgs){}

        function delete($tableName,$whereArgs){}

        function where($sql,$whereArgs){}
    }
?>