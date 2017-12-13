<?php
namespace model\user;
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 11/12/2017
 * Time: 13:13
 */

include "User.php";

class Student extends User
{
	public $gradesList;
	public $promotion;

	public function __construct() 
	{
        parent::__construct();
    }

	public function display()
	{
		$displayTesxt = "Etudiant : ".$this->firstName." ".$this->lastName."\n";
		echo $displayTesxt;
	}
}