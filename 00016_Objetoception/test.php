public function testGenero() : void {
  $this->assertTrue(method_exists('Pelicula','getNombreGenero'), "La clase película no tiene un método getNombreGenero");
  
  $genero = new Genero("Familiar");
  $miPeli = new Pelicula(1, "Toy Story", $genero);
  
  
  $resul = $miPeli->getNombreGenero();
  $this->assertTrue($resul == "Familiar", "El método getNombreGenero no esta retornando lo esperado");
}