<?php require_once("includes23/new_config.php");?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Photos</title>

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

          <h1 class="my-4">Photos
            <small>managin photos</small>
          </h1>


   
   <div class="col-md-12">
     
     <table class="table table-hover">
       <thead>
         <tr>
           <th>Photo</th>
           <th>Id</th>
           <th>File Name</th>
           <th>Title</th> 
           <th>Size</th> 
           <th>Comments</th> 
         </tr>
       </thead>
       <tbody>
        <?php
   $photos= Photo::find_all(); 

  foreach($photos as $photo) : 
         
         ?>
         <tr>
           <td><img class="admin-photo-thumbnail" src="<?php echo $photo->picture_path(); ?>" alt="">
           <div class="pictures_link">
             
             <a href="delete_photo.php?id=<?php echo $photo->id; ?>">Delete</a>
              <a href="edit_photo.php?id=<?php echo $photo->id; ?>">Edit</a>
              <a href="../photo.php?id=<?php echo $photo->id ?>">View</a>
           </div>
           
           
           </td>
           <td><?php echo $photo->id; ?></td>
           <td><?php echo $photo->filename; ?></td>
           <td><?php echo $photo->title; ?></td>
           <td><?php echo $photo->size; ?></td>
           
      <td>
       <?php
        $comments= Comment::find_the_comments($photo->id);  
        
        
        ?>
        <a href="comment_photo.php?id=<?php echo $photo->id?>"><?php echo count($comments); ?></a>
        </td>
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
