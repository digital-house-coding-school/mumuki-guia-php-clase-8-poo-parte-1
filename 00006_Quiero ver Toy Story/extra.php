$repToy = false;
$repNemo = false;

class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;
  
  public function reproducir() {
    global $repToy;
    global $repNemo;
    if ($this->titulo == "Toy Story") {
      $repToy = true;
    }
    if ($this->titulo == "Buscando a Nemo") {
      $repNemo = false;
    }
  }
}