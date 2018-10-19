public function testId(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'id'), "Falta la propiedad id");
  
  $this->assertTrue(array_key_exists("id", $props), "El id debe ser público");
}

public function testTitulo(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'titulo'), "Falta la propiedad titulo");
  
  $this->assertTrue(array_key_exists("titulo", $props), "El titulo debe ser público");
}

public function testRating(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'rating'), "Falta la propiedad rating");
  
  $this->assertTrue(array_key_exists("rating", $props), "El rating debe ser público");
}

public function testFecha(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'fechaDeEstreno'), "Falta la propiedad fechaDeEstreno");
  
  $this->assertTrue(array_key_exists("fechaDeEstreno", $props), "La fechaDeEstreno debe ser pública");
}

public function testToyStory() : void {
  global $toyStory;
  
  $this->assertTrue(isset($toyStory), 'No esta definida la variable $toyStory');
  
  $this->assertTrue($toyStory instanceof Pelicula, 'La variable $toyStory no es de tipo película');
  
  $this->assertTrue($toyStory->titulo == "Toy Story", "El titulo de Toy Story esta incorrecto");
  
  $this->assertTrue($toyStory->id == 1, "El id de Toy Story esta incorrecto");
  
  $this->assertTrue($toyStory->rating == 9.5, "El rating de Toy Story esta incorrecto");
}

public function testBuscandoANemo() : void {
  global $buscandoANemo;
  
  $this->assertTrue(isset($buscandoANemo), 'No esta definida la variable $buscandoANemo');
  
  $this->assertTrue($buscandoANemo instanceof Pelicula, 'La variable $buscandoANemo no es de tipo película');
  
  $this->assertTrue($buscandoANemo->titulo == "Buscando a Nemo", "El titulo de Buscando a Nemo esta incorrecto");
  
  $this->assertTrue($buscandoANemo->id == 2, "El id de Buscando a Nemo esta incorrecto");
  
  $this->assertTrue($buscandoANemo->rating == 8.7, "El rating de Buscando a Nemo esta incorrecto");
}