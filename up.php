<?php     
alert('staring'); 
  $myPost = json_decode('website-data/readonly.json',true);
 $myPostId= 1;

foreach($myPost as &$e){

if($e[0]['post'] =="naah"){
$e[0]['post'] == "amos";
}
if($e[0]['post'] =="amos"){
$e[1]['post'] == "yaayy awesome";

}
$newPostData = json_encode($myPostId, JSON_PRETTY_PRINT);
echo file_put_contents('website-data/readonly.json',$newPostData);
  ?>
