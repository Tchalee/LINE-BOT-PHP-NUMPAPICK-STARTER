 <?php
  

function send_LINE($msg){
 $access_token = 'zU742U3Frw1VOLPEucyQwxtJuKHLj8i8l5k7WhzVeiYpHJ8fIFEkWUyCGwrAQgpl4OSRokpxtCKAZpU0D42XMD2RQmRR59/FWcxLm+ApRdCxnhG/MPq4y65mbfdz/S/ZxKe8L+TqhENP2X49vgJlqQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ubcab3b6da0ba6b26216151f3b8aa2125',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
