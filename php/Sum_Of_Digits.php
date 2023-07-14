<html>
    <head>
    <title>Sum Of Digits</title>
    </head>
    <body>
    <?php
    $num = 875367;
    $sum = 0;
    $rem = 0;
     for($i=0;$i<=strlen($num);$i++){
        $rem = $num%10;
        $sum = $sum+$rem;
        $num = $num/10;
     }
     echo "Sum of digits of 875367 is $sum";
     ?>
    </body>
</html>