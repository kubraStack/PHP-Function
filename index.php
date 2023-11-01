<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
    function ucgen($sayi){
        for ($i=1; $i <= $sayi; $i++) { 
            echo "0";
            echo "<br>";
            
            $y = $i;
            for ($j=0; $j <= $y ; $j++) { 
                echo "0";
                $y = $i;
            }
        }
    };

    ucgen(20);
 ?>
    
</body>
</html>