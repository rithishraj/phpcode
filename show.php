<!DOCTYPE html>
<head>
    <title>employee details</title>
</head>
<style>
  table, th, td {
  border: 1px solid black;
}
</style>
<body>
<center>
<h3> EMPLOYEE DETAILS</h3>
<button><a href="employee.php">add user</a></button>
</center>
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
      $result = mysqli_query($conn,"SELECT * FROM inform ;");
/*
      if (isset($_POST['submit'])) {
        # code...
        //if()
        $eid=$_POST['eid'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $degree=$_POST['degree'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
  */      
        //$query=("INSERT INTO student ([name], [age], [mark], [gender], [regno]) VALUES ('$name','$age','$mark','$gender','$regno');");
      
        //$result=mysqli_query($conn,"INSERT INTO inform(eid,name,age,degree,gender,address) VALUES ('$eid','$name','$age','$degree','$gender','$address');");
        if ($result) {
        # code...
        echo "inserted sucessfully";
      }
      else{
        echo "<script>alert('CANNOT INSERTED');</script>";
      }
      //mysqli_query($connector,"INSERT INTO `student`(`name`, `age`, `mark`, `gender`, `regno`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')")
      //$sql = "SELECT * FROM `studen` WHERE 1;";
      //$sql = "SELECT * FROM `studen` WHERE 2;";
    

      ?>
      
<table>
      <thead>
        <tr>
          <th scope='col'>eid</th>
          <th scope='col'>name</th>
          <th scope='col'>age</th>
          <th scope='col'>degree</th>
          <th scope='col'>gender</th>
          <th scope='col'>adress</th> 
          <th scope='col'>operation</th> 
        </tr>
      <tbody>
        <?php
        //$row = mysqli_fetch_assoc($result) ;
        
          while( $row = mysqli_fetch_assoc($result)){
            
            print_r("
            <tr>
              
              <td><div contenteditable>{$row['eid']}</div></td>
              <td><div contenteditable>{$row['name']}</div></td>
              <td><div contenteditable>{$row['age']}</div></td>
              <td><div contenteditable>{$row['degree']}</div></td>
              <td><div contenteditable>{$row['gender']}</div></td>
              <td><div contenteditable>{$row['address']}</div></td>
              <td><a href=\"updata.php?upid=".$row['eid']."\">update</a></td>;
              <td><a href=\"delete.php?id=".$row['eid']."\" class='confirmation'>delete</a></td>;
            </tr>");
          } 

          ?>
      </tbody>
    </table>
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure to delete?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

     <?php mysqli_close($conn); echo "connection closed"?>
<br/><br/>
</body>
</html>