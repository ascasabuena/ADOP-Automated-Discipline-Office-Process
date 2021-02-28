<?PHP 
        //Database Connection
    	$host = "localhost";
    	$username = "id12681546_doapplication";
    	$password = "password1";
    	$dbname="id12681546_doapplication";
    	$con = mysqli_connect($host,$username,$password,$dbname);
    	
    	$sql = "SELECT * FROM `Student` WHERE `student_id`='$student_id'";
    	$result = $con->query($sql);
    
        if ($result->num_rows > 0) {
            $student = mysqli_fetch_assoc($result);
            echo json_encode($student);
        } else {
            echo json_encode(
                ["error" => "Invaild student ID."]    
            );
        }
    	mysqli_close($con);
    	
    
?>