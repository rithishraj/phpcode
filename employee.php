<!DOCTYPE html>
<head>
    <title>employee details</title>
</head>

<body>
<!--right-->
<div class="container">
<br /><br />
<center>
<P><h3> EMPLOYEE DETAILS</h3></P>
 <form action="" method="post">
 <label for="eid">employee id</label>
 <input type="text" name='eid' id='eid' required><br>

 <label for="user">employee name</label>
 <input type="text" name='name' id='name' required><br>
 
 
 <label for="age">age</label>
 <input type="text" name='age' id='age' required><br>
 
 
 <label for="degree">degree</label>
 <select name="degree" id="degree">
  <option value="be">be</option>
  <option value="b.tech">b.tech</option>
  <option value="b.arch">b.arch</option>
 </select><br>
 <br>
 <label for="gender">gender</label>
 <input type="radio" name="gender" id="male" value='male'>male
 <input type="radio" name="gender" id="female" value="female" >female

 <br>
 
 <label for="address">address</label>
 <input type="text" name='address' id='address' required><br>
 
 <button type='submit' name='submit' value="send to database">submit</button>

</form> 
</center>
</div>
<?php
include("dbconnetion.php");

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
     // $result = mysqli_query($conn,"SELECT * FROM inform ;");
      if (isset($_POST['submit'])) {
        # code...
        //if()
        $eid=$_POST['eid'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $degree=$_POST['degree'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        
        //$query=("INSERT INTO student ([name], [age], [mark], [gender], [regno]) VALUES ('$name','$age','$mark','$gender','$regno');");
        
        $result=mysqli_query($conn,"INSERT INTO inform(eid,name,age,degree,gender,address) VALUES ('$eid','$name','$age','$degree','$gender','$address');");
        if ($result) {
        # code...
        echo "<h1>inserted sucessfully</h1>";
      }
      else{
        echo "<h1>not inserted </h2>";
      }
      //mysqli_query($connector,"INSERT INTO `student`(`name`, `age`, `mark`, `gender`, `regno`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')")
      //$sql = "SELECT * FROM `studen` WHERE 1;";
      //$sql = "SELECT * FROM `studen` WHERE 2;";
    }

      ?>
<br><button><a href="show.php">SHOW DETAILS</a></button> <br>   
     <?php mysqli_close($conn); echo "connection closed"?>
<br/><br/>
</body>
</html>