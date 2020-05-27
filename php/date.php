<?php
require('dbconnect.php');

if(isset($_SESSION['id'])){
    // var_dump($_SESSION['id']);
// once a year
$thisday = date('m-d');
// Declare two dates 
$start_date = strtotime("august 20"); 
$end_date = strtotime("+60 days", $start_date); 
    while($start_date < $end_date){
        $begining = date('m-d', $start_date);
        if ($thisday === $begining ){
            $data = array();
            
            //update level yearly 

            $thisYeaar = date('Y');
            $intThisYear = (int)$thisYeaar;
            
            $sql ="SELECT startDate, id FROM membership ";
            $result = mysqli_query($conn, $sql);
            
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)) {
                    $startYear = $row['startDate'];
                    $Id = $row['id'];
                    $intStartYear = (int)$startYear;
                    $yearsSpent = $intThisYear - $intStartYear; 
                    
                    switch($yearsSpent){
                        case 0:
                        $level = "100";
                        break;
                        case 1:
                        $level = "200";
                        break;
                        case 2:
                        $level = "300";
                        break;
                        case 3:
                        $level = "400";
                        break;
                        case 4 :
                        $level= "500";
                        break;
                        case 5 :
                        $level= "500";
                        break;
                        default:
                        $level = "";
                    }
                    $sql = "UPDATE membership set mem_Level = '$level' where id = $Id ";
                    if (mysqli_query($conn,$sql)){
                        $data['response'] = "success";
                        unset($_SESSION['id']);
                    }else{
                        $data['response'] = "error"; 
                    }
                }
            
            }else{
                $data['response'] = "error"; 
                $data['message'] = "no results found"; 

            } //end of level update

            
        }
        $start_date = strtotime('+1 day', $start_date);
    }
// ***
echo json_encode($data);
unset($_SESSION['id']);
}





?>