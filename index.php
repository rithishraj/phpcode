<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>
<center>
      <div class="container">
     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>
      <div>

         <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br>

        <?php if (isset($_GET['error'])) { ?>

        <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <button class="btn btn-primary my-5" type="submit">Login</button>

     </div>
     </form>
        </center>
</body>

</html>

