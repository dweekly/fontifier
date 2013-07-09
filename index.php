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

//die($xlate[A]);

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
</head>
<body>

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
<input name="t" size="40" value="Tᕮ᙭T ᖻ〇ᑌ ᕫᗩNT ᖴ〇NTIᖴIᕮᗞ" />
<input type="submit" value="G〇!" />
</form>
<br /><br />
<div class="fb-like" data-href="http://fonts.dweek.ly/" data-send="true" data-width="450" data-show-faces="true"></div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27953150-3', '54.215.13.242');
  ga('send', 'pageview');

</script>
</body>
</html>