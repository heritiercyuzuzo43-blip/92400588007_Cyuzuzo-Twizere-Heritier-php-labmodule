<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 10;
        $num = 20;
        echo "------------Arithmetic Operators in PHP--------------<br>";
        echo"The addition of $num and $num is ".($num+$num).".<br>";
        echo"The subtraction of $num and $num is ".($num-$num).".<br>";
        echo"The multiplication of $num and $num is ".($num*$num).".<br>";
        echo"The division of $num and $num is ".($num/$num).".<br>";
        echo"The modulus of $num and $num is ".($num%$num).".<br><br><br>";
        echo"------------Assignment Operators in PHP--------------<br>";
        $num += 10;
        echo "After addition assignment, num is $num.<br>";
        $num -= 10;
        echo "After subtraction assignment, num is $num.<br>";
        $num *= 10;
        echo "After multiplication assignment, num is $num.<br>";
        $num /= 10;
        echo "After division assignment, num is $num.<br>";
        $num %= 10;
        echo "After modulus assignment, num is $num.<br><br><br>";
        echo"------------Comparison Operators in PHP--------------<br>";
        $num1 = 10;
        $num2 = 20;
        if($num1 == $num2){
            echo "$num1 is equal to $num2.<br>";
        }
        else{
            echo "$num1 is not equal to $num2.<br>";
        }
            if($num1 > $num2){
                echo "$num1 is greater than $num2.<br>";
            }
            else{
                echo "$num1 is not greater than $num2.<br>";
            }
            if($num1 < $num2){
                echo "$num1 is less than $num2.<br>";
            }
            else{
                echo "$num1 is not less than $num2.<br>";
            }
            if($num1 >= $num2){
                echo "$num1 is greater than or equal to $num2.<br>";
            }
            else{
                echo "$num1 is not greater than or equal to $num2.<br>";
            }
            if($num1 <= $num2){
                echo "$num1 is less than or equal to $num2.<br>";
            }
            else{
                echo "$num1 is not less than or equal to $num2.<br><br><br>";
            }
        echo"------------Logical Operators in PHP--------------<br>";
        $num1 = 10;
        $num2 = 20;
        if($num1 > 5 && $num2 > 15){
            echo "Both conditions are true.<br>";
        }
        else{
            echo "At least one condition is false.<br>";
        }
        if($num1 > 15 || $num2 > 15){
            echo "At least one condition is true.<br>";
        }
        else{
            echo "Both conditions are false.<br>";
        }
        if(!($num1 > 15)){
            echo "The condition is false.<br>";
        }
        else{
            echo "The condition is true.<br><br><br>";
        }
    echo"------------Increment and Decrement Operators in PHP--------------<br>";
        $num = 10;
        echo "The value of num is $num.<br>";
        echo "The value of num after post-increment is ".($num++).".<br>";
        echo "The value of num after pre-increment is ".(++$num).".<br>";
        echo "The value of num after post-decrement is ".($num--).".<br>";
        echo "The value of num after pre-decrement is ".(--$num).".<br><br><br>";
    echo"------------String Operators in PHP--------------<br>";
        $str1 = "Hello";
        $str2 = "World";
        echo "The concatenation of str1 and str2 is ".($str1.$str2).".<br>";
        $str1 .= " ".$str2;
        echo "After concatenation assignment, str1 is $str1.<br><br><br>";
    echo"------------Bitwise Operators in PHP--------------<br>";
        $num1 = 5; // 0101 in binary
        $num2 = 3; // 0011 in binary
        echo "The bitwise AND of num1 and num2 is ".($num1 & $num2).".<br>"; // 0001 in binary
        echo "The bitwise OR of num1 and num2 is ".($num1 | $num2).".<br>"; // 0111 in binary
        echo "The bitwise XOR of num1 and num2 is ".($num1 ^ $num2).".<br>"; // 0110 in binary
        echo "The bitwise NOT of num1 is ".(~$num1).".<br>"; // 1010 in binary (two's complement)
        echo "The left shift of num1 by 1 is ".($num1 << 1).".<br>"; // 1010 in binary
        echo "The right shift of num1 by 1 is ".($num1 >> 1).".<br>"; // 0010 in binary
    ?>
</body>
</html>