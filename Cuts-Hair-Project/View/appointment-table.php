

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

  }
  
  tr:nth-child(even) {
    background-color: #dddddd;
  }
  tr:nth-child(odd) {
    background-color: #FFF;
  }
</style>


<table id="appointments-table">
  <tr>
    <th>Appointment</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Service</th>
    <th>Employee</th>
    <th>Time</th>
  </tr>

  <?php  
      while($row = $appGet->fetch(PDO::FETCH_ASSOC))
      {
        echo"
          <tr>
            <td>{$row['CallID']}</td>
            <td>{$row['pcf']}</td>
            <td>{$row['pcl']}</td>
            <td>{$row['ServiceName']}</td>
            <td>{$row['pef']}</td>
            <td>{$row['Time']}</td>
          </tr>
        ";
    }
?>
<!-- 
    probably some complex pull from the database
    -- end goal would def be to display names instead of id values, so you would probably need to select from a view or something like that maybe? 
    -- that or join 
-->

</table>