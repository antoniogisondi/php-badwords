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
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <form action="principal.php" method="GET" class="d-flex flex-column">
                        <input class="mb-2 mt-5" type="text" name="word">
                        <textarea class="mt-5" name="paragraph" cols="50" rows="10"></textarea>
                        <button class="btn btn-primary w-25 position-relative top-50 start-50 translate-middle mt-4">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>