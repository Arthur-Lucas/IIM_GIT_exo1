<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config-sample.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/

if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){

		// TODO
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Force user connection to access dashboard
		userConnection($db, $email, $password);
		
		header('Location: dashboard.php');

	}else{
		$error = 'Champs requis !';
	}
}

/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';