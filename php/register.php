<?php
require ('dbconnect.php');
$data = array();
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$sname = mysqli_real_escape_string($conn, $_POST['sname']);
$othernames = mysqli_real_escape_string($conn, $_POST['othernames']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$sex = mysqli_real_escape_string($conn, $_POST['sex']);
$programme = mysqli_real_escape_string($conn, $_POST['programme']);
$residence = mysqli_real_escape_string($conn, $_POST['residence']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$department = mysqli_real_escape_string($conn, $_POST['department']);
$startDate = date('Y');

if (!$othernames && !$department){
$sql = "INSERT INTO `membership`(`id`, `firstName`, `lastName`, `otherNames`, `age`, `sex`, `programme`, `residence`, `department`, `phone`, `email`,  `startDate`, 
`accessId`, `accessPassword`) VALUES (null,'$fname','$sname',null,$age,'$sex','$programme','$residence',null,'$phone','$email', '$startDate' ,null,null)";
 if (mysqli_query($conn, $sql)) {
    $data['response'] = 'success';
    $data['message'] = "registered"; 

} else {
    $data['response'] = "error";
    $data['message'] =  "Error getting data";
   
}

}elseif (!$othernames) {
    $sql = "INSERT INTO `membership`(`id`, `firstName`, `lastName`, `otherNames`, `age`, `sex`, `programme`, `residence`, `department`, `phone`, `email`, `startDate`, 
`accessId`, `accessPassword`) VALUES (null,'$fname','$sname',null,$age,'$sex','$programme','$residence','$department','$phone','$email','$startDate',null,null)";
 if (mysqli_query($conn, $sql)) {
    $data['response'] = 'success';
    $data['message'] = "registered"; 

} else {
    $data['response'] = "error";
    $data['message'] =  "Error getting data";
   
}
}elseif (!$department) {
    $sql = "INSERT INTO `membership`(`id`, `firstName`, `lastName`, `otherNames`, `age`, `sex`, `programme`, `residence`, `department`, `phone`, `email`, `startDate`, 
`accessId`, `accessPassword`) VALUES (null,'$fname','$sname','$othernames',$age,'$sex','$programme','$residence',null,'$phone','$email','$startDate',null,null)";
 if (mysqli_query($conn, $sql)) {
    $data['response'] = 'success';
    $data['message'] = "registered"; 

} else {
    $data['response'] = "error";
    $data['message'] =  "Error getting data";
   
}
}else {
    $sql = "INSERT INTO `membership`(`id`, `firstName`, `lastName`, `otherNames`, `age`, `sex`, `programme`, `residence`, `department`, `phone`, `email`, `startDate`, 
`accessId`, `accessPassword`) VALUES (null,'$fname','$sname','$othernames',$age,'$sex','$programme','$residence','$department','$phone','$email','$startDate' ,null,null)";
    if (mysqli_query($conn, $sql)) {
        $data['response'] = 'success';
        $data['message'] = "registered"; 
    
    } else {
        $data['response'] = "error";
        $data['message'] =  "Error getting data";
       
    }
}
echo json_encode($data);