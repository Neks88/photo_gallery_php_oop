

<?php require_once("includes23/new_config.php");?>
<?php 



if(empty($_GET['id'])) {
  redirect("comment_photo.php?id={$comment->photo_id}");
}

$comment=Comment::find_by_id($_GET['id']);

if($comment) {
  $comment->delete();
  redirect("comment_photo.php?id={$comment->photo_id}");
}else {
  
  redirect("comment_photo.php?id={$comment->photo_id}");
}














?>


