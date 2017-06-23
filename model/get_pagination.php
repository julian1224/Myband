<?php
$results_per_page = RESULTS_PER_PAGE;

$query = "SELECT id FROM articles";
$result = mysqli_query($dbc,$query) or die ('Query error. Fix me.');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil( $number_of_results / $results_per_page);

// Checking current page
!isset($_GET['num']) ? $page = 1 : $page = $_GET['num'];

$limit_starting_number = ($page - 1) * $results_per_page;
echo $limit_starting_number;
?>
