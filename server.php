<?php

    require __DIR__ . '/partials/database.php';

    header('Content-Type: application/json');

    echo json_encode($database);

?>