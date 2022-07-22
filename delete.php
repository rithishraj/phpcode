
    <?php 
    include("dbconnetion.php");
    
    if (isset($_GET['id'])) {
       $eid=$_GET['id'];
        $sql="DELETE FROM inform WHERE eid='$eid';";
        if(!$sql){ 
            $sqlerror=mysqli_error($sql);
            echo $sqlerror;
        }
        $result=mysqli_query($conn,$sql);
        if ($result) {
            echo "<h1>deleted sucessully</h1>";
            header("Location: show.php");
        }
        else {
            echo "<h1>not deleted </h1>";           
        } 
    }
    else {
        echo "<h1>isset else statement</h1>";

    }
    ?>
