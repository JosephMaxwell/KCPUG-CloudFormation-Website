<?php

$hostname = file_get_contents('http://169.254.169.254/latest/meta-data/public-hostname/');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Git Repository Test</title>
</head>
<body>
  <h3>Git Repository Test</h3>
  <p>This server's public identifier is: <?php echo $hostname ?></p>
</body>
</html>