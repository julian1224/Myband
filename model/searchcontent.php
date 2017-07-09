<?php
if (isset($searchterm)){
$query = "SELECT * FROM myband WHERE content LIKE '$searchterm'
ORDER BY $column $sortorder";
}
?>
