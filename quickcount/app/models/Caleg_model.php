<?php 

class Caleg_model {
	private $table = 'caleg';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	

	public function getAllCaleg()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
	public function getCalegById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table.' WHERE id=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}
	public function ubahDataCaleg($data)
	{
		$query = "UPDATE caleg set 
					earned_vote = :earned_vote
					 WHERE id = :id ";
		$this->db->query($query);
		$this->db->bind('earned_vote',$data['earned_vote']);

		$this->db->bind('id',$data['id']);

		$this->db->execute();

		return  $this->db->rowCount();

	}

	
	
}