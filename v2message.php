
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
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="CSS/dashboardmessage.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- OUR CUSTOM JS -->
    <script src="mainjsGuardian.js"></script>
    
</head>


<!-- *PUT IT IN THE .CSS  -->
<style>
    .center {
  margin: 0;
  position: absolute;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

    .hidden{
        display: none;
    }
</style>

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
            <h2>Create message</h2>
            <!--start of message-->
    <form action="violationGuardian.php" method="POST">
    <div class="container-fluid mt-5">
        <div class="card bg-light mb-3" style="max-width: 1600px;">
        <div class="card-header">Instruction: Input the student ID number to get his/her guardian information.</div>
        
        <div class="card-body form-group">
        <div class="row">
            <!-- student -->
            <div class="col">
                <label for="Student Number">Student Number</label>
                    <input id="studin1" name="id" type="text" class="form-control" placeholder="Student Number" required>
                   <!--  <input id="dbid" name="dbid" readonly required type="hidden"> -->
                
                <label for="Student Name">Student Name</label>
                   <input id="studin2" name="fname" type="text" class="form-control" placeholder="First name" readonly required>
            </div>

            <!-- guardian -->

            <div class="col">
                <label for="Guardian Name">Guardian Name</label>
                <input id="guardianName" name="fname" style="width: 100%" type="text" class="form-control" placeholder="Guardian Name" readonly required>

                <input id="guardiandbid" name="guardiandbid" readonly required type="hidden">

                <label for="Guardian Email">Guardian Email</label>
                <input id="guardianEmail" name="email" style="width: 100%" type="email" class="form-control" placeholder="Guardian Email" readonly required>
            </div>
              
        </div>
        <!-- message -->
        <div class="row m-1">
            <label for="subject">Subject</label>
            <textarea class="form-control" id="subject" name ="subject" rows="1"  style="width: 100%" required></textarea>
        </div>

        <div class="row m-1">
            <label for="Notification">Message for the Guardian</label>
            <textarea class="form-control" id="notification" name="notification" rows="4"  style="width: 100%" required></textarea>
        </div>

         <div class="row m-1">
            <div class="col">
                <div class="input-group">
            <input id="staffid" name="staffid" type="text" class="form-control" placeholder="Staff ID" required>
                <div class="input-group-append">
                  <button id="idaddstaff" class="btn btn-outline-secondary" type="button">
                      <i class="fa fa-check"></i>
                  </button>
                </div>
            </div> 
                <input id="staffdbid" name="staffdbid" type="hidden" readonly required>
            </div>
            <div class="col">
                <div class="col">
                    <input id="staffName" name="staffName" type="text" class="form-control input-lg" placeholder="Staff Name" readonly required>
                  </div>
            </div>
             
         </div>
         <div class="row m-2" >
                <div class="container-fluid" style="margin-left: 40%">  
                    <button type="submit" class="btn btn-primary btn-md">Send</button>
                    <button type="reset" class="btn btn-danger btn-md">Clear</button>
                </div>
            </div>
</div>
</div>
</div>

    </form>
            <!--end of message-->
             
        </div>
    </div>




</body>

</html>