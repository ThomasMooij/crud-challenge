<?php 
include 'database.php';


if(isset($_GET['id'])){


    //list id variable from get method
    $verwijder_id = $_GET['id'];
    
    
    // query om te verwijderen
    $sql = "DELETE FROM students WHERE ID=$verwijder_id";


    $exe = getData($sql,'POST');

header("location: http://localhost/CRUD/index.php");

}

echo $verwijder_id;

?>
<button><a href="http://localhost/CRUD/index.php">home</a></button>