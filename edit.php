<?php
session_start();
if (!isset($_GET['id'])){
	header('Location: index.php');
	exit;
}
require 'bd.php';
startbd();
$title="Lorem ipsum";
$content="Lorem ipsum – псевдо-латинский текст, который используется для веб дизайна, типографии, оборудованияLorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sedLorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sedLorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sedLorem ipsum dolor sit amet, est cu iisque accusamus. Te choro dissentiunt contentiones sit. Ea brute viderer habemus sit, laudem indoctum iudicabit eum ut. Est in utinam mucius quaestio, porro simul nusquam pri in. Cu quando philosophia interpretaris per, eu phaedrum forensibus referrentur est. Noster similique gloriatur te nam. Eirmod tibique constituto nec in, unum posse definiebas eu nec. Erant honestatis ei cum. Falli elitr consequat id nam, his id movet delicata cotidieque. Ius ea dolores disputationi, mundi elaboraret has cu, timeam officiis eu usu. Hinc tota movet eam ne, sit ridens nostrum cu. Cu mei elitr intellegat persequeris. His in assum dolor efficiendi, no eos vide euismod recusabo, primis definitionem et eum. Eam detraxit scriptorem ut, in autem cotidieque referrentur sea, quo ex nonumy eirmod. Sit te atqui pericula liberavisse. Homero propriae adipiscing duo eu, vel ei debitis omittantur. Vis ut velit erant, dicta harum cum at. Omnis fastidii elaboraret sed.";
if(isset($_GET['id'])){
	$view = $_GET['id'];
	$result = mysqli_query($link, "UPDATE lesson1 SET title = '$title', content = '$content' WHERE id='$view'");
	if ( $result == true ) 
	  {
	  $_SESSION['msg'] = "<p>Название и содержимое изменено!</p>";
	  header("Location: index.php");
	  }
	  else
	  {
	  $_SESSION['msg'] = "<p>Название и содержимое не изменено!: ".mysqli_error($link)."</p>";
	  header("Location: index.php");

	  }
}
?>