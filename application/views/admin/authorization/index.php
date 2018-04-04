<h4>Assign User to section of permissions</h4>
<?php echo form_open('admin/authorization/setpermission'); ?>
	User<br>
	<select name="user_id">
		<?php foreach ($users as $user) { ?>
		<option value="<?php echo $user->id; ?>"><?php echo $user->email ?></option>
		<?php } ?>
	</select>
	List of modules and sections<br>
	<?php foreach($this->db->get('perms')->result() as $screen) {?>
			<input type="checkbox" name="modules[]" value="<?php echo $screen->id; ?>" /> <span><?php echo strtolower($screen->definition) ?></span> <br />
		<?php } ?>
	<input type="submit" value="set permissions" />
<?php echo form_close(); ?>