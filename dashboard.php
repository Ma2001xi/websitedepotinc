<?php 
session_start();
$email = $_SESSION['email'];

if($email == ""){
	header("location:login.php");

}
include ("program.php");
register();


include("config.php");
$select = mysqli_query($connect,"SELECT * FROM root WHERE EMAIL = '$email' ");
$col = mysqli_fetch_array($select);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="font/css/all.css">
   <title>design</title>
</head>
  <body>
    <nav>
      <div class="brand">
        <a href="">CHRISGATE</a>
      </div>
      <div class="toggle-icon">
        <i class="fa fa-bars"></i>
      </div>
      <div>
        <ul class="menu">
          <li><a href=""> <i class="fa fa-bell"> Notification</i></a></li>

          <li><a href=""> <i class="fa fa-user"> profile</i></a></li>

          <li><a href="logout.php"> <i class="fa fa-log-out"> Logout</i></a></li>
           
            
        </ul>
      </div>
      
    </nav>


    <header style="background: black;">
    	<div class="header-contents">
    		<h3>WELCOME TO YOUR DASHBOARD</h3>


    		<p>UPLOAD YOUR PROFILE PICTURE</p>
        <p>
          <img src="uploads/<?php echo $col['DP']; ?>">
        </p>

    		
    		<form method="post" enctype="multipart/form-data">
    			<p>
    				<input type="file" name="img" class="form-control">
    			</p>
    			<p>
    				<input type="submit" value="upload picture" name="upd" class="btn btn-primary">
    			</p>
    		</form>
    		<?php upload($email); ?>
    	</div>
    	
    </header>

</body>
</html>
    