<?php 
    $word = $_GET['word'];
    $paragraph = $_GET['paragraph'];
    $paragraph_lenght = strlen($paragraph);

    $text_final = str_replace($word, '***' , $paragraph);
    $censored = strlen($text_final)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
    <title>PHP Badwords</title>
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                   <h4>Paragrafo</h4>
                   <p><?php echo $paragraph ?></p>
                   <h4>Bad Word</h4>
                   <p><?php echo $word ?></p>
                   <p><strong>Lunghezza paragrafo: </strong><?php echo $paragraph_lenght ?></p>
                   <hr>
                   <h4>Paragrafo censurato</h4>
                   <p><?php echo $text_final ?></p>
                   <p><strong>Lunghezza paragrafo censurato: </strong><?php echo $censored ?></p>
                </div>
            </div>
        </div>
    </body>
</html>