<?php

  include 'inc/header.php';
  

?>

        <div class="panel panel-default">
      
      <div class="panel-heading">
        <h2>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a> </span></h2>

       </div> 

       <div class="panel-body">

        <div style="max-width:  600px; margin: 0 auto ;">

        <form action="" method="POST">

          <div class="form-group">
            <label for="name">First Name</label>

             <input type="text" name="name" id="name" class="form-control" value="shible" /> 

          </div>

          

         

           <div class="form-group">
            <label for="username">UserName</label>

             <input type="text" name="username" id="username" class="form-control" value="shible islam" /> 

          </div>
 

          <div class="form-group">
            <label for="email">Email Address</label>
            
             <input type="text" name="email" id="email" class="form-control" value="shible35-966@diu.edu.bd" /> 

          </div>


          
          <button type="submit" name="update" class="btn-success">Update</button>


        </form>

      </div>

 
       </div>

     </div> 

      <?php
      include 'inc/footer.php';

      ?> 