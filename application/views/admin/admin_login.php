<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<?php echo form_open('admin/login/action',['role' => 'form','id' => 'login-form']); ?>
		<input type="text" name="username" placeholder="username"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" name="submit" value="Log In">
	<?php echo form_close(); ?>
</body>
</html>