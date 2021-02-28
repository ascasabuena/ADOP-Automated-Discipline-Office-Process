<?PHP 
    //check if id exists in URL
    if(isset($_GET['student_number'])) {
        //Database Connection
    	$host = "localhost";
    	$username = "id12681546_doapplication";
    	$password = "password1";
    	$dbname="id12681546_doapplication";
    	$con = mysqli_connect($host,$username,$password,$dbname);
    	
    	$student_id = $_GET['student_number'];
    	//echo $student_id;

        $sql = "SELECT s.fname, s.lname FROM student AS s
                WHERE s.student_number='$student_id'";

       
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
    } else {
        echo json_encode(
            ["error" => "Error: No student ID."]    
        );
    }
    
?>