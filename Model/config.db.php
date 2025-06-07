<?php 

class DB_Connection{
    private $host = 'localhost';
    private $db_name = 'dbinfosys';
    private $username = 'husto';
    private $password = '0730';

    protected function dbcon(){
        $dsn = "mysql:host=$this->host;dbname=$this->db_name";
        try {
            $conn = new PDO($dsn, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
            return null; //can return into 404 page
        }
    }

}



?>