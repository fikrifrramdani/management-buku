<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book_model extends CI_Model
{
	var $table = 'books';

	function bookAdd($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function getAllBooks()
	{
		$this->db->from($this->table);

		$query = $this->db->get();
		return $query->result();
	}

	function getById($id)
	{
		$this->db->from($this->table);
		$this->db->where('book_id', $id);
		$query = $this->db->get();

		return $query->row();
	}

	function bookUpdate($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	function deleteById($id)
	{
		$this->db->where('book_id', $id);
		$this->db->delete($this->table);
	}
}

/* End of file Book_model.php */
