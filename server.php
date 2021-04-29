<?php

    require __DIR__ . '/partials/database.php';

    header('Content-Type: application/json');

    if(!empty($_GET['listAuthor'])) {
        $listAuthor = $_GET['listAuthor'];
        $authors = [];
        if ($listAuthor == true) {
            foreach ($database as $album) {
                if(!in_array($album['author'], $authors)) {
                    $authors[] = $album['author'];
                }
            }
        }
        echo json_encode($authors);
    } else {
        if ($_GET['artist']){
            $artist = $_GET['artist'];
            $albums = [];
            foreach ($database as $album) {
                if ($artist === $album['author']) {
                    $albums[] = $album;
                }
            }
        echo json_encode($albums);
        } else {
            echo json_encode($database);
        }

    }

    

?>