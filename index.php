<?php

if($_SERVER['HTTP_HOST'] != 'fonts.dweek.ly'){
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: http://fonts.dweek.ly/");
   die('go to <a href="http://fonts.dweek.ly/">fonts.dweek.ly</a>, plz.');
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
<link rel="canonical" href="http://fonts.dweek.ly/" />
<link type="text/plain" rel="author" href="http://fonts.dweek.ly/humans.txt" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<style>
BODY { padding: 0.5em 1em 0 1em; }
#shares { padding-top: 3em; }
#shares div { padding-bottom: 1em; padding-top: 1em; }
#renderedOutput { background-color:#eee; font-size:3em; padding:1em; margin-top:1em; }
#fontSelector { font-size: 1.2em; }
#userText { font-size: 1.5em; padding:0.1em 0.2em 0.3em 0.2em; background-color:#ffe; width:70%; max-width:500px; }
#submit { font-size: 1.5em; }
</style>
<script type="text/javascript">
function foc(){
  document.getElementById("tid").focus();
}
onload = foc;
</script>
</head>
<body>

<!-- Load Facebook plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=141326332738855";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- GitHub swatch -->
<a href="https://github.com/dweekly/fontifier"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>


<h1 id="title">ᗞᗩᐯIᗞ ᕫᕮᕮKᒪᖻ'ᔕ ᖴᑌN ᖴ〇NTIᖴIᕮᖇ</h1>

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
  <input type="submit" value="G〇!" id="submit" />
</form>

<?=$renderedOutput?>


<!-- social media sharing widgets -->
<div id="shares">
  <div class="g-plusone" data-annotation="inline" data-width="300"></div>
  <br />
  <a href="https://twitter.com/share" class="twitter-share-button" data-via="dweekly" data-size="large" data-hashtags="fontify">Tweet</a>
  <br />
  <div class="fb-like" data-href="http://fonts.dweek.ly/" data-send="true" data-width="450" data-show-faces="true"></div>
</div>


<!-- ----- end of rendered elements; tail javascript below ------ -->


<!-- Twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!-- Google+ -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<!-- Google Analytics -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
  _gaq.push(['_setAccount', 'UA-27953150-3']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>