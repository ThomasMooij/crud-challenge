<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

try {
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $err) {
    echo "Connection failed: " . $err->getMessage();
}



function getData($sql, $method){
    //maak de connectie met de database en run de query de variabele $conn vind je terug in de database.php file
    //we moeten hier global gebruiken voor de scope, dit leggen we in een latere module uit, voor nu dit gewoon zo laten staan, zonder global werkt het niet.
    global $conn;
 
    //maak de connectie met de database
    $statement = $conn->query($sql); //de waarde van de $sql variabele komt uit de parameter $sql die je bij het aanroepen van de functie als argument meegeeft

    //bepaal hoe je het resultaat wilt terug krijgen, alle rijen (fetchAll) of alleen de eerste (fetch) enz...
    //de waarde van de $method variabele komt uit de parameter $method die je bij het aanroepen van de functie als argument meegeeft
    if($method == 'fetch'){
        //$result wordt nu gevuld met een array die de waarde van de opgevraagde database tabel rij en kolommen bevat, fetch geeft alleen de eerste rij terug
        $result = $statement->fetch(PDO::FETCH_BOTH);
    }
    else {
        //$result wordt nu gevuld met een array die de waarde van de opgevraagde database tabel rijen en kolommen bevat, fetchAll geeft alle rijen terug
        $result = $statement->fetchAll(PDO::FETCH_BOTH); 
    }

    //return geeft de waarde terug aan de variabele waar je de functie hebt aangeroepen
    return $result;
}

?>