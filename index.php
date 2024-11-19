<!DOCTYPE html>
<html>
    <head>
        <title>Pagina principale</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>            
        <?php
        echo "<center><H1>Database<br></center>";
        //includere script per connettersi al DB
        include "connessione.php";  

        echo "<div class = 'contenitore-redirect'><a href= visualizza_prodotti.php class = 'Redirect'>Visualizza prodotti</a></div><br>";
        
        $connessione->close();
        ?>
    </body>
</html>