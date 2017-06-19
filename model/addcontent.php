<?php
require_once "../includes/config.php";
$dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die ("Error connecting");
for ($i = 1;$i <= 60; $i++) {
    $title = 'Titel ' . $i;
    $content = 'Content ' . $i;
    $image = 'Image ' . $i;
    $query = "INSERT INTO articles VALUES (0,'$title','$content','$image',now())";
    $result = mysqli_query($dbc,$query) or die ('Error inserting.');
}
echo 'Success!';
?>
