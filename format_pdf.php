<?php  

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
    
    $resultarea = $con->query($sqlarea);;

?>  
<!DOCTYPE html>  
<html>  
    <head>  
        <title>ADOP-viewPDF</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        

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
            bar: {groupWidth: "90%"},
            legend: { position: "top" },
            width:700,
            height:800,
            chartArea: {'width': '70%', 'height': '80%'},
        };
        
        // Instantiate and draw our chart, passing in some options.
        //var chart1 = new google.visualization.BarChart(document.getElementById('barchart'));
        var chart_area = document.getElementById('bar_chart');
        var chart = new google.visualization.BarChart(chart_area);

        google.visualization.events.addListener(chart, 'ready', function(){
        chart_area.innerHTML = '<img src="' + chart.getImageURI() + '" class="img-responsive">';
        });

        chart.draw(data, options);
        //chart1.draw(data, options);
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
            width:500,
            height:250,
            chartArea: {'width': '100%', 'height': '80%'}
        //chartArea:{}
        };
        
        // Instantiate and draw our chart, passing in some options.
        //var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));
        var chart_area = document.getElementById('pie_chart');
        var chart = new google.visualization.PieChart(chart_area);

        google.visualization.events.addListener(chart, 'ready', function(){
        chart_area.innerHTML = '<img src="' + chart.getImageURI() + '" class="img-responsive">';
        });
        
        chart.draw(data, options);
        //chart1.draw(data, options);
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
            width:500,
            height:250,
            chartArea: {'width': '100%', 'height': '80%'},
        //chartArea:{}
        };
        
        // Instantiate and draw our chart, passing in some options.
        //var chart1 = new google.visualization.PieChart(document.getElementById('newpiechart'));
        var chart_area = document.getElementById('newpie_chart');
        var chart = new google.visualization.PieChart(chart_area);

        google.visualization.events.addListener(chart, 'ready', function(){
        chart_area.innerHTML = '<img src="' + chart.getImageURI() + '" class="img-responsive">';
        });

        chart.draw(data, options);
        //chart1.draw(data, options);
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
            hAxis: {title: 'Date',slantedText:true, slantedTextAngle:45},
            vAxis: {minValue: 0},
            legend: { position: 'top' },
            width:700,
            height:500,
            chartArea: {'width': '85%', 'height': '60%'},
        };
        
        // Instantiate and draw our chart, passing in some options.
        //var chart1 = new google.visualization.AreaChart(document.getElementById('areachart'));
        var chart_area = document.getElementById('area_chart');
        var chart = new google.visualization.AreaChart(chart_area);

        google.visualization.events.addListener(chart, 'ready', function(){
        chart_area.innerHTML = '<img src="' + chart.getImageURI() + '" class="img-responsive">';
        });

        chart.draw(data, options);
        //chart1.draw(data, options);
        }

        </script>  
    </head>  

</style>
    <body>  
      <div align="center">
       <br /><br /> 
       <form method="post" id="make_pdf" action="create_pdf.php">
        <input type="hidden" name="hidden_html" id="hidden_html" />
        <button type="button" name="create_pdf" id="create_pdf" class="btn btn-info btn-lg">Download PDF</button>
       </form>
      </div>
        <br /><br />  
        <div class="container" id="testing" >  
            <h2>Discipline Office Statistic Reports</h2>
            <h3>via ADOP system</h3>
            <div class="col m-1 p-0"><h3>Year: <?php echo date("Y");?></h3></div>
            <h3>Discipline officer in-charge:_________________</h3
            <br />
   <div class="panel panel-default">
    
    <div class="panel-body" align="center">
     <div id="area_chart" style="width: 100%; max-width:900px; "></div>
     <div id="pie_chart" style="width: 100%; max-width:900px;  "></div>
     <div id="newpie_chart" style="width: 100%; max-width:900px; "></div>
     <div id="bar_chart" style="width: 100%; max-width:900px;  "></div>
    </div>
   </div>
        </div>
  <br />

    </body>  
</html>

<script>
$(document).ready(function(){
 $('#create_pdf').click(function(){
  $('#hidden_html').val($('#testing').html());
  $('#make_pdf').submit();
 });
});
</script>