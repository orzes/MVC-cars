<?php
  // file:  car_db.php
  // purpose:  define functions that use the database that can be called in the controller
  
Class car {  
  
  // table tblCars: id 	Model 	make 	year 	color 	scale 	description  (use this to define column names in the db table)
  
  public function __construct(){
    // class variables are defined in constructor
    // all data in this app is managed in the database
  }
  
  
  function get_cars() {
      global $db;
      $sql="SELECT * FROM tblCars ORDER BY model";
      $db_result=$db->query($sql);
      return $db_result;
  }

  function get_car($id) {
      global $db;
      $sql="SELECT * FROM tblCars WHERE id=$id ";
      $db_result=$db->query($sql);
      return $db_result;
  }

  function add_car($model, $make, $year, $color, $scale, $description) {
    global $db;
    $sql="INSERT INTO tblCars(model, make, year, color, scale, description)
              VALUES('$model', '$make', '$year', '$color', '$scale', '$description')";
    $db_result_set=$db->query($sql);    
    return mysql_affected_rows();
  }

  function update_car($id, $model, $make, $year, $color, $scale, $description) {
    global $db;
    $sql="UPDATE tblCars SET model='".$model."', make='".$make."', year='".$year."', 
    color='".$color."', scale='".$scale."', description='".$description."'  WHERE id='".$id."' ";
    $db_result_set=$db->query($sql);
    
    return $db->affectedRows();
  }

  function delete_car($id) {
    global $db;
    $sql="DELETE FROM tblCars WHERE id=$id";
    $db_result_set=$db->query($sql);
    return mysql_affected_rows();
  }

  function search_cars_by_model($searchterm) {
      global $db;
      $sql="SELECT * FROM tblCars WHERE model LIKE '%$searchterm%' ";
      $db_result=$db->query($sql);
      return $db_result;
  }


}


?>