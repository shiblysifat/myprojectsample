<?php

	include 'inc/header.php';
  include 'lib/User.php';

  
?>

<?php 
  
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['register'])) 
    {

      $userRegi =  $user->userRegistration($_POST); 
      
    }

?>

     <div class="panel panel-default">
     	
     	<div class="panel-heading">
     		<h2>User Registration</h2>

       </div> 

       <div class="panel-body">

        <div style="max-width: 600px; margin: 0 auto">


 <?php 
  
  if (isset($userRegi)) {
    echo $userRegi;
    # code...
  }

?>



        <form action="" method="POST">

          
          <div class="form-group">

            <label for="fname">First Name</label>

             <input type="text" name="fname" id="name" class="form-control"  /> 

          </div>

          <div class="form-group">

            <label for="lname">Last Name</label>

             <input type="text" name="lname" id="name" class="form-control"  /> 

          </div>

          <div class="form-group">

            <label for="phone">Phone Number</label>

             <input type="number" name="phone" id="name" class="form-control"  /> 

          </div>


            
          

           <div class="form-group">
            <label for="username">UserName</label>

             <input type="text" name="username" id="username" class="form-control" /> 

          </div>


          <div class="form-group">
            <label for="email">Email Address</label>
             <input type="text" name="email" id="email" class="form-control"  /> 

          </div>


          <div class="form-group">
            <label for="password">Password</label>
            
             <input type="password" name="password" id="password" class="form-control"  /> 

          </div>

 
          
          <button type="submit" name="register" class="btn-danger">Submit </button>


        </form>

      </div>

 
       </div>

     </div>	

      <?php
      include 'inc/footer.php';

      ?>