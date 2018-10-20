public function testId(): void {
  $peli = new Pelicula(1, "Test");
  var_dump($peli);
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'id'), "Falta la propiedad id");
  
  $this->assertFalse(array_key_exists("id", $props), "El id debe ser privado");
}

public function testTitulo(): void {
  $peli = new Pelicula(1, "Test");
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'titulo'), "Falta la propiedad titulo");
  
  $this->assertFalse(array_key_exists("titulo", $props), "El titulo debe ser privado");
}

public function testRating(): void {
  $peli = new Pelicula(1, "Test");
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'rating'), "Falta la propiedad rating");
  
  $this->assertFalse(array_key_exists("rating", $props), "El rating debe ser privado");
}

public function testFecha(): void {
  $peli = new Pelicula(1, "Test");
  $props = get_object_vars($peli);
  
  $this->assertTrue(property_exists('Pelicula', 'fechaDeEstreno'), "Falta la propiedad fechaDeEstreno");
  
  $this->assertFalse(array_key_exists("fechaDeEstreno", $props), "La fechaDeEstreno debe ser privada");
}

public function testDescribirNemo() : void {
  $this->assertTrue(method_exists('Pelicula','describirse'), "La clase película no tiene un método describirse");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setTitulo("Buscando a Nemo");
  $miPeli->setRating(8.7);
  $resul = $miPeli->describirse();
  $this->assertTrue($resul == "Buscando a Nemo: 8.7", "El método describirse retorna '$resul' cuando se esperaba 'Buscando a Nemo: 8.7");
}

public function testDescribirToy() : void {
  $this->assertTrue(method_exists('Pelicula','describirse'), "La clase película no tiene un método describirse");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setTitulo("Toy Story");
  $miPeli->setRating(9.5);
  $resul = $miPeli->describirse();
  $this->assertTrue($resul == "Toy Story: 9.5", "El método describirse retorna '$resul' cuando se esperaba 'Toy Story: 9.5");
}

public function testRating1() : void {
  $this->assertTrue(method_exists('Pelicula','ratingMayorA'), "La clase película no tiene un método ratingMayorA");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setRating(9.5);
  $resul = $miPeli->ratingMayorA(9.8);
  $this->assertTrue($resul === false, "El método falla con una película con rating 9.5 y consultandole si es mayor a 9.8");
}

public function testRating2() : void {
  $this->assertTrue(method_exists('Pelicula','ratingMayorA'), "La clase película no tiene un método ratingMayorA");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setRating(9.5);
  $resul = $miPeli->ratingMayorA(9.0);
  $this->assertTrue($resul === true, "El método falla con una película con rating 9.5 y consultandole si es mayor a 9.0");
}

public function testGetId() : void {
  $this->assertTrue(method_exists('Pelicula','getId'), "La clase película no tiene un método getId");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setTitulo("Toy Story 2");
  $miPeli->setRating(7.6);
  $miPeli->setId(10);
  $miPeli->setFechaDeEstreno("2000-10-10");
  
  $resul = $miPeli->getId();
  
  $this->assertTrue($resul === 10, "El método getId no retorna el id de la película");
}

public function testGetTitulo() : void {
  $this->assertTrue(method_exists('Pelicula','getTitulo'), "La clase película no tiene un método getTitulo");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setTitulo("Toy Story 2");
  $miPeli->setRating(7.6);
  $miPeli->setId(10);
  $miPeli->setFechaDeEstreno("2000-10-10");
  
  $resul = $miPeli->getTitulo();
  
  $this->assertTrue($resul === "Toy Story 2", "El método getTitulo no retorna el titulo de la película");
}

public function testGetRating() : void {
  $this->assertTrue(method_exists('Pelicula','getRating'), "La clase película no tiene un método getRating");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setTitulo("Toy Story 2");
  $miPeli->setRating(7.6);
  $miPeli->setId(10);
  $miPeli->setFechaDeEstreno("2000-10-10");
  
  $resul = $miPeli->getRating();
  
  $this->assertTrue($resul === 7.6, "El método getRating no retorna el rating de la película");
}

public function testGetFechaDeEstreno() : void {
  $this->assertTrue(method_exists('Pelicula','getFechaDeEstreno'), "La clase película no tiene un método getFechaDeEstreno");
  
  $miPeli = new Pelicula(1, "Test");
  $miPeli->setTitulo("Toy Story 2");
  $miPeli->setRating(7.6);
  $miPeli->setId(10);
  $miPeli->setFechaDeEstreno("2000-10-10");
  
  $resul = $miPeli->getFechaDeEstreno();
  
  $this->assertTrue($resul === "2000-10-10", "El método getFechaDeEstreno no retorna la fecha de estreno de la película");
}

public function testSetId() : void {
  $this->assertTrue(method_exists('Pelicula','setId'), "La clase película no tiene un método setId");
  
  $miPeli = new Pelicula(1, "Test");
  
  $miPeli->setId(7);
  $resul = $miPeli->getId();
  
  $this->assertTrue($resul === 7, "El método setId no hace lo esperado");
}

public function testSetTitulo() : void {
  $this->assertTrue(method_exists('Pelicula','setTitulo'), "La clase película no tiene un método setTitulo");
  
  $miPeli = new Pelicula(1, "Test");
  
  $miPeli->setTitulo("Toy Story 2");
  $resul = $miPeli->getTitulo();
  
  $this->assertTrue($resul === "Toy Story 2", "El método setTitulo no hace lo esperado");
}

public function testSetRating() : void {
  $this->assertTrue(method_exists('Pelicula','setRating'), "La clase película no tiene un método setRating");
  
  $miPeli = new Pelicula(1, "Test");
  
  $miPeli->setRating(7.5);
  $resul = $miPeli->getRating();
  
  $this->assertTrue($resul === 7.5, "El método setRating no hace lo esperado");
}

public function testSetFechaDeEstreno() : void {
  $this->assertTrue(method_exists('Pelicula','setFechaDeEstreno'), "La clase película no tiene un método setFechaDeEstreno");
  
  $miPeli = new Pelicula(1, "Test");
  
  $miPeli->setFechaDeEstreno("2000-10-10");
  $resul = $miPeli->getFechaDeEstreno();
  
  $this->assertTrue($resul === "2000-10-10", "El método setFechaDeEstreno no hace lo esperado");
}

public function testSetRatingMenor() : void {
  $this->assertTrue(method_exists('Pelicula','setRating'), "La clase película no tiene un método setRating");
  
  $miPeli = new Pelicula(1, "Test");
  
  $miPeli->setRating(-1);
  $resul = $miPeli->getRating();
  
  $this->assertTrue($resul === 0, "El método setRating no hace lo esperado cuando recibe un rating menor a 0");
}

public function testSetRatingMayor() : void {
  $this->assertTrue(method_exists('Pelicula','setRating'), "La clase película no tiene un método setRating");
  
  $miPeli = new Pelicula(1, "Test");
  
  $miPeli->setRating(200);
  $resul = $miPeli->getRating();
  
  $this->assertTrue($resul === 10, "El método setRating no hace lo esperado cuando recibe un rating mayor a 10");
}

public function testConstructor() : void {

  $miPeli = new Pelicula(1, "Test");
  var_dump($miPeli);exit;  
  $id = $miPeli->getId();
  
  $titulo = $miPeli->getTitulo();
  
  $this->assertTrue($id === 1, "El constructor no esta asignando el id");
  
  $this->assertTrue($titulo === "Test", "El constructor no esta asignando el titulo");
}