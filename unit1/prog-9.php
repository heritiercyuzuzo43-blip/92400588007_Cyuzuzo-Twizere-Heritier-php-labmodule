<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Reverse Array Values</title>
</head>
<body>

<form method="post">
  <label>Enter values (leave blanks if not used):</label><br>
  <input type="text" name="values[]" placeholder="Value 1"><br>
  <input type="text" name="values[]" placeholder="Value 2"><br>
  <input type="text" name="values[]" placeholder="Value 3"><br>
  <input type="text" name="values[]" placeholder="Value 4"><br>
  <input type="text" name="values[]" placeholder="Value 5"><br><br>
  <button type="submit">Reverse</button>
</form>

<?php
if (!empty($_POST['values'])) {
    // remove empty inputs and trim values
    $arr = array_filter(array_map('trim', $_POST['values']), function($v){ return $v !== ''; });
    if ($arr) {
        $rev = array_reverse($arr);
        echo "<h3>Reversed Values:</h3>\n<ul>";
        foreach ($rev as $v) {
            echo "<li>" . htmlspecialchars($v) . "</li>\n";
        }
        echo "</ul>";
    } else {
        echo "<p>No values provided.</p>";
    }
}
?>

</body>
</html>