<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updatedata</title>
    <h1>UPDATE</h1>
</head>
<body>
    <center>
        <div class="container">
        <form action="" method="post">
            <div>
            <label for="user">employee name</label>
            <input type="text" name="name" id="name" require>
            </div>
            <div>
            <label for="age">age</label>
            <input type="text" name="age" id="age" require>
            </div>
            <div>
             <label for="degree">degree</label>
             <select name="degree" id="degree">
                <option value="be">be</option>
                <option value="b.tech">b.tech</option>
                <option value="b.arch">b.arch</option>
             </select>   
            </div>
            <div>
            <label for="gender">gender</label>
            <input type="radio" name="gender" id="male">male
            <input type="radio" name="gender" id="female">female
            </div>
            <div>
            <label for="address">address</label>
            <input type="text" name="address" id="address" require>
            </div>
            <button type="submit" name="update">update</button>
            <a href="show.php">show</a>
        </div>
        </form>

    </center>

</body>
<?php
include("dbconnetion.php");
   $eid=$_GET['upid'];
if (!isset($_POST['submit'])) {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $degree=$_POST['degree'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $result=mysqli_query($conn,"UPDATE inform SET name='$name',age='$age',degree='$degree',gender='$gender',address='$address' WHERE eid='$eid';");
    //UPDATE `inform` SET `eid`='[value-1]',`name`='[value-2]',`age`='[value-3]',`degree`='[value-4]',`gender`='[value-5]',`address`='[value-6]' WHERE 1
    if ($result) {
        echo "updated sucessfully";
    }
    else {
        echo "error in update";
    }
     
}
?>
<?php mysqli_close($conn); echo "connection closed"
?>
</html>