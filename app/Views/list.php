<html>
<head>
	<title>stutents</title>
	 <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

<table class="table" border="1" align="center">
    <tr>
        <td colspan="5" align="right"><a href="<?php echo site_url('/create') ?>">Add</a></td>
    </tr>

	<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Mobile</td>
		<td>Action</td>
	</tr>
	<?php
	 foreach($students_detail as $sd){
		?>
		<tr scope="row">
			<td><?php echo $sd['first_name']; ?></td>
			<td><?php echo $sd['last_name']; ?></td>
			<td><?php echo $sd['email']; ?></td>
			<td><?php echo $sd['mobile']; ?></td>
			<td><a  href="<?php echo base_url(); ?>/edit/<?php echo $sd['id']; ?>">Edit</a>&nbsp;<a  href="<?php echo base_url(); ?>/delete/<?php echo $sd['id']; ?>">Delete</a></td>
		</tr>
		<?php
	}
	?>
 </table>
</body>
</html> 