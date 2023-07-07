<?php
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];

//Database connection 
$con = new mysqli("localhost","root","","Goldenlions");

if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}


else{
    $stmt = $con->prepare("select * from booking_details where firstname = ?");
    $stmt->bind_param("s", $firstname);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    
    if($stmt_result->num_rows > 0){
          $data = $stmt_result->fetch_assoc();
          if($data['email'] === $email){ echo welcome
}
    }
    
else {
    echo incorrect}?>


