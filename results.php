<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
        include "./classes.php";
        
        echo json_encode($_POST);
        
        
        
        $monkey = new Monkey();
        echo $monkey->getPicture();
        echo $monkey->getSound();

        $giraffer = new Giraffer();
        echo $giraffer->getPicture();
        echo $giraffer->getSound();

        $giraffer = new Tigrar();
        echo $giraffer->getPicture();
        echo $giraffer->getSound();

        $giraffer = new Kokosnötter();
        echo $giraffer->getPicture();
        echo $giraffer->getSound();


        ?>
    </body>
</html>

