<?php include 'view/header.php';
// file: carSearchTitleForm.php

print '
<div id="main">
    <h1>Search cars by Title</h1>';
    include('view/navigation.php');
    
    print '<br /><br />
    <form action="index.php" method="post" id="carAddForm">
        
        <input type="hidden" name="controllerAction" value="carSearchTitleProcess" />

        <label>Search Term:</label>
        <input type="input" name="searchTerm" /><br />

        <label>&nbsp;</label>
        <input type="submit" value="Search" />
        <br />  <br />
    </form>
    
</div>';

include 'view/footer.php'; 

?>