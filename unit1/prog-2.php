<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1=10;
        $num2=20;
        if($num1>$num2){
            echo "$num1 is maximum and $num2 is minimum.<br>";
            
        }
        elseif($num1<$num2){
            echo "$num2 is maximum and $num1 is minimum.<br>";
        }
        else{
            echo "Both numbers are equal.<br>";
        }
    ?>

</body>
</html>