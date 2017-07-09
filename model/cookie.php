<?php

session_start();
$_SESSION['amhere'] = false;


if ($_SESSION['amhere'] == false){


if (isset($_COOKIE['timesJoined']))  {
$timesJoined = $_COOKIE['timesJoined'];
$jsmsg = "Hello again, you've been here " . $timesJoined . " times.";
$timesJoined++;
$_SESSION['amhere'] = true;
  setcookie('timesJoined', $timesJoined, time() + (3600 * 24 * 7));
}  else {

  $jsmsg = "By using advanced cookie technology, we have detected that this is your first time.
            By further use of this site, you consent to us using cookies. This is just a value.
            No worries.";

 setcookie('timesJoined', 1, time() + (3600 * 24 * 7));
  $_SESSION['amhere'] = true;

            }
    }
    echo '<script> alert(' . '"' . $jsmsg . '"' . ');</script>';
?>
