<?PHP 
    //check if id exists in URL
    if(isset($_GET['employee_id'])) {
        //Database Connection
    	$host = "localhost";
    	$username = "id12681546_doapplication";
    	$password = "password1";
    	$dbname="id12681546_doapplication";
    	$con = mysqli_connect($host,$username,$password,$dbname);
    	
    	$employee_id = $_GET['employee_id'];
    	
    	$sql = "SELECT id,fname,lname from staff WHERE employee_id = $employee_id";
       
    	$result = $con->query($sql);
    
        if ($result->num_rows > 0) {
            $employee = mysqli_fetch_assoc($result);
            echo json_encode($employee);
        } else {
            echo json_encode(
                ["error" => "Invaild Employee ID."]    
            );
        }
    	mysqli_close($con);
    } else {
        echo json_encode(
            ["error" => "Error: No Employee ID."]    
        );
    }
    
?>