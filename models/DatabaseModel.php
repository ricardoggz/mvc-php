<?php
    class Database{
        private $host='localhost';
        private $dbname = 'books';
        private $user = 'root';
        private $password = '';
        public $connection;
        public function __construct(){
            $this->connection = new PDO(
                "mysql:host=$this->host;
                 dbname=$this->dbname",
                 $this->user,
                 $this->password
            );
        }         
    };
?>