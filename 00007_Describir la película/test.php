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

public function testDescribirNemo() : void {
  $this->assertTrue(method_exists('Pelicula','describirse'), "La clase película no tiene un método describirse");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Buscando a Nemo";
  $miPeli->rating = 8.7;
  $resul = $miPeli->describirse();
  $this->assertTrue($resul == "Buscando a Nemo: 8.7", "El método describirse retorna '$resul' cuando se esperaba 'Buscando a Nemo: 8.7");
}

public function testDescribirToy() : void {
  $this->assertTrue(method_exists('Pelicula','describirse'), "La clase película no tiene un método describirse");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Toy Story";
  $miPeli->rating = 9.5;
  $resul = $miPeli->describirse();
  $this->assertTrue($resul == "Toy Story: 9.5", "El método describirse retorna '$resul' cuando se esperaba 'Toy Story: 9.5");
}