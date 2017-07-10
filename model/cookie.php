<?php

session_start();


if (isset($_SESSION['amhere'])){
// if session exists
// do nothing
} else {
// check for cookie
  if (isset($_COOKIE['timesJoined']))  {
    // if cookie exists, timesJoined + 1
    // restore cookie from last time
    // create sassion amhere to not run this script again
  $timesJoined = $_COOKIE['timesJoined'];
  $jsmsg = "Hello again, you've been here " . $timesJoined . " times.";
  $timesJoined++;
  $_SESSION['amhere'] = true;
    setcookie('timesJoined', $timesJoined, time() + (3600 * 24 * 7));
    echo '<script> alert(' . '"' . $jsmsg . '"' . ');</script>';
  } else {
    // in which case there is no cookie, pop warning
    $jsmsg = "By using advanced cookie technology, we have detected that this is your first time.
              By further use of this site, you consent to us using cookies. This is just a value.
              No worries.";

              echo '<script> alert(' . '"' . $jsmsg . '"' . ');</script>';
              // make cookie
               setcookie('timesJoined', 1, time() + (3600 * 24 * 7));
              // prevent further script running
                $_SESSION['amhere'] = true;
  }
}
?>
