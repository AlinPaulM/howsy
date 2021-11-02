<?php
namespace App\helper;

interface DbConnection {
    public function connect();
    public function disconnect();
}

class MySQLiConnection implements DbConnection {
    protected $db;

    public function connect() {
        $this->db = new \MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->db->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->db->connect_error;
            die();
        }
        $this->db->set_charset(DB_CHARSET);
    }

    public function disconnect() {
        $this->db->close();
    }
}

class Database extends MySQLiConnection {
    protected $db;

    public function __construct() {
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }
}