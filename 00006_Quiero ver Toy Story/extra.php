class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;
  
  public function reproducir() {
    global $repToy;
    if ($this->titulo == "Toy Story") {
      $repToy = true;
      var_dump($repToy);
    }
    if ($this->titulo == "Buscando a Nemo") {
      $repNemo = true;
    }
  }
}