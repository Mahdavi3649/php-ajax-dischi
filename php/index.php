<?php 

include __DIR__ . '/dbLocal.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="stylesheet" href="./style.css">
    <title>php ajax dischi</title>
</head>
<body>

    <header>
       <div class="logo">
          <img src="./img/logo.png"/>
      </div>
    </header>
    <main>
        <div class="container">
            <div class="row p-5 row-cols-5 row-cols-sm-3">
                <?php foreach ($dischi['response'] as $disco) { ?>
                    
                    <div class="col-2-5">
                        <img class="img-disco"src="<?php echo $disco["poster"];?>" />
                        <h3 class="fs-6 text-center text-white fw-bold mt-3 text-uppercase">
                           <?php echo $disco["title"]?>
                        </h3>
                        <div class="caption mt-3"><?php echo $disco["author"]?></div>
                        <div class="caption"><?php echo $disco["year"]?></div>
                    </div>

                 <?php } ?> 
                    
            </div>
        </div>


    </main>
    

    
</body>
</html>