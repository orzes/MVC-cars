<?php
  // file: navigation.php
  // put all nav links in one file and use throughout the app
  
if (@ $_SESSION['user_logged_in']=1) {  
  print '
    <a href="index.php?controllerAction=showcarAddForm">Add car</a>'.'&nbsp;&nbsp;
    <a href="index.php?controllerAction=showcarManageList">Update car</a>'.'&nbsp;&nbsp;      
    <a href="index.php?controllerAction=showcarManageList">Delete car</a>'.'&nbsp;&nbsp;';
    }
  print '
    <a href="index.php?controllerAction=listcars">List cars</a>'.'&nbsp;&nbsp;
    <a href="index.php?controllerAction=carSearchTitleForm">Search</a>'.'&nbsp;&nbsp;
    <a href="index.php?controllerAction=loginForm">Login</a>'.'&nbsp;&nbsp;';
?>

      