
<?php
session_start() ;


if(!isset($_SESSION['reservations'])|| empty($_SESSION['reservations'])){
    echo '<p> aucune reservations </p>';
}
else{
    echo "<thead>",
      "<tr>",
        "<th>Numero reservation</th>",
        "<th>Nom et prenom</th>",
        "<th>nombre de personnes </th>",
        "<th>jour</th>",
        "<th>heure</th>",
        "<th>créneau</th>",
        "<th>email</th>",
        "<th>message</th>",
      "</tr>",
    "</thead>",
    "<tbody>";
    foreach($_SESSION['reservations'] as $index => $reservation){
        echo "<tr>",
                    "<td>".$index."<td>",
                    "<td>".$reservation['name']."<td>",
                    "<td>".$reservation['nbPersonne']."<td>",
                    "<td>".$reservation['jour']."<td>",
                    "<td>".$reservation['heure']."<td>",
                    "<td>".$reservation['creneau']."<td>",
                    "<td>".$reservation['email']."<td>",
                    "<td>".$reservation['message']."<td>
                </tr>";
                
             
    }
    "</tbody>";
}






?>