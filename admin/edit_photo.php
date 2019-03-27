<?php require_once("includes23/new_config.php");?>
<?php
if(empty($_GET['id'])) {
  redirect("photos.php");
}

//if(empty($_GET['id'])){
//  redirect("photos.php");
//}else {


  $photo = Photo::find_by_id($_GET['id']);


if(isset($_POST['submit'])) {

  
 $photo->title = $_POST['title'];
 $photo->description = $_POST['description'];
 $photo->properties();
 $photo->clean_properties();
 $photo->update();
  

//  $photo= new Photo();
//  $photo->title = $_POST['title'];
//  $photo->description = $_POST['description'];
//  $photo->set_file($_FILES['file_upload']);
//  
//  $photo->save(); 
//// echo "<pre>";
////  echo $_FILES['file_upload'];
////  echo "<pre>";


}












?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Photo</title>

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

          <h1 class="my-4">Edit Photo
            <small>managin photos</small>
          </h1>

   
   
   
   

   <div class="col-md-8">
      
        <form  action="" method="post">
          
          
          <div class="form-group">
           <label for="title">Title</label>
            <input name="title" type="text" class="form-control" value="<?php echo $photo->title; ?>" >
          </div>
          
         
         <div class="form-group">
           
           <a  href="#"><img class="admin-photo-thumbnail" src="<?php echo $photo->picture_path();?>" alt=""></a>
         </div>
         
         
         
          
          <div class="form-group">
          <label for="description">Description</label>
           <textarea name="description" class="form-control" placeholder="Description"  cols="70" rows="10"><?php echo $photo->title; ?></textarea>
          </div>
          

          
          
         
          
          <input name="submit" type="submit" >
          
        </form>
        
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
