<?php
class db{
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    function __construct()
    {
        $this->serverName = 'localhost';
        $this->userName = 'username';
        $this->passCode = 'password';
        $this->dbName = 'database_name';
    }
}
