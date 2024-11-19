<?php
//includere script per connettersi al DB
include "connessione.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productID = $_POST['ProductID'];
    $productName = $_POST['ProductName'];
    $supplierID = $_POST['SupplierID'];
    $categoryID = $_POST['CategoryID'];
    $unit = $_POST['Unit'];
    $price = $_POST['Price'];

    $sql = "UPDATE products SET ProductName='$productName', SupplierID='$supplierID', CategoryID='$categoryID', Unit='$unit', Price='$price' WHERE ProductID='$productID'";

    if ($connessione->query($sql) === TRUE) {
        echo "Record aggiornato con successo";
    } else {
        echo "Errore nell'aggiornamento del record: " . $connessione->error;
    }

    //chiudere connessione  
    $connessione->close();
}
?>
