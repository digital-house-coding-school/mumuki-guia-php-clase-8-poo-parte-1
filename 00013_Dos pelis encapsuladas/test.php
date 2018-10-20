public function testToyStory() : void {
  global $toyStory;
  
  $this->assertTrue(isset($toyStory), 'No esta definida la variable $toyStory');
  
  $this->assertTrue($toyStory instanceof Pelicula, 'La variable $toyStory no es de tipo película');
  
  $this->assertTrue($toyStory->getTitulo() == "Toy Story", "El titulo de Toy Story esta incorrecto");
  
  $this->assertTrue($toyStory->getTituloId() == 1, "El id de Toy Story esta incorrecto");
  
  $this->assertTrue($toyStory->getRating() == 9.5, "El rating de Toy Story esta incorrecto");
}

public function testBuscandoANemo() : void {
  global $buscandoANemo;
  
  $this->assertTrue(isset($buscandoANemo), 'No esta definida la variable $buscandoANemo');
  
  $this->assertTrue($buscandoANemo instanceof Pelicula, 'La variable $buscandoANemo no es de tipo película');
  
  $this->assertTrue($buscandoANemo->getTitulo() == "Buscando a Nemo", "El titulo de Buscando a Nemo esta incorrecto");
  
  $this->assertTrue($buscandoANemo->getId() == 2, "El id de Buscando a Nemo esta incorrecto");
  
  $this->assertTrue($buscandoANemo->getRating() == 8.7, "El rating de Buscando a Nemo esta incorrecto");
}