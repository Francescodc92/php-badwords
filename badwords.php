<?php 
  $paragraf = $_POST['paragraf'] ?? '';
  $badword = $_POST['badword'] ?? '';
  $paragrafCensurate = str_replace($badword,"***", $paragraf);
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
      echo '<p class="lenght-p">
      lungezza testo:
        <strong>'
          .strlen($paragraf).'
        </strong>
      </p>'
    ?>
    <h2>
      Testo censurato
    </h2>
    <p>
      <?= $paragrafCensurate ?>
    </p>
    <?php 
      echo '<p class="lenght-p">
      lungezza testo censurato:
        <strong>'
          .strlen($paragrafCensurate).'
        </strong>
      </p>'
    ?>
  </div>
</body>
</html>