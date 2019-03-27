<?php require_once("includes23/new_config.php");?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Users</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog-home.css" rel="stylesheet">


  <style>
    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: red;
    color: white;
    text-align: center;
    }
  .user-image {
  width: 62px;
  height: 62px;
  border-radius: 5px;
  
}
  </style>
  </head>

  <body>

    <!-- Navigation -->

  <?php  include "includes23/top_navigation.php" ?>
   
   
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Users
            <small>managin users</small>
          </h1>


   <a href="add_user.php" class="btn btn-primary">Add User</a> <br><br>
   
   <div class="col-md-12">
     
     <table class="table table-hover">
       <thead>
         <tr>
           <th>Id</th>
           <th>Photo</th>
           <th>Username</th>
           <th>First Name</th> 
           <th>Last Name</th> 
         </tr>
       </thead>
       <tbody>
        <?php
   $users= User::find_all(); 

  foreach($users as $user) : 
         
         ?>
         <tr>
          <td><?php echo $user->id; ?></td>
         
          
          
           <td><img class="user-image" src="<?php echo $user->image_path_and_placeholder(); ?>" alt=""> </td>
           
           
           <td><?php echo $user->username; ?>
           
           
           
           
            <div class="action_link">
             
             <a href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>
              <a href="edit_user.php?id=<?php echo $user->id; ?>">Edit</a>
            
           </div>
           
            </td>
           
           
           
           
           
           
           <td><?php echo $user->first_name; ?></td>
           <td><?php echo $user->last_name; ?></td>
         </tr>
         <?php endforeach; ?>
      </tbody> 
    </table> <!--     end of table-->

     
     
   </div>
   
   
   
   
   



        

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <?php include("includes23/search_widget.php"); ?>

        

          

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark footer">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
