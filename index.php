<?php

include './functions/functions.php';

// se il form invia un input mi fa partire la funzione 
if ( isset($_GET['passwordLenght']) ) {
    echo getRandomString($_GET['passwordLenght'] );
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Strong Password Generator</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-5">

                <!-- form -->
                <form action="index.php"  method="GET">

                    <h2>Crea la tua password</h2>
                    <div class="mb-3">
                        <label for="generaPass" class="form-label">Lunghezza:</label>
                        <input type="number" class="form-control" id="generaPass" name="passwordLenght" min="4" max="10">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>