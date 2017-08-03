<?php
class Message {
    private $text;
    private $timestamp;

    
    function __construct( $text) {
        $this->text= $text;
    
        $this->timestamp = new DateTime();
    }
    function getText() {
        return $this->text;
    }

    function getTimestamp() {
        return $this->timestamp;
    }

 
}