<?php echo form_open('admin/user/usersave',['role' => 'form','id' => 'save-user']); ?>
	Email : <input type="email" name="email"><br>
	Username : <input type="username" name="username"><br>
	Password : <input type="password" name="password"><br>
	Password : <input type="password" name="repassword"><br>
	<input type="submit" name="submit" value="Save User">
<?php echo form_close(); ?>