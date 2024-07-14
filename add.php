<?php 
       include 'dbconnect.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-5">
<form action="insert.php" method="POST">

  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name"  name="stname" id="stnamid" required >
</div>
<div class="mb-3">
    <label  class="form-label">Email </label>
    <input type="email" class="form-control" placeholder="Enter your Email "  name="stemail"id="stemailid" required >
</div>
<div class="mb-3">
    <label  class="form-label">Mobile </label>
    <input type="text" class="form-control" placeholder="Enter your Mobile no " name="stmobile" id="stmobileid " required  >
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-dark">close</button>
</form>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>