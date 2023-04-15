<?php

	session_start();

	$message = "";
	$name = "";
	if(array_key_exists("id", $_COOKIE) AND $_COOKIE['id']){

		$_SESSION['id'] = $_COOKIE['id'];
	}

	if(array_key_exists('id', $_SESSION) AND $_SESSION['id']){

		

		include("connection.php");

		$query = "SELECT `message` FROM `users` WHERE id = '".mysqli_real_escape_string($link,$_SESSION['id'])."' LIMIT 1";
       
		$result = mysqli_query($link,$query);
		$row = mysqli_fetch_array($result);
		$message = $row['message'];

	}if(array_key_exists('id', $_SESSION) AND $_SESSION['id']){

		include("connection.php");

		$query = "SELECT `name` FROM `users` WHERE id = '".mysqli_real_escape_string($link,$_SESSION['id'])."' LIMIT 1";
       
		$result = mysqli_query($link,$query);
		$row = mysqli_fetch_array($result);
		$name = $row['name'];
     }else{

		header("Location: index.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Diary-<?php echo $name; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Day Dream Diary</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  justify-content-end"  id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <span class="uinfo"><?php echo $name;?> </span>
          </a>
          <ul class="dropdown-menu">
            <li><span class="dbtn"><a class="dropdown-item" href='index.php?logout=1'>Log Out</a></li></span>
        </li>
      </ul>
    </div>
</nav>

	<div  id="message">
	<textarea name="" id="text" class="container"  placeholder="Write Your Notes here"> <?php echo $message;  ?></textarea>
	</div>
<?php include ("footer.php"); ?>
