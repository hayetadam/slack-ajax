<?php
//CREATION de la classe DATABASE
class Database {
    public $db;
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=ajax-chat', 'ajax-chat-user', 'simplon');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    function createMessage(Message $message) {
        $query = $this->db->prepare("INSERT INTO message (text, timestamp) VALUES (:text, :timestamp)");
        $query->bindValue('text', $message->getText());
    
        $query->bindValue('timestamp', $message->getTimestamp()->format('Y-m-d H:i:s'));
        $query->execute();

        return TRUE;
    }
    //
        public function readMessage() {
        $stmt = $this->db->query('SELECT * FROM message');
        $messages = $stmt->fetchAll();
        $list = [];
            foreach( $messages as $msg){
$text = $msg['text'];
$newMessage = new Message($text);
$list[]= $newMessage;
            }
        return $list;
        
        }
}