<html>
    <head>
    <title>Table of Numbers</title>
    </head>
    <body>
    <?php
        for($i=2;$i<=10;$i++){
            for($j=1;$j<=10;$j++){
                echo "[".($i*$j)."] ";
            }
            echo "</br>";
            
        }
        ?>
    </body>
</html>