<?PHP 
        //Database Connection
    	$host = "localhost";
    	$username = "id12681546_doapplication";
    	$password = "password1";
    	$dbname="id12681546_doapplication";
    	$con = mysqli_connect($host,$username,$password,$dbname);
    	$sql = "SELECT * from violation";
    	$result = $con->query($sql);
    	if ($result -> num_rows > 0 ) {
    	    while ($row = $result -> fetch_assoc()){
    	        echo "<td>".$row["student_id"]."</td><td>".$row["violation_code_id"]."</td><td>".$row['status_id']."</td><td>".$row['term_id']."</td><td>".$row['remarks']."</td>";
    	    }
    	}
        else {
            echo "0 result";
        }
        
        mysqli_close($con);
?>