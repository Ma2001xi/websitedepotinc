 <?php 


$connect = mysqli_connect("localhost","root","","user");

if(!$connect){
	echo "<script>alert('no database detected')</script>";
}

 

?>