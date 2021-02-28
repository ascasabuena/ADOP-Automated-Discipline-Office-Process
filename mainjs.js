
$( document ).ready(function() {
    
    //add violation
    $('#vioadd').click(function() {
        let vioText = $('#dropdownOthers option:selected').text();
        let vioId = $('#dropdownOthers').val();
        $('#violation_container').append('<div class="col-12"><input type="checkbox" class="vioList" name="vio[]" value="'+vioId+'" checked><label>'+vioText +'</label> </div>');
    });

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


    //autofill student info
    $('#studin1').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
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
        }
    });
    
    //dropdown violations
    $.ajax({
                url: "https://doapplication.000webhostapp.com/getViolations.php",
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    res.forEach(function(violation) {
                    $('#dropdownOthers').append( '<option value="'+violation.id+'">'+violation.description+'</option>' );
                    })
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
});