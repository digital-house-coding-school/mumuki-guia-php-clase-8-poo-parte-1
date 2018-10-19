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

public function testReproducir() : void {
  $this->assertTrue(method_exists('Pelicula','reproducir'), "La clase película no tiene un método reproducir");
  
  $miPeli = new Pelicula();
  $resul = $pelicula->reproducir();
  $this->assertTrue($resul == "Reproduciendo", "El método reproducir no retorna la palabra 'Reproduciendo'");
}