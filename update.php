<?php 
include 'database.php';

// VARIABLES VOOR DYNAMISCHE TAFEL
$update_id = $_GET['id'];
$sql = "SELECT name, klas, minuten , reden FROM students WHERE ID=$update_id"; 
$student = getData($sql , "fetch");
$name = $student['name'];
$klas = $student['klas'];
$minuten  =$student['minuten'];
$reden = $student['reden'] ;
echo $name;
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Overzicht studenten te laat in de les</title>
    <style>
        .telaat{
            text-align:center; 
            color:#f00; 
            font-weight:bold;
        }
        .ergtelaat{
            text-align:center; 
            color:#fff; 
            background-color: #f00;
            font-weight:bold;
        }


    </style>
</head>
<body>
    <main style="width: 900px; margin: 20px auto;">
        <h4>Overzicht studenten die te laat waren</h4>
        <table class="table table-striped">
            <tr>
                <th nowrap>Naam student</th>
                <th>Klas</th>
                <th nowrap>Minuten te laat</th>
                <th>Reden te laat</th>
                <th>
                    <!--<a href="reset.php" class="btn btn-info">Reset</a>-->
                </th>
                <th> </th>
            </tr>


<form method='POST' action="">;
<tr>
<td>Update name<input type="text" name="name1" value= <?php echo $name?>></td>
<td>Update klas<input type='text' name='klas1' value = <?php echo $klas ?>></td>
<td>Update Minuten te laat <input type='text' name='minuten1'value = <?php echo $minuten ?>></td>
<td>update reden absentie<input type='text' name='reden1' value = <?php echo $reden ?>></td> 
<td><input type="submit" value="submit" name="submit"></td></tr>

</form>
        
<?php
if(isset($_POST['submit'])){


    //variables voor query ( kan niet met post??)
    $name = $_POST['name1'];
    $klas = $_POST['klas1'];
    $minuten = $_POST['minuten1'];
    $reden = $_POST['reden1'];
    
    // query om te updaten
    $sql = "UPDATE students SET name='$name' , klas='$klas' , minuten = '$minuten' , reden = '$reden' WHERE id=$update_id";
        

    $exe = getData($sql,'POST');

    header("location: index.php");

}


?>
<a href="index.php" class="btn btn-success">home</a>