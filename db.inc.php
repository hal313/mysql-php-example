<?php

   /**
    * Gets a connection to a MySQL database.
    *
    * @return {Object} a connection object to the database
    */
   function getMySQLiConnection() {
      // Connection variable
      //
      // The connection info
      $dbhost = 'db:3306';
      $dbuser = 'root';
      $dbpass = 'p@ssw0rd';
      $dbdatabase = 'sample';

      return new mysqli($dbhost, $dbuser, $dbpass, $dbdatabase);
   }

?>