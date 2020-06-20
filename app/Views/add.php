<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" name="frmAdd" action="<?php echo site_url('/store');?>">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Add Record</td>
            </tr>

            <tr>
                <td>First Name</td>
                <td><input type="text" name="txtFname"> </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="txtLname"> </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="txtAddress" rows="4" cols="16"></textarea> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtEmail"> </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="txtMobile"> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"> </td>
            </tr>
        </table>
</form>
</body>