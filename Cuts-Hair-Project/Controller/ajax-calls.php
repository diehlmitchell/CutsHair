<script>
    function newAppointment(customer, service, employee, AppTime, AppDate)
    {
        //ajax function 
        $.ajax
        ({
            type: "POST",
            url:"./Controller/ajax-add-app.php",
            data: "customer=" + customer + "&service=" + service + "&employee=" + employee + "&AppTime=" + AppTime + "&AppDate=" + AppDate,
            success: function(data)
            {
                $("#appointments-table").html(data);
                //appointments-table is the id of the table 
            },
            error:function(data)
            {
                alert('an error occured while didding this');
            },

        });

    }

</script>