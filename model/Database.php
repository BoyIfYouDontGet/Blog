<?php 
// to create a class, you put classs then you put the name of the classs afterwards.
// the class i am creating is going to take repeated code and make our code easier to read. A class is an object. A class can have variables inside. Classes store information so you can call it later. 
class Database {
private $connection;
private $host;
private $password;
private $username;
private $database;

public function __construct ($host, $username, $password. $database)  { $this->host = $host; $this->username = $username; $this->password = $password;  $this->database = $database;  

}
public function openConnection () {

}

public function closeConnecion (){

}

public function query ($string) {
	
}

}



?>