<?php 
declare(strict_types=1);
require_once "Cine.php";

$cine1 = new Cine("Cines Verdi","Barcelona");

$pelicula1 = new Pelicula("Amanece que no es poco",110,"Jose Luis Cuerda");
$pelicula2 = new Pelicula("El café de la Marina", 94, "Domingo Pruna");

$cine1->agregarPelicula($pelicula1);
$cine1->agregarPelicula($pelicula2);
$cine1->mostrarDatosCartelera();

echo "\nPelícula con mayor duración en {$cine1->nombre}:\n";
$peliculaLarga = $cine1->mostrarPeliculaMasLarga();
echo " {$peliculaLarga->titulo}({$peliculaLarga->duracion}) min.\n";
?>