<?php

session_start() ;
$action = $_GET["action"];

switch($action) {

    case"ajouterReservation";

    
    if(isset($_POST['envoyer'])){
        echo "tes";
    $name = $_POST['name'];
    $nbPersonne = $_POST['nbPersonne'];
    $jour = $_POST['jour'];
    $heure = $_POST['heure'];
    $creneau = $_POST['creneau'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    if($name && $nbPersonne && $jour && $heure && $creneau && $email ){
        $reservation =[
            "name" => $name ,
            "nbPersonne"=>$nbPersonne ,
            "jour"=>$jour,
            "heure"=>$heure,
            "creneau"=>$creneau,
            "email"=>$email,
            "message"=>$message ];

    $_SESSION['reservations'][]=$reservation;
    var_dump($_SESSION['reservations']);
    }
    //header("Location:panier.php");
    

}
}

?>