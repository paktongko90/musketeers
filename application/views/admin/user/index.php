<h4>List of user</h4>

<table border="1" allign="center" cellspacing= "0" cellpading="0">
	<tr><th>Email</th><th>Usename</th><th>Action</th><th>Details</th></tr>
	<?php 
	foreach ($users as $userlist) {
 ?>
	<tr>
		<td><a href='<?php echo base_url('admin/authorization/setuserbasepermission/'.$userlist->id); ?>'><?php echo $userlist->email; ?></a></td>
		<td><?php echo $userlist->username; ?></td>
		<td>
			<a  href='<?php echo base_url('admin/user/deleteuser/'.$userlist->id); ?>'> 
				<?php
					if($this->aauth->get_user()->id == $userlist->id){
						echo '';
					}else{
						echo 'Delete';
					}
				?>		
			</a>
		</td>
		<td><a href="<?php echo base_url('admin/authorization/userdetail/'.$userlist->id) ?>">more</a></td>
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