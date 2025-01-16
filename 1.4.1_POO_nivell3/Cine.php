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

    public function mostrarPeliculaMasLarga(): Pelicula{
        $peliculaMasLarga = null;
        foreach ($this->cartelera as $pelicula) {
            if ($peliculaMasLarga === null || $pelicula->duracion > $peliculaMasLarga->duracion) {
                $peliculaMasLarga = $pelicula;
            }
        }
        return $peliculaMasLarga;

    }

    public function buscarPeliculasDirector(string $director): string{
        $peliculasDirector = [];
        
            foreach ($this->cartelera as $pelicula) {
                if($pelicula->director === $director){
                    if (!in_array($pelicula->titulo,$peliculasDirector)) {
                        $peliculasDirector[] = $pelicula->titulo;
                    }
                }
            }
        $respuesta = implode(", ", $peliculasDirector);
        return $respuesta;
    }
}
?>