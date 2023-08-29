<?php

class EntryDTO {
    
    protected $id;
    protected $titre;
    protected $lastname;
    protected $date;
    protected $pensee;
    
    public function __construct($array) {
        $this->id = $array['id'];
        $this->titre=$array['titre'];
        $this->date=$array['date'];
        $this->pensee=$array['pensee'];
    }
    
    public function display() {
        echo "<article>";
        echo "<h1>". $this->titre . "</h1>";
        echo "<p class='date'>". (new Date($this->date))->format("d/m/Y") . "</p>";
        echo "<p class='pensee'>" . $this->pensee . "</p>";
        echo "</article><br/>";
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getPensee()
    {
        return $this->pensee;
    }

    
}

?>