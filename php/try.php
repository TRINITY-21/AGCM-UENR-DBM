<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yaw";
 
 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$query = mysqli_query($conn, 'select * from customers'); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "significant_" . date('Y_m_d') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('id','name', 'img');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['id'], $row['name'], $row['image']);
        fputcsv($f, $lineData, $delimiter);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 
 
