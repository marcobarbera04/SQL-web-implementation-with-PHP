<!DOCTYPE html>
<html>
    <head>
        <title>Modifica prodotto</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <?php
    include "connessione.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $productID = $_POST['ProductID'];
        $productName = $_POST['ProductName'];
        $supplierID = $_POST['SupplierID']; 
        $categoryID = $_POST['CategoryID']; 
        $unit = $_POST['Unit'];
        $price = $_POST['Price'];
        
        echo "<div class = 'contenitore-modifiche'>";
        echo "<form action='salva_modifiche_prodotto.php' method='post'>";
        echo "<input type='hidden' name='ProductID' value='$productID'>";
        echo "<span class = 'testo-modifica'>Nome Prodotto: </span><input type='text' name='ProductName' value='$productName'><br>";
        echo "<span class = 'testo-modifica'>ID Fornitore: </span><input type='text' name='SupplierID' value='$supplierID' readonly><br>";
        echo "<span class = 'testo-modifica'>ID Categoria: </span><input type='text' name='CategoryID' value='$categoryID' readonly><br>";
        echo "<span class = 'testo-modifica'>Unità: </span><input type='text' name='Unit' value='$unit'><br>";
        echo "<span class = 'testo-modifica'>Prezzo: </span><input type='text' name='Price' value='$price'><br>";
        echo "<input type='submit' value='Salva Modifiche'>";
        echo "</form>";
        echo "</div>";

        //chiudere connessione
        $connessione->close();
    }
    ?>
</body>
</html>