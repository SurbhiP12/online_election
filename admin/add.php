
<?php
	include('conn.php');
	//Add New Candidate
	if (isset($_POST['add'])) {
		$position=$_POST['position'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$party=$_POST['party'];

		$image = $_FILES['image']['name'];
		$target = "images/".basename($image);
		move_uploaded_file($_FILES['image']['tmp_name'], $target);

	$query="INSERT INTO candidate (position,firstname,lastname,party,img) VALUES ('$position','$firstname','$lastname','$party','$target')";

	$result=mysqli_query($conn, $query); 

	if ($result) {
		echo '<script> alert("Data Saved Successfully"); </script>';
		header('Location: candidate.php');
	} else {
		echo "<script> alert('Data Not Saved')</script>";
	}

}
?>