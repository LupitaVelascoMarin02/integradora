<?php

	include('config.php');

	$action = $_REQUEST['action'];

	if($action=="showAll"){

		$stmt=$dbcon->prepare('SELECT IdEstado, Nombre FROM estado ORDER BY Nombre');
		$stmt->execute();

	}else{

		$stmt=$dbcon->prepare('SELECT IdEstado, Nombre FROM estado WHERE IdPais=:cid ORDER BY Nombre');
		$stmt->execute(array(':cid'=>$action));
	}

?>
	<?php
		if($stmt->rowCount() > 0){

			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				extract($row);

	?>
	<option value="<?php echo $IdEstado; ?>"><?php echo $Nombre; ?></option>
	<?php  
			}

		}else{

	?>
		
	<?php  
		}


	?>