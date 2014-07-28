<?php 
/*
    file: view/debugView.php    
    This program builds a "view" in the application.  
    This file displays server arrays $_POST $_GET $_SESSION
    This file is included in the controller file index.php       
*/

include 'header.php';

print '
<div id="main">
  <h1>Debug View</h1>';
  include('view/navigation.php');
  
  print '<br /><br >
  <table border="1"> ';
    
  print '<tr><td>GET Array: </td><td>'; print_r($_GET); print'</td></tr>
         <tr><td>POST Array: </td><td>'; print_r($_POST); print'</td></tr>    
  </table><br /><br />'; 

print '</div>';
include('view/footer.php');
?>