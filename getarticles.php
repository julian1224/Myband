<?php

$result_list = array();

$sql = 'SELECT * FROM articles';

$result = $mysqli->query($sql);

while($result->fetchassoc()) {
  $result_list[] =
}
