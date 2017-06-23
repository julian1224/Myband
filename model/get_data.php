<?php

$query = "SELECT *
          FROM articles
          ORDER BY id DESC
          LIMIT $limit_starting_number,$results_per_page";

      $result = mysqli_query($dbc, $query) or die ('Error GET_DATA query');
      while ($item = $result->fetch_assoc()) {
        $result_list[] = $item;
      }
?>
