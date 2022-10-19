
<?php
session_start() ;
?>

<!DOCTYPE html>
<html lang="fr">
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
            <li class="reservations"><a href="panier.php">RESERVATIONS <span class="nbReservation"><?php echo count($_SESSION['reservations'])?></span></a></li>
            <li class="header"><a href="index.php">RETOUR</a></li>
            
            <div class="indicateur"></div>
          </ul>
        </section>

        <!-------------------------------------MAIN------------------------------------------->
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
                            "<th>Numéro de reservation</th>",
                            "<th>Nom et prénom</th>",
                            "<th>Nombre de personnes </th>",
                            "<th>Jour</th>",
                            "<th>Heure</th>",
                            "<th>Créneau</th>",
                            "<th>Email</th>",
                            "<th>Message</th>",
                            "<th>Plat du jour</th>",
                            "<th></th>",
                            "<th>"."<a class='bouton1' href=traitement.php?action=effacerReservations>Effacer reservations</a>"."</th>", 
                          "</tr>",
                        "</thead>",
                        "<tbody>";
                          foreach($_SESSION['reservations'] as $index => $reservation){
                            $jour = $reservation['jour'];
                            echo "<tr>",
                                    "<td>".$index."</td>",
                                    "<form action='traitement.php?action=modifierReservation&id=$index' method='post'>",
                                    "<td>".$reservation['name']."</td>",
                                    "<td><a href='traitement.php?action=downNbPersonne&id=$index'><i class='fa-solid fa-minus'></i></a>".$reservation['nbPersonne']."<a href='traitement.php?action=upNbPersonne&id=$index'><i class='fa-solid fa-plus'></i></a></td>",
                                    "<td> <select name='jour'>
                                    <option selected='selected'>".$reservation['jour']."</option>
                                    <option >lundi</option>
                                    <option >mardi</option>
                                    <option>mercredi</option>
                                    <option>jeudi</option>
                                    <option>vendredi</option>
                                    <option>samedi</option>
                                    <option>dimanche</option>
                                </select>
                         </td>",
                                    "<td>   <select name='heure' id='heure' onchange='toggleCreneaux()'>
                                    <option id='midi' value='midi' selected='selected'>Midi</option>
                                    <option id='soir' value='soir'>Soir</option>
                                </select></td>",
                                    "<td> <select name='creneau' id='H-midi'>
                                    <option selected='selected'>".$reservation['creneau']."</option>
                                    <option>12h15</option>
                                    <option>12h30</option>
                                    <option>12h45</option>
                                    <option>13h</option>
                                    <option>13h15</option>
                                    <option>13h30</option>
                                    <option>13h45</option>
                                    <option>14h</option>
                               </select> 
                  
                                <select  id='H-soir' class ='hidden1' > 
                                    <option >20h</option>
                                    <option >20h15</option>
                                    <option >20h30</option>
                                    <option >20h45</option>
                                    <option >21h</option>
                                    <option >21h15</option>
                                    <option >21h30</option>
                                    <option >21h45</option>
                                    <option >22h</option>
                                    
                                </select></td>",
                                    "<td>".$reservation['email']."</td>",
                                    "<td>".$reservation['message']."</td>",
                                    "<td>
                                    
                                    <button class='bouton2'> Afficher menu<p class='plat'>".$_SESSION['platDuJour'][$jour]."</p></button>",
                                    "</td>",
                                    "<td>"."<input class='bouton1' type='submit' name='modifier' value='Modifification' />"."</td>",
                                    "<td>"."<a href=traitement.php?action=supprimerUneReservation&index=$index><i class='fa-solid fa-xmark'></i></a>"."</td>",
                                   " </form>",
                                  "</tr>";    
                                }
                          }
                        "</tbody>";
                      "</table>";
              
            ?>
        </section>

        <script src="./js/afficherMenu.js"></script>
        <script src="./js/form.js"></script>
  </body>
</html>

