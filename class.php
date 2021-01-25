<?php




class Profile{
	function __construct(){
		if(array_key_exists('task', $_POST)){$this->task();}

		return;
	}

	function task(){
		global $db;

		$name= $_POST['cname'];

		$sex = $_POST['gender'];

		$address = $_POST['add'];

		$acctbalance = $_POST['accbalance'];

		$deposits = $_POST['tdeposit'];
		$withdrawals = $_POST['twith'];
		$clientcreationdate= $_POST['ccdate'];
		$activitydate = $_POST['lactdate'];
		$accountofficer = $_POST['accofficer'];

		$bvn = $_POST['bvn'];
		$sql =$db->query("INSERT INTO client_tb (name,sex,bvn,address,accountbalance,totaldeposit,
			totalwithdrawals,lastactivitydate,accountofficer) VALUES ('$name','$sex','$bvn','$address','$acctbalance','$deposits','$withdrawals','$activitydate','$accountofficer')")or die('CannotConnect To Server');


		
		return;
	}

}

$tra = new Profile;
?>