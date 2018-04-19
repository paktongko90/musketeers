	<?php 
	echo form_open('admin/authorization/deletepermuser');
	foreach ($permissions as $permission) { ?>
	<input type="text" name="user_id" value="" hidden="">
	<input type="checkbox" name="permissions[]" value="<?php echo $permission->id; ?>" /> <span><?php echo strtolower($permission->definition) ?></span> <br />
	<?php } ?>
	<input type="submit" value="Revoke Access" />
	<?php echo form_close() ?>