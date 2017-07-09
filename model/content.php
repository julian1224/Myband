
  <?php
  require_once('requiredmedia/connectvars.php');
  $dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die ("Errorioni");

  $column = 'date'; $order = 'DESC';
      if(isset($_POST['submit_sort'])) {
        switch($_POST['sortform']) {
          case 'date_desc':$column = 'date';
                           $order = 'DESC';
                           break;
          case 'date_asc': $column = 'date';
                           $order = 'ASC';
                           break;
          case 'name_asc': $column = 'name';
                           $order = 'ASC';
                           break;
          case 'name_desc':$column = 'name';
                           $order = 'DESC';
                           break;
          case 'sort_random':
                           $column = 'rand()';
                           $order = ' ';
                           break;
                  default: $column = 'date'; $order = 'DESC'; break;
        }
      }
        if (isset($_POST['submit_search'])) {
            $searchterm = mysqli_real_escape_string($dbc, trim($_POST['searchterm']));
            $searchterm = '%' . $searchterm . '%';
        } else {
          $searchterm = '%';
        };

} else {
$query = "SELECT * FROM instantmedia WHERE description LIKE '$searchterm' ORDER BY $column $order";
$result = mysqli_query($dbc, $query) or die
 ('Error SELECTING');


  if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
      $target = $row['target'];
      $date = $row['date'];
      $username = $row['username'];
      $description = $row['description'];
      echo '<div id="post"> <img src="' . $target . '" /><br>' . 'On ' . $date . ', ' . $username . ' wrote: ' . '<br>' . '<p id="cssdescription">' . $description .'</p></div>';
          }
        }
  else {
   echo '<div id="postnull"> <img src="requiredmedia/empty.png" alt="bug off" /><br> There is nothing here. Go home. </div>';
   }
  mysqli_close($dbc);
}

?>
