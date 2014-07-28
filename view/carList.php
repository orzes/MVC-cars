<?php 
/*
    file: view/carList.php    
    This program builds a "view" in the application.  
    This file displays a list of cars
    This file is included in the controller file index.php       
*/


include 'header.php';

print '
<div id="main">
  <h1>car List</h1>';
  include('view/navigation.php');
  
  print '
  <table border="1"> ';
  
  print '<tr>
      <th>#</th><th>Model</th><th>Make</th><th>Year</td><th>Style</th><th>Description</th>
    <tr>';  
  
  $numRows=$db->numRows();
  print '<p>Number of cars in the List: '.$numRows; print '<br >';
  
  for($i=0; $i<$numRows; $i++) {      
    $row=$db->getRow();    
    // print_r($row); this is a good debugging technique        
    print '<tr>'; 
      print '<td>'.$row['id'].'</td>
            <td>'.$row['model'].'</td>
            <td>'.stripslashes($row['make']).'</td>
            <td>'.$row['year'].'</td>
            <td>'.$row['color'].'</td> 
            <td>'.$row['scale'].'</td>
                       
            <td>'.stripslashes($row['description']).'</td>'; 
        print '</tr>';              
  } // end for $i   
  
  
  /*  alternative approach to fetching and displaying each car record
  $rows=$db->getRows();  
  foreach ($rows as $row) {      
    //$row=mysql_fetch_assoc($carResult);  
    // print_r($row);         
    print '<tr>'; 
      print '<td>'.$row['id'].'</td>
            <td>'.$row['model'].'</td>
            <td>'.stripslashes($row['make']).'</td>
            <td>$'.$row['year'].'</td>
            <td>'.$row['color'].' '.$row['scale'].'</td>
                       
            <td>'.stripslashes($row['description']).'</td>'; 
        print '</tr>';              
  } // end for $i
  */
  
  print '</table><br /><br />'; 

print '</div>';
include('view/footer.php');
?>