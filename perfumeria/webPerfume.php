<?php
require_once 'perfume.php';

class WebPerfume {
    public string $nombre;
    public array $inventario;

    public function __construct($nombre) {
        $this->nombre = $nombre;
        $this->inventario = array();
    }

    public function elPerfumeMasCaro(): void {
        $mayorPrecio = 0;
        $elMasCaro = null;

        foreach ($this->inventario as $perfume) {
            if ($perfume->precio > $mayorPrecio) {
                $mayorPrecio = $perfume->precio;
                $elMasCaro = $perfume;
            }
        }

        if ($elMasCaro !== null) {
            echo "El perfume más caro es --> ".$elMasCaro->__toString()."<br>";
        } else {
            echo "No hay perfumes en el inventario.";
        }
    }

    public function promedioPuntuacion(): void {
        $sumaPuntuaciones = 0;
        $totalPerfumes = count($this->inventario);

        foreach ($this->inventario as $perfume) {
            $sumaPuntuaciones += $perfume->pontuacion;
        }

        if ($totalPerfumes > 0) {
            $promedio = $sumaPuntuaciones / $totalPerfumes;
            echo "La puntuación promedio de los perfumes es: " . $promedio . PHP_EOL;
        } else {
            echo "No hay perfumes en el inventario." . PHP_EOL;
        }
    }
}
?>
