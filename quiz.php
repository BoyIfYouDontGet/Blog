<?php 

/**
* 
*/
class School


{
	public $classes;
	public $grades;
	public $subjects;

	function __construct($classes, $grades, $subjects)
	{
	$this->classes=$classes;
	$this->grades=$grades;
	$this->subjects=$subjects;
	}

	public function teachers() {
		return "The class im in right now " . $this->classes . "and the subject is " . $this->subjects;
	}
}
$PHS= new School("Bio", "a", "comp sci");
echo $PHS->teachers();

?>
