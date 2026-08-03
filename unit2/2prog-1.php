<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type= text name= uname[2]><br><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
<?php
    $num = $_GET['uname']; 
    echo "<h3>Orginal Array:</h3>";
    foreach($num as $val){
        echo $val . "<br>";
    }
    echo "<h3>Reversed Array:</h3>";
    $reversed = array_reverse($num);
    foreach($reversed as $val){
        echo $val . "<br>";
    }
?>