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
}