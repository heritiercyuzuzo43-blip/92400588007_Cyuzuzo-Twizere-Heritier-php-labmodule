<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       if (isset($_POST['create'])){
        $_SESSION['username'] = $_POST['username'];
        echo "<h1>Session created...! <br> Username: " . $_SESSION['username'] . "</h1>";
       }
       if (isset($_POST['destroy'])){
        session_unset();
        session_destroy();
        echo "<h1>Session destroyed!</h1>";
       }
       echo "<br><a href='itup56_1session.html'> Go To Back </a>";
    ?>
</body>
</html>