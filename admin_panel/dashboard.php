<?php
require_once 'config.php';

// Fetch total number of users from the database
$sql = "SELECT COUNT(*) AS total_users FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_users = $row['total_users'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	
	
	

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->

</head>









<body>
    <nav>
	<a href="dashboard.php"><i class="material-icons">dashboard</i></a>
   <a href="#first"><i class="material-icons">person</i></a>
   <a href="#second"><i class="material-icons">settings</i></a>
   <a href="#third"><i class="material-icons">credit_card</i></a>
   <a href="#fourth"><i class="material-icons">exit_to_app</i>
</a>
 </nav>
  
<div class= 'container'> 

<div class="dashboard-container" >
<li class = "add_button" ><a href="add_user.php">Add New User</a></li>
        <h2>Welcome Admin!</h2> 
        
        
        <!-- Display total number of users -->
		
		
		<div class = "row">
		<div class = "col-4 userds">
       <div class = "userdashboard">
	   
	   Total Users:<br>
    <?php echo $total_users; ?>
    <i class="material-icons">person</i>
	   
	   </div>
</div>

<div class = "col-4 userds">
       <div class = "userdashboard">
	   
	   Total Users:<br>
    <?php echo $total_users; ?>
    <i class="material-icons">person</i>
	   
	   </div>
</div>
<div class = "col-4 userds">
       <div class = "userdashboard">
	   
	   Total Users:<br>
    <?php echo $total_users; ?>
    <i class="material-icons">person</i>
	   
	   </div>
</div>
</div>













        <!-- Site Menu -->
        

        <a href="logout.php">Logout</a>
    </div>

<section id= 'dashboardicon'>
     <h1>hello</h1>
  </section>


  <section id= 'first'>
     <h1>first</h1>
  </section>
  
  <section id= 'second'>
    <?php include('homesetting/addimageforslider.php'); ?>
  </section>
  
 <section id= 'third'>
   <h1>Third</h1>
  </section>
  
 <section id= 'fourth'>
   <h1>Fourth</h1>
  </section>
</div>
</body>
</html>
