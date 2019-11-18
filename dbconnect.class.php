
<?php 
class basededonnees {
    private $dbhost= 'localhost' ;
    private $dbname='dsi2x';
    private $dbuser='root';
    private $dbpwd='';
    public $conn = null ;  
    public function connectdb()
    {
try {   $this->conn = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpwd); 
} catch(PDOException $e) 
{ die('Erreur : '.$e->getMessage());   }
return $this->conn ;
}
}