<?

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

if($_SERVER['HTTP_HOST'] == '54.215.13.242'){
   header("HTTP/1.1 301 Moved Permanently"); 
   header("Location: http://fonts.dweek.ly/");
   die('go to <a href="http://fonts.dweek.ly/">fonts.dweek.ly</a> instead of the IP URL, plz.');
}


function f($ch) {
$xlate = [
"A" => "ᗩ",
"B" => "ᗷ", // ᙖ ᙘ ᙗ ᙝ ᙞ ᙟ ᙩ ᙪ ᙫ ᗷ ᗸ ᗹ ᗽ ᗾ ᗿ 
"C" => "ᑕ",
"D" => "ᗞ",
"E" => "ᕮ",
"F" => "ᖴ",
"G" => "G",
"H" => "ᕼ",
"I" => "I",
"J" => "ᒍ",
"K" => "K",
"L" => "ᒪ",
"M" => "ᙢ", // ᔿ
"N" => "N",
"O" => "〇",
"P" => "ᖘ",
"Q" => "ᖗ",
"R" => "ᖇ",
"S" => "ᔕ", // ᙚ
"T" => "T",
"U" => "ᑌ",
"V" => "ᐯ",
"W" => "ᕫ",
"X" => "᙭",
"Y" => "ᖻ",
"Z" => "ᙆ", // ᙆ
];

  if(isset($xlate[$ch])){
    return $xlate[$ch];
  }
  return $ch;
}

function x($str) {
 $charr = str_split($str);
 $xlate_arr = array_map("f", $charr);
 return implode($xlate_arr);
}

$newstr = "";
if(isset($_POST['t'])) {
  $newstr = x(strtoupper($_POST['t']));
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