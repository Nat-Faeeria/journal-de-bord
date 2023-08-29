<?php

class EntryDAO {
    
    protected $db;
    protected $servername;
    protected $dbname;
    protected $username;
    protected $password;
    
    public function __construct() {
        (new DotEnv(__DIR__ . '/.env'))->load();
        $this->servername = getenv('DB_HOST');
        $this->dbname = getenv('DB_NAME');
        $this->username = getenv('DB_USER');
        $this->password = getenv('DB_PASSWORD');
    }
    
    public function connect(){
        $this->db = new mysqli($this->servername,$this->username, $this->password, $this->dbname);
        if ($this->db->connect_error){
            die("Connection failed: " . $this->db->connect_error);
        }
    }
    
    public function getEntries(){
        $this->connect();
        $results = $this->db->query("SELECT id, titre, dateEcriture, pensee FROM Entries");
        $entries = [];
        while($line = $results->fetch_assoc()){
            $entries[]=new EntryDTO($line);
        }
        $this->db = null;
        return $entries;
    }

    public function addEntry($array) {
        $this->connect();
        $this->db->query("INSERT INTO Entries(titre, dateEcriture, pensee) VALUES ('" . $array["titre"] . "','" . $array["date"] ."','" . $array["pensee"] . "');");
    }
}
