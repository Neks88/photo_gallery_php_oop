
<?php
require_once("includes23/new_config.php");





?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/blog-home.css" rel="stylesheet">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
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
    .a{
      font-size: 250%;
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

          <h1 class="my-4">Admin
            <small>Dashboard</small>
          </h1>









   <div class="col-md-12">
     
     <table class="table table-hover">
       <thead>
         <tr>
<!--           <th>New Views</th>-->
           <th>Photos</th>
           <th>Users</th>
           <th>Comments</th> 
         
         </tr>
       </thead>
       <tbody>
      
         <tr>
<!--       <td><?php echo $session->counts; ?></td>-->
           <td class="a"><?php echo Photo::count_all(); ?></td>
           <td class="a"><?php echo User::count_all(); ?></td>
           <td class="a"><?php echo Comment::count_all(); ?></td>
           
           
           
     
         </tr>
         
      </tbody> 
    </table> <!--     end of table-->

     
     
   </div>
   










<div class="row">
  
  <div id="piechart" style="width: 900px; height: 500px;"></div>
  
</div>




        

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
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

          <!-- Categories Widget -->
         

          

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



<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Photos',     <?php echo  Photo::count_all(); ?>],
          ['Users',         <?php echo  User::count_all(); ?>],
          ['Comments',     <?php echo  Comment::count_all(); ?>]
//          ['Watch TV', 2],
//          ['Sleep',    7]
        ]);

        var options = {
          pieSliceText:'label',
          title: 'Website Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
    
    
    
  </body>

</html>
