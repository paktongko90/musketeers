<?php foreach ($user as $user) { ?>
<br>List of Permission <?php echo $user->name; ?><br>
<?php } ?>
	<?php foreach ($permissions as $permission) { ?>
	<input type="checkbox" name="modules[]" value="<?php echo $permission->id; ?>" /> <span><?php echo strtolower($permission->definition) ?></span> <br />
	<?php } ?>