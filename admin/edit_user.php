<?php require_once("includes23/new_config.php");?>
<?php
if(empty($_GET['id'])) {
  redirect("users.php");
}

//if(empty($_GET['id'])){
//  redirect("photos.php");
//}else {

//
//  $photo = Photo::find_by_id($_GET['id']);
$user = User::find_by_id($_GET['id']);

if(isset($_POST['submit'])) {


    
  $user->username = $_POST['username'];
  $user->password = $_POST['password'];
  $user->first_name = $_POST['firstname'];
  $user->last_name =  $_POST['lastname'];
  
  
  if(empty ($_FILES['user_image'])) {
    
    $user->properties();
    $user->clean_properties();
    $user->update();
    
    redirect("users.php");

  
}else {
    
    $user->set_file($_FILES['user_image']) ; 
    $user->save_user_and_image ();  
  
//    $user->properties();
//    $user->clean_properties();
//    $user->update();
    
    redirect("users.php");
    
  }
    




}












?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add User</title>

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
    .admin-photo-thumbnail {
  width: 200px;
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

          <h1 class="my-4">Add User
            <small>managin user</small>
          </h1>

   
   
   
   <div class="col-md-6">
     
     
     
   </div> <br> 

  
        <img src="<?php echo $user->image_path_and_placeholder(); ?>" alt="">
          
          <br><br>
        
        <form enctype="multipart/form-data"  action="" method="post">
          
          
          <div class="col-md-6 col-md-offset-3"></div>
          
          
          
          
        
          
          
          
          <input type="file" name="user_image"> <br> <br>
          
          
          <div class="form-group">
           <label for="username">Username</label>
            <input name="username" value="<?php echo $user->username; ?>" type="text" class="form-control" >
          </div>
          
         <div class="form-group">
           <label for="password">Password</label>
            <input name="password" value="<?php echo $user->password; ?>" type="password" class="form-control" >
          </div>
         
         <div class="form-group">
           <label for="firstname">First Name</label>
            <input name="firstname" value="<?php echo $user->first_name; ?>" type="text" class="form-control" >
          </div>
         
          
         
          <div class="form-group">
           <label for="lastname">Last Name</label>
            <input name="lastname" value="<?php echo $user->last_name; ?>" type="text" class="form-control" >
          </div>
          
          
         
         <a class="btn btn-danger" href="delete_user.php?id=<?php echo $user->id; ?>">Delete</a>
         
          <input name="submit" type="submit" class="btn btn-primary" value="Update" >
          
        </form>
        
   

        

       
       
       
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
