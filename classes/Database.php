<?php

// Database connection settings 
$onlineMode = false;  // false when run locally, put true before upload

if ($onlineMode) {
    define('DB_HOST', "studentmysql.miun.se");
    define('DB_USER', "leti1900");
    define('DB_PASSWORD', "vr5y3kdt");   
    define('DB_NAME', "leti1900");   
} 
else {
    define('DB_HOST', "localhost");
    define('DB_USER', "coursesdatab");
    define('DB_PASSWORD', "password");
    define('DB_NAME', "coursesdatab");   
}

// Class with functions for connecting to and closing connection to database
class Database{
  
    public $db;  

    public function connect() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->db->connect_errno > 0 ? die('Error when connecting to database[' . $db->connect_error . ']') : null;
        return $this->db; 
      }

    public function close() {
      $this->db->close();
    }
}

