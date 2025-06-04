<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="circle1">
        <?php
            $i = 0;
            while ($i <= 100) {
                echo $i." ";
                $i +=2;
            }
        ?>
    </div>
    <div class="circle2">
        <?php
            $i = 1;
            while ($i <= 100) {
                echo $i." ";
                $i +=2;
            }
        ?>
    </div>
</body>
</html>