
<html>
<head>
<title>Registration</title>
</head>
<body>
	<h1 align="center">Registration Form</h2>
	<form method="POST" name="form1" action="Reg/save" align="center">
		<table border="1" align="center"> 
		<tr>
		
			<td>
				Firstname:<input type="text" name="txtname">
			</td>
		</tr>
		<tr>
			<td>
				Lastname:<input type="text" name="txtlname">
			</td>
		</tr>
		<tr>
			<td>
				Email:<input type="text" name="txtemail">
			</td>
		</tr>
		<tr>
			<td>
				Password:<input type="password" name="txtpassword">
			</td>
		</tr>
		<tr>
			<td>
			Gender:<input type="radio" name="gender" value="Male" checked>Male
					<input type="radio" name="gender" value="Female"> Female
			</td>
		</tr>
		
		
		<tr>
			<td>
				<input type="submit" value="submit" name="btnsubmit"/>
			</td>
			
		</tr>
		</table>
		
	</form>
	<table>
		<tr>
			<td>
				firstname
			</td>
		
		
			<td>
				lastname
			</td>
			<td>
				email
			</td>
			<td>
				password
			</td>
			<td>
				gender
			</td>
			<td>
			
			</td>
		</tr>
		<?php
			foreach($result as $row)
			{
		?>
				<tr>
					<td>
						<?php
							echo $row['fname'];
						?>
					</td>
					<td>
						<?php
							echo $row['lname'];
						?>
					</td>
					<td>
						<?php
							echo $row['email'];
						?>
					</td>
					<td>
						<?php
							echo $row['password'];
						?>
					</td>
					<td>
						<?php
							echo $row['gender'];
						?>
					</td>
					<td>
					<?php
					echo "<a href=RegEdit/?id=$row[rid]>edit</a>";
						?>
					</td>
					
					
				
				</tr>
				
					
				
			<?php
				
			}
			?>
	</table>
	<?php
		echo validation_errors();
	?>
</body>
</html>