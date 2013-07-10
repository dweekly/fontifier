<?php

require_once 'bootstrap.php';

// Build the options for the select menu.
$options = buildMenuOptions();

if($_SERVER['HTTP_HOST'] == '54.215.13.242'){
   header("HTTP/1.1 301 Moved Permanently");
   header("Location: http://fonts.dweek.ly/");
   die('go to <a href="http://fonts.dweek.ly/">fonts.dweek.ly</a> instead of the IP URL, plz.');
}

$newstr = "";

if (isset($_POST['t'])) {
    $fontClass = $_POST['f'] ?: 'DefaultFont';
    $font = new $fontClass;
    $newstr = $font->translate($_POST['t']);
}

header("Content-type: text/html; charset=utf-8");

?><!doctype html>
<html>
<head>
<title>ᗞᗩᐯIᗞ ᕫᕮᕮKᒪᖻ'ᔕ ᖴᑌN ᖴ〇NTIᖴIᕮᖇ</title>
<link rel="canonical" href="http://fonts.dweek.ly/" />
<script type="text/javascript">
function foc(){
  document.getElementById("tid").focus();
}
onload = foc;
</script>
</head>
<body>

<a href="https://github.com/dweekly/fontifier"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=141326332738855";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<h1>ᗞᗩᐯIᗞ ᕫᕮᕮKᒪᖻ'ᔕ ᖴᑌN ᖴ〇NTIᖴIᕮᖇ</h1>

<?=$newstr?>
<form method="post">
<select id="fid" name="f">
    <?php
    foreach ($options as $k => $v) {
        echo '<option ' . ($_POST['f'] == $k ? 'selected="selected"' : '') . 'value="' . $k . '">' . $v . '</option>';
    }
    ?>
</select>
<br />
<input id="tid" name="t" size="40" placeholder="Tᕮ᙭T ᖻ〇ᑌ ᕫᗩNT ᖴ〇NTIᖴIᕮᗞ" />
<input type="submit" value="G〇!" />
</form>
<br /><br />
<div class="fb-like" data-href="http://fonts.dweek.ly/" data-send="true" data-width="450" data-show-faces="true"></div>

<br />
<a href="https://twitter.com/share" class="twitter-share-button" data-via="dweekly" data-size="large" data-hashtags="fontify">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<br />
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="inline" data-width="300"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


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