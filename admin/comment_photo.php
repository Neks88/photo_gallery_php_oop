<?php require_once("includes23/new_config.php");?>

<?php 

if (empty($_GET['id'])) {
  redirect("photos.php");
}














?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comments</title>

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
  .comment-image {
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

          <h1 class="my-4">Comments
            <small>managin comments</small>
          </h1>


<!--   <a href="add_comment.php" class="btn btn-primary">Add comment</a> <br><br>-->
   
   <div class="col-md-12">
     
     <table class="table table-hover">
       <thead>
         <tr>
           <th>Id</th>
           <th>Author</th>
           <th>Body</th>
        
         </tr>
       </thead>
       <tbody>
        <?php
   $comments= Comment::find_the_comments($_GET['id']);

  foreach($comments as $comment) : 
         
         ?>
         <tr>
          <td><?php echo $comment->id; ?></td>
         
          
          
          
           
           
      <td><?php echo $comment->author; ?>
           
        <div class="action_link">
             
    <a href="delete_comment_photo.php?id=<?php echo $comment->id; ?>">Delete</a>
      

    </div>
           
            </td>
           
           
           
           
  <td><?php echo $comment->body; ?></td>
     
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
