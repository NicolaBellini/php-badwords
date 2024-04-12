<?php

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
  <div class="containe m-5 ">
   
    <form action="landing.php" method="post">
        
      <div div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Parola da censurare</label>
        <input name="censured" type="text" class="form-control" id="exampleFormControlInput1" placeholder="inserisci la parola da censurare">
      </div>
    
    
    
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Paragrafo da censurare</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Paragrafo da censurare"></textarea>
      </div>  
    
    
      <button type="submit" class="btn btn-primary">Invia</button><br>
    
   
    </form>
    <a href="landing.php">vai a landing</a>
    
  </div>
</body>
</html>