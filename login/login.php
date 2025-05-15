<?php
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

 <form method="post" action="logCheckController.php">
  ID: <input type="text" name="id"><br>
  Pass: <input type="password" name="pass"><br>
  <?php
  if(isset($_SESSION['error']))
  echo $_SESSION['error'];
  ?>
  <input type="submit" name="submit">
</form>

</body>
</html>