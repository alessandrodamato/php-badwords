<?php 

$text = trim($_GET['text']);
$badWord = trim($_GET['badWord']);

$newText = str_replace($badWord, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>PHP Badwords</title>
</head>
<body class="text-bg-warning">

  <div class="container">
    <div class="row">
      <div class="col-6 offset-3 text-center">

        <h1 class="text-center my-5">PHP Badwords</h1>

        <h4>Paragrafo</h4>
        <h6>Lunghezza testo: <?php echo strlen($text) ?></h6>
        <p class="mb-5"><?php echo $text ?></p>

        <h4>Paragrafo censurato</h4>
        <h6>Lunghezza testo: <?php echo strlen($newText) ?></h6>
        <p><?php echo $newText ?></p>

      </div>
    </div>
  </div>

</body>
</html>