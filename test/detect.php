<?php
header('content-type: application/json; charset=utf-8');

$text = isset($_POST['text']) ? $_POST['text'] : urlencode('How to make it work cross-browser.');

$url = "http://www.google.com/uds/GlangDetect?q=".urlencode($text)."&key=notsupplied&v=1.0";

$output = get($url);

function get($url) {
     $ch = curl_init();
     curl_setopt($ch,CURLOPT_URL,$url);
     curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
     curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
     $data = curl_exec($ch);
     curl_close($ch);
     if(empty($data)) {return 'Server Timeout!';}
               else {return $data;}
}

echo($output);
?>