<?php
  include 'db.php';

  if( isset( $_POST['name'] ) ) {
    createName( $_POST['name'] );
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEIS</title>
  </head>
  <body>
    <section class="form">
      <div class="form-title">
        <h2>Productos</h2>
      </div>
      <div class="form-form">
        <form method="POST" action="./index.php">
          <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Client Name">
          </div>
          <div>
            <input type="submit" value="Save">
          </div>
        </form>
      </div>
    </section>
  </body>
</html>