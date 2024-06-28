<?php

require_once "inc/header.inc.php";
require_once "inc/functions.inc.php";

$info = "!";
$info2 = "";
     if (isset($_POST)) {
          $info = "\$_POST existe";
     } else {
          $info = "\$_POST n'existe pas";
     }

     if (!empty($_POST)) {
          // On vérifie si un champs est vide
          $verif = true;
          foreach ($_POST as $key => $value) {
               if (empty(trim($value))) {
                    $verif = false;
               }
          }

          if($verif == false){
               $info = alert("Veuillez renseigner tout les champs", "danger");
          }else {
               // On récupère les valeurs de nos champs et on les stockes dans des variables
               $firstName = trim($_POST['firstName']);
               $pseudo = trim($_POST['pseudo']);
               $email = trim($_POST['email']);
               $phone = trim($_POST['phone']);
               $mdp = trim($_POST['mdp']);
               $confirmMdp = trim($_POST['confirmMdp']);
               $civility = trim($_POST['civility']);
               $birthday = trim($_POST['birthday']);
               $address = trim($_POST['address']);
               $zip = trim($_POST['zip']);
               $city = trim($_POST['city']);
               $country = trim($_POST['country']);


               $regex = '/[0-9]/'; // je stocks mon expression rationnelle dans une variable
               $regex_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/"; 
               $regex_phone = "/^\\+?[1-9][0-9]{7,14}$/";
               $regex_password = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{12,}$/";
               $regex_date = "^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$";
               $regex_address = '/^\\d+ [a-zA-Z ]+, \\d+ [a-zA-Z ]+, [a-zA-Z ]+$/';
               $regex_zip = "/^[0-9]{5}(?:-[0-9]{4})?$/";

               if (!isset($lastName) || strlen($lastName) < 2 || strlen($lastName) > 15 || preg_match($regex, $lastName)) { //preg_match — Effectue une recherche de correspondance avec une expression rationnelle standard
                    $info = alert("Le champs nom n'est pas valide", "danger");

               }

               if (!isset($firstName) || strlen($firstName) < 2 || strlen($firstName) > 15 || preg_match($regex, $firstName)) { 
                    $info .= alert("Le champs prénom n'est pas valide", "danger");

               }

               if (!isset($pseudo) || strlen($pseudo) < 2 || strlen($pseudo) > 15 || preg_match($regex, $pseudo)) { 
                    $info .= alert("Le champs pseudo n'est pas valide", "danger");

                    
               }

               if (!isset($email) || strlen($email) < 5 || strlen($email) > 25 || !preg_match($regex_email, $email)) { 
                    $info .= alert("Le champs email n'est pas valide", "danger");

               }

               if (!isset($phone) || strlen($phone) == 10 || !preg_match($regex_phone, $phone)) { 
                    $info .= alert("Le champs téléphone n'est pas valide", "danger");

               }

               if (!isset($mdp) || strlen($mdp) < 12 || strlen($mdp) > 25 || !preg_match($regex_password, $mdp)) { 
                    $info .= alert("Le champs mot de passe n'est pas valide", "danger");

               }

               if (!isset($confirmMdp) == isset($mdp)) { 
                    $info .= alert("Le champs confirmation du mot de passe n'est pas valide", "danger");

               }

               if (!isset($address) || strlen($address) < 1 || strlen($address) > 100 || !preg_match($regex_address, $address)) { 
                    $info .= alert("Le champs adresse n'est pas valide", "danger");

               }

               if (!isset($zip) || strlen($zip) == 5 || !preg_match($regex_zip, $zip)) { 
                    $info .= alert("Le champs code postal n'est pas valide", "danger");

               }

               if (!isset($city) || strlen($city) < 2 || strlen($city) > 50 || preg_match($regex, $city)) {
                    $info .= alert("Le champs city n'est pas valide", "danger");

               }
               
               if (!isset($country) || strlen($country) < 2 || strlen($country) > 25 || preg_match($regex, $country)) {
                    $info .= alert("Le champs pays n'est pas valide", "danger");

               }





                    // preg_match vérifie si le phone correspond à l'expression régulière précisée. 
                    /* La regex s'écrit entre #
                    Le ^ définit le début de l'expression
                    Le $ définit la fin de l'expression     
                    [0-9] définit l'intervalle des chiffres autorisés
                    si je met {10} c'est que je définit que l'on en veut 10 précisément
                    */
               


               // if () {
                    
               // }
          }

     }





?>



<main style="background:url(assets/img/5818.png) no-repeat; background-size: cover; background-attachment: fixed;">
   
   <div class="w-75 m-auto p-5" style="background: rgba(20, 20, 20, 0.9);">
          <h2 class="text-center mb-5 p-3">Créer un compte</h2>
          <?php
            //    echo  $info;   // pour afficher les messages
          //   debug($_POST);

            echo $info;
            echo $info2;

          ?>
          <form action="" method="post" class="p-5" >
               <div class="row mb-3">
                     <div class="col-md-6 mb-5">
                         <label for="lastName" class="form-label mb-3">Nom</label>
                         <input type="text" class="form-control fs-5" id="lastName" name="lastName">
                     </div>
                     <div class="col-md-6 mb-5">
                         <label for="firstName" class="form-label mb-3">Prenom</label>
                         <input type="text" class="form-control fs-5" id="firstName" name="firstName" >
                     </div>
               </div>
               <div class="row mb-3">
                    <div class="col-md-4 mb-5">
                         <label for="pseudo" class="form-label mb-3">Pseudo</label>
                         <input type="text" class="form-control fs-5" id="pseudo" name="pseudo">
                    </div>
                    <div class="col-md-4 mb-5">
                         <label for="email" class="form-label mb-3">Email</label>
                         <input type="text" class="form-control fs-5" id="email" name="email" placeholder="exemple.email@exemple.com">
                    </div>
                    <div class="col-md-4 mb-5">
                         <label for="phone" class="form-label mb-3">Téléphone</label>
                         <input type="text" class="form-control fs-5" id="phone" name="phone">
                    </div>
                     
               </div>
               <div class="row mb-3">
                    <div class="col-md-6 mb-5">
                         <label for="mdp" class="form-label mb-3">Mot de passe</label>
                         <input type="password" class="form-control fs-5" id="mdp" name="mdp"  placeholder="Entrer votre mot de passe">
                    </div>
                    <div class="col-md-6 mb-5">
                         <label for="confirmMdp" class="form-label mb-3">Confirmation mot de passe</label>
                         <input type="password" class="form-control fs-5 mb-3" id="confirmMdp" name="confirmMdp" placeholder="Confirmer votre mot de passe " >
                         <input type="checkbox" onclick="myFunction()"> <span class="text-danger">Afficher/masquer le mot de passe</span>
                    </div>
                   
                   
               </div>
               <div class="row mb-3">
                     <div class="col-md-6 mb-5">
                         <label class="form-label mb-3">Civilité</label>     
                         <select class="form-select fs-5" name="civility">
                              <option value="h">Homme</option>
                              <option value="f">Femme</option>
                         </select>
                     </div>
                     <div class="col-md-6 mb-5">
                         <label for="birthday" class="form-label mb-3">Date de naissance</label>
                         <input type="date" class="form-control fs-5" id="birthday" name="birthday">
                     </div>
               </div>
               <div class="row mb-3">
                    <div class="col-12 mb-5">
                         <label for="address" class="form-label mb-3">Adresse</label>
                         <input type="text" class="form-control fs-5" id="address" name="address">
                    </div>
               </div>
               <div class="row mb-3">
                    <div class="col-md-3">
                         <label for="zip" class="form-label mb-3">Code postale</label>
                         <input type="text" class="form-control fs-5" id="zip" name="zip">
                    </div>
                    <div class="col-md-5">
                         <label for="city" class="form-label mb-3">Cité</label>
                         <input type="text" class="form-control fs-5" id="city" name="city">
                    </div>
                    <div class="col-md-4">
                         <label for="country" class="form-label mb-3">Pays</label>
                         <input type="text" class="form-control fs-5" id="country" name="country">
                    </div>
               </div>
               <div class="row mt-5">
                    <button class="w-25 m-auto btn btn-danger btn-lg fs-5" type="submit">S'inscrire</button>
                    <p class="mt-5 text-center">Vous avez dèjà un compte ! <a href="authentification.php" class=" text-danger">connectez-vous ici</a></p>
               </div>
          </form>
   </div>



</main>






<?php

require_once "inc/footer.inc.php";
var_dump($_POST);


?>