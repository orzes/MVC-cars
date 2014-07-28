<?php include 'view/header.php';
// file: carUpdateForm.php

print '<p>ln 4 carUpdateForm.php  row: '; print_r($row); print '<br>';

$id=$row['id'];
$model=$row['model'];
$color=$row['color'];
$scale=$row['scale'];
$make=$row['make'];
$year=$row['year'];
$description=$row['description'];

print '
<div id="main">
    <h1>Update car</h1>';
    include('view/navigation.php');
    
    print '<br /><br />
    <form action="index.php" method="post" id="carAddForm">

        <input type="hidden" name="id" value='.$id.' />        
        <input type="hidden" name="controllerAction" value="carUpdateProcess" />

        <label>Model:</label>
        <input type="input" name="model"  value="'.$model.'"/><br />

		<label>Make:</label>
		<input type="input" name="make" value="'.$make.'"  /><br />

        <label>Color:</label>
        <input type="input" name="color" value="'.$color.'"/><br />
        
        <label>Scale:</label>
        <input type="input" name="scale" value="'.$scale.'"/><br />
      
        <label>Year:</label>
        <input type="input" name="year" value="'.$year.'"/><br />                

        <label>Description:</label>
        <input type="input" name="description" size="60" value="'.$description.'"/><br />
                
        <label>&nbsp;</label>
        <input type="submit" value="Update car" />
        <br />  <br />
    </form>
    
</div>';

include 'view/footer.php'; 

?>