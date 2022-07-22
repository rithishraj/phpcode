<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
<link href="style/index-layout.css" rel="stylesheet" type="text/css" />
<link href="style/homepage-layout.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<!--right-->
<div id="body">
<div id="left">

<br /><br />
<P ><B><h3>Progress</h3></FONT></B></P>
<h1>user input data</h1>

 <form action="" method="post">

 <label for="user">name</label>
 <input type="text" name='name' id='name' required><br>
 <label for="age">age</label>
 <input type="text" name='age' id='age' required><br>
 <label for="mark">mark</label>
 <input type="text" name='mark' id='mark' required><br>
 <label for="gender">gender</label>
 <input type="text" name='gender' id='gender' required><br>
 <label for="regno">regno</label>
 <input type="text" name='regno' id='regno' required><br>
 <button type='submit' name='submit' value="send to database">submit</button>

 </form> 

</div></div>
<?php
include("connection.php");

     /* $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
      echo "Connections are made successfully::";
      $selected = mysqli_select_db($connector,"practice")
         or die("Unable to connect");
      */
      //execute the SQL query and return records
      //"$query =mysqli_query($con, "SELECT * FROM std WHERE name='".$username."' AND password='".$password."'");");
      $result = mysqli_query($connector,"SELECT * FROM student ;");
      if (isset($_POST['submit'])) {
        # code...
        //if()
        $name=$_POST['name'];
        $age=$_POST['age'];
        $mark=$_POST['mark'];
        $gender=$_POST['gender'];
        $regno=$_POST['regno'];
        //$query=("INSERT INTO student ([name], [age], [mark], [gender], [regno]) VALUES ('$name','$age','$mark','$gender','$regno');");
      
        
        //INSERT INTO student ([name], [age], [mark], [gender], [regno]) VALUES ('$name','$age','$mark','$gender','$regno');");
        if (mysqli_query($connector,"INSERT INTO student ( name, age, mark, gender, regno) VALUES ('$name','$age','$mark','$gender','$regno');")) {
        # code...
        echo "<script>alert('INSERTED SUCESSFULLY');</script>";
      }
      else{
        echo "<script>alert('CANNOT INSERTED');</script>";
      }
      //mysqli_query($connector,"INSERT INTO `student`(`name`, `age`, `mark`, `gender`, `regno`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')")
      //$sql = "SELECT * FROM `studen` WHERE 1;";
      //$sql = "SELECT * FROM `studen` WHERE 2;";
    }

      ?>
     <?php mysqli_close($connector); echo "connection closed"?>

     <?php


$username = "root";
$password = "";
$host = "localhost";

$connector = mysqli_connect($host,$username,$password)
    or die("Unable to connect");
echo "Connections are made successfully::";
$selected = mysqli_select_db($connector,"practice")
   or die("Unable to connect");


     ?>
<table>
      <thead>
        <tr>
          <th>NAME</th>
          <th>AGE</th>
          <th>MARK</th>
          <th>GENDER</th>
          <th>REGNO</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo "$row";
            echo
            "<tr>
              
              <td>{$row['name']}</td>
              <td>{$row['age']}</td>
              <td>{$row['mark']}</td>
             <td>{$row['gender']}</td>
             <td>{$row['regno']}</td>
            </tr>";
          } 
          ?>
      </tbody>
    </table>
     <?php mysqli_close($connector); echo "connection closed"?>
<br/><br/>

</body>
</html>