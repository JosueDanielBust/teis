<?php
  function createConnection() {
    $DB_HOST = '127.0.0.1';
    $DB_USER = 'root';
    $DB_PASS = 'root';
    $DB_NAME = 'teis';
    $DB_CONNECTION = new mysqli( $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME ) or die( "Unable to connect to database: " . $DB_CONNECTION->connect_error );
    return $DB_CONNECTION;
  }

  function createName( $name ) {
    $CONNECTION = createConnection();
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    $result = $CONNECTION->query( $sql );
    if ( $result ) {
      echo '<script>alert("User \"' . $name . '\" added successfully!")</script>';
    } else {
      echo '<script>alert("Error adding user \"' . $name . '\"!")</script>';
    }
  }
?>