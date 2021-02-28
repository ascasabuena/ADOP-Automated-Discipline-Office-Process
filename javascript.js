$(document).ready(function () {

     // FOR BUTTON "MENU"

    $("#sidebar").mCustomScrollbar({
         theme: "minimal"
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');

    $('.collapse.in').toggleClass('in');
        // and also adjust aria-expanded attributes we use for the open/closed arrows
        // in our CSS
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });

});

// DATATABLE

//get table 
    $.ajax({
            url: "https://doapplication.000webhostapp.com/getViolations.php",
            type: 'GET',
            dataType: 'json',
            success: function(res) {
                res.forEach(function(violation) {
                $('#table_data').append;
            })
        }
     });
     
$(document).ready( function () {
    $('#table_id').DataTable({
        "order": [[ 0, "desc" ]]
    } );
} );
