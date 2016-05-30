<?php
class Person{

	protected $dob;
	protected $name='';
	protected $weight;
	protected $height;
	protected $gender;
	public $nickname = '';
	protected $stomachLevel =0;
	protected $hasShoes = false;

	// Function that runs when you creat an instance of this class

	public function __construct($newName,$newWeight=0){

		//save the new values up inside the properties
		$this->name = $newName;
		$this->weight = $newWeight;
		$this->dob = date('Y-m-d');
	}

	public function eat(){

	}

	public function walk(){

	}


	public function sayBirthday(){

		//convert this birthday into something that you would say 
		//Convert the date into a timestamp
		$birthdateAsTime = strtotime($this->dob);

		//Get the day (21st etc)
		$day = date('jS',$birthdateAsTime);

		//Get the month and year(Janurary 2001 etc)........................
		$monthYear = date('F Y',$birthdateAsTime);


		// echo $birthdateAsTime;

		// Show to the browser...........................
		echo '<p>';
		echo"My birthday is on the {$day} of {$monthYear}";
		// echo 'My birthday is on the '.$day.' of '.$monthYear;
		echo '</p>';
	}

	public function introduceSelf(){

		echo '<p>';
		echo 'Hello, My name is '.$this->name;
		echo '</p>';
	}







}