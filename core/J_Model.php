<?php

    require_once(__DIR__.'./database/J_Connection.php');

    class J_Model
    {
        function __construct()
        {
            $db = new J_Connection();
            $this->connection = $db->getConnection();
        }

        function create($table,$data)
        {
            $fields = $values = array();

            foreach ($data as $key => $val)
            {
                $fields[] = "`".$key."`";
                $values[] = "\"".$val."\"";
            }

            $sql = $this->_insert($table, $fields, $values);

            if ($this->connection->query($sql) === TRUE)
                return true;
            else return false;
            
        }

        protected function _insert($table, $keys, $values)
        {
            return 'INSERT INTO '.$table.' ('.implode(', ', $keys).') VALUES ('.implode(', ', $values).')';
        }

        function readAll($tableName)
        {
            $sql = "SELECT * FROM ".$tableName;
            $result = mysqli_query($this->connection, $sql);

            if (mysqli_num_rows($result) > 0) 
            {
                $i=0;
                while($row = mysqli_fetch_assoc($result)) 
                {
                    $out[$i++] = $row;
                }
                return $out;
            } 
            else 
            {
                return NULL;
            }

        }

        //function update($tableName,$whatToSet,$whereArgs){}

        //function delete($tableName,$whereArgs){}

        //function where($sql,$whereArgs){}
    }
?>