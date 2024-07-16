<?php
require_once "inc/functions.inc.php";

if (isset($_GET) && !empty($_GET)) {

        if (isset($_GET['id_category']) && !empty($_GET['id_category'])) {

            $idCategory = htmlentities($_GET['id_category']);

                if (is_numeric($idCategory)) {
                
                    $films = filmByCategory($idCategory);
                
                    if (!$films) {

                        header('location:index.php');

                    }

                } else {
                
                    header('location:index.php');
                
                }

        } elseif (isset($_GET['action']) && $_GET['action'] == 'voirplus') {

            $films = allFilms();
            
        }
    
}else {

    $films = filmByDate();

}





require_once "inc/header.inc.php";

?>

<div class="films">
    <h2 class="fw-bolder fs-1 mx-5 text-center"> Nos films </h2>
    <div class="row">

            <?php
                foreach ($films as $dateFilm) {
            ?>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                <div class="card">
                    <img src="<?=RACINE_SITE."assets/img/". $dateFilm['image'] ?>" alt="L'affiche du film">
                    <div class="card-body">
                        <h3><?= $dateFilm['title']?></h3>
                        <h4><?= $dateFilm['director'] ?></h4>
                        <p><span class="fw-bolder">Résumé: </span><?=substr($dateFilm['synopsis'],0, 90). '...' ?></p>
                        <a href="<?=RACINE_SITE?>showFilm.php?id_film=<?= $dateFilm['id_film'] ?>" class="btn">Voir plus</a>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
            </div>
        <div class="col-12 text-center">
            <a href="<?=RACINE_SITE?>?action=voirplus" class="btn p-4 fs-3">Voir plus de films</a>
        </div>
</div>


<?php

require_once "inc/footer.inc.php";


?>










