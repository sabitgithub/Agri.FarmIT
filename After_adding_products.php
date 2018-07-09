<?php
	


?>

<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

<fieldset>
	<legend>Product List</legend>
	
	<form>
	<br/>
		<table style="width:100%">
		  <tr>
			<th>Product Name</th>
			<th>Ditails</th>
			<th>Quentity</th>
			<th>Price</th>
		  </tr>
		  <tr>
			<?php
				$myfile = fopen("addproduct.txt", 'r');
				$data = fread($myfile, filesize("addproduct.txt"));
				$arr = explode("|", $data);
				fclose($myfile);
			?>
			<td><?php echo $arr[0];?></td>
		  
			<td><?php echo $arr[1];?></td>
			<td><?php echo $arr[2];?></td>
			<td><?php echo $arr[3];?></td>
		  </tr>
		  
		</table>
		<br/>
		
	</form>

</fieldset>