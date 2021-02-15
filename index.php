<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="styles.css">
   <script src="script.js"></script>
</head>

<body>
   <div class="container">
      <form class="form" action="welcom.php" method="POST" enctype="multipart/form-data">
         <input class="input" type="text" name="name" value="Yurii">
         <input class="input" type="date" name="date" value="2021-02-13">
         <input class="input" type="file" name="file" id="file">
         <input class="input" type="submit" name="submit1">
      </form>
   </div>
   <?php
   $servername = '127.0.0.1';
   $username = 'yuriksensej';
   $password = 'sensej8R';
   $dbName = 'mydbpdo';
   $port = 3306;


   // try {
   //    $conn = new PDO("mysql:host=$servername", $username, $password);
   //    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //    echo "Connected successfully";
   //    $sql = "CREATE DATABASE myDBPDO";
   //    $conn->exec($sql);
   //    echo "Database created successfully<br>";
   // } catch (PDOException $e) {
   //    echo "Connection failed: " . $e->getMessage();
   //    echo $sql . "<br>" . $e->getMessage();
   // }
   //    $conn;
   //    function setConn($servername, $dbName, $username, $password)
   //    {
   //       try {
   //          $conn = new PDO("mysql:Host = $servername;dbname=$dbName", $username, $password);
   //          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //          echo '<br>';
   //          echo "Connection successfully";
   //       } catch (PDOException $e) {
   //          echo '<br>';
   //          echo "Connection failed" . $e->getMessage();
   //       }
   //    }
   //    function createTable($tableName, $conn, $sql)
   //    {
   //       try {

   //          $conn->exec($sql);
   //          echo '<br>';
   //          echo "Table $tableName created successfully";
   //       } catch (PDOException $e) {
   //          echo '<br>';
   //          echo "Error creating table $tableName: " . $e->getMessage();
   //       }
   //    }
   //    $sql = "CREATE TABLE MyGuests(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   // firstname VARCHAR(30) NOT NULL,
   // lastname VARCHAR(30) NOT NULL,
   // email VARCHAR(50),
   // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
   //    setConn($servername, $dbName, $username, $password);
   //    // createTable("myguests",$conn,$sql);
   //    function insertRow()
   //    {

   //       $GLOBALS['$conn']->exec("INSERT INTO myguests(firstname, lastname, email)
   //       VALUES ('John', 'Doe', 'john@example.com')");
   //    }

   $str = "Masha asa footter or header";
   $res = preg_match_all('/(as)|(a\s)/', $str, $matches);
   echo '<br>';
   print_r($res);
   echo '<br>';
   print_r($matches);
   exit;
   ?>
</body>

</html>