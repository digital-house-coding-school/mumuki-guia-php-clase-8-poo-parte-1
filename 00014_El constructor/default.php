class Pelicula {
  private $id;
  private $titulo;
  private $rating;
  private $fechaDeEstreno;
  
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
  
  public function setId($id) {
    $this->id = $id;
  }
  
  public function setTitulo($titulo) {
    $this->titulo = $titulo;
  }
  
  public function setRating($rating) {
    if ($rating > 10) {
      $this->rating = 10;
    } else if ($rating < 0) {
      $this->rating = 0;
    } else {
      $this->rating = $rating;
     }
  }
  
  public function setFechaDeEstreno($fechaDeEstreno) {
     $this->fechaDeEstreno = $fechaDeEstreno;
  }
}