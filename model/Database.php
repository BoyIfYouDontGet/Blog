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
// this mysqli checks if the connection works, if it doesnt, then the program dies.
public function openConnection () {
$this ->connection = new mysqli ($this->host, $this->username, $this->password, $this->database);
if ($this->connection->connect_error) {
	die("<p>Error: " . $this->connection->connect_error . "</p>");
}

public function closeConnecion (){
	// this if statemnet checks to see if we able open up a connection. The isset checks to see if theres something inside the variable. If there is not isset then isset returns no
  if (isset($this->connection)) {
    $this->connection->close();
 }
}

public function query ($string) {
	$this->openConnection();
// queys the  database
$query = $this->connection->query($string);

$this->closeConnecion();

return $query;
}

}



?>