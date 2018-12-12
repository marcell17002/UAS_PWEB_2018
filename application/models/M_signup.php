<?php
class M_signup extends CI_Model 
{
	function saverecords($npm,$nama,$email,$no_telpon,$nama_univ,$kd_univ,$username,$password)
	{
	$query="insert into Delegator values('$npm','$nama','$email','$no_telpon','$nama_univ','$kd_univ','$username','$password')";
	$this->db->query($query);
	}
}