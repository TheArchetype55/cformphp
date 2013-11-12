<?php
include("_first.php");
$_SESSION['name'] = $_POST['fullname'];
//Do any storage stuff
//redirect back to contact page
header("Location: contact.php");
/*
$message = $_POST{'message'} ;
echo $_POST {'full name'};
echo "<br/>" ;
echo "We sent an email to";
echo "<br/>";
echo $message;
*/
?>
