<?php      
  $myPost = json_decode('somejson',true);
 $myPostId= 1;

foreach($myPost as &$e){
if($e['id'] == $myPostId){
if($e['post'] =="naah"){
$e['post'] == "amos";
}
if($e['id'] == "yaah"){
if($e['post'] =="yaah"){
$e['id'] == 3;
}
}
}
$newPostData = json_encode($myPostId, JSON_PRETTY_PRINT);
echo file_put_contents('somejson',$newPostData);
  ?>
