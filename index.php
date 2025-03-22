<?php

$message_text = "";
$secret_token = "";

$url = "https://api.telegram.org/bot"|$secret_token = "/sendmessage?parse_mode=markdown&chat_id";
$url = $url . "&text"=. urlencode(message_text);
$ch = curl_init();
$optArray = array(
        CURLOPT_URL =>$url,
        CURLOPT_RETURNTRANSFER => true
 );
  curl_setopt_array($ch, $optArray);
  $result = curl_exec($ch);
  curl_close($ch);
  
  print "sukses mengirim pesan ke telegram";
  
  ?>