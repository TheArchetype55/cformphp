<?php include("_first.php"); ?>
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
    <h1>Contact Us!</h1>
    <?php if(isset($_SESSION['animal'])){ ?>
    <h2><?php echo $_SESSION['animal']; ?></h2>
    <?php } ?>
    <p>Fill out form below to contact us.</p>
    <p> Call us at <?php echo $phone; ?></p>
  </div>
  <?php
  if(isset($_SESSION['name'])){
	  echo 'Thanks for filling out the form '.$_SESSION['name'];
	  echo '<a href="reset.php">Reset</a>';
  }else{
	  ?>
  <form action="contactprocess.php" method="post">
  <div class="field">
    	<label>Full Name</label>
        <input type="text" name="fullname" class="textfield" />
    </div>
    <div class="field">
    	<label>Email Address</label>
        <input type="text" name="email" class="textfield" />
    </div>
    <div class="field">
    	<label>Your Message</label>
        <textarea type="message"></textarea>
    </div>
    <input type="submit" vslue="Send" />
  </form>
  <?php } ?>
  	<?php include ("_footer.php"); ?>
  </div>
</body>
</html>