<html>
    <head>
    <title>Palindrome Checker</title>
    </head>
    <body>
    <?php
        $num = 3456;
        $reverse = strrev($num);
        if($num == $reverse){
            echo "The given number $num is Palindrome";
        }else{
            echo "The given number $num is Not a Palindrome";
            }
        ?>
    </body>
</html>
