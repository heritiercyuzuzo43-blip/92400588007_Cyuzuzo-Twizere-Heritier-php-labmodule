<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo "<h3>1. strlen()</h3>";
       echo "String: $str <br>";
       echo "Length = " . strlen($str);

       echo "<hr>";

       echo "<h3>2. strpos()</h3>";
       echo "Position of 'PHP' = " . strpos($str, "PHP");

       echo "<hr>";

       echo "<h3>3. str_word_count()</h3>";


       echo "<h3>4. strrev()</h3>";
       echo "Reverse String = " . strrev($str);

       echo "<hr>";

       echo "<h3>5. str_replace()</h3>";
       echo str_replace("PHP" , "Jave" , $str);

       echo "<hr>";

       echo "<h3>6. strtolower()</h3>";
       echo strtolower($str)

       echo "<hr>"

       echo "<h3>7. strtoupper()</h3>";
       echo strtoupper($str)

       echo "<hr>"

       ?>


</body>
</html>