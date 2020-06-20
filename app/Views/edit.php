
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" name="frmEdit" action="<?php echo base_url('/update');?>">
	<table align="center">
		<tr>
			<td colspan="2" align="center">Edit Record</td>
		</tr>
		<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $student['id'] ?>">
		<tr>
			<td>First Name</td>
			<td><input type="text" name="txtFname" value="<?php echo $student['first_name']; ?>"> </td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="txtLname" value="<?php echo $student['last_name']; ?>"> </td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="txtAddress" rows="4" cols="16"><?php echo $student['address']; ?></textarea> </td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="txtEmail" value="<?php echo $student['email']; ?>"> </td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td><input type="text" name="txtMobile" value="<?php echo $student['mobile']; ?>"> </td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
		</tr>
	</table>
</form>
</body>
</html>