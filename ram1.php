<html>
	<?php 
	include "first.php";
    session_start();
	if(isset($_POST['sub'])){
		$name=$_POST['Email'];      
		$pass=$_POST['password'];
        $qry1= "select * from `login` where `email`='$name' and `password`='$pass'; ";
		$res=mysqli_query($conn,$qry1);
        if(mysqli_num_rows($res)>0)  {
            $m = "Success";
             header("Location: websites.php"); 
        } else {
          
            $warning= "usename and password are not correct";
            echo "<script type='text/javascript'>alert('$warning');</script>";
             header("Location: ram.php"); 
        }
	}
?>
    <head >
            <title>Login</title>
            <link rel="stylesheet" type="text/css" href="krish.css">  

    </head>
   
        <main>
                <h2 align="center"> <a href='ram1.php'>Signup</a> / <a href='ram.php'>login</a>   </h2>
                <form action="" method="post">
                    <div class="container">
                    <b>Email</b><br>
                    <input type="text" name="Email">
                    <br><br>
                    <b>Password</b>
                    <br>
                    <input type="password" name="password">
                    <br><br>
                 <input type="submit"  class="button" name="sub" value="Login" class="bold">
                </form>
        </main>
    </body>
</html>

