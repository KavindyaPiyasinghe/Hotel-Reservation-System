<?php
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','reg');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contacts(fName, lName, email, mobile, message)
         values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $fName, $lName, $email, $mobile, $message);
		$stmt->execute();
		echo "Message Sent...";
		$stmt->close();
		$conn->close();
	}
?>