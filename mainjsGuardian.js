
$( document ).ready(function() {

    /*autofill student info via button*/
    $('#idadd').click(function() {
        var student_number = $("#studin1").val();
            $.ajax({
                url: "https://doapplication.000webhostapp.com/getStudent.php?student_number=" + student_number,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $("#dbid").val(res.id);
                    $("#studin2").val(res.fname);
                    $("#studin3").val(res.lname);
                    $("#studin4").val(res.course +" - " +res.section);
                    $("#studin5").val(res.email);
                    $("#studin6").val(res.contact_no);
                }
            });
        
    });


    //autofill student info via enter key
    $('#studin1').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            var student_number = $("#studin1").val();
            $.ajax({
                url: "https://doapplication.000webhostapp.com/getGuardian.php?student_number=" + student_number,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $("#dbid").val(res.id);
                    $("#studin2").val(res.fname +" " +res.lname);

                }
            });

            // guardian
            $.ajax({
                url: "https://doapplication.000webhostapp.com/getGuardian2.php?student_number=" + student_number,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $("#guardiandbid").val(res.id);
                    $("#guardianName").val(res.fname +" " +res.lname);
                    $("#guardianEmail").val(res.guardian);

                }
            });
        }
    });

    //autofill officer
     $('#staffid').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            var employee_id = $("#staffid").val();
    $.ajax({
                url: "https://doapplication.000webhostapp.com/getOfficer.php?employee_id="+ employee_id,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $("#staffdbid").val(res.id);
                    $("#staffName").val(res.fname + " " + res.lname);
                }
            });
                }
        });


         $('#idaddstaff').click(function() {
            var employee_id = $("#staffid").val();
                $.ajax({
                url: "https://doapplication.000webhostapp.com/getOfficer.php?employee_id="+ employee_id,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $("#staffdbid").val(res.id);
                    $("#staffName").val(res.fname + " " + res.lname);
                }
            });
        
    });
    

});