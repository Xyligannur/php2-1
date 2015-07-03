<?php
session_start();
if (!isset($_GET['id'])){
	header('Location: index.php');
	exit;
}
require 'bd.php';
startbd();

if(isset($_GET['id'])){
	$view = $_GET['id'];
	$result = mysqli_query($link, "DELETE FROM lesson1 WHERE id=$view");
	if ( $result == true ) 
	  {
	  $_SESSION['msg'] = "<p>Запись удалена</p>";
	  header("Location: index.php");
	  }
	  else
	  {
	  $_SESSION['msg'] = "<p>Запись не удалена: ".mysqli_error($link)."</p>";
	  header("Location: index.php");

	  }
}
?>