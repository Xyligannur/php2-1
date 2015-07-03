<?php
session_start();
require 'bd.php';
startbd();

// if(isset($_GET['id'])){
// 	$view = $_GET['id'];
// 	$res = mysqli_query($link, "INSERT INTO lesson1 (title, content) VALUES ('Lorem', '')");
// 	header('Location: index.php');
// }

$title="Lorem";
$content="Lorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sed";
$result = mysqli_query($link, "INSERT INTO lesson1 (title, content) VALUES ('$title', '$content')");
if ( $result == true ) 
  {
  $_SESSION['msg'] = "<p>Запись добавлена</p>";
  header("Location: index.php");
  }
  else
  {
  $_SESSION['msg'] = "<p>Запись не добавлена: ".mysqli_error($link)."</p>";
  header("Location: index.php");

  }
?>