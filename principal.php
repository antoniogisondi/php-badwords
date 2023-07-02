<?php 
    $paragraph = strtolower($_POST['paragraph']);
    $word = strtolower($_POST['word']);

    $expolde = explode(" ", $word);
    $text_final = str_replace($expolde, '***' , $paragraph)
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
        <div class="conatiner">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <input type="text" name="word" readonly value="<?php echo $word ?>">
                    <textarea cols="50" rows="10"><?php echo $text_final ?></textarea>
                </div>
            </div>
        </div>
    </body>
</html>