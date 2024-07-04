<?php
require_once "../inc/functions.inc.php";
require_once "../inc/header.inc.php";





if (!empty($_POST)) {
    // On vérifie si un champs est vide
    $verifCategory = true;
    foreach ($_POST as $key => $value) {
         if (empty(trim($value))) {
              $verifCategory = false;
         }
    }

    if($verifCategory == false){
         $info = alert("Veuillez renseigner tout les champs", "danger");

         
    }else {
         // On récupère les valeurs de nos champs et on les stockes dans des variables
         $nameCategory = trim($_POST['nameCategory']);
         $descriptionCategory = trim($_POST['descriptionCategory']);

         $regex = '/[0-9]/'; // je stocks mon expression rationnelle dans une variable

         if (!isset($nameCategory) || strlen($nameCategory) < 2 || strlen($nameCategory) > 15 || preg_match($regex, $nameCategory)) { //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard
              $info = alert("Le champs nom n'est pas valide", "danger");

         }

         if (!isset($descriptionCategory) || preg_match($regex, $nameCategory)) { 
              $info .= alert("Le champs prénom n'est pas valide", "danger");

         }  else if (empty($info)) {
              // Vérifier si l'adresse mail existe dans la BDD

              $nameCategoryExist = checkNameCategory($nameCategory); // Cette varaible stocke l'utilisateur qui possède le nom de la catégorie renseigner en argument dans la fonction checknameCategory
                   // Si l'nameCategory n'existe pas dans la BDD, la varibale stocke false
              debug($nameCategoryExist);
              if ($nameCategoryExist) {
                        $info = alert("Ce mail n'est pas disponible", "danger");
              }


                   // Vérifier si le pseudo existe dans la BDD


              $descriptionCategoryExist = checkDescriptionCategory($descriptionCategory); 

              if ($descriptionCategoryExist) {

                        $info = alert("Ce descriptionCategory est déjà utilisé !", "danger");
              }

              // Vérifier si le descriptionCategory existe dans la BDD
              if ($nameCategoryExist || $descriptionCategoryExist){

                   $info = alert("Vous avez déjà un compte" , "danger");

              }else if (empty($info)) {
                   
                   $mdpHash = password_hash($mdp, PASSWORD_DEFAULT); // Cette fonction PHP crée un hachage sécurisé d'un mot de passe en utilisant un algorithme de hachage fort : génère une chaîne de caractères unique à partir d'une entrée. C'est un mécanisme unidirectionnel dont l'utilité est d'empêcher le déchiffrement d'un hash. Lors de la connexion, il faudra comparer le hash stocké dans la base de données avec celui du mot de passe fourni par l'internaute.
                   // PASSWORD_DEFAULT : constante indique à password_hash() d'utiliser l'algorithme de hachage par défaut actuel c'est le plus recommandé car elle garantit que le code utilisera toujours le meilleur algorithme disponible sans avoir besoin de modifications.
                   // debug($mdpHash);

                   inscriptionUsers($lastName, $firstName, $pseudo, $email, $phone, $mdpHash , $civility, $birthday, $address, $zip, $city, $country);
                   $info = alert('Vous êtes bien inscrit, vous pouvez <a href="authentification.php" class="text-danger fw-bold">vous connectez</a>', 'success');

              }
              


         }

    }

}





?>
<div class="row">
    <div class="col-md-6">
        <form action="">
            <div class="d-flex flex-column mb-3">
                <div class="col-md-3 mb-5">
                    <label for="nameCategory" class="form-label mb-3">Nom de la catégorie</label>
                    <input type="text" class="form-control fs-5" id="nameCategory" name="nameCategory">
                </div>
                <div class="col-md-6 mb-5">
                    <label for="descriptionCategory">Description</label>
                    <br>
                    <textarea name="descriptionCategory" id="descriptionCategory" cols="50" rows="10" class="mb-5"></textarea>
                    <button class="w-100 m-auto btn btn-danger btn-lg fs-5" type="submit">Ajouter une catégorie</button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="col-md-6 m-auto mt-5 table-responsive">
        <table class="table table-dark table-bordered mt-5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Supprimer</th>
                    <th>Modifier</th>
                </tr>
            </thead>
            <tbody>

                    <?php

                        foreach ($categories as $key => $category) {
                                //$variable as $key => $value
                    ?>

                <tr>
                    <td><?= $category['id_category']?></td>
                    <td><?= $category['nameCategory']?></td>
                    <td><?= $category['descriptionCategory']?></td>
                    <td class="text-center"><a href="?action=delete&id_category=<?= $category['id_category']?>"><i class="bi bi-trash3"></i></a></td>
                    <td class="text-center"><a href="?action=delete&id_category=<?= $category['id_category']?>"><i class="bi bi-pen-fill text-danger"></i></a></td>
                </tr>

                    <?php
                        }
                    ?>

                </tbody>
        
        
        </table>
    </div>
</div>


<?php


require_once "../inc/footer.inc.php"

?>