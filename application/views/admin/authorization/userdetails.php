	<br>List of Permission of <?php echo $users->username; ?><br>
	<?php 
	echo form_open('admin/authorization/deletepermuser');
	foreach ($permissions as $permission) { ?>
	<input type="text" name="user_id" value="<?php echo $users->id; ?>" hidden="">
	<input type="checkbox" name="permissions[]" value="<?php echo $permission->id; ?>" /> <span><?php echo strtolower($permission->definition) ?></span> <br />
	<?php } ?>
	<br>List of Group of <?php echo $users->username; ?><br>
	<?php foreach ($groups as $group) { ?>
	<input type="text" name="user_id" value="<?php echo $users->id; ?>" hidden="">
	<input type="checkbox" name="group[]" value="<?php echo $group->id; ?>" /> <span><?php echo strtolower($group->definition) ?></span> <br />
	<?php } ?>
	<input type="submit" value="Revoke Access" />
	<?php echo form_close() ?>