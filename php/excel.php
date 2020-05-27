<?php
require_once('dbconnect.php');

$sql = "SELECT `id`, `firstName`, `lastName`, `otherNames`, `age`, `sex`, `programme`, `residence`, 
                 `department`, `phone`, `email`, `startDate`, `mem_Level` FROM `membership` WHERE mem_Level = '500'";

                $query = mysqli_query($conn, $sql);
 // Get data from Database

if(mysqli_num_rows($query) > 0){

$thisday = date('m-d');
$start_date = strtotime("august 20"); 
$end_date = strtotime("+60 days", $start_date); 
    while($start_date < $end_date){
        $begining = date('m-d', $start_date);
        if ($thisday === $begining ){
            
                // backup data
 
 
                $delimiter = ",";
                $filename = "AGCM" . date('Y_m_d_hisa') . ".csv"; // Create file name
                 
                //create a file pointer
                // $f = fopen('php://memory', 'w'); 
                $f = fopen('../export_files/'.$filename, "w");
                 
                //set column headers
                $fields = array('id','First Name','Last Name', 'OtherNames', 'Age', 'Sex','Programme', 'Residence', 'Department', 'Phone','Email','Start Date' );
                fputcsv($f, $fields, $delimiter);
                 
                //output each row of the data, format line as csv and write to file pointer
                while($row = $query->fetch_assoc()){
                    
                    $lineData = array($row['id'], $row['firstName'], $row['lastName'], $row['otherNames'], $row['age'], $row['sex'], $row['programme'], 
                    $row['residence'], $row['department'], $row['phone'], $row['email'], $row['startDate']);
                    fputcsv($f, $lineData, $delimiter);
                }
                 
                //move back to beginning of file
                fseek($f, 0);
                 
                //set headers to download file rather than displayed
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="' . $filename . '";');
                 
                //output all remaining data on a file pointer
                fpassthru($f);
             
            // sql to delete a record
                    $sql = "DELETE FROM `membership` WHERE `mem_Level` = '500'";

                    if (mysqli_query($conn, $sql)) {
                        $data['response'] = "success";
                    } else {
                        $data['response'] = "error";
                        $data['message'] =  "Error deleting record: " . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                            
                    }
        $start_date = strtotime('+1 day', $start_date);
    }
// Get the difference and divide into  
// total no. seconds 60/60/24 to get  
// number of days 
// echo "Difference between two dates: ". (int)($end_date - $start_date)/60/60/24;
// }
// echo json_encode($data);
}else{
    header("location:?");
}
?>