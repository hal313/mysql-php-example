<?php include 'page-top.inc.php'; ?>
<?php
   // Include the db common code
   include 'db.inc.php';

   // Get a reference to the database
   $mysqli = getMySQLiConnection();
   if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      exit();
   }
?>   

      <table class="table">
         <thead class="thead-light">
            <tr>
               <th>Make</th>
               <th>Model</th>
            </tr>
         </thead>
         <tbody>
<?php
   // Select the cars
   $res = $mysqli->query('SELECT * FROM cars ORDER BY make, model ASC');

   for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
       $res->data_seek($row_no);
       $row = $res->fetch_assoc();
       echo "<tr><td>$row[make]</td><td>$row[model]</td></tr>";
   }   

   $mysqli->close();
?>
         <tbody>
      </table>
<?php include 'page-bottom.inc.php'; ?>