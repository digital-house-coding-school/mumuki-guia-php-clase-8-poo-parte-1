class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;
  
  public function reproducir() {
    return "Reproduciendo";
  }
  
  public function describirse() {
    return $this->titulo . ": " . $this->rating;
  }
 
  public function ratingMayorA($num) {
    return $this->rating >= $num;
  }
  
  public function getId() {
    return $this->id;
  }
  
  public function getTitulo() {
    return $this->titulo;
  }
  
  public function getRating() {
    return $this->rating;
  }
  
  public function getFechaDeEstreno() {
    return $this->fechaDeEstreno;
  }
}