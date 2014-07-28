<?php  //  file model/Db.php

class Db {
       
  public function __construct(){
    // define database variables
    $host='localhost';
    $db_user='webuser';
    $db_password='webuser';
    $database_name='s13brennan';
    
    $this->conn=mysql_connect($host, $db_user, $db_password) or die (mysql_error() );   // connect to the database server
    $selected_db=mysql_select_db($database_name);  // select the database to use in this app
  }
            
  public function query($sql) {
    $this->query_result=mysql_query($sql,$this->conn);
    return $this->query_result;
  }
      
  public function numRows(){
    // get the number of rows in the db result set
    return mysql_num_rows($this->query_result);
  }
  
  public function affectedRows(){
    // get the number of rows in the db result set
    return mysql_affected_rows();
  }
    
  public function getRow(){
    // fetch a single row, an array, from the db result set
    return mysql_fetch_assoc($this->query_result);
  }
    
  public function getRows(){
    // fetch all records in db result set, push onto array $records, return $records
    $rows=array();
    while ($row=mysql_fetch_assoc($this->query_result)){
      array_push($rows,$row);
    }
    return $rows;
  }
  

  
}
?>









