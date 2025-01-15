<?php 
declare(strict_types=1);

class Pelicula{
    public string $titulo;
    public int $duracion;
    public string $director;

    public function __construct(string $titulo, int $duracion, string $director){
        $this->titulo = $titulo;
        $this->duracion = $duracion;
        $this->director = $director;
    }
}

?>