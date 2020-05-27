<?php
 require ('dbconnect.php');

 $data = array();
 $search = mysqli_real_escape_string($conn, $_POST['search']);

//  if($search == ""){



//  }else{

 $sql = "SELECT * FROM membership WHERE CONCAT(id, firstName, lastName, IFNULL(otherNames, ''), age, sex, programme, residence, 
 IFNULL(department, ''), phone, email) LIKE '%$search%'";

$result = mysqli_query($conn, $sql);
// var_dump(mysqli_fetch_assoc($result));

if (mysqli_num_rows($result) > 0) {
    $data['response'] = "success";
    $search  = array();
    while($row = mysqli_fetch_assoc($result)) {
        $log = [
            'firstname' => $row['firstName'],
            'lastName' => $row['lastName'],
            'othernames' => $row['otherNames'],
            'age' => $row['age'],
            'sex' => $row['sex'],
            'programme' => $row['programme'],
            'residence' => $row['residence'],
            'department' => $row['department'],
            'phone' => $row['phone'],
            'email' => $row['email']
        ];
        array_push($search,$log);
        $data["search"] = $search;
    }
}else{
    $data['response'] = "error";
    $data['message'] = "No Record Found";
}


echo json_encode($data);
//  }