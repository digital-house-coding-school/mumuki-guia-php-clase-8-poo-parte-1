class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;
  public $reproducida = false;
  
  public function reproducir() {
    $this->reproducida = true;
    return "Reproduciendo";
  }
}

