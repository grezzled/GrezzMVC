<?php
include_once 'Database.php';

class Model extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getConnection(){
        $db  = $this->getInstance();
        $con = $db->getConnection();
        return $con;
    }
}