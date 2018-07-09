<?php
	


?>

<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

<fieldset>
	<legend>Land Information</legend>
	
	<form>
	<br/>
		<table style="width:100%">
		  <tr>
			<th>Name</th>
			<th>Details</th>
		  </tr>
		  <tr>
			<?php
				$myfile = fopen("info.txt", "r");
				$data   = fread($myfile, filesize("info.txt"));
				fclose($myfile);
				//echo $data;
				$arr1 = explode("|", $data);
				//echo $arr1[0];
				//echo $arr1[1];
				//echo $arr1[2];
				$arr2 = explode("/", $data);
				//echo $arr2[0];
				//echo $arr2[1];
				//echo $arr2[2];
				//echo $arr2[3];
			?>
			<td><?php echo $arr1[0];?></td>
			<td><?php echo $arr2[1];?></td>
		  </tr>
		  <tr>
			<td><?php echo $arr1[1];?></td>
			<td><?php echo $arr2[2];?></td>
		  </tr>
		  <tr>
			<td><?php echo $arr1[2];?></td>
			<td><?php echo $arr2[3];?></td>
		  </tr>
		  
		  
		</table>
	</form>

</fieldset>