<?php
enum tipoPerfume: string {
    case Floral  = 'Floral';
    case Frutal  = 'Frutal';
    case Verde   = 'Verde';
    case Citrico = 'Cítrico';

    public function getTipo(): string {
        return match($this) {
            self::Floral  => 'Floral',
            self::Frutal  => 'Frutal',
            self::Verde   => 'Verde',
            self::Citrico => 'Cítrico',
        };
    }
}
?>
