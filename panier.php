
<?php
session_start() ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./style/style_panier.css" />
    <title>Reservation</title>
  </head>
  <body>
  <div id="container">
      <header>
        
        <!--------------------------- TOP --------------------------------------->
        <section id="top">
          <div class="logo"><img src="./images/logo_2.png" alt="" /></div>
          <ul class="nav">
            <li class="header"><a href="#accueil">PANIER</a></li>
            <li class="header"><a href="index.php">RETOUR</a></li>
            <li class="header"><a href='traitement.php?action=effacerReservations'>EFFACER</a></li>
            <div class="indicateur"></div>
          </ul>
          <div class="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </section>
        <section id="main">
          <?php 
         
          
            if(!isset($_SESSION['reservations'])|| empty($_SESSION['reservations'])){
                echo '<p> aucune reservation </p>';
            }
            else{
                echo "<table>", 
                        "<thead>",
                          "<tr>",
                          /* Titre des colonnes */
                            "<th>Numero reservation</th>",
                            "<th>Nom et prénom</th>",
                            "<th>nombre de personnes </th>",
                            "<th>jour</th>",
                            "<th>heure</th>",
                            "<th>créneau</th>",
                            "<th>email</th>",
                            "<th>message</th>",
                            "<th></th>",
                          "</tr>",
                        "</thead>",
                        "<tbody>";
                          foreach($_SESSION['reservations'] as $index => $reservation){
                            echo "<tr>",
                                    "<td>".$index."</td>",
                                    "<td>".$reservation['name']."</td>",
                                    "<td><a href='traitement.php?action=downNbPersonne&id=$index'><i class='fa-solid fa-minus'></i></a>".$reservation['nbPersonne']."<a href='traitement.php?action=upNbPersonne&id=$index'><i class='fa-solid fa-plus'></i></a></td>",
                                    "<td>".$reservation['jour']."</td>",
                                    "<td>".$reservation['heure']."</td>",
                                    "<td>".$reservation['creneau']."</td>",
                                    "<td>".$reservation['email']."</td>",
                                    "<td>".$reservation['message']."</td>",
                                    "<td>"."<a class='button1' href=traitement.php?action=supprimerUneReservation&index=$index><i class='fa-solid fa-xmark'></i></a>"."</td>",
                                  "</tr>";         
                          }
                        "</tbody>";
                      "</table>";
              }
            ?>
        </section>
  </body>
</html>

