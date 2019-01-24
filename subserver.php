<?php

try{
$function = file_get_contents($_GET['url']);

if($function == true){

$data = file_get_contents($_GET['url']);

$sub = htmlspecialchars($data);
$sub = preg_match("/subscribers(.*.)span/", $sub, $subs);
$subsc = substr($subs[1], 10);

preg_match('/(.*.)\W\/span\W/', $subsc, $sub);
$subscribe = str_replace("<", "", $sub[1]);

preg_match('/(.*.)\W/', $subscribe, $subs);
echo  "<b>Subb :</b> <h1>".$subs[1]."</h1>";
//print_r($subs);

}else{
echo "Channel Not Found ! ";
}

}catch(Exception $e){
echo "Channel Not Found !";

}
?>