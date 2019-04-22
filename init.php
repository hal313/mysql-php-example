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

   // Create the 'cars' table
   if (
      !$mysqli->query('DROP TABLE IF EXISTS cars') ||
      !$mysqli->query('CREATE TABLE cars(id INT AUTO_INCREMENT PRIMARY KEY, make VARCHAR(30), model VARCHAR(30))') ||
      !$mysqli->query('INSERT INTO cars(make, model) VALUES ("Ford", "Bronco")') ||
      !$mysqli->query('INSERT INTO cars(make, model) VALUES ("Audi", "R8")') ||
      !$mysqli->query('INSERT INTO cars(make, model) VALUES ("Kia", "Soul")')
   ) {
      echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
      exit();
   }

?>   
      <ul>
         <li>Old database was removed</li>
         <li>New database was created</li>
         <li>Database was populated</li>
      </ul>
<?php include 'page-bottom.inc.php'; ?>