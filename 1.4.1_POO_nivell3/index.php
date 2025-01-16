<?php 
declare(strict_types=1);
require_once "Cine.php";

$cine1 = new Cine("Cines Verdi","Barcelona");
$cine2 = new Cine("Phenomena", "Barcelona");
$cine3 = new Cine("Capitol", "Barcelona");

$pelicula1 = new Pelicula("Amanece que no es poco",110,"Jose Luis Cuerda");
$pelicula2 = new Pelicula("El café de la Marina", 94, "Domingo Pruna");
$pelicula3 = new Pelicula("Les Excursionistes Calentes", 82, "Conrad Son");
$pelicula4 = new Pelicula("Airbag", 120, "Juanma Bajo Ulloa");

$cine1->agregarPelicula($pelicula1);
$cine1->agregarPelicula($pelicula2);
$cine1->mostrarDatosCartelera();

$cine2->agregarPelicula($pelicula2);
$cine2->agregarPelicula($pelicula3);
$cine2->mostrarDatosCartelera();

$cine3->agregarPelicula($pelicula3);
$cine3->agregarPelicula($pelicula4);
$cine3->mostrarDatosCartelera();

echo "\nPelícula con mayor duración en {$cine1->nombre}:\n";
$peliculaLarga = $cine1->mostrarPeliculaMasLarga();
echo " {$peliculaLarga->titulo}({$peliculaLarga->duracion}) min.<br>";

echo "\nPelícula con mayor duración en {$cine2->nombre}:\n";
$peliculaLarga = $cine2->mostrarPeliculaMasLarga();
echo " {$peliculaLarga->titulo}({$peliculaLarga->duracion}) min.<br>";

echo "\nPelícula con mayor duración en {$cine3->nombre}:\n";
$peliculaLarga = $cine3->mostrarPeliculaMasLarga();
echo " {$peliculaLarga->titulo}({$peliculaLarga->duracion}) min.<br>";

$director = "Conrad Son";
echo "La/s películas del director {$director} en el cine {$cine3->nombre} son: <br>";
echo $cine3->buscarPeliculasDirector($director);


?>