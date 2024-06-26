<!doctype html>
<html lang="en">
    <head>
        
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Accueil</title>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"       aria-controls="navbarSupportedContent"        aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="connexion.php">Connexion</a>
                    </li>
                </ul>
      
                </div>
              </div>
            </nav>
        </header>
        <main>

        <?php

        $imgTable = [
            'Dragon' => "assets/img/Dragon.jpg", 
            'Drake' => "assets/img/Drake.jpg", 
            'Wyvern' => "assets/img/Wyvern.jpg", 
            'Wyrm' => "assets/img/Wyrm.jpg",
            'Amphithère' => "assets/img/Amphithere.jpg", 
            'Komodo' => "assets/img/Komodo.jpg"];

        // echo "<table class=\"table mt-5\">
        // <tr>";
        // foreach ($imgTable as $key => $value) {
        //     echo "<td> $key </td>";
        // }
        // echo     "</tr>
        // </table>";

        echo "<table class=\"table mt-5\">
        <tr>";
        foreach ($imgTable as $key => $value) {
            // echo "<td> $value </td>";
            echo "<td>"; 
            echo "<img src='$value' alt='$key' class='w-50'> </td>";
            echo "<button class='btn btn-primary btn-block'>$key</button>";
            echo "</td>";
            if (($key == "Wyvern") || ($key == "Komodo")){
            echo "</tr> <tr>";
        }
        }
        echo "</tr>";
        echo "</table>";






        ?>



        </main>
        <footer>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
