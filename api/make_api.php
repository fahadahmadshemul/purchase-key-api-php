<?php 
 include('db.php');
 
 $purchase_key = $_GET['purchase_key'];
 $domain_name = $_GET['domain_name'];
 echo $purchase_key;
 $sql = "select * from make_api";
 $res = mysqli_query($con, $sql);
 $count = mysqli_num_rows($res);
 header('Content-Type:application/json');
 if($count > 0){
     while($row = mysqli_fetch_assoc($res)){
         $arr[] = $row;
     }
     echo json_encode(['status'=>true, 'data'=>$arr]);
 }else{
     echo json_encode(['status'=>false, 'data'=>'not found']);
 }

?>