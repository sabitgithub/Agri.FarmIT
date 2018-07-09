<?php
error_reporting(0);
?>


<fieldset>
    <legend><b>REGISTRATION</b></legend>

	<form method="post" action="regCheck.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value=""></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td>Phone</td>
				<td>:</td>
				<td><input name="phone" type="text" value=""></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="pass" type="password" value=""></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" type="radio" value="male">Male
						<input name="gender" type="radio" value="Female">Female
						<input name="gender" type="radio" value="Other">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input type="text" size="2" name="day" />/
						<input type="text" size="2" name="month" />/
						<input type="text" size="4" name="year" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>						
		
			
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Type</legend>    
						<input name="type" type="radio" value="Farmer">Farmer
						<input name="type" type="radio" value="Company Representative">Company Representative
					</fieldset>
				</td>
				<td></td>
			</tr>
			
		</table>
		<hr/>
		<input type="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>