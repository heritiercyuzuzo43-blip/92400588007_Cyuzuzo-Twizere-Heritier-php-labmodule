<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
         if ($conn){
            echo "Database connected sucessfully.<br>";
         }
         else{
            die("Connection Failed" . $conn->connect_error());
         }
         $sql ="UPDATE students3
               SET name='Lynda',email='lynda@gmail.com', city=' Goa ' 
               WHERE id=1235 ";
        if($conn->query($sql)){
            echo "Record Updated Successfully.";
        }
        else{
            echo "Error";
        }
        $conn->close();
        ?>        
         
</body>
</html>