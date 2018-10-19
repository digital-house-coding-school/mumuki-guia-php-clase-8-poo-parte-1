public function testPelicula(): void {
  $sarasa = new Pelicula();
  global $miPeli;
  $this->assertTrue(isset($miPeli), 'La variable $miPeli no existe');
  
  $this->assertTrue($miPeli instanceof Pelicula, 'La variable $miPeli tiene que ser de tipo Pelicula');
}