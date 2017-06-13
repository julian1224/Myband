<?php

$query "SELECT * FROM articles";
$result = mysqli_query($dbc,$query) or die ('Query error. Fix me.');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil( $number_of_results / $results_per_page);

// Checking current page
!isset($_GET['page']) ? $page = 1 : $page = $_GET['page'];

$limit_starting_number = ($page - 1) * $results_per_page;


?>
