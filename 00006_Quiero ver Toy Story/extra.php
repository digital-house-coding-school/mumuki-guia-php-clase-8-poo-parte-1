$repToy = false;
$repNemo = false;

function repToy() {
  global $repToy;
  $repToy = true;
  var_dump($repToy);
}

function repNemo() {
  global $repNemo;
  $repNemo = true;
}

class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;
  
  public function reproducir() {
    if ($this->titulo == "Toy Story") {
      repToy();
    }
    if ($this->titulo == "Buscando a Nemo") {
      repNemo();
    }
  }
}