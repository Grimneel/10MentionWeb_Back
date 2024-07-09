<?php
require_once "../inc/functions.inc.php";
require_once "../inc/header.inc.php";


?>

<div class="col-sm-12 col-md-6 d-flex flex-column mt-5 pe-3">  
        <!-- tableau pour afficher toute les catégories avec des boutons de suppression et de modification -->
        <h2 class="text-center fw-bolder mb-5 text-danger">Liste des films</h2>
        <?php

            $films = allFilms();


        ?>
       
        <table class="table table-dark table-bordered mt-5 " >
            <thead>
                    <tr>
                    <!-- th*7 -->
                        <th>ID</th>
                        <th>title</th>
                        <th>Director</th>
                        <th>Actors</th>
                        <th>Age limit</th>
                        <th>Durée</th>
                        <th>Date</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Synopsis</th>
                        <th>Image</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
            </thead>
            <tbody>

            <?php
            
                foreach ($films as $key => $film) {
                    
            ?>
             
                    <tr>
                        <td><?= $film['id_film']?></td>
                        <td><?= html_entity_decode(ucfirst($film['title'])) ?></td> <!-- une majuscule sur la première lettre avec ucfirst()-->
                        <td><?= html_entity_decode(ucfirst($film['director'])) ?></td>
                        <td><?= html_entity_decode(ucfirst($film['actors'])) ?></td>
                        <td><?= html_entity_decode(ucfirst($film['ageLimit'])) ?></td>
                        <td><?= html_entity_decode(ucfirst($film['duration'])) ?></td>
                        <td><?= html_entity_decode(ucfirst($film['date'])) ?></td>
                        <td><?= html_entity_decode(ucfirst($film['price'])) ?></td>
                        <td><?= html_entity_decode(ucfirst($film['stock'])) ?></td>
                        <td><?=substr(html_entity_decode(ucfirst($film['synopsis'])), 0, 100 )?></td> <!-- Convertit les entités HTML à leurs caractères correspondant -->
                        <td><?= html_entity_decode(ucfirst($film['image'])) ?></td>
                        <td class="text-center"><a href="?action=delete&id_film=<?= $film['id_film']?>"><i class="bi bi-trash3-fill"></i></a></td>
                        <td class="text-center"><a href="?action=update&id_film=<?= $film['id_film']?>"><i class="bi bi-pen-fill"></i></a></td>
                    </tr>
               
            <?php

                }   
            
            ?>


            </tbody>

        </table>







</div>


<?php


require_once "../inc/footer.inc.php"

?>