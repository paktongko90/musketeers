<h4>List of user</h4>

<table border="1" allign="center" cellspacing= "0" cellpading="0">
	<tr><th>Email</th><th>Usename</th><th>Action</th></tr>
	<?php 
	foreach ($users as $userlist) {
 ?>
	<tr>
		<td><?php echo $userlist->email; ?></td>
		<td><?php echo $userlist->username; ?></td>
		<td>
			<a href='<?php echo base_url('admin/user/deleteuser/'.$userlist->id); ?>'> 
				<?php
					if($this->aauth->get_user()->id == $userlist->id){
						echo '';
					}else{
						echo 'Delete';
					}
				?>		
			</a>
		</td>
	</tr>
	<?php } ?>
</table>
<a href='<?php echo base_url('admin/user/create'); ?>' type="button" class="btn btn-default">Create User</a>
<?php 
	/*$id = $this->aauth->get_user();
	foreach ($id as $userid) {
		echo $userid;
	}*/
 ?>
 <?php 
 	if(!$this->aauth->is_allowed('USER_MANAGEMENT',$currentuser)){
		echo 'tidak boleh view';
	}else{
		echo 'boleh view';
	}
  ?>