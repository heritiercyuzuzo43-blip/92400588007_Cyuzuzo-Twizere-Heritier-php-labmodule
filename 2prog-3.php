<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo "<h3> - array_change_key_case()</h3>";
       $arr = array("Name","Twizere","Heritier","Mugisha","Iradukunda","Elie");
       print_r(array_change_key_case($arr, CASE_LOWER));
       echo "<br><b>Upper Case Keys:</b></br>";
       print_r(array_change_key_case($arr, CASE_UPPER));

       echo "<hr><h3>2 - array_chunk()</h3>";
       $months = array("jan","feb","mar","apr","may","jun");
       print_r(array_chunk($months,3,"<br>"));

       echo "<hr><h3>3 - array_count_values()</h3>";
       $colors = array("blue","red","green","red","red","white");
       print_r(array_count_values($colors));

       echo "<hr><h3>4 - array_combine()</h3>";
       $keys = array("Name","City","Age");
       $values = array("Tirth","Rajikot",20);
       print_r(array_combine($keys,$values));

       echo "<hr><h3>5 - array_pop()</h3>";
       $num = array(10,20,30,40);
       array_pop($num);
       print_r($num):

       echo "<hr><h3>6 - array_push()</h3>";
       $num = array(10,20,30,40);
       array_push($num);
       print_r($num):

       echo "<hr><h3>7 - array_unshift()</h3>";
       $num = array(20,30,40);
       array_unshift($num,10);
       print_r($num):

       echo "<hr><h3>8 - array_shift()</h3>";
       $num = array(10,20,30,40);
       array_shift($num);
       print_r($num):
     ?>

</body>
</html>
