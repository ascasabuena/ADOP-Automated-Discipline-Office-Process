<?PHP 
        //Database Connection
        $host = "localhost";
        $username = "id12681546_doapplication";
        $password = "password1";
        $dbname="id12681546_doapplication";
        $con = mysqli_connect($host,$username,$password,$dbname);
        $sql = "SELECT 
                    v.id as violation_id,
                    v.created_at as violation_created_at,
                    v.remarks as violation_remarks,
                    s.fname as student_fname,
                    s.lname as student_lname, 
                    s.student_number as student_student_number,
                    c.name as course_name,
                    sc.code as section_code,
                    vc.code as violation_code_code,
                    g.fname as guardian_fname,
                    g.lname as guardian_lname,
                    sf.fname as staff_fname,
                    sf.lname as staff_lname,
                    st.name as status_name
                FROM `violation` as v 
                LEFT JOIN section_student as ss ON ss.id = v.section_student_id
                LEFT JOIN student as s ON s.id = ss.student_id
                LEFT JOIN violation_code as vc ON vc.id = v.violation_code_id
                LEFT JOIN section as sc ON sc.id = ss.section_id
                LEFT JOIN course as c ON c.id = sc.course_id
                LEFT JOIN status as st ON st.id = v.status_id
                LEFT JOIN guardian as g ON g.id = s.guardian_id
                LEFT JOIN staff as sf ON sf.id = v.staff_id";
        $result = $con->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>ADOP-dashboard</title>
    <link rel="icon" href="CSS/images/apclogo.png" type="image/icon">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <!-- datatables js -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <!-- DATATABLE NOT WORKING IF THIS SCRIPT IS CALLED -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="dashboard.js"></script>
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="CSS/dashboard.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- OUR CUSTOM JS -->
    <script src="javascript.js"></script>

</head>

<body>

    <!-- sidebar -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="CSS/images/apclogo.png" style="width:50px; margin-left: 40%;">
                <h3 id="title" >Asia Pacific College</h3>
            </div>

           <ul class="list-unstyled components">
                <p id="title">Discipline Office</p>

                <hr>
                <li>
                    <a href="v2daily.php"><i class="fa fa-book"></i>  Violation Reports</a>

                </li>
                <li>
                    <a href="v2add.php"><i class="fa fa-plus-square"></i>  Add Violation</a>
                </li>
                <li>
                    <a href="v2message.php"><i class="fa fa-envelope"></i>  Create Message</a>
                </li>
                <li>
                    <a href="v2stats.php"><i class="fa fa-table"></i>  Statistics</a>
                </li>
            </ul>
        </nav>
        <!-- end of sidebar -->

        <!-- Page Content  -->
        <div id="content">
            <h2>Violation Reports</h2>
             <!-- start of datatable -->
              <table id="table_id" class="display" style="width: 100%">
               <thead>
                <tr>
                  <th>#</th>
                  <th>status</th>
                  <th>ID number</th>
                  <th>Name</th>
                  <th>Course/Section</th>
                  <th>Name of Guardian</th>
                  <th>Violation</th>
                  <th>Remarks</th>
                  <th>Reported by</th>
                  <th>Date/Time</th>
                  <th>Action</th>     
                </tr>
               </thead>
            <?php
                    while($row = mysqli_fetch_array($result)){
                        echo'
                        <tr>
                            <td>'.$row["violation_id"].'</td>
                            <td>'.$row["status_name"].'</td>
                            <td>'.$row["student_student_number"].'</td>
                            <td>'.$row["student_lname"].' , '.$row["student_fname"].'</td>
                            <td>'.$row["course_name"].'-'.$row["section_code"].'</td>
                            <td>'.$row["guardian_lname"].' , '.$row["guardian_fname"].'</td>
                            <td>'.$row["violation_code_code"].'</td>
                            <td>'.$row["violation_remarks"].'</td>
                            <td>'.$row["staff_lname"].' , '.$row["staff_fname"].'</td>
                            <td>'.$row["violation_created_at"].'</td>
                            <td>' . ($row["status_name"]=="canceled" ? 
                            '<form action = "updateStatusAccepted.php" method = "POST">
                                    <input name = "status_id" type = "hidden" value = '.$row["violation_id"].'></input>
                                    <button class="btn btn-warning" name = "cancel_button" id="cancel-'.$row["violation_id"].'">Accept</button>
                                </form> ' 
                            :  
                            
                            '<form action = "updateStatusCancelled.php" method = "POST">
                                    <input name = "status_id" type = "hidden" value = '.$row["violation_id"].'></input>
                                    <button class="btn btn-danger" name = "cancel_button" id="cancel-'.$row["violation_id"].'">Cancel</button>
                                </form> '
                                
                                ) . '
                               
                               
                                
                            </td>
                        </tr>
                        ';
                    }
            ?>
            </table>
              <!-- end of datatable -->


  
        </div>
    </div>




</body>

</html>