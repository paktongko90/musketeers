<h4>Assign User to section of permissions</h4>
<?php echo form_open('admin/authorization/setpermission'); ?>
	User<br>
	<select name="user_id">
		<?php foreach ($users as $user) { ?>
		<option value="<?php echo $user->id; ?>"><?php echo $user->email ?></option>
		<?php } ?>
	</select>
	<br>List of modules and sections<br>
	<?php foreach($this->db->get('perms')->result() as $screen) {?>
		<input type="checkbox" name="modules[]" value="<?php echo $screen->id; ?>" /> <span><?php echo strtolower($screen->definition) ?></span> <br />
		<?php } ?>
	<input type="submit" value="set permissions" />
<?php echo form_close(); ?>

<h4>Assign Group to Permission</h4>
<?php echo form_open('admin/authorization/setpermgroup'); ?>
	<select name="group_id">
		<?php foreach ($this->db->get('groups')->result() as $group){ ?>
		<option value="<?php echo $group->id; ?>"><?php echo $group->name; ?></option>
		<?php } ?>
	</select>
<br>List of Permission<br>
	<?php foreach ($this->db->get('perms')->result() as $perm) { ?>
	<input type="checkbox" name="modules[]" value="<?php echo $perm->id; ?>" /> <span><?php echo strtolower($perm->definition) ?></span> <br />
	<?php } ?>
	<input type="submit" value="Set Permission to Group">
<?php echo form_close();?>

<h4>Assign User to Group</h4>
<?php echo form_open('admin/authorization/userroup'); ?>
	<select>
		<?php foreach ($this->db->get('users')->result() as $user) {?>
		<option value="<?php echo $user->id; ?>"><?php echo $user->email; ?></option>
		<?php } ?>
	</select>
	<br>List of Group<br>
	<?php foreach ($this->db->get('groups')->result() as $group) { ?>
	<input type="checkbox" name="modules" value="<?php echo $group->id; ?>"><span><?php echo $group->definition ?></span><br>
	<?php } ?>
<?php echo form_close(); ?>