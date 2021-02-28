<?PHP 
    $host = "localhost";
    $username = "id12681546_doapplication";
    $password = "password1";
    $dbname="id12681546_doapplication";
    $con = mysqli_connect($host,$username,$password,$dbname);
    
    $sql = "SELECT d.name, count(*) as number FROM violation as v LEFT JOIN violation_code as vc on vc.id = v.violation_code_id LEFT JOIN section_student as ss ON ss.id=v.section_student_id LEFT JOIN section as sc ON sc.id = ss.section_id LEFT JOIN course as c ON c.id = sc.course_id LEFT JOIN department as d ON d.id = c.department_id GROUP BY d.name"; // count all the violation per department but exclude the security department
    
    $sqlbar = "SELECT vc.description, v.violation_code_id, count(*) as number FROM violation as v LEFT JOIN violation_code as vc on vc.id = v.violation_code_id GROUP BY v.violation_code_id,vc.description order by number desc limit 10";//count all the violation per violation code and get the top 10 violation code for display
    
    $sqlline = "SELECT s.name, count(*) as number FROM violation as v LEFT JOIN status as s ON s.id = v.status_id GROUP by s.name";// count the total number of accepted violation per day vs the total number of cancelled violation per day //edit
    
    $sqlarea = "SELECT CAST(created_at AS DATE), count(*) as number FROM violation GROUP BY CAST(created_at AS DATE) order by created_at desc limit 10 ";//count the total number of violation per month and display the 5 months from the current month

  
    $result = $con->query($sql);
    $resultbar = $con->query($sqlbar);

    $resultline = $con->query($sqlline);
    $resultnewpie = $con->query($sqlline);
    
    $resultarea = $con->query($sqlarea);
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

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
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
    
    <!-- JsPDF library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    
    <!-- CHART JS -->
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
        <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(barChart);
        google.charts.setOnLoadCallback(pieChart);
        google.charts.setOnLoadCallback(newpieChart);
        google.charts.setOnLoadCallback(areaChart);

    //DRAW BAR CHART
        function barChart() {
        // Create the data table.
        var data = new google.visualization.arrayToDataTable([
            ['violation code','total number of record'],
            <?php
                while($row = mysqli_fetch_array($resultbar))
                {
                    echo "['".$row["description"]."',".$row["number"]."],";
                }
            ?>
        ]);
        
        // Set chart options
        var options = {
            'title':'Most Violated Rule',
            bar: {groupWidth: "70%"},
            legend: { position: "top" },
            height:800,
            chartArea: {'width': '70%', 'height': '80%'},
        };
        
        // Instantiate and draw our chart, passing in some options.
        var chart1 = new google.visualization.BarChart(document.getElementById('barchart'));


        chart1.draw(data, options);
        }

        // DRAW PIE CHART
        function pieChart() {
        var data = new google.visualization.arrayToDataTable([
            ['name','Number'],
            <?php
                while($row = mysqli_fetch_array($result))
                {
                    echo "['".$row["name"]."',".$row["number"]."],";
                }
            ?>
        ]);
        
        // Set chart options
        var options = {
            'title':'Violation Percentage per School',
            is3D: true,
        };
        
        // Instantiate and draw our chart, passing in some options.
        var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));
        

        
        chart1.draw(data, options);
        }

        // DRAW newpiechart CHART
        function newpieChart() {
        var data = new google.visualization.arrayToDataTable([
            ['name','Number'],
            <?php
                while($row = mysqli_fetch_array($resultnewpie))
                {
                    echo "['".$row["name"]."',".$row["number"]."],";
                }
            ?>
        ]);
        
        // Set chart options
        var options = {
            'title':'Accepted and Cancellled violations',
            is3D: true,
        };
        
        // Instantiate and draw our chart, passing in some options.
        var chart1 = new google.visualization.PieChart(document.getElementById('newpiechart'));


        chart1.draw(data, options);
        }

        
                // DRAW AREA CHART
        function areaChart() {
        var data = new google.visualization.arrayToDataTable([
            ['Date','Number of reported violation'],
            <?php
                while($row = mysqli_fetch_array($resultarea))
                {
                    echo "['".$row["CAST(created_at AS DATE)"]."',".$row["number"]."],";
                }
            ?>
        ]);
        
        // Set chart options
        var options = {
            title:'Number of violation per day in the current week',
            hAxis: {title: 'Date',  textStyle : { fontSize: 10}},
            vAxis: {minValue: 0},
            legend: { position: 'top' },
        };
        
        // Instantiate and draw our chart, passing in some options.
        var chart1 = new google.visualization.AreaChart(document.getElementById('areachart'));
       
        chart1.draw(data, options);
        }

        </script>  

</head>

<style>
    .hidden {
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
            <h2>Statistic Reports</h2>
            
            <!--start of stats report-->
            <div class="row">
                <div class="col"><h3>School year 2021-2022</h3></div>
                <div class="col">
                    <div align="center">
                       <form method="post" id="make_pdf" action="create_pdf.php">
                        <input type="hidden" name="hidden_html" id="hidden_html" />
                        <button type="button" name="redirect" onclick="location.href='http://doapplication.000webhostapp.com/format_pdf.php'" class="btn btn-info btn-md">Format PDF</button>

                       </form>
                    </div>

                </div>
            </div>
 <!-- start of charts -->
           <!-- total vio per day -->
            <div class="row  m-1 p-0">
               <div class="m-0 p-0 shadow-lg" id="areachart"  style="width: 1000px; height: 300px;" ></div> 
            </div>
            <!-- vio per school and accepted/canncelled vio -->
            <div class="row m-0 p-0">
                <div class="col p-0" style="margin-right: -10px">
                    <div class="m-0 p-0" id="piechart"  style="width: 500px; height: 250px;" ></div> 
                </div>
                <div class="col m-0 p-0">
                    <div class="m-0 p-0" id="newpiechart"  style="width: 500px; height: 250px;" ></div>
                </div>
            </div>
            <!-- most violated rules -->
            <div class="row m-0 p-0">
                <div class="m-1 p-0 shadow-lg" id="barchart"  style="width: 1000px; height: 500px;" ></div>
            </div>
<!-- end of charts -->

        </div>    
            <!--end of stats report-->
                 
    </div>


</body>

 

</html>