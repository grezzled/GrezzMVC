<?php
require_once '../app/config/db.php';

class Database extends db
{
    private static $instance;
    private  $connection;

    public static function getInstance()
    {
        if (!self::$instance)
            self::$instance = new self();
        return self::$instance;
    }

    function __construct()
    {
        parent::__construct();
        $this->connection = $this->dbConnect();
    }

    // Prevent duplication of connection
    function __clone()
    {
        // TODO: Implement __clone() method.
    }

    function dbConnect()
    {
        $conf = new db();
        $con = mysqli_connect($conf->serverName, $conf->userName, $conf->passCode, $conf->dbName);
        if(mysqli_connect_errno())
            die("Database connection failed : ".mysqli_connect_errno());

        return $con;
    }

    function getConnection(){
        return $this->connection;
    }
}