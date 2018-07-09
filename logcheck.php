
<?php
	
	session_start();

	if(isset($_POST['Login'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($username == "" || $password == ""){

			//echo "invalid submission";
			header("location: Login.php?status=nullvalue");

		}else{

			$myfile = fopen("reginfo.txt", 'r');
			$isvalid = "";

			while (!feof($myfile)) 
			{
				
				$data = fgets($myfile);
				$arr = explode("|", $data);
				
				if($arr[1] == $username && $arr[2] == $password){
					$isvalid = "validuser";
				}
			}

			//echo $isvalid;

			if($isvalid == "validuser"){

				$_SESSION['type'] =  $arr[4];
				//$type= $arr[4];
			header("location: FarmerLogin.php");
			}else
			{
				header("location: Login.php?status=invaliduser");
			}
			
			
			fclose($myfile);

		}
	}

?>