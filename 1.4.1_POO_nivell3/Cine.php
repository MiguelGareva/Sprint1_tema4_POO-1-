<?php 
declare(strict_types=1);
require_once "Pelicula.php";
class Cine{
    public string $nombre;
    public string $localidad;
    public array $cartelera = [];

    public function __construct(string $nombre, string $localidad){
        $this->nombre = $nombre;
        $this->localidad = $localidad;
    }

    public function agregarPelicula(Pelicula $pelicula){
        $this->cartelera[] = $pelicula;
    }

    public function 

}
?>