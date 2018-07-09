<?php
	error_reporting(0);
	
	if( isset($_POST['FERTILIZATION']))
	{
		$Fertilizerfile = fopen("FERTILIZATION.txt", "r");
		$Fertilizerdata   = fread($Fertilizerfile, filesize("FERTILIZATION.txt"));
		fclose($myfile);
		echo"$Fertilizerdata";
	}
	
	else if( isset($_POST['IRRIGATION']))
	{
		$IRRIGATIONfile = fopen("IRRIGATION.txt", "r");
		$IRRIGATIONdata   = fread($IRRIGATIONfile, filesize("IRRIGATION.txt"));
		fclose($IRRIGATIONfile);
		echo"$IRRIGATIONdata";
	}
	
	else if( isset($_POST['MEDICINE']))
	{
		$MEDICINEfile = fopen("MEDICINE.txt", "r");
		$MEDICINEdata   = fread($MEDICINEfile, filesize("MEDICINE.txt"));
		fclose($MEDICINEfile);
		echo"$MEDICINEdata";
	}
	
	else if( isset($_POST['WATERING']))
	{
		$WATERINGfile = fopen("WATERING.txt", "r");
		$WATERINGdata   = fread($WATERINGfile, filesize("WATERING.txt"));
		fclose($WATERINGfile);
		echo"$WATERINGdata";
	}
	
	else if( isset($_POST['PLANTING']))
	{
		$PLANTINGfile = fopen("PLANTING.txt", "r");
		$PLANTINGdata   = fread($PLANTINGfile, filesize("PLANTING.txt"));
		fclose($PLANTINGfile);
		echo"$PLANTINGdata";
	}
	
	else if( isset($_POST['EDIT_LAND']))
	{
		$EDIT_LANDfile = fopen("EDIT_LAND.txt", "r");
		$EDIT_LANDdata   = fread($EDIT_LANDfile, filesize("EDIT_LAND.txt"));
		fclose($EDIT_LANDfile);
		echo"$EDIT_LANDdata";
	}
		
		
	else
	{
		echo "Invalid requuest";
	}
	
?>