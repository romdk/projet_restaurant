<?php


// ----------------CONNECTION DB---------------------
function connection(){
    global $pdo;
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=restaurant;charset=utf8',
        'root',
        '',
        [\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
    );
}
connection();

// ----------------AFFICHER TOUT ---------------------
function findAllMenus($pdo){
    $sqlQuery = $pdo->prepare("SELECT * FROM menu");                
    $sqlQuery->execute();
    global $menus;
    $menus = $sqlQuery->fetchAll();    
}
// findAllMenus($pdo);

function findAllReservations($pdo){
    $sqlQuery = $pdo->prepare("SELECT * FROM reservation");                
    $sqlQuery->execute();
    global $reservations;
    $reservations = $sqlQuery->fetchAll();    
}
// findAllReservations($pdo);


// ----------------AFFICHER ELEMENT POSSEDANT ID SPECIFIQUE ---------------------
function findMenuById($pdo,$id){
    $sqlQuery = $pdo->prepare("SELECT * FROM menu WHERE id = :id");
    $sqlQuery->bindValue(":id", $id);
    $sqlQuery->execute();
    global $menu;
    $menu = $sqlQuery->fetch();      
}
// findMenuById($pdo,$id=2);

function findReservationById($pdo,$id){
    $sqlQuery = $pdo->prepare("SELECT * FROM reservation WHERE id = :id");
    $sqlQuery->bindValue(":id", $id);
    $sqlQuery->execute();
    global $reservation;
    $reservation = $sqlQuery->fetch();      
}
// findReservationById($pdo,$id=2);



// ----------------INSERER ELEMENT DANS DB ---------------------
    function insertMenu($pdo,$nom,$description){
        $sqlQuery = $pdo->prepare("INSERT INTO menu (nom, description)
                                    VALUES ('$nom', '$description')");
        $sqlQuery->execute();
    }
    // insertMenu($pdo,$nom="abricot",$description="un lot de 4 abricots");
    function insertReservation($pdo,$nomPrenom,$nbPersonne,$jour,$email,$message){
        $sqlQuery = $pdo->prepare("INSERT INTO reservation (nom_et_prenom,nb_personnes,email,message)
                                    VALUES ('$nomPrenom', '$nbPersonne','$jour','$email','$message')");
        $sqlQuery->execute();
    }
    // insertReservation($pdo,$nom="abricot",$description="un lot de 4 abricots");
?>