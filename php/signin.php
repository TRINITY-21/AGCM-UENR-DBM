<?php
require_once ('dbconnect.php');


$data = array();


$id = mysqli_real_escape_string($conn,$_POST['accessId']);
$password = mysqli_real_escape_string($conn, $_POST['accessPassword']);

$sql = "SELECT * FROM `membership` WHERE `accessId` = '$id' and `accessPassword` = '$password'";

$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row){
$data['response'] = 'error';
$data['message'] = "Invalid Username and Password";
}else {
    $data['response'] = 'success';
    $data['message'] = "valid username and password";
    $_SESSION['id'] = $row['accessId'];
   
}

if(mysqli_num_rows($result) > 0){
    $query = "SELECT * FROM `membership` WHERE `mem_Level` = '500'";
    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0){
        $data['export'] = "success";
    }
}

echo json_encode($data);