<?php 

 $purchase_key="lsdkfjaklfjklas4980923fjasdklj2398jklasdf";
 $domain = $_SERVER['SERVER_NAME'];
 $url = "http://api.fahad.fnfplanet.com/api/index.php?purchase_key=$purchase_key&domain=$domain";
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $result = curl_exec($ch);
 curl_close($ch);
 $result = json_decode($result, true);
 
    $status = $result['status'];
    if($status == 1){
        echo 'valid purchase key';
    }else{
        echo 'invalid purchase key';
    }

?>