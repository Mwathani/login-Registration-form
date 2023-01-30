<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","","userslogin");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Connection failed. Please try again later!" . mysqli_connect_error();
  }
?>