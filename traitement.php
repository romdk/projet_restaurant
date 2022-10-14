<?php

session_start() ;
$action = $_GET["action"];
$id = $_GET["id"];
$index = (isset($_GET["index"])) ? $_GET["index"] : "";


switch($action) {

    case"ajouterReservation";

    
    if(isset($_POST['envoyer'])){
        $name = $_POST['name'];
        $nbPersonne = $_POST['nbPersonne'];
         $message = $_POST['message'];
        $email = $_POST['email'];
        $jour = $_POST['jour'];
        $heure = $_POST['heure'];
        $creneau = $_POST['creneau'];
        // $name =filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
        // $jour =filter_input(INPUT_POST,"jour",FILTER_SANITIZE_STRING);
        // $heure =filter_input(INPUT_POST,"heure",FILTER_SANITIZE_STRING);
        // $email =filter_input(INPUT_POST,"creneau",FILTER_SANITIZE_STRING);
        // $nbPersonne =filter_input(INPUT_POST,"nbPersonne",FILTER_VALIDATE_INT,FILTER_FLAG_ALLOW_FRACTION);
        // $message =filter_input(INPUT_POST,"message",FILTER_SANITIZE_STRING);
        // $email=filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);

    

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

    case "supprimerUneReservation":
        unset($_SESSION["reservations"][$index]);
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