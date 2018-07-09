<?php
	


?>


<fieldset>
	<legend>Delete Products</legend>
	
	<form method="post" action="deleteCheck.php">
		<br/>
		<table>
			<tr>
				<td>Product Name</td>
				<td>:</td>
				<td><input name="productname" type="text" value="" size="45"></td>
				<td></td>
			</tr>
			<tr>
				<td>Ditails</td>
				<td>:</td>
				<td><input name="ditails" type="text" value="" size="45"></td>
				<td></td>
			</tr>
			<tr>
				<td>Quentity</td>
				<td>:</td>
				<td><input name="quentity" type="text" value="" size="45"></td>
				<td></td>
			</tr>
			<tr>
				<td>Price</td>
				<td>:</td>
				<td><input name="price" type="text" value="" size="45"></td>
				<td></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="DELETE">
	</form>

</fieldset>