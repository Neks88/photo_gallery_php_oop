<?php 
require_once ("admin/includes23/new_config.php");

if(empty($_GET['id'])) {
  redirect("index.php");
}

$photo=Photo::find_by_id($_GET['id']);


if(isset($_POST['submit'])) {
  
$author = trim($_POST['author']);
$body=trim($_POST['body']);
  
 
 $new_comment = Comment::create_comment($photo->id,$author,$body);
  $new_comment->properties();
  $new_comment->clean_properties();
  $new_comment->create();
  
  
  
  if($new_comment) {
    redirect("photo.php?id={$photo->id}");
  }else {
    $message= "There was some problem saving";
  }
  
} else {
  $author="";
  $body="";
}











?>









<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">


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
  </style>
  </head>

  <body>

    <!-- Navigation -->

  <?php  include ("includes/navigation.php"); ?>
   
   
   
   
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

<!--
          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>
-->

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="admin/<?php echo $photo->picture_path() ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $photo->title; ?></h2>
              <p class="card-text"><?php echo $photo->description; ?></p>
<!--
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
              
-->
              
              
         <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
             
              <form action="" role="form" method="post">
               
               <label for="author">Author</label> <br>
               <input name="author" type="text" class="form-group form-control">
               
                <div class="form-group">
                 <label for="body">Comment</label>
                  <textarea name="body" class="form-control" rows="3"></textarea>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                
              </form>
              
              
            </div>
          </div> <!--End of comment             -->
              
              
            <!-- Single Comment -->
<?php 
   $comments = Comment::find_the_comments($photo->id);  
  foreach($comments as $comment) :
              
              
              ?>
            
            
            
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php echo $comment->author; ?></h5>
             <?php echo $comment->body; ?>
            </div>
          </div>
             
             <?php endforeach; ?>
             
             
             
             
             
             
             
             
             
              
            </div>
<!--
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
-->
          </div>



<!--
           Pagination 
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>
-->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
        

          <!-- Categories Widget -->
          

          <!-- Side Widget -->
        

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
<!--
    <footer class="py-5 bg-dark footer">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
       /.container 
    </footer>
-->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
