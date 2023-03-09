<?php 
session_start();
if (array_key_exists("submit1", $_POST)) {

include('DataLoRe.php');  

$name = $_POST['name1'];
$file = $_POST['file1'];
$timestart = date("H:i", strtotime($_POST['timestart1']));
$timeend = date("H:i", strtotime($_POST['timeend1']));
$input_time1 = $_POST['timestart1'];
$input_time2 = $_POST['timeend1'];
$timestamp1 = strtotime($input_time1);
$timestamp2 = strtotime($input_time2);
$picture = $_POST['picture1'];
$day = $_POST['day1']; 
$score = $_POST['score1'];
$time_diff = $timestamp2 - $timestamp1;
$hour_diff = floor($time_diff / 3600);
$minute_diff = floor(($time_diff % 3600) / 60);

$sql = "INSERT INTO `art` (`name`, `file`, `picture`, `timestart`, `day`, `collect_alltime`, `score`, `timeend`) 
        VALUES ('$name', '$file', '$picture', '$timestart', '$day', '$hour_diff:$minute_diff:00', '$score', '$timeend')";

if (mysqli_query($conn, $sql)) {
    header("Location: Home1.php");  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>