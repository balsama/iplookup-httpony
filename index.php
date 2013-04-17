<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>Returns country code for a given IP address</h1>
<form action="" id="attack-form" method="POST">
  <label for="ip">Enter IP</label>
  <input name="ip" type="textfield" />
  <input type="submit" value="Submit" />
</form>
<?php
if (!empty($_POST['ip'])) {
  $valid = ip2long($_POST['ip']) !== false;
  if ($valid) {
    $ip = file_get_contents('http://127.0.0.1:8000?ip=' . $_POST['ip']);
  }
  else {
    $ip = 'Invalid IP';
  }
  print $ip;
}
?>
<hr />
<a href="https://github.com/balsama/iplookup-httpony">Github</a>
<script>
  var _gaq=[['_setAccount','UA-36675861-1'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
