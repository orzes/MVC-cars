<?php
  // file database.php
  // build database connection $conn to use in all files where a connection to the database is used
    // define database variables
    $host='localhost';
    $db_user='webuser';
    $db_password='webuser';
    $database_name='s13brennan';
    
    $conn=mysql_connect($host, $db_user, $db_password) or die (mysql_error() );   // connect to the database server
    $selected_db=mysql_select_db($database_name);  // select the database to use in this app
    
    if(!$conn) {
      // print '<p>There is a database connection issue.</p>';
    }
    if(!$selected_db) {
      print '<p>The database '.$database_name.' is not selected</p>';
    }    
    
    /*
    if ($conn) {
      print '<p>The database is connected.</p>';  // 
    }
    if($selected_db){
      print '<p>The database named '.$database_name.' is now selected';
    }
    */
    
   
    /*
    $sql="SELECT * FROM cars ORDER BY id";
    $result=mysql_query($sql, $conn);
    $numrows=mysql_num_rows($result);    
    if($numrows>0) {
      print '<p>Great! the database seems to be working</p>';
    }
    
    print '<p>Testing access to records in the database</p>';
    while($db_record=mysql_fetch_assoc($result) ) {
      foreach($db_record as $row) {
        print_r($row);
      }
      print '<br /><br />';  
    }
    */
  
?>