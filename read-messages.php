<?php
include_once './Message.php';
include_once './Database.php';

$db = new Database();
$messages = $db->readMessage();
echo json_encode($messages);    
?>