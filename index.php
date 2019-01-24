<head>

<link rel="stylesheet" href="/bootstrap.css">

</head>
<body>
<div class="container main text-center" style="height: 500px ; margin-top: 100px; background: #DBE2D3" id="main">
<div class="up container col-12" id="up">
</div>
<div class="container" id="sub" style="background: white;height: 80px">

</div>

</div >
<div class="container">


<form action="" id="form">
<div class="form-group">
<input type="url" name="url" class="form-control container col-10" placeholder="Enter You Url" id="url" required>

<input type="submit" class="btn btn-outline-primary container" value="Go">
</div>
</form>
</div>
<script src="/jquery.js"></script>
<script>

$("#form").on("submit", function(){
let url = $("#url").val();

if(url.search("https://www.youtube.com/user") >= 0 || url.search("https://www.youtube.com/channel/") >=0){
setInterval(subscribe, 5000);
dataget();
}else{
alert("Only YouTube Channel URL");
}
return false;
});

function dataget(){
let link = $("#url").val();

$.ajax({

url: 'server.php',
type: 'get',
data: {url: link},
success: function(data){
$("#up").html(data);
//alert("success");

}


});

}


function subscribe(){
let link = $("#url").val();

$.ajax({

url: 'subserver.php',
type: 'get',
data: {url: link},
success: function(data){

$("#sub").html(data);
//alert("success");

}


});


}

</script>
