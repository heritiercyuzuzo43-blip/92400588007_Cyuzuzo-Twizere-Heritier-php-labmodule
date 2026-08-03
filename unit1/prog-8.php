<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Print Array Values</title>
</head>
<body>

<form method="post">
  <label>Enter up to 5 values:</label><br>
  <input type="text" name="values[]" placeholder="Value 1"><br>
  <input type="text" name="values[]" placeholder="Value 2"><br>
  <input type="text" name="values[]" placeholder="Value 3"><br>
  <input type="text" name="values[]" placeholder="Value 4"><br>
  <input type="text" name="values[]" placeholder="Value 5"><br><br>
  <button type="submit">Submit</button>
</form>

<?php
if (!empty($_POST['values'])) {
    $arr = array_filter($_POST['values'], function($v){ return trim($v) !== ''; });
    if ($arr) {
        echo "<h3>Array Values:</h3><ul>";
        foreach ($arr as $v) {
            echo "<li>" . htmlspecialchars($v) . "</li>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>