<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Weer een student te laat</title>
</head>

<body>
    <main style="width: 600px; margin: 20px auto;">
        <h4 style="text-align:center;">Nieuwe melding te late student</h4>
        <button> <a href="index.php">Home</a></button>

        <!-- Start form -->

        <form class="cursusform" method="post" action="insert.php">
            <div class="form-group">
                <label for="naam_student">Naam student</label>
                <input type="text" class="form-control" id="naam_student" name="naam_student" required>
            </div>
            <div class="form-group">
                <label for="klas">Klas</label>

                <select class="form-control" id="klas" name="klas">
                    <option>9A</option><option>9B</option><option>9C</option><option>9D</option>                </select>
            </div>
            <div class="form-group">
                <label for="aantal_minuten">Aantal minuten te laat</label>


                <select class="form-control" id="aantal_minuten" name="aantal_minuten">
                    <option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option><option>45</option><option>50</option><option>55</option><option>60</option>                </select>


            </div>
            <div class="form-group">
                <label for="reden_student">Reden te laat komen:</label>
                <textarea class="form-control" rows="5" id="reden_student" name="reden_student"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name='submit' value='submit'>Opslaan</button>
        <!-- End form  -->

        </form>
    </main>


</body>

</html>