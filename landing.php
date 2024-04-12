<?php

$censured=$_POST["censured"];
$paragraph=$_POST["paragraph"];
// metto ireplace
$censored_paragraph= str_replace( $censured ,'***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>php badwords</title>
</head>
<body>


  <div class="container">
   
    <h1>Parola da censurare: <?php echo $censured; ?></h1>
    <h2>paragrafo: <?php echo $paragraph; ?></h2>
    <h2>paragrafo censurato: <?php echo $censored_paragraph; ?></h2>

    <a href="index.php">vai a landing</a>
    
  </div>



</body>
</html>