<?php
require_once 'tipoperfume.php';

class Perfume {
    public string $nombre;
    public string $marca;
    public float $pontuacion;
    public int $cantidad;
    public float $precio;
    public tipoPerfume $tipo;

    public function __construct(string $nombre, string $marca, float $pontuacion, int $cantidad, float $precio, tipoPerfume $tipo) {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->pontuacion = $pontuacion;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->tipo = $tipo;
    }

    public function __toString(): string {
        return "Nombre: $this->nombre, Marca: $this->marca, Pontuacion: $this->pontuacion, Cantidad: $this->cantidad, Precio: $this->precio, Tipo: " . $this->tipo->value;
    }
}
?>
