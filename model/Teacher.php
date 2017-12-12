<?php

/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 11/12/2017
 * Time: 13:13
 */
class Teacher extends User
{
	public $subjectsList;

	public function __construct() 
	{
        parent::__construct();
    }

	public function display()
	{
		$displayTesxt = "Enseignant : ".$this->firstName." ".$this->lastName."\n";
		echo $displayTesxt;
	}
}