<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_group extends CI_Model
{


	function copy_menu($from, $to)
	{
		$sql = "call copy_menu(?,?,@message,@error)";
		$param = array(
			'from' => $from,
			'to' => $to

		);
		$this->db->query($sql, $param);
		$this->db->reconnect();
		$sqlGetOutParam = "SELECT @message as MESSAGE, 
							@error as ERROR";

		$outValue = $this->db->query($sqlGetOutParam);

		return $outValue->result();
	}

	public function menugcm($param)
	{
		$this->db->select('*');
		$this->db->from('m_gcm');
		$this->db->where('PARAMETER', $param);
		$this->db->where('FLAG_ACTIVE', 'Y');
		$query = $this->db->get();
		return $query->result();
	}
}
//69ffe55a99db23b320584d31242cab8f //