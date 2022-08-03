<?php 

	include_once '../config.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$connection->prepare('DELETE FROM users WHERE id=:id');
		$delete->execute(array(
			':id'=>$id
		));
		header('Location: index.php');
	}else{
		header('Location: index.php');
	}
 ?>