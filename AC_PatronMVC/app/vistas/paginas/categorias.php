<?php
require_once RUTA_APP . '/vistas/inc/header.php'; ?>
    <?php for($i = 0; $i < count($datos); $i++): ?>
        <p><?= $datos[$i]->Nombre ?></p>
    <?php endfor; ?>
<?php require_once RUTA_APP.'/vistas/inc/footer.php';?>
