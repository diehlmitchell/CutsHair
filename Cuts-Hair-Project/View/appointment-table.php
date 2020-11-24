

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


<table>
  <tr>
    <th>Appointment Number</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Service</th>
    <th>Employee</th>
    <th>Time</th>          c
  </tr>
  <?php
    while($row = $appGet->fetch(PDO::FETCH_ASSOC))
    {
      echo"
        <tr>
          <td>{$row['CallID']}</td>
          <td>{$row['`people.customers`.FirstName']}</td>
          <td>{$row['`people.customers`.LastName']}</td>
          <td>{$row['`productsandservices.services`.ServiceName']}</td>
          <td>{$row['`people.employees`.FirstName']}</td>
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