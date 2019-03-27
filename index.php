<?php require_once ("admin/includes23/new_config.php"); ?>
<?php require_once ("pagination.php"); ?>


<?php 

//PAGINATION
          
//  $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
//          
//  $items_per_page = 3;
//          
//  $items_total_count= Photo::count_all();
//
//$paginates = new Paginate($page,$items_per_page,$items_total_count);
//          
//
//$sql = "SELECT * FROM photos ";
//$sql .= "LIMIT {$items_per_page} ";
//$sql .= "OFFSET {$paginates->offset()}";
//$photos = Photo::find_by_query($sql);
//


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Index Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

  </head>

  <body>

    <!-- Navigation -->
   <?php  include ("includes/navigation.php"); ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

<!--
          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>
-->

    
        
        
        
 <!------------------------------------------------------ -->        
      <?php 
          ////////////////////////EXTRAXTING PHOTOS
          $photos = Photo::find_all();
          
          
        foreach($photos as $photo) :
          ?> 
         
 <!-- ------------------------------------------------------- -->        
         
          <!-- Blog Post -->
          <div class="card mb-4">
           <div class="thumbnail">
            <img  src="admin/<?php echo $photo->picture_path(); ?>" class="card-img-top"alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $photo->title;?></h2>
              <p class="card-text"><?php echo substr ($photo->description,0,100)."..."; ?></p>
              <a href="photo.php?id=<?php echo $photo->id; ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
<!--
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
-->
         </div>
          </div>

          <?php endforeach ?>

          

         

        

<!--           Search Widget -->
<!--
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
-->

          

          

        </div>

      </div>
      <!-- /.row -->
      
        
 
            
              
            
         

        
        
        
        
  

    </div>
    
<!--
   
-->

    <!-- /.container -->

    <!-- Footer -->
<!--
    <footer class="footer py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
-->
      <!-- /.container -->
<!--    </footer>-->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
