<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  $conn = new mysqli('localhost','root','','mdigital');
  // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $from_email = $_POST['email'];
  $sql = "INSERT INTO `subscribe` (`email`) VALUES ('$from_email')";

if ($conn->query($sql) !== TRUE) {
  echo "Error: " . $sql . "<br>" . $conn->error;
}else{
  echo "OK";
}

$conn->close();
?>
