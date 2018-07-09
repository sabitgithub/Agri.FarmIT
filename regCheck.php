<?php
	error_reporting(0);
	
	
	 $pieces = explode(" ", ($_POST['name']));
	if ( $pieces[0]!="" && $pieces[1]!="" )
	{
		if ((($_POST['name']) >= 'a' && ($_POST['name']) <= 'z') || (($_POST['name']) >= 'A' && ($_POST['name']) <= 'Z') || ( ($_POST['name']) >= '.' ) || (($_POST['name']) >= '-'  ))
		{
			$letr = substr(($_POST['name']),0,1);
			if (( $letr >= 'a' && $letr <= 'z') || ($letr >= 'A' && $letr <= 'Z'))
			{
				$name 		= $_POST['name'];
				$nameflag=1;
			}
		}
	}
	else 
	{
		echo " Failed Name  " ;
	} 
	
	
	if ( $_POST['phone'] != "" && (($_POST['phone']) >='0' && ($_POST['phone']) >='9') )
	{
		echo "Phone: ";
		echo $_POST['phone'] ;
		$phone		=$_POST['phone'];
		$phoneflag=1;
	}
	else 
	{
		echo " pls valid phone ";
	}
		
	 if ( ($_POST['email'])!="" )
	{
		$pics_email1 = explode("@", ($_POST['email']));
		echo "split 1 done";
		if($pics_email[0]!="" && $pics_email[1]!="")
		{
			echo " split 1 er IF  done ";
			
		$pics_email2 = explode(".", ($pics_email[1]));	
		if ((strlen($pics_email2[0])> 4)  && (strlen($pics_email2[1])> 2))	
		{
			echo " Successfully done email ";
			$email 		= $_POST['email'];
			$emailflag=1;
		}
	}
	}
	else
	{
		echo "  Failed Email ";
	} 
	
	if ( $_POST['pass'] != "" && strlen($_POST['pass'])>=6)
	{
		echo " Password::: ";
		echo $_POST['pass'] ;
		$pass		=$_POST['pass'];
		$passflag=1;
	}
	else 
	{
		echo " pls set valid Password and atlest 6 charecter must be taken   ";
	}
	
	if ( $_POST['gender'] != "")
	{
		echo " Gender selected ";
		$gender 	= $_POST['gender'];
		$genderflag=1;
	}
	else 
	{
		echo " pls set gender "; 
	}  
	
	 if($_POST['day']!="" && $_POST['month']!="" && $_POST['year']!="")
	{
	if ((($_POST['day']) >= '0' && ($_POST['day']) <= '31') && (($_POST['month']) >= '1' && ($_POST['month']) <= '12') && ( ($_POST['year']) >= '1900' ) || (($_POST['year']) >= '2018'  ))
	{
		echo " successfully DOB  ";
		$day 		= $_POST['day'];
		$month 		= $_POST['month'];
		$year 		= $_POST['year'];
		$dobflag=1;
	}		
	}
	else 
	{
		echo "  DOB failed   ";
	} 
	
	$radioval2 = $_POST['degree'];
	if ( $_POST['degree'] != "")
	{
		echo "Degree selected";
		$degree		=$_POST['degree'];
		$degreeflag=1;
	}
	else 
	{
		echo " pls set degree  ";
	}

	if ( $_POST['type'] != "")
	{
		echo "  User Type: ";
		echo $_POST['type'] ;
		$type		=$_POST['type'];
		$typeflag=1;
	}
	else 
	{
		echo "  pls set User Type ";
	}
	
	if($nameflag=1) 
	{
	if( $phoneflag=1)
	{
	if( $emailflag=1) 
	{
    if( $passflag=1 ) 
	{	
	if ($genderflag=1)
	{
	if ($dobflag=1)
	{
	if ($degreeflag=1 )
	{
	if( $typeflag=1 )
	{
		$regfile = fopen("reginfo.txt", "a");
		$datainfo= $name."|".$phone."|".$email."|".$pass."|".$gender."|".$degree."|".$type."|"."\r\n";	
		fwrite($regfile, $datainfo);
	    fclose($regfile);
		header("location: Login.php");
		
		
	}
	}
	}
	}
	}
	}
	}
	}
	else
		{
			echo"invalid data or creating file";
		}
	
	
	
	
	/* echo "Name: ".$name."<br/>";
	echo "Email: ".$email."<br/>";
	echo "Password: ".$password."<br/>";
	echo "Gender: ".$gender."<br/>";
	echo "DOB: ".$day."/".$month."/".$year; */
?>