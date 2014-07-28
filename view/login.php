<?php include 'view/header.php';
// file: bookSearchTitleForm.php

print '
<div id="main">
    <h1>Log In</h1>';
    include('view/navigation.php');
    
    print '<br /><br />
    <form action="index.php" method="post" id="loginProcess">
        
        <input type="hidden" name="controllerAction" value="loginProcess" />

        <label>Username:</label>
        <input type="input" name="password" /><br />
        
        <label>Password:</label>
        <input type="input" name="username" /><br />

        <label>&nbsp;</label>
        <input type="submit" value="Log In" />
        <br />  <br />
    </form>
    
</div>';

include 'view/footer.php'; 
	
?>