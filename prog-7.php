<!DOCTYPE html>
<html>
<head>
    <title>Include and Require</title>
</head>
<body>

<?php
// Using include
echo "<h2>Using include()</h2>";
include "header.php";

// Using include with a config file
include "config.php";
echo "Site: " . $siteName . "<br>";

// Using require
echo "<h2>Using require()</h2>";
require "footer.php";

// Using require_once
echo "<h2>Using require_once()</h2>";
require_once "footer.php";
?>

</body>
</html>