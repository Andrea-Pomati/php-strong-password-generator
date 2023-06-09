<?php 

require_once __DIR__ . '/partials/functions.php';


session_start();

$generatedPassword = '';
if(isset($_GET['passwordLength']) && $_GET['passwordLength'] >= 4) {
  
 

  $generatedPassword = generatePassword($_GET['passwordLength']);


  $_SESSION['generatedPassword'] = $generatedPassword;


  header('Location: showPassword.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container pt-2">
    <h1>Password Generator</h1>

    <form action="index.php" method="GET">

      <div class="mb-3">
        <label for="passwordLength" class="form-label">Lunghezza della password da generare</label>
        <input name="passwordLength" id="passwordLength" type="number" min="4" step="1" placeholder="lunghezza della password da generare">

        <hr>

        <button type="submit" class="btn btn-primary">Genera</button>
      </div>

    </form>

    <hr>

    <?php 

    if($generatedPassword != "") {

      ?>
      
      <h2>Password generata:</h2>
      <h3><?= $_GET['passwordLength'] ?> caratteri</h3>

      <pre class="text-danger"><?= $generatedPassword ?></pre>
      
      <?php

    }


    ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
