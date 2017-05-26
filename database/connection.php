<?php
class connection {
    private $connection;
    private $host;
    private $password;
    private $username;
    private $db;

    public function __construct()
    {
        include_once 'config.php';
    }

    public function setDbConnection()
    {
        $this->connection = new mysqli($this->host,$this->username, $this->password, $this->db);

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        return $this->connection;
    }

    public function closeDbConnection()
    {
        if($this->connection) {
            mysqli_close($this->connection);
        }
    }
}