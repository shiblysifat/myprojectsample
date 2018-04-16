<?php

  include 'inc/header.php';
  include 'lib/User.php';



  
?>

<?php 
  
    $user = new User();

    if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST)) 
    {

      $userLogin  =  $user->userLogin($_POST); 
      
    }

?>


     <div class="panel panel-default">
     	
     	<div class="panel-heading">
     		<h2>User Login</h2>

       </div> 

       <div class="panel-body">

        <div style="max-width: 600px; margin: 0 auto">


<?php
if(isset($userLogin)){ 
  if($userLogin != "")
  {
    echo $userLogin;
  }

}
?>

<?php 
  
  if (isset($userLogin)) {
    header("Location:profile.php");
    
  }

?>
        <form action="" method="POST">
          <div class="form-group">
            <label for="email">Email Address</label>

             <input type="text" name="email" id="email" class="form-control"/> 

          </div>


          <div class="form-group">
            <label for="password">Password</label>
            
             <input type="password" name="password" id="password" class="form-control" /> 

          </div>
          <button type="submit" name="login" class="btn-danger">Login </button>


        </form>

      </div>

 
       </div>

     </div>	

      <?php
      include 'inc/footer.php';

      ?>