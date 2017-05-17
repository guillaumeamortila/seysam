<?php

include("../pdo.inc.php");

include("../user/lire_users.php");

echo "<h2>Page 1</h2>";
echo"<div>";
$data = lire_users(0,2);
var_dump($data);
echo"</div>";

echo "<h2>Page 2</h2>";
echo"<div>";
$data = lire_users(2,2);
var_dump($data);
echo"</div>";

echo "<h2>Page 3</h2>";
echo"<div>";
$data = lire_users(4,2);
var_dump($data);
echo"</div>";