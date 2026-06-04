<?php
// config.php - Configuration file with variables
$siteName = "Lab Module";
$version = "1.0";
$author = "Programming Lab";

function displayInfo() {
    global $siteName, $version, $author;
    echo "Site: " . $siteName . " | Version: " . $version . " | Author: " . $author;
}
?>
