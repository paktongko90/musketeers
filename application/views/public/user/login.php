<!DOCTYPE html>
<html>
<head>
	<title>User Login Form</title>
</head>
<body>
	Login Form<br>
	<?php echo form_open('user/action',['role' => 'form','id' => 'login-form']); ?>
		<input type="email" name="useremail" placeholder="email"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" name="submit" value="Login">
	<?php echo form_close(); ?>
</body>
</html>