<?php

class Album {
    private $artiestnaam = "";
    private $titel = "";
    private $prijs = "";
    private $cover = "";
    private $song = "";
    
    function __construct($a, $t, $p, $c, $s) {
        $this->artiestnaam = $a;
        $this->titel = $t;
        $this->prijs = $p;
        $this->cover = $c;
        $this->song = $s;
    }    
    
    public function getArtiestnaam() {
        return $this->artiestnaam;
    }
    
    public function setArtiestnaam($artiestnaam){
        $this->artiestnaam = $artiestnaam;
        
        return $this;
    }
    
    public function getTitel() {
        return $this->titel;
    }
    
    public function setTitel($titel){
        $this->titel = $titel;
        
        return $this;
    }
    
    public function getPrijs() {
        return $this->prijs;
    }
    
    public function setPrijs($prijs){
        $this->prijs = $prijs;
        
        return $this;
    }
    
    public function getCover() {
        return $this->cover;
    }
    
    public function setCover($cover){
        $this->cover = $cover;
        
        return $this;
    }
    
    public function getSong() {
        return $this->song;
    }
    
    public function setSong($song){
        $this->song = $song;
        
        return $this;
    }
}

?>