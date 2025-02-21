<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include "komponents/hedr.php"
    ?>
    <h1>Šéďa zase vohl 13nactku z jihočech</h1>
 
    <p>Zde je jméno účastníka pedofílie:
        <?php
            $name = "Daniel";
            echo "$name Šedivec";
            $text = "uživatel";
        ?>
 
        <?php echo "<h3> Jihlava: $name </h3>" ?>
 
    <?php
            $i = 1;
 
            while($i < 6 ){
                echo "<h3> $text $i </h3>";
                $i++;
            }

        for ($j = 0; $j <= 10; $j++) {
            echo "The number is: $j <br>";
        }

        echo "<h2>Sudá a lichá čísla:</h2>";
        for ($k = 1; $k <= 20; $k++) {
            if ($k % 2 == 0) {
                echo "$k je sudé číslo.<br>";
            } else {
                echo "$k je liché číslo.<br>";
            }
        }
    ?>
    </p>  
</body>
</html>