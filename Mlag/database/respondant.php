<?php
    include('config.php');
    // Taking all values from the form
    $name = $_POST['fname'];
    $email = $_POST['lname'];
    $subject = $_POST['subject'];
    $messages = $_POST['messages'];
    if(isset($_POST['submit'])){
    // Performing insert query execution
    // here our table name is contact
        $query = "INSERT INTO contact(username,email,subjects,messages) 
        VALUES('$name','$email','$subject','$messages')";
        $result=mysqli_query($conn,$query);
		
        if($result){
		echo "Your record has been inserted successfully";
		}
		else{
			echo "Error Please try again";
		}
    }
?>