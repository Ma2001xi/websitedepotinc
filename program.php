
<?php 

function register(){
	include("config.php");
	if(isset($_POST['sub'])){
		$fname = $_POST['fname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$password = $_POST['pword'];
		
		$email = $_POST['email'];

		$check = mysqli_query($connect,"SELECT * FROM root");
		while ($y = mysqli_fetch_array($check)){
			if($email == $y['EMAIL']){
				echo "<script>alert('already exist')</script>";
			}
		}
		


		$data = "INSERT INTO root(FULLNAME,GENDER,EMAIL,PASSWORD)VALUES('$fname','$gender','$email','$password' )";
		$sql = mysqli_query($connect,$data);


		if($sql){
			echo "<script>alert('successfully reistered')</script>";
		}
		else{
			echo "<script>alert('Failed to register')</script>";
		}
	}
}
	function login(){
		session_start();
		include("config.php");
		if(isset($_POST['log'])){
			$email = $_POST['email'];
			$password = $_POST['pword'];

			$select = mysqli_query($connect,"SELECT * FROM root WHERE EMAIL = '$email' AND PASSWORD = '$password' ");
			$row = mysqli_num_rows($select);

			if($row==1){
				$_SESSION['email'] = $email;
				header("location:dashboard.php");
			}
			else{
				echo "<script>alert('invalid email or password')</script>";
			}
		}
	}


	function upload($user){
		include ("config.php");

		if (isset($_POST['upd'])){
			$file = $_FILES['img']['name'];
			$folder = "uploads/".basename($file);



			$insert = mysqli_query($connect,"UPDATE root SET DP = '$file' WHERE EMAIL = '$user'");
			if($insert){
				$move = move_uploaded_file($_FILES['img']['tmp_name'], $folder);
				echo "<script>alert('File uploaded')</script>";
				header("Refresh:0");
			}
			
			else{
				echo "<script>alert('failed to upload')</script>";
			}
		}

	}
?>