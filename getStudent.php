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
    	
    	$sql = "SELECT ss.id, s.fname, s.lname, s.email, s.contact_no, c.name as course, sc.code as section FROM student AS s
                LEFT JOIN section_student AS ss ON s.id=ss.student_id
                LEFT JOIN section as sc ON sc.id=ss.section_id
                LEFT JOIN course as c ON c.id=sc.course_id
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