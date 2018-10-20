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

public function testRating1() : void {
  $this->assertTrue(method_exists('Pelicula','ratingMayorA'), "La clase película no tiene un método ratingMayorA");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Toy Story";
  $miPeli->rating = 9.5;
  $resul = $miPeli->ratingMayorA(9.8);
  $this->assertTrue($resul === false, "El método falla con una película con rating 9.5 y consultandole si es mayor a 9.8");
}

public function testRating2() : void {
  $this->assertTrue(method_exists('Pelicula','ratingMayorA'), "La clase película no tiene un método ratingMayorA");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Toy Story";
  $miPeli->rating = 9.5;
  $resul = $miPeli->ratingMayorA(9.0);
  $this->assertTrue($resul === true, "El método falla con una película con rating 9.5 y consultandole si es mayor a 9.0");
}

public function testGetId() : void {
  $this->assertTrue(method_exists('Pelicula','getId'), "La clase película no tiene un método getId");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Toy Story 2";
  $miPeli->rating = 7.6;
  $miPeli->id = 10;
  $miPeli->fechaDeEstreno = "2000-10-10";
  
  $resul = $miPeli->getId();
  
  $this->assertTrue($resul === 10, "El método getId no retorna el id de la película");
}

public function testGetTitulo() : void {
  $this->assertTrue(method_exists('Pelicula','getTitulo'), "La clase película no tiene un método getTitulo");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Toy Story 2";
  $miPeli->rating = 7.6;
  $miPeli->id = 10;
  $miPeli->fechaDeEstreno = "2000-10-10";
  
  $resul = $miPeli->getTitulo();
  
  $this->assertTrue($resul === "Toy Story 2", "El método getTitulo no retorna el titulo de la película");
}

public function testGetRating() : void {
  $this->assertTrue(method_exists('Pelicula','getRating'), "La clase película no tiene un método getRating");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Toy Story 2";
  $miPeli->rating = 7.6;
  $miPeli->id = 10;
  $miPeli->fechaDeEstreno = "2000-10-10";
  
  $resul = $miPeli->getRating();
  
  $this->assertTrue($resul === 7.6, "El método getRating no retorna el rating de la película");
}

public function testGetFechaDeEstreno() : void {
  $this->assertTrue(method_exists('Pelicula','getFechaDeEstreno'), "La clase película no tiene un método getFechaDeEstreno");
  
  $miPeli = new Pelicula();
  $miPeli->titulo = "Toy Story 2";
  $miPeli->rating = 7.6;
  $miPeli->id = 10;
  $miPeli->fechaDeEstreno = "2000-10-10";
  
  $resul = $miPeli->getFechaDeEstreno();
  var_dump($resul);exit;
  $this->assertTrue($resul === "2010-10-10", "El método getFechaDeEstreno no retorna la fecha de estreno de la película");
}