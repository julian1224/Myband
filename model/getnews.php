<?php


$query = "SELECT *
          FROM news
          ORDER BY id DESC";

      $result = mysqli_query($dbc, $query) or die ('Error GET_DATA query');
      while ($item = $result->fetch_assoc()) {
        $result_news[] = $item;
      }
?>
