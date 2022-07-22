<!DOCTYPE html>

<head>
    <title>deletedata</title>
    <h1>delete unwanted data</h1>
    
</head>
<body>
    <form action="" method="get">
    <label for="delete">enter the regno to delete</label><div>
    <input type="text" name="regno" id="regno" require><br>
    <button type="submit" >delete</button>
    </form>

</body>
   <?php
    include("connectiondb.php");
    if(isset($_GET['submit'])){
        $regno=$_GET['regno'];
        if(mysqli_query($connector,"DELETE FROM student WHERE regno='".$regno."';")){
                echo '<script>alert(deleted sucessfully)</script>';
        }
        else{
                echo '<script>alert(you entered wrong data)</script>';
        }

    }
    


   ?>
</html>