<head>
<link rel="stylesheet" href="/bootstrap.css">
</head>
<body>


<?php
include('simple_html_dom.php');

$url = $_GET['url'];
//
//
$html = file_get_html($url);

foreach($html->find('meta') as $e){
     if($e->property == "og:title"){
$title = $e->content;

}
}

// Channel Icon
foreach($html->find('meta') as $e){
     if($e->property == "og:image"){
$icon = $e->content;
//echo "<b>Post Icon : <b> <img src='".$image. "' /></br>";

}
}


// ==== Subscribed ===


foreach($html->find('div') as $e){


 $subscribe = $e->innertext;
 $sub = 	htmlspecialchars($subscribe);
//echo "<b>Post Icon : <b> <img src='".$image. "' /></br>";


}


echo "<img class='container col-5' src='".$icon."' style='height: 200px; margin-top: 50px' >";
echo "<h1>". $title ."</h1></br>";





?>


