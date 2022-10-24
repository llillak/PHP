<?php


class Osoba{

	
	private $name = null;
	private $surname = null;
	private $phonenumber = null;
	private $birthdate = null;
	private $sex = null;
	
	public function __construct($name = "DEFAULT", $surname = "DEFAULT", $sex = "OPTIONAL", $birthdate = "OPTIONAL", $phonenumber = "OPTIONAL" ){
		$this->name = $name;
		$this->surname = $surname;
		$this->phonenumber = $phonenumber;
		$this->birthdate = $birthdate;
		$this->sex = $sex;
	}
	
	public function __destruct(){
		
	}

	public function getPhoneNumber(){
		return $this->phonenumber;
	}

	public function setPhoneNumber($phonenumber){
		
	if(strlen($phonenumber)== 9){
		
		if(ctype_digit($phonenumber)){
			$this->phonenumber = $phonenumber;
	
		}
	}
	
	}
	
	public function getName($name){
		return $this->name;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setSurname($surname){
		$content = False;
		if(ctype_alpha($surname)){
			$content = True;
			for( $i=0;  $i < strlen($surname); $i++ ){
				if((ctype_upper($surname[$i]))&& ($i==0)){
					$content = True;
				}
				if((ctype_upper($surname[$i]))&& ($i!=0)){
					$content = False;
				}
			}
		}
		if( $content == True){
			$this-> surname = $surname;
		}
		
	}


	public function getDays(){
		$bdate = new DateTime($this->birthdate);
		$cdate= new DateTime(date("Y-m-d")); 
	
		$interval = date_diff($cdate, $bdate);
		return $interval -> format('%a');
	}
	
	public function getInfo(){
		echo "<br>" ;
		echo "<br>" ;
		echo "I'm    ".$this->name.".     ".$this->name." ".$this->surname.".";
		echo "<br>";
		echo "I was born on ".$this->birthdate." and have already lived ".$this->getDays()." days.";
		echo "<br>";
		echo "My phone number is ".$this->phonenumber.". ";
		echo "<br>" ;
		echo "<br>" ;
		
	}



}

?>