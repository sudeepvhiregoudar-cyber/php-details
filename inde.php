<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>

<h1>PHP String Functions</h1>

<?php

$string = "Hello World! Welcome to PHP string functions.";

echo "<p><b>Original String:</b> $string</p>";

echo "<p><b>1. Length of String:</b> " . strlen($string) . "</p>";

echo "<p><b>2. Position of 'Hello':</b> " . strpos($string, "Hello") . "</p>";

echo "<p><b>3. Replace World with Universe:</b> "
    . str_replace("World", "Universe", $string) . "</p>";

echo "<p><b>4. Lowercase:</b> " . strtolower($string) . "</p>";

echo "<p><b>5. Uppercase:</b> " . strtoupper($string) . "</p>";

echo "<p><b>6. Capitalize Each Word:</b> "
    . ucwords($string) . "</p>";

echo "<p><b>7. Remove Whitespace:</b> "
    . trim($string) . "</p>";

?>

</body>
</html>