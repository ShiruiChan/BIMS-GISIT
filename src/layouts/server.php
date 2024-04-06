<?php
session_start();

$username = "";
$email = "";

$errors = array();

// Connect to db
$db = mysqli_connect('localhost','root','','BIMS-GISIT-2024') or die("could not connect to db");

// Info
$connect = mysqli_connect("127.0.0.1",'root',"","BIMS-GISIT-2024");
if(isset($_SESSION['Phone'])){
	$query = "SELECT * FROM Users WHERE mail='{$_SESSION['mail']}'";
	$result = mysqli_query($connect, $query);
	$stroka = $result->fetch_assoc();
}

// Add place
if(isset($_POST['addProduct'])){
	$dir = "/src/assets/products/";
	$corp = mysqli_real_escape_string($db, $_POST['corp']);
	$product = mysqli_real_escape_string($db, $_POST['product']);
	$life = mysqli_real_escape_string($db, $_POST['life']);
	$count1 = mysqli_real_escape_string($db, $_POST['count1']);
	$count2 = mysqli_real_escape_string($db, $_POST['count2']);
	$cal = mysqli_real_escape_string($db, $_POST['cal']);
	$destination = $dir . basename($_FILES['image']['name']);
	$tmp_name = $_FILES["image"]["tmp_name"];
	$name = $_FILES['image']['tmp_name'];
	$upload = move_uploaded_file($name, $destination);

	// Form validation
	if($count1 == null and $count2 == null){
		array_push($errors, "Passwords do not match");
	} elseif($count1 != null){
		$check = 1;
	} elseif($count2 != null) {
		$check = 2;
	} else {
		$check = 1;
	}

	// Register place if no error
	if(count($errors)==0){
		if($check == 1) {
			$query = "INSERT INTO product (Life,Count,Product,Corp,Cal,Image) VALUES ('$life','$count1','$product','$corp','$cal','$destination')";
		} else {
			$query = "INSERT INTO product (Life,Count,Product,Corp,Cal,Image) VALUES ('$life','$count2','$product','$corp','$cal','$destination')";
		}
		

		mysqli_query($db,$query);

		// Transfer to index.php
		header("location: list.php");
	}
}

// Register user
if(isset($_POST['reg_user'])){
	$mail = mysqli_real_escape_string($db, $_POST['mail']);
	$pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($db, $_POST['pass2']);

	// Form validation
	if($pass1 != $pass2){array_push($errors, "Passwords do not match");};

	// Check db for existing user with same username

	$user_check_query = "SELECT * FROM Users WHERE mail = '$mail' LIMIT 1";

	$results = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if($user) {
		if($user['mail'] === $mail){array_push($errors, "Mail already exists");}
	}

	// Register user if no error
	if(count($errors)==0){

		$pass = md5($pass1);
		print $password;
		$query = "INSERT INTO Users (Mail,Pass) VALUES ('$mail','$pass')";

		mysqli_query($db,$query);
		$_SESSION['mail'] = $mail;
		$_SESSION['success'] = "You are now logged in";

		// Transfer to index.php
		header("location: index.php");
	}
}

// Login user
if(isset($_POST['login_user'])){
	$phone = mysqli_real_escape_string($db, $_POST['Phone']);
	$pass = mysqli_real_escape_string($db, $_POST['Pass']);

	if(empty($phone)){
		array_push($errors, "Username is required");
	}
	if(empty($pass)){
		array_push($errors, "Password is required");
	}

	if(count($errors) == 0) {
		$password = md5($pass);
		$query = "SELECT * FROM Users WHERE Phone = '$phone' AND Pass = '$pass' ";
		$result = mysqli_query($db, $query);

		if(mysqli_num_rows($result)){
			$_SESSION['Phone'] = $phone;
			header("location: index.php");
		} else {
			array_push($errors, "Wrong username/password combination. Please try again.");
			header("location: auth.php?log=2");
		}
	}
}
?>