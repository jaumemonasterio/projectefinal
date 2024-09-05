<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>botiswim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="../../css/estils.css" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php
include "nav.php";
?>

<div class="content">

<div class="container">
    <h1> Login</h1>
    <div class="container mt-3">
  <h2>Login</h2>
  <form action="../includes/loginin.php" method="post">
    <div class="mb-3">
      <label for="uid">nom usuari :</label>
      <input type="text" class="form-control" id="uid" placeholder="Enter yourusername " name="uid">
    </div>
    <div class="mb-3">
      <label for="pwd">Contrasenya :</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="mb-3">
      <a href="forgotpass.php">Forgot Password?</a> /
        <a href="registre.php">Festa un compte nova</a>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

</div>


<?php
include "foter.php";

?>
    
</body>
</html>