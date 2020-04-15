<?php
	$exist = false;
	if ($exist == false){ //check data base
		echo "Account created";
		createAccount();
	}else{
		echo "An account already exists with this Email Address";
	}

	function createAccount(){
		echo "Sans Database c'est compliqué mais t'inquiète";
	}
?>