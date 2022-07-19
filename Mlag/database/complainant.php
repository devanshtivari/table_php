<?php
    include('config.php');
    // Taking all values from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $medical_speciality = $_POST['medical_speciality'];
    $year = $_POST['year'] + 1949;
    $court = $_POST['court'];
    $case_title = $_POST['case_title'];
    $case_summary = $_POST['case_summary'];
    if(isset($_POST['submit'])){
    // Performing insert query execution
    // here our table name is contact
        $query = "INSERT INTO complainant(name,email,medical_speciality,year,court,case_title,case_summary) 
        VALUES('$name','$email','$medical_speciality','$year','$court','$case_title','$case_summary')";
        $result=mysqli_query($conn,$query);
		
        if($result){
		echo "Your record has been inserted successfully";
		}
		else{
			echo "Error Please try again";
		}
    }
?>