
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
    <link rel="stylesheet" href="CSS/dashboard.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- OUR CUSTOM JS -->
    <script src="mainjs.js"></script>

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
            <h2>Add a violation record</h2>
            <!--start of addvio -->
            <div class="shadow-lg p-3 bg-white rounded container" id="main">
          <!-- <nav class="navbar navbar-light bg-light" id="header">
        
            <img src="CSS/images/11.png" id="logo">
            <h5>ASIA PACIFIC COLLEGE </h5>
        
            <img src="CSS/images/12.png" id="logo" >
        
          </nav>-->
        
        
          <p style="color:black;">NOTICE TO THE OFFICER IN-CHARGE</p>
          <ol style="margin-top: -20px;">
            <li>The purpose of this notice is to document the student's violation.</li>
            <li>Please inform the student that he/she can appeal the violation notice to the Discipline office within 48 hours upon issuance, failure to do so, would mean acceptance of liability.</li>
            <li>Please confirm the informations below to the student before submitting.</li>
          </ol>
        
          <hr>
        
          <form action="v2violation.php" method="POST">
            <div class="form-row" id="inputs">
              <!-- first column -->
              <div class="col form-group" style="border-right: 2px dotted gray">
                <h6>STUDENT INFORMATION</h6>
                <br>
                <input id="studin1" name="id" type="text" class="form-control input-lg" placeholder="Student Number" required>
                <input id="dbid" name="dbid" type="hidden" readonly required>
                <input id="studin2" name="fname" type="text" class="form-control" placeholder="First name" readonly required>
                <input id="studin3" name="lname" type="text" class="form-control" placeholder="Last name" readonly required>
                <input id="studin4" name="course" type="text" class="form-control" placeholder="Course & Section" readonly required>
                <input id="studin5" name="email" type="email" class="form-control" placeholder="Email" readonly required>
        
        
              </div>
        
              <!-- second column -->
              <div class="col">
                <h6>VIOLATION INFORMATION</h6>
                
                <div class="form-check form-check-inline">
                  <label class="form-check-label"> Please refer to student handbook for the offense details </label>
                </div>  
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-11 pr-0">
                            
                            <select class="form-control" id="dropdownOthers" name="other_violation">
                                
                                <option value="">Select a violation</option>
                                
                            </select>
                        </div>
                        
                        <div class="col-md-1 p-0">
                            
                            <a href="#" id='vioadd' class="btn btn-info">ADD</a>
                        
                        </div>
                        
                    </div>
                    <div class="row" id="violation_container">
                        
                    </div>
                </div>
                <!-- checkbox end -->
        
                 <textarea class="form-control" name ="details" id="details" rows="4" placeholder=" Please add some specific details about the violation" required></textarea>
        
                <div class="row">
                  <div class="col">
                    <input id="staffid" name="staffid" type="text" class="form-control input-lg" placeholder="Staff ID" required>
                    <input id="staffdbid" name="staffdbid" type="hidden" readonly required>
                    
                  </div>
                  <div class="col">
                    <input id="staffName" name="staffName" type="text" class="form-control input-lg" placeholder="Staff Name" readonly required>
                  </div>
                </div>
        
                  <div class="row" id="termdate">
                  <div class="col">
                    <select class="form-control" id="dropdownTerm" name = "term" required>
                    <option value="">Select current term</option>
                    <option value="1">Term 1</option>
                    <option value="2">Term 2</option>
                    <option value="3">Term 3</option>
                    </select>
                    <!-- <input id="term" name="term" type="Number" min="1" max="3" class="form-control input-lg" placeholder="Term" required> -->
                  </div>
                  <div class="col">
                    <input id="today" name="today" type="date" class="form-control input-lg" required>
                  </div>
                </div>
              </div>
        
            </div>
                <!-- submit start -->
          <div style="align-content: center; margin-top: 15px;">
             
            <input class="btn btn-success btn-block" type="submit" id="button" name =" Submit" value="Submit">
            <input class="btn btn-danger btn-block" type="reset" id="button" name =" Submit" value="Reset">
        
        
          </div>
            <!-- submit end -->
          </form>
        
        </div>
        
        <script type="text/javascript">
        
          let today = new Date().toISOString().substr(0, 10);
          document.querySelector("#today").value = today;
          
        </script>
            
            <!--end of addvio -->
             

        </div>
    </div>




</body>

</html>