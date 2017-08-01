
<?php
if(!empty($_POST['message'])){
echo $_POST['message'];
}else{
    http_response_code(400);
    header('content-type: text/plain');
    echo'expect a message parameter';

}
?>