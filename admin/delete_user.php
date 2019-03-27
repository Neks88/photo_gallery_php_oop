

<?php require_once("includes23/new_config.php");?>
<?php 



if(empty($_GET['id'])) {
  redirect("users.php");
}

$user=User::find_by_id($_GET['id']);

if($user) {
  $user->delete_user();
  redirect("users.php");
}else {
  
  redirect("users.php");
}














?>


