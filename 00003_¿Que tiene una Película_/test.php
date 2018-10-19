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
  
  $this->assertTrue(property_exists('Pelicula', 'fecha_de_estreno'), "Falta la propiedad fecha_de_estreno");
  
  $this->assertTrue(array_key_exists("fecha_de_estreno", $props), "La fecha_de_estreno debe ser pública");
}