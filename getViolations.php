<?PHP 
        //Database Connection
    	$host = "localhost";
    	$username = "id12681546_doapplication";
    	$password = "password1";
    	$dbname="id12681546_doapplication";
    	$con = mysqli_connect($host,$username,$password,$dbname);
    	
    	$sql = "SELECT * from violation_code";
    	
    	$result = $con->query($sql);
    	    $violations = [];
            while($row = mysqli_fetch_array($result))
                {
                    array_push($violations, $row);
                }
            echo json_encode($violations);
       
    	mysqli_close($con);
    
?>