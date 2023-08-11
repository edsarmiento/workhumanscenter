<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Work Humans Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<center>PREGUNTAS</center>
<br>
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
    
    $sql = "SELECT * FROM questions Order by created_at DESC";
    $result = $conn->query($sql);
    // output data of each row
    if ($result->num_rows > 0) {
?>
      <table border=1 align=center class="table">
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Servicio</th>
        <th>Pregunta</th>
        <th>Fecha de creacion</th>
    
<?php
      while($row = $result->fetch_assoc()) {
?>
      
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["service"] ?></td>
            <td><?php echo $row["question"] ?></td>
            <td><?php echo $row["created_at"] ?></td>
        </tr>
<?php
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?> 
</table>
</body>
</html> 
