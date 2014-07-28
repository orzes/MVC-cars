<?php
  // file:  user.php
  // purpose:  define functions that use the database that can be called in the controller
  
Class user {  
  
  // table books: id 	title 	publisher 	price 	first_name 	last_name 	description  (use this to define column names in the db table)
  
  public function __construct(){
    // class variables are defined in constructor
    // all data in this app is managed in the database
  }
  function userLogin ($username,$password) {
  	global $db;
  	$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
  	$db_result=$db->query($sql);
  	return $db_result;
  }
  
//function display_test_message() 
//{
//	print '<h1>TEST</h1>';
//	$x;
//	$y;
//	$total = $x + $y;
//	print 'the total is '.$total;
//}

}


?>