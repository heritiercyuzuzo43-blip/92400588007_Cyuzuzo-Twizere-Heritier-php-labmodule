<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Merge Arrays</title>
</head>
<body>

<form method="post">
  <label>Array 1 (comma separated):</label><br>
  <input type="text" name="a1" style="width:300px" placeholder="e.g. 1, 2, 3"><br>
  <label>Array 2 (comma separated):</label><br>
  <input type="text" name="a2" style="width:300px" placeholder="e.g. a, b, c"><br><br>
  <button type="submit">Merge</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a1 = array_filter(array_map('trim', explode(',', $_POST['a1'] ?? '')), function($v){ return $v !== ''; });
    $a2 = array_filter(array_map('trim', explode(',', $_POST['a2'] ?? '')), function($v){ return $v !== ''; });
    $merged = array_merge($a1, $a2);
    if ($merged) {
        echo "<h3>Merged Array:</h3><ul>";
        foreach ($merged as $v) echo "<li>" . htmlspecialchars($v) . "</li>";
        echo "</ul>";
    } else {
        echo "<p>No values provided.</p>";
    }
}
?>

</body>
</html>