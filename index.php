<?php

if($_SERVER['HTTP_HOST'] != 'fonts.weekly.org'){
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: http://fonts.weekly.org/");
   die('go to <a href="http://fonts.weekly.org/">fonts.weekly.org</a>, plz.');
}

require_once 'bootstrap.php';
$fonts = getFontList();

$renderedOutput = "";
$curFont = "BouncyFont"; // default
$userText = "";
if (isset($_POST['userText'])) {
  $userText = $_POST['userText'];
  $curFont = $_POST['fontSelector'];
  $fontObj = new $curFont;
  $renderedOutput =
    "<div id=\"renderedOutput\">" .
      $fontObj->translate($userText) .
    "</div>";
}

header("Content-type: text/html; charset=utf-8");


?><!doctype html>
<html>
<head>
<title>ᗞᗩᐯIᗞ ᕫᕮᕮKᒪᖻ'ᔕ ᖴᑌN ᖴ〇NTIᖴIᕮᖇ</title>
<link rel="canonical" href="http://fonts.weekly.org/" />
<link type="text/plain" rel="author" href="http://fonts.weekly.org/humans.txt" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<style>
BODY { padding: 0.5em 1em 0 1em; }
H1 { padding: 0; margin:0 0 0.5em 0; font-size:2.2em; }
#shares { padding-top: 4em; }
#shares div { padding-bottom: 1em; padding-top: 1em; }
#renderedOutput { background-color:#eef; font-size:3em; padding:1em; margin-top:1em; }
#fontSelector { font-size: 1.1em; }
#userText { font-size: 1.5em; padding:0.1em 0.2em 0.3em 0.2em; background-color:#ffe; width:70%; max-width:500px; }
#submit { font-size: 1.5em; }
#desc { font-size:1em; padding: 0 2em 1em 0; color:#aaa; }
</style>
<script type="text/javascript">
function foc(){
  document.getElementById("userText").focus();
}
onload = foc;
</script>
</head>
<body>

<!-- Load Facebook plugin -->
<script>
window.fbAsyncInit = function() {
  FB.init({
    appId      : '141326332738855',
    xfbml      : true,
    version    : 'v2.8'
  });
  FB.AppEvents.logPageView();
};
(function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- GitHub swatch -->
<a href="https://github.com/dweekly/fontifier"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>


<h1 id="title">ᗞᗩᐯIᗞ ᕫᕮᕮKᒪᖻ'ᔕ ᖴᑌN ᖴ〇NTIᖴIᕮᖇ</h1>

<div id="desc">
  ᕮᐯᕮᖇ ᕫIᔕᕼ ᖻ〇ᑌ ᑕ〇ᑌᒪᗞ ᑌᔕᕮ ᔕIᒪᒪᖻ ᖴ〇NTᔕ 〇N ᖴᗩᑕᕮᗷ〇〇K, 〇ᖇ TᕫITTᕮᖇ? ᕫᕮᒪᒪ, N〇ᕫ ᖻ〇ᑌ ᑕᗩN! ᒍᑌᔕT ᖘIᑕK Tᕼᕮ ᖴ〇NT ᖻ〇ᑌ ᕫᗩNT, Tᖻᖘᕮ Tᕼᕮ Tᕮ᙭T ᗷᕮᒪ〇ᕫ ᗩNᗞ TᕼᕮN ᖘᗩᔕTᕮ Tᕼᕮ ᖇᕮᔕᑌᒪT.
</div>

<form method="post">
  <select id="fontSelector" name="fontSelector">
    <?php
      foreach ($fonts as $fontID => $sampleText) {
        echo '<option ' .
            ($curFont == $fontID ? 'selected="selected"' : '') .
            'value="' . $fontID . '">' . $sampleText . '</option>';
      }
    ?>
  </select>
  <br />
  <input id="userText" name="userText" size="40" placeholder="Tᕮ᙭T ᖻ〇ᑌ ᕫᗩNT ᖴ〇NTIᖴIᕮᗞ" value="<?=$userText?>" />
  <br />
  <input type="submit" value="ᖴ〇NTIᖴᖻ!" id="submit" />
</form>

<?=$renderedOutput?>

<!-- social media sharing widgets -->
<div id="shares">
  <div class="fb-like" data-href="http://fonts.weekly.org/" data-share="true" data-send="true" data-width="450" data-show-faces="true"></div>
</div>


<!-- ----- end of rendered elements; tail javascript below ------ -->

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-27953150-3', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>