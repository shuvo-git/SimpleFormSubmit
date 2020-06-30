<?php


require_once(__DIR__.'/../core/J_Model.php');

class M_model extends J_Model
{
    function __construct()
    {
        parent::__construct();
        $this->tableName = '`order`';
    }

    function createOrder($data)
    {
        return $this->create($this->tableName,$data);
    }

    function getAllOrder()
    {
        return $this->readAll($this->tableName);
    }

}

?>