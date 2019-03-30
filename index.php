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
$curl ='http://ulvis.net/api.php?url='.$longurl.'&private=1&type=xml'; // longurl your url if want custom url them add &custom=your custom url
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
<form name="url" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<input type="text" name="url" size="50">
<br>
<input type="submit" name="submit" value="Short it!" >
</form>
</div>
</body>
</html>
