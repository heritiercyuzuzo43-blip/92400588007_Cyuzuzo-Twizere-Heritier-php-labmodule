<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $month = 8;
        switch($month){
            case 1:
                echo "We are in January.<br>";
                break;
            case 2:
                echo "We are in February.<br>";
                break;
            case 3:
                echo "We are in March.<br>";
                break;
            case 4:
                echo "We are in April.<br>";
                break;
            case 5:
                echo "We are in May.<br>";
                break;
            case 6:
                echo "We are in June.<br>";
                break;
            case 7:
                echo "We are in July.<br>";
                break;
            case 8:
                echo "We are in August.<br>";
                break;
            case 9:
                echo "We are in September.<br>";
                break;
            case 10:
                echo "We are in October.<br>";
                break;
            case 11:
                echo "We are in November.<br>";
                break;
            case 12:
                echo "We are in December.<br>";
                break;
            default:
                echo "Invalid input.<br>";
        }
    ?>
</body>
</html>