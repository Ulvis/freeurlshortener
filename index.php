<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>free url shortener</title>
<style>
body {
    background:#eee;
}
h1 {
    font-family: "DejaVu Sans",Verdana,Geneva,sans-serif !important;
    font-size: 20px;
    font-weight: bold;
}

.contain {
    margin-top: 30px;
    margin-bottom: 30px;
    padding: 20px 30px;
}
.url
  {
  margin-right: .2em;
  text-align: center;
  }
img{
    width:85%; 
    margin:20px;
}

</style>
</head>
<body>
<?php
  if (isset($_POST['url'])) {
$url=$_POST['url'];
$curl ='https://ulvis.net/API/write/post'; // longurl your url if want custom url them add &custom=your custom url
$ch = curl_init($curl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
$arr_result = curl_exec($ch);
 
$arr_response = json_decode($arr_result);
 echo'<div class="url">';
echo $arr_response->response->url;
    echo'</div>';
}

?>
  <h1>Free url shortner</h1>
<div class="contain">
   <form action="<?php
$_SERVER['PHP_SELF']; ?>" method="post" id="mainform" autocomplete="off">
            <div id="qrCode">
                <div class="qrTooltip" style="display:none;"></div>
            </div>            
                <input type="text" id="url" name="url" value="" placeholder="http://"/>
                <input type="submit" id="submit" class="button submit normal" value="shrink" name="submit">
<br>
<input type="submit" name="submit" value="Short it!" >
</form>
</div>
</body>
</html>
