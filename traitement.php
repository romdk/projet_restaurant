<?php

session_start() ;
$action = $_GET["action"];
$id = $_GET["id"];

switch($action) {

    case"ajouterReservation";

    
    if(isset($_POST['envoyer'])){
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
        }
        header("Location:index.php");
        

    }
    break;

    case "effacerReservations";
    unset($_SESSION['reservations']);
    header("Location:panier.php");
    break;

    case "upNbPersonne";
        $_SESSION['reservations'][$id]['nbPersonne']++  ;
        header("Location:panier.php");
        break;

        case "downNbPersonne";
        $_SESSION['reservations'][$id]['nbPersonne']--;
        if($_SESSION['reservations'][$id]['nbPersonne']==0){
            unset($_SESSION['reservations'][$id]);
        }
        header("Location:panier.php");
        break;
}

?>