<?php include("_first.php"); ?>
<?php
$_SESSION['animal'] = "dog";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form Test - Call us at <?php echo $phone; ?></title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="page">
	<?php include("_header.php"); ?>
  <div id="main">
    <h1>Welcome!</h1>
    <p>Text coming soon!</p>
    <p> Call us at <?php echo $phone; ?></p>
  </div>
  	<?php include ("_footer.php"); ?>
  </div>
</body>
</html>