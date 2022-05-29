<?php

# Ushbu kod Ahmadjon Dadabayev tomonidan qaytadan yozib chiqarildi. uitc.uz platformasi uchun bajarildi. 
# Mualliflik huquqi saqlansin!
# dadabayev.uz
# +998902224311
# @Akhmadjon

# This code was rewritten by Ahmadjon Dadabayev. Done for the uitc.uz platform
# Copyright reserved!
# dadabayev.uz
# +998902224311
# @Akhmadjon

# Этот код был переписан Ахмаджоном Дадабаевым. Сделано для платформы uitc.uz
# Авторские права защищены!
# dadabayev.uz
# +998902224311
# @Akhmadjon

$url = $_GET['url'];

function likee($link){
$fields = ['id' => $link];

$url = "https://likeedownloader.com/results";
$ch = curl_init();
curl_setopt_array($ch, [
  CURLOPT_URL => $url,
  CURLOPT_POST => count($fields),
  CURLOPT_POSTFIELDS => http_build_query($fields),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_ENCODING => "UTF-8",
  CURLOPT_USERAGENT => "Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Mobile Safari/537.36"
    ]);
$result = curl_exec($ch);
curl_close($ch);

$ex = explode("without_watermark' target='_blank' href='",$result);
$ex = explode("' download>",$ex[1])[0];

return $ex;
}
$url = $_GET['url'];
if(isset($url)){
    echo print_r (likee("$url"));
}
