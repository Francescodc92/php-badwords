<?php 
  $paragraph = $_POST['paragraph'] ?? '';
  $badword = $_POST['badword'] ?? '';
  $paragraphCensurate = str_ireplace($badword,"***", $paragraph);
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
      <?= $paragraph ?>
    </p>
    <?php 
      echo '<p class="lenght-p">
      lungezza testo:
        <strong>'
          .strlen($paragraph).'
        </strong>
      </p>;'
    ?>
    <h2>
      Testo censurato
    </h2>
    <p>
      <?= $paragraphCensurate ?>
    </p>
    <?php 
      echo '<p class="lenght-p">
      lungezza testo censurato:
        <strong>'
          .strlen($paragraphCensurate).'
        </strong>
      </p>'
    ?>
    <button class="button" onclick="javascript:history.go(-1)">Go Back</button>
  </div>
</body>
</html>