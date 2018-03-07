<?php

class User_model extends CI_Model {


	public function all() 
	{
		return $this->db->get('users')->result();
	}

	public function getPermissions($user_id)
	{
		$this->db->select('*');
		$this->db->from('perm_to_user');
		$this->db->join('perms','perm_to_user.perm_id = perms.id');
		$this->db->where('perm_to_user.user_id',$user_id);

		return $this->db->get()->result();
	}

	public function getGroup($user_id)
	{
		$this->db->select('*');
		$this->db->from('user_to_group');
		$this->db->join('groups','user_to_group.group_id = groups.id');
		$this->db->where('user_to_group.user_id',$user_id);

		return $this->db->get()->result();
	}

}
