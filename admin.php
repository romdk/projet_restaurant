<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style_panier.css"/>
    <title>admin</title>
</head>
<body>
    <section id="top">
        <div class="retour"><a class='bouton1' href="index.php">RETOUR</a></div>            
        <div class="logo"><img src="./images/logo_2.png" alt="" /></div>
    </section>
<section>
    <?php 
        include 'db_fonctions.php';
        connection();
        /*
         findAllMenus($pdo);

        foreach($menus as $menu){              

        ?><p style ="transform: translateY(100px);">
                <?php echo $menu['nom']?><br>
                <?php echo $menu['description']?><br><br>
            </p><?php 
            
        }  

        findMenuById($pdo,$id=3);
        ?> <p style ="transform: translateY(100px) translateX(20px);"> <?php echo $menu['nom']?> </p>
        */
    ?>
</section>
    
</body>
</html>