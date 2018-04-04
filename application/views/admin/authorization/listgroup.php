<br>
<table border="1" allign="center" cellspacing= "0" cellpading="0">
	<tr><th>Permission</th><th>Description</th><th>Action</th></tr>
	<?php 
	foreach ($group as $grp) {
 	?>
	<tr>
		<td><?php echo $grp->name; ?></td>
		<td><?php echo $grp->definition; ?></td>
		<td><a type="button" href="<?php echo site_url('admin/authorization/deletegroup/'.$grp->id); ?>"> <i class="fa fa-close"></i></a></td>
	</tr>
	<?php } ?>
</table>
<a href='<?php echo base_url('admin/authorization/creategroup'); ?>' type="button" class="btn btn-default">Create Group</a>