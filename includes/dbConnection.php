<?php
  // Define CONSTANTS.
  define("DBSERVER", "");
  define("DBUSER", "");
  define("DBPASS", "");
  define("DBNAME", "");
  // Create database connection.
  $connection = mysqli_connect(DBSERVER, DBUSER, DBPASS, DBNAME);
  // Test connection success.
  // mysqli_connect_errno() - Return an error code from the last connection error, if any.
  // mysqli_connect_error() - Return the error description from the last connection error.
  if(mysqli_connect_errno()){
    die(
      "Database connection failure: "
      .mysqli_connect_error()
      ." (".mysqli_connect_errno().")"
    );
  }
?>
