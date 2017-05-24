<?php
include('../models/dbconnect.php');
$arr = '';
$keys = $conn->query('SELECT * FROM links');
if ($keys->num_rows>0) {
	while($row = $keys->fetch_assoc()){
        	$arr .= $row['keyword']."<br>";
    }
}
echo $arr;
?>
