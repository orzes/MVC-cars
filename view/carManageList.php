<?php 
/*
    file: view/carManageList.php    
    This program builds a "view" in the application.  
    This file displays a list of cars
    This file is included in the controller file index.php       
*/


include 'header.php';

print '
<div id="main">
  <h1>Select car to Update or Delete</h1>';
  include('view/navigation.php');
  
  print '
  <table border="1"> ';
  
  print '<tr>
      <td>ID #</td><td>Model</td><td>Make</td><td>Color</td><td>Scale</td><td></td><td></td>
    <tr>';  
    
  $numRows=$db->numRows();
  print '<p>Number of cars in List: '.$numRows; print '<br >';

  for($i=0; $i<$numRows; $i++) {      
    $row=$db->getRow();   //$row=mysql_fetch_assoc($carResult);  
    // print_r($row);         
    print '<tr>'; 
      print '<td>'.$row['id'].'</td>
            <td>'.$row['model'].'</td>
            <td>'.stripslashes($row['make']).'</td>
            <td>'.$row['color'].'</td>
            <td>'.$row['scale'].'</td>
            <td><a href="index.php?controllerAction=carDeleteProcess&id='.$row['id'].'">Delete</a></td>
            <td><a href="index.php?controllerAction=showcarUpdateForm&id='.$row['id'].'">Update</a></td>'; 
        print '</tr>';              
  } // end for $i
  print '</table><br /><br />'; 

print '</div>';
include('view/footer.php');
?>