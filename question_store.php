<?php
  $servername = "localhost";
  $username = "xxxxx";
  $password = "xxxxx";
  $dbname = "xxxxx";
    
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    
  $c_name = $_POST["c_name"];
  $c_email = $_POST["c_email"];
  $c_phone = $_POST["c_phone"];
  $c_service = $_POST["c_service"];
  $c_message = $_POST["c_message"];
  $c_time = date('Y-m-d H:i:s'); 

  $sql = "INSERT INTO questions (name, email, phone, service, question, id, created_at) VALUES ('$c_name', '$c_email', '$c_phone', '$c_service', '$c_message', null, '$c_time');";
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully');</script>";
    header('Location: index.html');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    
  $conn->close();
?> 
