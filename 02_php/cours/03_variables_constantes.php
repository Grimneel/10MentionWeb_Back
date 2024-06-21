<?php
$title = "Cours PHP - Les variables et les constantes";
$titre = "Les variables et les constantes en PHP";
$monoparagraphe = NULL;
include_once ("inc/header.inc.php");
?>

    <header class="p-5 m-4 bg-light rounded-3 border">
        <section class="container py-5">
            <?php
                echo "<h1 class=\"display-5 fw-bold\">Les bases du PHP</h1>"
                // print "<h1 class=\"display-5 fw-bold\">Les bases du PHP</h1>"
            ?>
        </section>

    </header>
    <main class="container-fluid px-5">
        <?php
            echo '<h2>Les variables utilisateurs / Affectation / Concaténation</h2>';
            $number = 127; // On déclare une variable $number et on lui affecte la valeur 127
            echo 'Ma variable $number vaut : ' . $number . '<br>'; 

            // je peux voir le type d'une variable avec la fonction prédéfinie gettype()

            echo 'le type de ma variable $number est : ' . gettype($number) . '<br>'; // ici c'est integer
            ##################
            $double = 1.5 ;
            echo 'Ma variable $number vaut : ' . $double . '<br>'; 
            echo 'le type de ma variable $double est : ' . gettype($double) . '<br>'; // ici il s'agit d'un double (nombre à virgule)

            ##################

            $chaine = 'Une chaine de caractère entre simple quotes';
            echo 'Ma variable $chaine vaut : ' . $chaine . '<br>';
            echo 'Le type de ma varibale $chaine est : ' . gettype($chaine) . '<br>' ; // ici il s'agit d'un string


            ##################


            $chaine1 = "Une chaine de caractère en tre double quotes";
            echo 'Ma variable $chaine1 vaut : ' . $chaine1 . '<br>';
            echo 'Le type de variable $chaine1 est : ' . gettype($chaine1) . '<br>' ; // ici il s'agit d'un string

            ##################

            $chaine2 = "127";
            echo 'Ma variable $chaine2 vaut : ' . $chaine2 . '<br>';
            echo 'Le type de ma variable $chaine2 est : ' . gettype($chaine2) . '<br>' ; // ici il s'agit d'un string

            ##################

            $chaine3 = `Une chaine de caratère entre deux backquotes`;
            echo 'Ma variable $chaine3 vaut : ' . $chaine3 . '<br>';
            echo 'Le type de ma variable $chaine3 est : ' . gettype($chaine3) . '<br>'; // Les backquotes en PHP https://www.php.net/manual/fr/language.operators.execution.php


            ##################

            $boolean = true; // ou false // Mon navigateur associe true à 1 et false à vide qui correspond à 0
            echo 'Ma varaible $boolean vaut : ' . $boolean . '<br>'; 
            echo 'Le type de ma variable $boolean est : ' . $boolean . '<br>'; // ici il s'agit d'un boolean (booléen) : permet de savoir si quelque chose est vrai ou faux

            ##################

            // Concaténation, affectation et affectation combinées avec l'opérateur ".=" pour les chaines de caractères

            $prenom = 'Nicolas';
            $prenom .= ' Thomas'; // On ajoute la valeur de "Thomas" à la valeur "Nicolas" SANS la remplacer grâce à l'opérateur ".="
            // echo $prenom;

            echo '<p>Bonjour ' . $prenom . '</p>';
            echo "<p>Bonjour $prenom </p>"; // Affiche "Bonjour Nicolas Thomas". Ici, j'utilise les doubles quotes, je n'ai pas besoin de concaténer avec le point (.), dans les guillemets la variable est évaluée : c'est son contenu qui est affiché, c'est ce qu'on appelle la substitution de variable.

            ##################

            // déclarer une chaine de caractère qui contient des apostrophes ex : aujourd'hui
            // échappement des apostrophes

            $message = 'aujourd\'hui'; // ici on échape les apostrophes quand on écrit dans les simples quotes avec "\"
            $message = "aujourd'hui"; 

            // Exercice : vous afficher Bleu-Blanc-Rouge en mettant le text de chaque couleur dans les variables

            $bleu = "Bleu -";
            $vert = "Vert -";
            $rouge = "Rouge -";
            echo "<p><span class='text-primary'>$bleu</span> <span class='text-success'>$vert</span> <span class='text-danger'>$rouge</span>";

            // Créer un drapeau français Bleu Blanc Rouge avec le mot "bleu blanc rouge" à l'interieur de chaque couleur

            // Marc
            echo '<div class="container bg-black p-5 col-6 mx-auto">
                        <div class="row" style="height: 200px">
                            <div class="col bg-primary">Bleu</div>
                            <div class="col bg-info">Blanc</div>
                            <div class="col bg-danger">Rouge</div>
                        </div>
                    </div>';

            // Axel
            $bleu1 = "Bleu - ";
            $vert1 = "Vert - ";
            $rouge1 = "Rouge";
            echo "<p class='bg-dark fw-bold col-3 p-4 mt-3'><span class='bg-primary py-3'>$bleu1</span><span class='bg-white py-3'>$vert1</span><span   class='bg-danger         py-3'>$rouge1</span></p>";

            // Correction
            $bleu2 = "blue";
            $blanc2 = "white";
            $rouge2 = "red";

            echo "<div class='d-flex justify-content-center bg-dark p-5 m-auto m-5 rounded' style='width: 40%;'>
                  <div class='bg-primary text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                      $bleu2
                  </div>
                  <div class='bg-$blanc2 text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                      $blanc2
                  </div>
                  <div class='bg-danger text-center fw-bold' style='width: 50px; height: 80px; line-height: 80px'>
                      $rouge2
                  </div>
              </div>";

            echo '<h2 class="mt-5">Opérateurs numériques</h2>';
            $a = 10;
            $b = 2;

            echo '$a + $b = ' . $a + $b . '<br>'; // affiche 12
            echo '$a - $b = ' . $a - $b . '<br>'; // affiche 8
            echo '$a * $b = ' . $a * $b . '<br>'; // affiche 20
            echo '$a / $b = ' . $a / $b . '<br>'; // affiche 5
            echo '$a % $b = ' . $a % $b . '<br>'; // affiche 0

            // Les opérateurs d'afféctation combiné pour les valeurs numériques
            $a -= $b; 
            echo $a;

            echo '<br>';
            
            $a += $b;
            echo $a;
            echo '<br>';

            // il existe aussi les autres opérateurs *= ou /= ou %=

            ##################

            // Incrémentation et décrémentation
            $i = 0;
            $i++;
            echo $i;
            echo '<br>';
            $i--;
            echo $i;
            echo '<br>';


            $age = 27;
            if ($age >= 18) {
                echo 'Majeur';
            } else {
                echo 'mineur';
            };
            
            

            /**
             * Si je veux afficher le contenu d'une variable et qu'elle soit collé à une chaine de caractère; ex: je veux afficher :
             * Aujourd'hui il fait 32°c !! 
             * ici le 32 et °c sont collés pour le faire en utilisant le mécanisme de substitution des variables il faut mettre  la variable entre accolades
            */
            $degre = 32;
            $phrase = '<p> Aujourd\'hui il fait ' . $degre . '°C !! </p>';
            echo $phrase;
            $phrase2 = "<p> Aujourd'hui il fait {$degre}°C !! </p>";
            echo $phrase2;

            echo '<h2 class="mt-5> Transtypage des variables </h2>';
            $string1 = (int)'100';
            var_dump($string1); // affiche 100 avec type integer
            $string2 = (float)'12.5';
            var_dump($string2); // affiche 100 avec type integer

            echo '<br>';
            
            echo '<h2 class="mt-5> Constante utilisateurs </h2>';

            # Avec la fonction prédéfinie define()

            define('CHAINE', 'la valeur de la constante CHAINE');
            echo CHAINE . '<br>';

            define('ENTIER', 30);
            echo ENTIER .'<br>';

            echo "j'ai" . ENTIER .' ans';
            echo gettype(ENTIER);

            # Constante avec le mot réservé const
            const NB_SEMAINE = 52;
            const HEURE_HEBDOMADAIRE = 35;
            const NB_MOIS = 12;

            echo '<br>';

            // Le nombre d'heure mensuel HEURE
            const HEURE_MENSUEL = HEURE_HEBDOMADAIRE * NB_SEMAINE / NB_MOIS;
            echo HEURE_MENSUEL;
            echo "<br>";

            echo '<h2 class="mt-5> Les variables prédéfinies : super-globale </h2>';

            echo $_SERVER["HTTP_HOST"];
            echo '<pre>';
            var_dump($_SERVER);
            echo '</pre>';

            function dump($tableau){
                echo '<pre>';
                var_dump($tableau);
                echo '</pre>';
            }

            echo "<br>";

            dump($_SERVER);







            
        ?>

            
    </main>
    
    <?php include_once ("inc/footer.inc.php");?>