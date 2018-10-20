public function testId(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'id'), "Falta la propiedad id");
  
  $this->assertFalse(array_key_exists("id", $props), "El id debe ser privado");
}

public function testTitulo(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'titulo'), "Falta la propiedad titulo");
  
  $this->assertFalse(array_key_exists("titulo", $props), "El titulo debe ser privado");
}

public function testRating(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'rating'), "Falta la propiedad rating");
  
  $this->assertFalse(array_key_exists("rating", $props), "El rating debe ser privado");
}

public function testFecha(): void {
  $peli = new Pelicula();
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'fechaDeEstreno'), "Falta la propiedad fechaDeEstreno");
  
  $this->assertFalse(array_key_exists("fechaDeEstreno", $props), "La fechaDeEstreno debe ser privada");
}

public function testDescribirNemo() : void {
  $this->assertTrue(method_exists('Pelicula','describirse'), "La clase película no tiene un método describirse");
}

public function testDescribirToy() : void {
  $this->assertTrue(method_exists('Pelicula','describirse'), "La clase película no tiene un método describirse");
}

public function testRating1() : void {
  $this->assertTrue(method_exists('Pelicula','ratingMayorA'), "La clase película no tiene un método ratingMayorA");
}

public function testRating2() : void {
  $this->assertTrue(method_exists('Pelicula','ratingMayorA'), "La clase película no tiene un método ratingMayorA");
}

