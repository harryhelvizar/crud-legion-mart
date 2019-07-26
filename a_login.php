<?php 
	include 'koneksi.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
	$query = mysqli_query($db, $sql);
	$cek = mysqli_num_rows($query);
	if ($cek > 0) {
		while ($row = mysqli_fetch_array($query)) {
		    $role = $row['role'];
		    if ($role == 'admin') {
		    	$_SESSION['admin'] == $user;
		    	echo $_SESSION['admin'];
		    } elseif ($role == 'pelanggan') {
		    	echo 'ini pelangan';
		    }
		}
	} else {

	}
 ?>