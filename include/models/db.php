<?php
  class Db {
    
    private $uname;
    private $pass;
    private $host;
    private $dbname;

    protected function connect() {
      $this->host = "n3plcpnl0118.prod.ams3.secureserver.net";
      $this->uname = "Bornelu";
      $this->pass = "Gitgud@@@123";
      $this->dbname = "Bornegrim_Labb";

      $conn = new mysqli($this->host, $this->uname, $this->pass, $this->dbname);
      return $conn;
    }
  }
