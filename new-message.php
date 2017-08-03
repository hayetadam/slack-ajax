
<?php

include_once './Message.php';
include_once './Database.php';


$db = new Database();
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if (!empty($post['message'])) {
    $text = $post['message'];

    $message = new Message($text);
    $db->createMessage($message);
} else {
    http_response_code(400);
    header('content-type: text/plain');
    echo'expect a message parameter';
}









/* if(!empty($_POST['message'])){

  $text = $_POST['message'];
  $message = new Message($text);
  $db->createMessage($message);
  echo $_POST['message'];


  }else{
  http_response_code(400);
  header('content-type: text/plain');
  echo'expect a message parameter';

  } */
?>

