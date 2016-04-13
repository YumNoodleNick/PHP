<?php

class Cd {
    private $albums = array();    
    
    public function voegAlbumToe($album) {
        $this->albums[] = $album;
    }    
    
    public function getAlbums() {
        return $this->albums;
    }   
    public function getCd() {
        return array("naam" => $this->naam);
    }   
    
}
?>