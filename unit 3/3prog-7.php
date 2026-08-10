<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?phpsession_start();
    $conn = new mysqli_connect("localhost","root","","loginb");
    $username = $_POST['username'];
    $passwpord = $_POST['password'];
    $sql ="SELECT * FROM users
          WHERE username='$username'
          ABD password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) >0)     
{
    $_SESSION["username"] = $username;
    header("Loation: itu3p7_3HOME.php");
    exit();
}
else
    {
        echo "Username or Password wrong <br><br>";
        echo"<a href='itu3p7_1Login.html'>Go To Login</a>";
    }
    $conn->close();
    ?>
</body>
</html>