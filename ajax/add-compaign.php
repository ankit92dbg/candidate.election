<?php
session_start();
include ('../config/conn.php');
$error = '';

$leader_id = $_POST['leader_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$query = "select * from compaign where title='$title' and leader_id='$leader_id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
$response = new stdClass();
if(mysqli_num_rows($result)==0){
    $query = "INSERT INTO compaign (leader_id,title,description)
    VALUES ('$leader_id','$title','$description')
    ";
    $result = mysqli_query($conn,$query);
    $response->error = "";
    $response->message = "Compaign added successfully.";
}else{
    $response->error = "This Compaign already exists";
}
echo json_encode($response);  