<?php 

class Guru_model 
{
    private $dbh; //database handler
    private $statement;
    public function __construct(){
        // database server name
        $dsn = 'mysql:host=localhost;dbname=mvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    

    public function namaGuru(){
        $this->statement = $this->dbh->prepare("SELECT * FROM guru");
        $this->statement->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

}

