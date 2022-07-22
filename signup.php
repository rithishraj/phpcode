<!DOCTYPE html>
<head>
    <title>
        signup
    </title>
<h1>SIGN UP</h1>

</head>
<body>
    <form action="" method="post">
 <label for="name">USER NAME</label> 
 <input type="text" name='username' id='username' require>
 <label for="email">EMAIL</label> 
 <input type="email" name='email' id='email' require>
 
 <label for="password">PASSWORD</label> 
 <input type="password" name='password' id='password' require>
 <button type='submit' name='submit' value='submit'>sign up</button>
</form>
</body>
 <?php
  include("connection.php");
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
      echo "Connections are made successfully::";
      $selected = mysqli_select_db($connector,"signup")
         or die("Unable to connect");

      //execute the SQL query and return records
      //"$query =mysqli_query($con, "SELECT * FROM std WHERE name='".$username.AND password='".$password."'");");
      $result = mysqli_query($connector,"SELECT * FROM detail;");
      if (isset($_POST['submit'])) {
        # code...
        //if()
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        //$query=("INSERT INTO student ([name], [age], [mark], [gender], [regno]) VALUES ('$name','$age','$mark','$gender','$regno');");
      
        
        //INSERT INTO student ([name], [age], [mark], [gender], [regno]) VALUES ('$name','$age','$mark','$gender','$regno');");
        if (mysqli_query($connector,"INSERT INTO detail ( username, email, pass) VALUES ('$username','$email','$password');")) {
        # code...
          echo "<script>alert('INSERTED SUCESSFULLY');</script>";
        }
        else{
          echo"<script>alert('CANNOT INSERTED');</script>";
        }
        
      //mysqli_query($connector,"INSERT INTO `student`(`name`, `age`, `mark`, `gender`, `regno`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')")
      //$sql = "SELECT * FROM `studen` WHERE 1;";
      //$sql = "SELECT * FROM `studen` WHERE 2;";
      mysqli_close($connector); echo "connection closed"; 
    }
      ?>

 
  

</html>
