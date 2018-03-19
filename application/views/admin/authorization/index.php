<h4>Assign User to section of permissions</h4>
<?php echo form_open('/authorization/set'); ?>


<div class="form-group">
	<h4>Users</h4>
	<select name="user_id" id="" class="form-control">
		<?php foreach($this->db->get('users')->result() as $user) {?>
			<option value="<?php echo $user->id; ?>"><?php echo $user->email ?></option>
		<?php } ?>
	</select>
</div>


<div class="form-group">
	<h4>List of modules and sections</h4>
		<?php foreach($this->db->get('perms')->result() as $screen) {?>
			<input type="checkbox" name="modules[]" value="<?php echo $screen->id; ?>" /> <span><?php echo strtolower($screen->definition) ?></span> <br />
		<?php } ?>
</div>

<div class="form-group">
	<input type="submit" class="btn btn-primary" value="set permissions" />
</div>

<?php echo form_close(); ?>