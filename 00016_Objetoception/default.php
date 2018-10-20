class Pelicula {
  private $id;
  private $titulo;
  private $genero;
  
  public function __construct($id, $titulo, $genero) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->genero = $genero;
  }
}