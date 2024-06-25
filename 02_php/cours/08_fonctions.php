<?php 
$title= "Les fonctions en PHP";
$titre= "Les fonctions en PHP";
$paragraphe = "Les fonctions";
require_once ("inc/header.inc.php");
?>

    <main class="container px-5 border">
        <div class="row">
            <h2 class="mt-5">1 - Les fonctions prédéfinies </h2>
              <ul>
                   <li> Une fonction prédéfine permet de réaliser un traitrement spécifique prédéterminé dans le language PHP</li>
              </ul>
              <div class="col-sm-12 mt-5">
                <h3 class="text-primary text-center mb-5">Les fonctions prédéfinies des chaînes de carcatères </h3>
                    <div class="row">
                       <div class="col-sm-12 col-md-6">
                              <ul>
                                   <!-- https://www.php.net/manual/en/function.rtrim.php -->
                                   <li><span>substr()</span> : permet d'extraire une partie d'une chaine de caractère</li>
                                   <li><span>strpos()</span>: permet de récuperer la position d'un caractère dans une chaîne de caractère </li>
                                   <li><span>strlen()</span> : permet de récupérer la taille d'une chaîne de carctére</li>
                                   <li><span>substr_replace()</span> : permet de remplacer un segment de la chaîne</li>
                                   <li><span>substr_ireplace()</span>: Version insensible à la casse de str_replace()</li>
                                   <li><span>str_contains()</span> : permet de vérifier si la chaîne contient un mot particulier</li>
                                   <li><span>str_starts_with()</span> : permet de vérifier si une chaîne commence par une sous-chaîne donnée</li>
                                  
                              </ul>
                       </div>
                       <div class="col-sm-12 col-md-6">
                              <ul>
                                   <li><span>str_ends_with()</span> : permet de vérifier si une chaîne se termine par une sous-chaîne donnée</li>
                                   <li><span>trim()</span> : permet de supprimer les espaces avant et après une chaîne de caractère </li>
                                   <li><span>strtolower()</span> : permet de retourner la chaîne en miniscule</li>
                                   <li><span>strtoupper()</span> : permet de retourner la chaîne en majuscules</li>
                                   <li><span>ucfirst()</span> : permet de mettre le premier caractère en majuscule. </li>
                                   <li><span>lcfirst()</span> : permet de mettre le premier caractère en miniscule. </li>
                              </ul>
                       </div>
                   </div>
                    <?php
                        $maChaine = "bonjour j'aéime le PHP !!";
                        // J'affiche un caractère de la chaine de caractère
                        echo $maChaine[3] . "<br>";

                        // Modifier un caractère de la chaine
                        $maChaine[0] = "B"; // je change le b minuscule en B majuscule
                        echo $maChaine . "<br>";

                        // Extraire une partie de la chaine de caractère
                        $nvlChaine = substr($maChaine, 0, 9); // Cette fonction prend en paramètre la variable, le point de départ et la longueur qu'on souhaite obtenir
                        echo $nvlChaine . "<br>";

                        //Exercice 
                        // Récupérez une partie du texte (de l'indice 0 à l'indice 40) et  remplacer la partie enlever avec ce morceau de code :
                        // ...<a href="#"> lire la suite </a>
                        $texte = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus illum, sequi harum vitae tempore veritatis? Aliquam saepe quia     delectus molestiae aut repudiandae expedita autem, dolorem dolorum cum nesciunt dolor.
                        Praesentium eum, molestiae autem quas numquam temporibus et cupiditate corporis quo eos deserunt magni non cum explicabo doloribus, fugiat illum    necessitatibus maxime! Similique corporis veniam sunt consequuntur soluta est aliquam?
                        Mollitia, sint incidunt est vero, blanditiis, officiis nostrum quisquam maxime rem sed at neque dolor magni ratione. Veniam, obcaecati. Voluptate   consequuntur consectetur provident voluptates ex mollitia, saepe odio necessitatibus voluptas?
                        Facilis, officia illo accusantium libero quidem laborum inventore, eveniet excepturi nobis neque doloremque itaque expedita voluptatum molestias hic    quo facere! Aliquam suscipit deserunt perferendis nesciunt illo earum eaque quo excepturi.";

                        $nvText = substr($text, 0, 41);
                        echo $nvText . "...<a href=\"#\"> lire la suite </a> <br>";
                        echo $nvText . '...<a href=\"#\"> lire la suite </a> <br>';
                        echo "$nvText . ...<a href=\"#\"> lire la suite </a> <br>";
                        echo $nvText . "...<a href='#'> lire la suite </a> <br>";
                        
                        # /|\ Attention les espaces sont des caractères dans la chaine et les accents circonflexe sont considérés comme 2 caractères

                        # Récuperer la position d'un caractère dans une chaine de caractères
                        echo 'La position de la lettre H dans ma phrase est : ' . strpos($maChaine, 'H') . '<br>';

                        //Attention la fonction est case sensitive elle fait attention à la casse des lettres : si je met la lettre h en miniscule il ne nous affiche rien.

                        var_dump(strpos($maChaine, 'h'));
                          # Récuperer la taille d'une chaîne de caractère




                        echo strlen($maChaine).'<br>';

                        #Remplacer une partie de la chaîne
                        $maChaine = str_replace('PHP', 'JS', $maChaine); // Les paramètres de la fonction : la chaîne de caractére à changer, la chaîne de caractère qui    remplace, et a variable à manipuler
                        echo $maChaine .'<br>';

                        // Ici aussi la fonction est sensible à la casse on ne change pas la valeur si y'en as une différence entre la valeur cherché et stocké
                        // il existe un eautre fonction qui ne fait pas une distinction entre les lettres majuscule et minisculedans la chaîne 
                        $maChaine = str_ireplace('bonjour', 'Hello', $maChaine);
                        echo $maChaine .'<br>'; 

                        # Varifier si la chaîne contient un mot particulier 

                        var_dump(str_contains($maChaine, 'JS')); // les paramètres : la variable qui contient la chaîne et le mot à vérifier dans la chaîne // sensible à la    casse 
                        // Le résiltat est un boolean true ou false (trouvé ou pas trouvé)

                        echo '<br>';
                        # Vérifier si la chaîne commence par ce que vous lui passez dans les paramétres

                        var_dump(str_starts_with($maChaine, 'Hel'));

                        echo '<br>';

                        # Vérifier si la chaîne se termine par ce que vous lui passez dans les paramétres
                        var_dump(str_ends_with($maChaine, '!'));

                        echo '<br>';

                        # Supprimer les espaces en début et fin de chaîne
                        $testTrim = "   Je suis une phrase avec des espaces au début et à la fin   ";

                        echo $testTrim . '<br>';
                        echo strlen($testTrim) . '<br>';

                        $nouveau = trim($testTrim);
                        echo $nouveau  . '<br>';
                        echo strlen($nouveau) . '<br>';
                        
                    ?>
                </div>

            
            <div class="col-sm-12 mt-5">
                 <h3 class="text-primary text-center mb-5">Les fonctions prédéfinies des tableaux </h3>
                 <div class="row">
                      <div class="col-sm-12 col-md-6">
                           <ul>
                                <li><span>array_push()</span> : permet d'ajouter plusieurs valeurs à la fin d' un tableau</li>
                                <li class="alert alert-warning">Si on veut ajouter une seule valeur à la fin on utilise la syntaxe : <strong>$tableau[] =     valeur_à_ajouter</strong> </li>
                                <li><span>array_unshift</span>: permet d'ajouter une valeur au début d'un tableau</li>
                                <li><span>array_pop</span>: permet de supprimer la dernière valeur d'un tableau</li>
                                <li><span>array_shift</span>: permet de supprimer la première valeur d'un tableau</li>
                                <li><span>unset()</span>: permet de supprimer un élément d'un tableau</li>
                                <li><span>shuffle</span>: permet de mélanger et réorganiser un tableau</li>
                           </ul>
                      </div>
                      <div class="col-sm-12 col-md-6">
                           <ul>
                                <li><span>array_chunk</span>: permet de déviser un tableau en plusieurs parties et avec un nombre de valeurs à définir</li>
                                <li><span>count() / sizeof()</span> : permet de retourner la taille du tableau passé en paramètre.</li>
                                <li><span>in_array()</span>: permet de vérifier qu'une valeur est présente dans un tableau.</li>
                                <li><span>array_key_exists()</span> : permet de vérifier si une clé existe dans un tableau.</li>
                                <li><span>explode()</span> : permet de transformer une chaîne de caractère en tableau</li>
                                <li><span>implode()</span> : permet de Transformer un tableau en chaîne de caractères.</li>
                                <li><span>array_slice()</span> :  permet de récuperer une partie d'un tableau </li>
        
                           </ul>
                      </div>
                 </div>
                 <?php
                    $tableau = ['Rouge', 'Bleu', 'Rose', 'Violet'];
                    echo'<pre>';
                    var_dump($tableau);
                    echo'</pre>';

                    echo "<h2> Ajouter des valeurs à la fin</h2>";
                    array_push($tableau, 'Vert','noir'); // dans les paramétres on met la variable qui contient le tableau ensuite les valeurs à ajouter
                    echo'<pre>';
                    //var_dump($tableau);
                    echo'</pre>';

                    echo "<h2> Ajouter des valeurs au début </h2>"; 
                    array_unshift($tableau,'Gris', 'Jaune');
                    echo'<pre>';
                    var_dump($tableau);
                    echo'</pre>';

                    echo "<h2> Supprimer la dernière valeur du tableau </h2>";

                    $valeurSupprimerFin = array_pop($tableau); // Supprime la valeur et je peux la stocker dans une variable 

                    echo'<pre>';
                    var_dump(array_pop($tableau));// tableau après suppressioin de la dernière valeur
                    echo'</pre>';
                    echo'<pre>';
                    var_dump($valeurSupprimerFin);// La couleur supprimée à la fin du tableau
                    echo'</pre>';

                    echo "<h2>  Supprimer la première valeur du tableau </h2>";

                    $valeurSupprimerDebut = array_shift($tableau);

                    echo'<pre>';
                    var_dump($tableau);// tableau après suppressioin de la première valeur
                    echo'</pre>';
                    echo'<pre>';
                    var_dump($valeurSupprimerDebut);// La couleur supprimée au début du tableau
                    echo'</pre>';

                    echo "<h2>  Mélanger un tableau </h2>";

                    shuffle($tableau);
                    echo'<pre>';
                    var_dump($tableau);
                    echo'</pre>';

                    echo "<h2>  Diviser un tableau en plusieurs partie </h2>";
                    $tableau2 = array_chunk($tableau,3, true); // En ajoutant true  dans les paramètres, je garde les même indices au valeurs du tableau d'origine
                    echo'<pre>';
                    var_dump($tableau2);
                    echo'</pre>';

                    echo "<h2> Compter les éléments dans un tableau </h2>";

                    $nbr1 = count($tableau);
                    $nbr2 = sizeof($tableau);

                    var_dump($nbr2);

                    echo "<h2> Vérifier une valeur dans un tableau ";

                    $result = in_array('Bleu', $tableau); // cette fonction est sensible à la casse 
                    echo'<pre>';
                    var_dump($result);
                    echo'</pre>';

                    echo "<h2> Vérfifier une clé dans un tableau ";
                    $result = array_key_exists(2, $tableau);
                    echo'<pre>';
                    var_dump($result);
                    echo'</pre>';

                    echo "<h2> Créer un tableau à partir de deux tableaux ";

                    $couleur = ['Rouge', 'Orange','Turquoise'];

                    $all = [...$tableau, ...$couleur]; // On décompose chacun des tableaux avec l'opérateur de décomposition(...)
                    echo'<pre>';
                    var_dump($all);// La variable $all contient le nouveau tableau indéxé créer à partir des deux tableaus 
                    echo'</pre>';

                    //Je n'aurais pas le m^me résultat avec cette syntaxe
                    
                    $all = [$tableau,$couleur];
                    echo'<pre>';
                    var_dump($all);// resultat: un tableau multidimentsionnel
                    echo'</pre>';

                    echo "<h2> Transformer une chaîne de caratére en tableau </h2>";
                    $maChaine2 = 'Je me transforme en tableau';
                    $chaineEnTableau = explode(' ', $maChaine2 ); // Le sparamètres : le caractére de séparation dans la chaîne, et la variable de la chaîne à scinder
                    echo'<pre>';
                    var_dump($chaineEnTableau);
                    echo'</pre>';

                    echo "<h2> Transformer un tableau en chaîne de caractère </h2>";
                    
                    $monTab = ['Salut', 'je', 'viens', 'du', 'tableau', '!'];
                    $tableauEnChaine = implode(' ', $monTab); // Les paramètres : le caractére de séparation dans la chaîne et la variable du tableau à fusionner 
                    echo'<pre>';
                    var_dump($tableauEnChaine);
                    echo'</pre>';
                    echo$tableauEnChaine;

                    echo "<h2> Récupérer une partie d'un tableau </h2>";

                    $monArray = [
                         'a' => 1,
                         'b' => 2,
                         'c' => 3,
                         'd' => 4,
                         'e'=> 5
                    ];

                    $nvArray = array_slice($monArray, 1,2);

                    echo'<pre>';
                    var_dump($nvArray);
                    echo'</pre>';

               ?>
            </div>
            <div class="col-sm-12 mt-5">
                <h3 class="text-primary text-center mb-5">Les fonctions <span>isset()</span> et <span>empty()</span></h3>    
                   <ul>
                        <li class="alert alert-success">Ces fonctions sont utiles lorsque vous souhaitez effectuer une validation de données.</li>
                   </ul>
                   <div class="row">
                        <div class="col-sm-12 col-md-6">
                             <h4 class="text-success text-center">isset()</h4>
                             <ul>
                                  <li>La fonction<span> isset()</span> détermine si une variable existe.</li>
                                  <li>La fonction vérifie si la variable est définie, et non NULL </li>
                                  <li>La fonction retourne true quand la variable testé est définie ou elle ne contient pas la valeur NULL</li>
                             </ul>

                        </div>
                        <div class="col-sm-12 col-md-6">
                             <h4 class="text-success text-center">empty()</h4>
                             <ul>
                                  <li>La fonction <span>empty()</span> vérifie si une variable est vide.</li>
                                  <li>La focntion retourne true si la variable testé est égale à : 
                                       <ul>
                                            <li>"" (une chaîne vide)</li>
                                            <li>0 (0 en tant qu'entier)</li>
                                            <li>"0" (0 en tant que chaîne de caractères)</li>
                                            <li>NULL</li>
                                            <li>false</li>
                                            <li>array() (un tableau vide)</li>
                                       </ul>
                                  </li>
                             </ul>
                        </div>
                    
                   </div>
                   <hr>
                    <?php

                        $var1 = 0;
                        $var2 = '';

                        if (isset($var1)) {
                            
                            echo "\$var1 existe et est not NULL, elle est égale à $var1 <br>";

                        } else {
                            echo "\$var1 n'existe pas et est NULL <br>";
                        }
                        


                        ###################################

                        if (empty($var2)) {
                            
                            echo "\$var2 est vide (0, string vide, NULL, non définie) <br>";

                        } else {
                            echo "\$var2 n'est pas vide <br>";
                        }

                        /* Utilisation : 
                                empty() -> pour valider et vérifier qu'un formulaire est rempli
                                isset() -> pour vérifier l'existance d'une variable avant de l'utiliser
                        
                        */

                    ?>



            </div>
        </div>
        <div class="row">
            <h2 class="mt-5">2 - Les fonctions Utilisateurs </h2>
                <ul>
                    <li>Les fonctions utilisateurs sont des morceaux de code écrits dans des accolades et portant un nom.</li>
                    <li>On applele une fonction au besoin pour exécuter le code qui s'y trouve .</li>
                    <li>Il est d'usage de créer des fonctions pour ne pas se répéter quand on veut  exécuter plusieurs fois le même traitement . On parle alors de  "factoriser" son code.</li>
                </ul>
                <?php

                        function separation(){ // On déclare une fonction avec le mot clé 'function' suivi du nom de la fonction et d'une paire de () qui accueilleront des paramètres ultérieurment
                            echo '<hr>';
                        }
                        separation(); // pour éxecuter une fonction (donc le code qui s'y trouve), on l'appelle en écrivant son nom suivi d'une paire de ()


                        ########################## Fonction sans return ##########################

                        function bonjour1 ($prenom, $nom){ // $prenom et $nom sont les paramètres de notre fonction. Ils permettent de recevoir une valeur car il s'agit de variables de reception

                            echo "<p>Bonjour $prenom $nom</p>";


                        }
                        bonjour1('Sahar', 'Ferchichi');
                        


                        ########################## Fonction avec return ##########################

                        function bonjour2 ($prenom, $nom){

                            return "<p>Bonjour $prenom $nom</p>"; // return permet de sortir la phrase "Bonjour ..." et de la renvoyer à l'endroit où la fonction est applée

                            // Après le return, toutes les instructions ne sont pas éxecutées


                        }
                        echo bonjour2('Sandrine', 'Ngunza'); // Ici on met un echo car la fonction nous retourne la phrase mais ne l'affiche pas directement

                        // Ici on peut remplacer les arguments par des variables (provenant d'un formulaire par exemple)

                        $prenom1 ='Spartak';
                        $nom1 = "SMBATYAN";

                        echo bonjour2($prenom1, $nom1); // Les 2 arguments sont variables et peuvent recevoir n'importe quelle valeur

                        $prenom1 ='Paul';
                        $nom1 = "PIERRARD";

                        echo bonjour2($prenom1, $nom1);

                        // Exercice : vous écriver une fonction qui multiplie un nombre 1 par un nombre 2 fournis lors de l'appel . cette fonction retourne le résultat de la multiplication . Vous afficher le résultat

                        $nbr1 = 1;
                        $nbr2 = 2;


                        function multiplication($nbr1, $nbr2){
                           return "<p> Le résultat de la multiplication de la valeur $nbr1 x $nbr2 est égale à " . $nbr1*$nbr2 . "</p>";                        
                        }
                        echo multiplication(12, 5);

                        $nb1 = 60;
                        $nb2 = 30;

                        echo multiplication($nb1, $nb2);
                        echo multiplication($nb1, $nb2 = 10); // je réaffecte une nouvelle valeur à ma variable directement dans les arguments de ma fonction



                    ########################## Fonction avec return ##########################
                    
                    // Certains paramètres peuvent ne pas être passés. Une valeur est fournis lors de la déclaration
                    function bonjour3($bonjour = 'Salut', $prenom, $nom){
                        echo "<p>$bonjour $prenom $nom</p>";


                    }

                    bonjour3(prenom : 'Sahar', nom : 'Ferchichi', bonjour : "Hello");

                ?>





        </div>


    </main>
                

    <?php include_once ("inc/footer.inc.php");?>