<?php
namespace model\user;
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 11/12/2017
 * Time: 13:13
 */
class User
{
	public $lastName;
	public $firstName;
	public $profile_picture;
	public $login;
	public $password;
	public $mail;
	public $phone_number;
	public $role;
	public $messagesList;

	public function __construct()
	{
    }

	public function display()
	{
		$displayTesxt = $this->firstName." ".$this->lastName."\n";
		echo $displayTesxt;
	}
}