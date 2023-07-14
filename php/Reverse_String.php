<html>
    <head>
    <title>Reverse-String</title>
    </head>
    <body>
    <?php
        $name = "kokila";
        $length = strlen($name);
        for($i=($length-1);$i>=0;$i--){
            echo "$name[$i]";
        }
       
        ?>
    </body>
</html>