<?php 
include "database.php";



    $name=$_POST['naam_student'];
    $klas=$_POST['klas'];
    $minuten=$_POST['aantal_minuten'];
    $reden=$_POST['reden_student'];
    
    
    // insert query
    $sql = "INSERT INTO students (name, klas,minuten,reden) VALUES ( '$name', '$klas' , '$minuten' , '$reden' )" ;

    // execute query
    $exe = getData($sql,'POST');

    header("location:nieuw.php"); ?>