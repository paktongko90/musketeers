	<br>List of Permission of <?php echo $users->username; ?><br>
	<?php foreach ($permissions as $permission) { ?>
	<input type="checkbox" name="modules[]" value="<?php echo $permission->id; ?>" /> <span><?php echo strtolower($permission->definition) ?></span> <br />
	<?php } ?>