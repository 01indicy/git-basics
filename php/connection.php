<?php
    class Connection {
        private $host;
        private $user;
        public function __construct($db_host,$db_user){
               $this->host = $db_host;
               $this->user = $db_user;
        }
    }

    $connect = new Connection("localhost","root");