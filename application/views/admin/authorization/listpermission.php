<br>
<table border="1" allign="center" cellspacing= "0" cellpading="0">
	<tr><th>Permission</th><th>Description</th><th>Action</th></tr>
	<?php 
	foreach ($permissions as $perm) {
 	?>
	<tr>
		<td><?php echo $perm->name; ?></td>
		<td><?php echo $perm->definition; ?></td>
		<td><a type="button" href="<?php echo site_url('admin/authorization/deletepermission/'.$perm->id); ?>"> <i class="fa fa-close"></i></a></td>
	</tr>
	<?php } ?>
</table>
<a href='<?php echo base_url('admin/authorization/addpermission'); ?>' type="button" class="btn btn-default">Create Permission</a>