<?php 
header("Content-Type: application/json");
include "./data/data.php";

echo json_encode($arr_dischi);
?>