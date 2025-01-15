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

    public function agregarPelicula(Pelicula $pelicula): void{
        $this->cartelera[] = $pelicula;
    }

    public function mostrarDatosCartelera(): void{
        echo "Cartelera de " . $this->nombre . " (" . $this->localidad . "):" . "<br>";
            foreach ($this->cartelera as $pelicula) {
                echo "Título: " . $pelicula->titulo . ", Duración: " . $pelicula->duracion . " min. Director: " . $pelicula->director . ".<br>";
            }
    }

}
?>