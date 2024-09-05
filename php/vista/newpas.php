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
$token = "";
if(isset($_GET['token'])) $token = $_GET['token'];

include "nav.php";
?>

<div class="content">

<h1> plantilla</h1>


<h2>New Password</h2>
    <form action="../includes/newpassinc.php" method="post">
        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="mb-3">
            <label for="repeatPwd">Repeat password:</label>
            <input type="password" class="form-control" id="repeatPwd" placeholder="Enter password" name="repeatPwd">
        </div>
        <input type="hidden" name="token" value="<?= $token?>">
        <button type="submit" name="send" class="btn btn-primary">Submit</button>
    </form>

</div>




<?php
include "foter.php";

?>
    
</body>
</html>