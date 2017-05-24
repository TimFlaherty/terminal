<?php
include('../models/dbconnect.php');
$x = $_REQUEST["x"];
$link = $conn->query("SELECT * FROM links WHERE keyword = '".$x."'");
if ($link->num_rows>0) {
	while($row = $link->fetch_assoc()){
        echo $row['link'];
    }
}
?>