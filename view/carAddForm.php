<?php include 'view/header.php';
// file: carAddForm.php

print '
<div id="main">
    <h1>Add Car</h1>';
    include('view/navigation.php');
    
    print '<br /><br />
    <form action="index.php" method="post" id="carAddForm">
        
        <input type="hidden" name="controllerAction" value="carAddProcess" />

        <label>Model:</label>
        <input type="input" name="model" /><br />

		<label>Make:</label>
		<input type="input" name="make" /><br />
		
        <label>Color:</label>
        <input type="input" name="color" /><br />
        
        <label>Scale:</label>
        <input type="input" name="scale" /><br />
            
        <label>Year:</label>
        <input type="input" name="year" /><br />                

        <label>Description:</label>
        <input type="input" name="description" /><br />                    
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Car" />
        <br />  <br />
    </form>
    
</div>';

include 'view/footer.php'; 

?>