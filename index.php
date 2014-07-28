<?php
/*
  file: product_manager/index.php
  This application illustrates a Model-View-Controller MVC framework
  
  The Model represents the data in the application.  Note the directory model which 
  contains all database programming. 
  The View represents the user interface the user interacts with in the app.  
  The Controller represents the management of user interaction (links clicked by user).
  
  This file, index.php is the "controller" script in the MVC framework
  Based on user input, various "controllerActions" are taken below to interact with 
  the "Model", the underlying database supporting this application, and 
  build appropriate "Views" such as listing cars, and displaying html forms
*/


require('model/Db.php');
require('model/car_db.php');

$db=new Db();

if (isset($_POST['controllerAction'])) {
    $controllerAction = $_POST['controllerAction'];
} else if (isset($_GET['controllerAction'])) {
    $controllerAction = $_GET['controllerAction'];
} else {
    $controllerAction = 'listcars';// listcars is the default
}

/********************************************************************************************************  
controllerActions: define this list once and use this naming convention to save a lot of errors
listcars  
showcarAddForm carAddProcess
showcarUpdateForm carUpdateProcess
showcarManageList
carDeleteProcess      **********************************************************************************/


/**********  controllerAction: list all cars in database  **********************************************/
if ($controllerAction == 'listcars') {
  
  $car=new car();

  $carResult=$car->get_cars();
    
  // build "the view" by displaying cars
  include('view/carList.php');
}

/**********  controllerAction:  show the form to add a car  ********************************************/
else if ($controllerAction == 'showcarAddForm') {
  include('view/carAddForm.php');
  
}

/**********  controllerAction: process the html form vars and INSERT a car record  *********************/
else if ($controllerAction=='carAddProcess') {
  // include('view/debugView.php');
  $car=new car();

  $model=$_POST['model'];
  $make=$_POST['make'];
  $year=$_POST['year'];
  $color=$_POST['color'];
  $scale=$_POST['scale'];
  $description=$_POST['description'];
  
  $carResult=$car->add_car($model, $make, $year, $color, $scale, $description);

  if($carResult==1) {
    header("Location: index.php");
  }
  else {
    print '<p>The car was NOT successfully added.</p>';
  }
}

/**********  controllerAction: show html form to add a new car  ***************************************/
else if ($controllerAction=='showcarUpdateForm') {
  // include('view/debugView.php');
  
  $car=new car();
  $id=$_GET['id'];
  
  $carResult=$car->get_car($id);
  $row=mysql_fetch_assoc($carResult);
  
  include('view/carUpdateForm.php');
}

/**********  controllerAction: process html form vars, build and execute INSERT query  ******************/
else if ($controllerAction=='carUpdateProcess') {
  // include('view/debugView.php');
  
  $car=new car();

  $id=$_POST['id'];
  $model=$_POST['model'];
  $make=$_POST['make'];
  $year=$_POST['year'];
  $color=$_POST['color'];
  $scale=$_POST['scale'];
  $description=$_POST['description'];
  
  $carResult=$car->update_car($id, $model, $make, $year, $color, $scale, $description);

  if($carResult==1) {
    header("Location: index.php?controllerAction=showcarManageList");
  }
  else {
    print '<p>The car was NOT successfully updated.</p>';
  }
}

/**********  controllerAction: show list of cars with links to update and delete a car record  **********/
else if ($controllerAction=='showcarManageList') {
  // include('view/debugView.php');

  $car=new car();
  $carResult=$car->get_cars();
  
  include('view/carManageList.php');  
}

/**********  controllerAction: execute delete query  *******************************************************/
else if ($controllerAction=='carDeleteProcess') {
  // include('view/debugView.php');
  
  $id=$_GET['id'];  
  $car=new car();
  $carResult=$car->delete_car($id);

  if($carResult==1) {
    header("Location: index.php?controllerAction=showcarManageList");
  }
  else {
    print '<p>The car was NOT successfully added.</p>';
  }
}

/**********  controllerAction: show html form to manage user input of model search term  *********************/
if ($controllerAction == 'carSearchmodelForm') {
 // include('view/debugView.php');
    
  include('view/carSearchmodelForm.php');
}


/**********  controllerAction: search car database using search term  **************************************/
if ($controllerAction == 'carSearchmodelProcess') {
  // include('view/debugView.php');
    
  $searchTerm=$_POST['searchTerm'];
  
  $car=new car();
  $carResult=$car->search_cars_by_model($searchTerm);
    
  // the view carList.php used with results of search  
  include('view/carList.php');
}    

/**********  controllerAction: show html form to manage user login  ********************/
else if ($controllerAction == 'loginForm') {
  include('view/debugView.php');
  print 'I am in the login form';
  include('view/login.php');
}    
  /**********controllerAction: login process *************************************/
else if ($controllerAction == 'loginProcess') {
   include('view/debugView.php');
    
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $user=new User();
  $userResult=$user->user_login($username);
  //determine if $userResult contains 1 row or 0 rows/records
  
  $num_rows - mysql_num_rows($userResult);
  
  if($num_rows==1) {
  	$_SESSION['user_logged_in']=1;
  	include ('view/userhome.php');
  //successful login
  }
  
  else {
  	//login was not successful
  }
    
   //the view carList.php used with results of search  
  include('view/carList.php');
  include('view/userHome.php');
}
?>