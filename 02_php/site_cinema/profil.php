<?php
require_once "inc/functions.inc.php";
 require_once "inc/header.inc.php";
 ?>
<div class="mx-auto p-2 row flex-column align-items-center">
    <h2 class="text-center mb-5">Bonjour </h2>
 	<div class="cardParfum">
        <div class="image">
         <img src="assets/img/<?= $_SESSION['user']['civility'] == 'h' ? 'avatar_h.png' : 'avatar_f.png' ?>" alt="Image avatar femme">
            <div class="details">
            <div class="center ">
                
                <table class="table">
                    
                          <tr>
                                <th scope="row" class="fw-bold"><?= $_SESSION['user']['lastName'] ?></th>
                                <td></td>
                               
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold"><?= $_SESSION['user']['firstName'] ?></th>
                                <td></td>
                                
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold"><?= $_SESSION['user']['pseudo'] ?></th>
                                <td colspan="2"></td>
                                
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold"><?= $_SESSION['user']['email'] ?></th>
                                <td colspan="2"></td>
                                
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold"><?= $_SESSION['user']['phone'] ?></th>
                                <td colspan="2"></td>
                                
                            </tr>
                            <tr>
                                <th scope="row" class="fw-bold"><?= $_SESSION['user']['adress'] ?><?= $_SESSION['user']['city'] ?><?= $_SESSION['user']['country'] ?></th>
                                <td colspan="2"></td>
                                
                            </tr>
                        

                </table>



                <a href="" class="btn mt-5">Modifier vos informations</a>



            </div>
        </div>







    </div>
    
    

    <?php

    require_once "inc/footer.inc.php";
    ?>

