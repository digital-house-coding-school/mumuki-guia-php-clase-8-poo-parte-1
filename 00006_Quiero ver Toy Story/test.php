public function testToyStory() : void {
  global $toyStory;
  
  $this->assertTrue(isset($toyStory), 'No esta definida la variable $toyStory');
  
  $this->assertTrue($toyStory instanceof Pelicula, 'La variable $toyStory no es de tipo película');
  
  $this->assertTrue($toyStory->titulo == "Toy Story", "El titulo de Toy Story esta incorrecto");
}

public function testBuscandoANemo() : void {
  global $buscandoANemo;
  
  $this->assertTrue(isset($buscandoANemo), 'No esta definida la variable $buscandoANemo');
  
  $this->assertTrue($buscandoANemo instanceof Pelicula, 'La variable $buscandoANemo no es de tipo película');
  
  $this->assertTrue($buscandoANemo->titulo == "Buscando a Nemo", "El titulo de Buscando a Nemo esta incorrecto");
}

public function testReproduccion() : void {
  global $repToy;
  global $repNemo;

  $this->assertTrue($repToy, "Parecería que no se reprodujo Toy Story...");
  
  $this->assertTrue($repNemo, "Ey! No quería ver Buscando a Nemo!");
}