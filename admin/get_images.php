<?php
include('../config/dbcon.php');

$sql = "SELECT * FROM home_slider";
$result = $conn->query($sql);

$images = array();

while ($row = $result->fetch_assoc()) {
    $baseURL = "http://localhost/diploma_Final_year_project/";
    $images[] = $baseURL . $row['image'];
    
}

echo json_encode($images);

$conn->close();
?>
