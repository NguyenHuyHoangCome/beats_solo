<?php

class dbConfig{

    private $servername = "mysql5031.site4now.net";
    private $username = "a7aa2a_hoangca";
    private $password = "hoang2001";
    private $db = "db_a7aa2a_hoangca";
    protected $conn = null;
    public function connect()
    {
        try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->db",$this->username,$this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
    
}
?>