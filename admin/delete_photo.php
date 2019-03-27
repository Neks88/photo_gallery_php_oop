

<?php require_once("includes23/new_config.php");?>
<?php 



if(empty($_GET['id'])) {
  redirect("photos.php");
}

$photo=Photo::find_by_id($_GET['id']);

if($photo) {
  $photo->delete_photo();
  redirect("photos.php");
}else {
  
  redirect("photos.php");
}














?>


