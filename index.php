<?php 
include "database.php"; ?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Overzicht studenten te laat in de les</title>
    <style>
    .telaat {
        text-align: center;
        color: #f00;
        font-weight: bold;

    }

    .ergtelaat {
        text-align: center;
        color: #fff;
        background-color: #f00;
        font-weight: bold;

    }
    body{
        background-color: snow;
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
<?php 
// QUERIES AND VARIABLES

$sql = "SELECT * FROM students";
$studenten = getData($sql , 'fetchAll ');
$hoogsteMin = " SELECT MAX(minuten) max, AVG(minuten) avg , COUNT(minuten) cnt FROM students "; 
$hoogsteMinQuery = getData($hoogsteMin , 'fetch');
// $gemin = "SELECT AVG(minuten) FROM students";
// $geminQuery = getData($gemin , "fetch");
// $totaal = "SELECT COUNT(minuten) FROM students";
// $totaalQuery = getData($totaal, 'fetch');

// LIJST MET STUDENTEN




foreach($studenten as $student){

    echo '<tr>';
    echo "<td>{$student['name']}</td>";
    echo "<td> {$student['klas']} </td>";
    echo "<td> {$student['minuten']}</td>";
    echo "<td> {$student['reden']}</td>";
    echo "<td><a class='btn btn-danger' href='update.php?id={$student['ID']}' >update</a></td>"; 
    echo "<td><a class='btn btn-danger' href='verwijder.php?id={$student['ID']}' >verwijder</a></td>";
    echo '</tr>';} ?>
 
        <br>
        <a href="nieuw.php" class="btn btn-success">W&eacute;&eacute;r eentje te laat!</a>


        <!-- Hieronder komt de statistieken tabel van stats.php -->
        <br><br><br>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th rowspan="2">Statistieken</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hoogste aantal minuten te laat</td>
                    <td><?php echo $hoogsteMinQuery['max']; ?> </td>
                </tr>
                <tr>
                    <td>Gemiddeld aantal minuten</td>
                    <td><?php echo $hoogsteMinQuery['avg'] ?></td>
                </tr>
                <tr>
                    <td>Totaal aantal minuten</td>
                    <td><?php echo $hoogsteMinQuery['cnt']?></td>
                </tr>
            </tbody>
        </table>
        <br><br><br>

    </main>

</body>

</html>