	<br>List of Permission of <?php echo $groups->name; ?>'s Group<br>
	<?php 
	echo form_open('admin/authorization/deletepermgrp');
	foreach ($permissions as $permission) { ?>
	<input type="text" name="group_id" value="<?php echo $groups->id; ?>" hidden="">
	<input type="checkbox" name="grppermission[]" value="<?php echo $permission->id; ?>" /> <span><?php echo strtolower($permission->definition) ?></span> <br />
	<?php } ?>
	<input type="submit" value="Revoke Access" />
	<?php echo form_close() ?>