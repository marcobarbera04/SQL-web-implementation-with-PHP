<!DOCTYPE html>
<html>
<style>
</style>
    <head>
        <title>Visualizza prodotti</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>    
        <?php
            //includere script per connettersi al DB
            include "connessione.php";

            //includere script con le funzioni
            include "funzioni.php";


            echo "<div class = 'contenitore-redirect'><a href= index.php class='Redirect'>Indietro</a></div><br>";

            visualizza_tabella($connessione, $products = "products");
        ?>

    </body>
</html>