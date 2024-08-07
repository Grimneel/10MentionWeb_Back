<?php
require_once "inc/functions.inc.php";




if (isset($_GET) && isset($_GET['action']) && isset($_GET['id_film'])) {
      
    if ($_GET['action'] == 'visu' && !empty($_GET['id_film'])) {

      $id_film = htmlentities($_GET['id_film']);

      $showFilm = showFilmViaId($id_film);

      

      

      $date_time = new DateTime($showFilm['duration']); // nous créeons un nouvel objet DateTime en passant la valeur de l'input de type time  en tant que paramètre
      $duration = $date_time->format('H:i');// Nous utilisons ensuite la méthode format() pour extraire l'heure et les minutes au format 'H:i'

      $date_View = new DateTime($showFilm['date']);

      $dateSortie = $date_View->format('d M y');

      if (!$showFilm) {
        header('location:index.php');
      }
    }
  }

// debug($dateFilm);

    


require_once "inc/header.inc.php";

?>

               
<div class="film bg-dark">
               <div class="back">
                   <a href="<?=RACINE_SITE."index.php"?>"><i class="bi bi-arrow-left-circle-fill"></i></a>
               </div>
               <div class="cardDetails row mt-5">
               <h2 class="text-center mb-5"></h2>
                    <div class="col-12 col-xl-5 row p-5">
                        <img src="<?=RACINE_SITE."assets/img/".$showFilm['image'] ?>" alt="Affiche du film">
                        <div class="col-12 mt-5">
                              <form action="boutique/panier.php" method="post"  enctype="multipart/form-data"  class="w-50 m-auto row justify-content-center p-5">
                                        <!-- Dans le formulaire d'ajout au panier, ajoutez des champs cachés pour chaque information que vous souhaitez conserver du film -->
                                        <input type="hidden" name="id_film" value="<?=$showFilm['id_film']?>">
                                        <select name="quantity" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <!-- Je créé dynamiquement la quantité sélectionnable dans la limite du stock -->
                                         <?php
                                      
                                      
                       
                                      for ($i = 1; $i <= $showFilm['stock']; $i++) :
                                    
                                      ?>
          
                                      <option value="<?= $i?>"><?= $i?></option>
          
                                      <?php
                                      endfor;
                                      ?>
                                     
                                   </select>
                                   
                                   <button class="m-auto btn btn-danger btn-lg fs-5" type="submit">Ajouter au panier</button>
                                   <!-- au moment du click j'initalise une session de panier qui sera récupérer dans le fichier panier.php -->
                              </form>    
                         </div>
                    </div>
                    <div class="detailsContent  col-md-7 p-5">
                         <div class="container mt-5">     
                              <div class="row">
                                   <h3 class="col-4"><span>Realisateur :</span></h3>
                                   <ul class="col-8">
                                        <li><?= $showFilm['director'] ?></li>
                                   </ul>
                                   <hr>
                              </div>
                              <div class="row">
                                   <h3 class="col-4"><span>Acteur :</span></h3>
                                   <ul class="col-8">
                                   <li>
                                        <?php

                                             $actors= stringToArray(html_entity_decode($showFilm['actors']));

                                             foreach($actors as $key => $actor){
                                                 ?>
                                                 <li><?= $actor;?></li>
                                                 <?php
                                             }
                                        ?>
                                </li>
                                   </ul> 
                                   <hr>
                              </div>
                              
                              <!-- // si j'ai un age limite renseigné je l'affiche si non pas de div avec Àge limite : -->
                             
                                   <div class="row">
                                        <h3 class="col-4"><span>Àge limite :</span></h3>
                                        <ul class="col-8">
                                             <li>+ <?= $showFilm['ageLimit'] ?>  ans</li>
                                        </ul> 
                                        <hr>
                                   </div>
                              
                              <div class="row">
                                   <h3  class="col-4"><span>Genre : </span></h3>
                                   <ul  class="col-8">
                                        <?php
                                             $category = showCategoryViaId($showFilm['category_id']);
                                             $categoryName = $category['name'];

                                        ?>


                                        <li><? $categoryName ?></li>
                                   </ul>
                                   <hr>
                              </div>
                              <div class="row"> 
                                   <h3 class="col-4"><span>Durée : </span></h3>
                                   <ul class="col-8">
                                        <li><?= (new DateTime( $showFilm['duration']))->format('H:i') ?></li>
                                   </ul>
                                   <hr>
                              </div>
                              <div class="row"> 
                                   <h3 class="col-4"><span>Date de sortie:</span></h3>
                                   <ul class="col-8">
                                        <?php
                                             $date_time = new DateTime($showFilm['date']);
                                             $date = $date_time->format('d M y');
                                        ?>
                                        <li><?= $showFilm['date'] ?></li>
                                   </ul>
                                   <hr>
                              </div>
                              <div class="row"> 
                                   <h3 class="col-4"><span>Prix : </span></h3>
                                   <ul class="col-8">
                                        <li><?= $showFilm['price'] ?>€</li>
                                   </ul>
                                   <hr>
                              </div>
                              <div class="row"> 
                                   <h3 class="col-4"><span>Stock :</span> </h3>
                                   <ul class="col-8">
                                        <li><?= $showFilm['stock'] ?></li>
                                   </ul>
                                   <hr>
                              </div>
                              <div class="row">
                                        
                                   <h5 class="col-4" ><span>Synopsis :</span></h5>
                                   <ul class="col-8">
                                        <li><?= $showFilm['synopsis'] ?></li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>          
                     
          </div>
               
     


<?php

require_once "inc/footer.inc.php";

?>
