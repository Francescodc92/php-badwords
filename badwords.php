<?php 
  $paragraf = $_POST['paragraf'];
  $badword = $_POST['badword'];
?>


<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--style css-->
  <link rel="stylesheet" href="./style/style.css">
  <title>PHP Badwords</title>
</head>
<body>
  <div class="result-wrapper">
    <h2>Testo senza censura</h2>
    <p>
      <?= $paragraf ?>
    </p>
    <?php 
      echo "<p>
      lungezza testo:
        <strong>"
          .strlen($paragraf)."
        </strong>
      </p>"
    ?>
    <h2>
      Testo censurato
    </h2>
  </div>
</body>
</html>