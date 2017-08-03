<?php
class Message implements \JsonSerializable {
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
public function jsonSerialize(){
    return get_object_vars($this);
}
 
}