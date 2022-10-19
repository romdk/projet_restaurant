<?php

session_start() ;
$action = $_GET["action"];
$id = $_GET["id"];
$index = (isset($_GET["index"])) ? $_GET["index"] : "";


switch($action) {

    case"ajouterReservation";

    
    if(isset($_POST['envoyer'])){
        $creneau =filter_input(INPUT_POST,"creneau",FILTER_SANITIZE_SPECIAL_CHARS);
        $name =filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
        $jour =filter_input(INPUT_POST,"jour",FILTER_SANITIZE_SPECIAL_CHARS);
        $heure =filter_input(INPUT_POST,"heure",FILTER_SANITIZE_SPECIAL_CHARS);
        $nbPersonne =filter_input(INPUT_POST,"nbPersonne",FILTER_VALIDATE_INT);
        $message =filter_input(INPUT_POST,"message",FILTER_SANITIZE_SPECIAL_CHARS);
        $email=filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);

    

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
        header("Location:index.php#contact");
        


        
    }
    break;

    case"modifierReservation";
    if(isset($_POST['modifier'])){
        $creneau=$_POST["creneau"];
        $heure=$_POST["heure"]; 
        $jour=$_POST["jour"]; 
        
        // $creneau =filter_input(INPUT_POST,"creneau",FILTER_SANITIZE_SPECIAL_CHARS);
        // $jour =filter_input(INPUT_POST,"jour",FILTER_SANITIZE_SPECIAL_CHARS);
        // $heure =filter_input(INPUT_POST,"heure",FILTER_SANITIZE_SPECIAL_CHARS);
        
        
        if($jour && $heure && $creneau){
            
            $reservation =[
                "name" => $_SESSION['reservations'][$id]['name'] ,
                "nbPersonne"=>$_SESSION['reservations'][$id]['nbPersonne'] ,
                "jour"=>$jour,
                "heure"=>$heure,
                "creneau"=>$creneau,
                "email"=>$_SESSION['reservations'][$id]['email'],
                "message"=>$_SESSION['reservations'][$id]['message']];

        $_SESSION['reservations'][$id]=$reservation;
        }
        header("Location:panier.php");
        

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
