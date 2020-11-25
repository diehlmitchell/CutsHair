<script>
    function newAppointment(customer, service, employee, AppTime, AppDate)
    {
        DateTime = AppDate+AppTime;
        //probably needs fixed to make it a datetime as it likely doesnt add how I want it to                                               
        //ajax function 
        $.ajax
        ({
            type: "POST",
            url:"./Controller/ajax-add-app.php",
            data: "CustomerID=" + customer + "&ServiceID=" + service + "&EmployeeID=" + employee + "&DateTime=" + DateTime,
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