<?php
require_once "inc/functions.inc.php";

if (isset($_GET) && isset($$_GET['id_film']) && !empty($_GET['id_film'])) {

    $idFilm = htmlentities($_GET['id_film']);

    if (is_numeric($idFilm)) {

        $showFilm = showFilmViaId($idFilm);

        if (!$dateFilm) {

            header('location:index.php');
        }

    } else {

    

    header('location:index.php');

    }
    
}

debug($dateFilm);

    


require_once "inc/header.inc.php";

?>



<?php

require_once "inc/footer.inc.php";

?>
