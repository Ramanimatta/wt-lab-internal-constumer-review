<php?
  $servername="localhost";
  $username="root";
  $password=" ";
  $db="tab";
  $conn=mysql_connect($servername,$username,$password)or("connection failed: ".mysql_connect());
  mysql_select_db($conn,$db);
 ?>
