<!DOCTYPE html>
<html lang="en">
<title>ADOP-Report Violation</title>
<link rel="icon" href="CSS/images/apclogo.png" type="image/icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="CSS/main.css"> -->
  
  <!--custom css-->
  <link rel="stylesheet" type="text/css" href="guard.css">
  
  <!--custom js-->
  <script src="copymainjs.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

  

<body>
  <div class="container-fluid" id="title">
    <img src="CSS/images/apclogo.png" style="max-width: 90px;">
    <h2>Asia Pacific College</h2>
    <h3>Report a Violation</h3>
  </div>
  <div class="card m-3 shadow-lg mb-5 bg-white rounded">
    <div class="card-body">
      <div class="card-header row m-2 p-3 pb-0"><!-- for notice phrase -->
        <p id="notice">NOTICE TO THE OFFICER IN-CHARGE</p>
          <ol>
            <li>The purpose of this notice is to document the student's violation.</li>
            <li>Please inform the student that he/she can appeal the violation notice to the Discipline office within 48 hours upon issuance, failure to do so, would mean acceptance of liability.</li>
            <li>Please confirm the informations below to the student before submitting.</li>
          </ol>
      </div>

      <form action="violation.php" method="POST">
        <div class="row"><!-- forms -->
          <div class="col"> <!-- student form -->
            <div class="col form-group" style="border-right: 2px dotted gray">
              <h6>STUDENT INFORMATION</h6>
              <br>

            <!--   <input id="studin1" name="id" type="text" class="form-control input-lg" placeholder="Student Number" required> -->
              <div class="input-group">
                <input id="studin1" name="id" type="text" class="form-control" placeholder="Student Number" required>
                <div class="input-group-append">
                  <button id="idadd" class="btn btn-outline-secondary" type="button">
                      <i class="fa fa-check"></i>
                  </button>
                </div>
              </div>  
              
              <input id="dbid" name="dbid" type="hidden" readonly required style="margin-top: 5px">
              <input id="studin2" name="fname" type="text" class="form-control" placeholder="First name" readonly required>
              <input id="studin3" name="lname" type="text" class="form-control" placeholder="Last name" readonly required>
              <input id="studin4" name="course" type="text" class="form-control" placeholder="Course & Section" readonly required>
              <input id="studin5" name="email" type="email" class="form-control" placeholder="Email" readonly required>
              <input id="studin6" name="contact_no" type="text" class="form-control" placeholder="number" readonly required hidden>
              
            </div>
          </div>
          <div class="col"><!-- violation form -->
            <h6>VIOLATION INFORMATION</h6>
            <div class="form-check form-check-inline">
              <label class="form-check-label"> Please refer to student handbook for the offense details </label>
            </div>
            <div class="form-group row">
              <div class="col col-md-10 pr-0"><!-- dropdown vio -->
                <select class="form-control" id="dropdownOthers" name="dropdownOthers">
                  <option value="">Select a violation</option>              
                </select>
              </div>
              <div class="col"><!-- add button -->
                <a href="#" id='vioadd' class="btn btn-info d-flex justify-content-center d-md-table mx-auto">ADD</a>
              </div>
              
            </div>
            <div class="row" id="violation_container">
              <!-- added violation container -->
            </div>
            <textarea class="form-control" name ="details" id="details" rows="4" placeholder=" Please add some specific details about the violation. ex. date/time that the event happen before reported, specific violated rules" required></textarea>

            <div class="row"> <!-- staff information form -->
              <div class="col">
                <!-- <input id="staffid" name="staffid" type="text" class="form-control input-lg" placeholder="Staff ID" required> -->

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
                <input id="staffName" name="staffName" type="text" class="form-control input-lg" placeholder="Staff Name" readonly required>
              </div>
            </div>

            <div class="row" id="termdate"> <!-- term and date form-->
              <div class="col">
                <select class="form-control" id="term" name = "term" required>//changed id from dropdownTerm
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
        <div class="row mt-2"><!-- for buttons -->
          <input class="btn btn-success btn-block" type="submit" id="button" name =" Submit" value="Submit">
          <input class="btn btn-danger btn-block" type="reset" id="button" name =" Submit" value="Reset">
        </div>
      </form>
    
    </div>
  </div>
<script>

</script>
  <!-- js for getting the current date -->
  <script type="text/javascript">
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#today").value = today;
  </script>
  
  <!--- script for sweet alert2-->

</body>




</html>

