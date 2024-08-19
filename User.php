<?php 

namespace Acme;

class User 
{
	protected $loggedIn = false;
	protected $data = [
		'username' => 'marcofloriano',
		'password' => 'tomate',
		'lastSeen' => '2024-08-14 13:49:20',
	];

	public function getData($foo)
	{
		return $this->data;
	}
	
	public function setData(array $data, $autosave = false)
	{
		$this->data = $data;
	}

	public function isLoggedIn()
	{
		return $this->loggedIn;
	}
}