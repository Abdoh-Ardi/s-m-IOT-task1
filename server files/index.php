<html>
<body>

  <?php
  //db connection variables
  $servername = "localhost";
  $username = "user";
  $password = "user";
  $dbname = "test";
//table variables
  $serv1= $_POST["servo1"];
  $serv2= $_POST["servo2"];
  $serv3= $_POST["servo3"];
  $serv4= $_POST["servo4"];
  $serv5= $_POST["servo5"];
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  //query
  $sql ="UPDATE servo 
  SET id=1,
  serv1=$serv1,
  serv2=$serv2,
  serv3=$serv3,
  serv4=$serv4,
  serv5=$serv5
  WHERE 1";
 
//report on connection error 
  if ($conn->query($sql) === false) {
  echo "Error query : " . $conn->error;
}else{
	echo $serv1 . $serv2 . $serv3 . $serv4 . $serv5;
}


  
  //printing 
  
  ?>




</body>
</html>
