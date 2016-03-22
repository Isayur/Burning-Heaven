<?PHP
$_head= '';
$_content = '';
include_once 'home.php;'
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php echo $_head; ?>
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));</script>

<LINK REL="stylesheet" HREF="css\base.css" TYPE="text/css" charset="utf-8">
<LINK REL="stylesheet" HREF="css\txtformat.css" TYPE="text/css" charset="utf-8">

<script src="./js/jquery-2.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="./js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<script src="./js/animated-menu.js" type="text/javascript" charset="utf-8"></script>
<script src="./js/random-buttons.js" type="text/javascript" charset="utf-8"></script>

</HEAD>
<BODY>
<div class="toolbar-pic">
	<div class="toolbar">
		<div class="logo">
			<a href="?php echo $_SERVER['PHP_SELF'];?>?page=index">
				<img src="logo.png" class="logo-pic">
			</a>
		</div>
		<div class="tool-btns">
			<div class="srch-nav">
				<form action="foo-js-search">
					<input type="text" name="search-bar" placeholder="Search">
					<button type="submit">Search</button>
				</form>
			</div>
			<div class="btns-nav">
				<ul class="nav-list">					
					<li class="emptymenu">
						<p><a href="$_GET['contact.php']">Contact</a></p>
					</li>
					<li class="emptymenu">
						<p><a href="?php echo $_SERVER['PHP_SELF'];?>?page=recentnews">Recent news</a></p>
					</li>
					<li class="js-dropdown">
						<p><a href="#">Opinions</a></p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=ai">Artificial Intelligence</a>
						</p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=extraterrestrial">Extraterrestrial Life</a>
						</p>
					</li>
					<li class="js-dropdown">
						<p><a href="#">Projects</a></p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=tesla">Tesla</a>
						</p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=spacex">SpaceX</a>
						</p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=solarcity">SolarCity</a>
						</p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=hyperloop">Hyperloop</a>
						</p>
					</li>
					<li class="js-dropdown">
						<p><a href="#">Life</a></p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=childhood">Childhood</a>
						</p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=personal">Personal Life</a>
						</p>
						<p class="menu-item">
							<a href="?php echo $_SERVER['PHP_SELF'];?>?page=philanthropy">Philanthropy</a>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="body">
	<?php echo $_content; ?>
	<div class="nav-tweet-side">
		<button onclick = "randomLink();">Life</button>
		<br><br>
		<button onclick = "randomLink1();">Projects</button>
		<br><br>
		<button onclick = "randomLink2();">Opinions</button>
		<div class="twitter-foo">
			<a class="twitter-timeline" href="https://twitter.com/HeavenBurner/lists/widget" data-widget-id="705740713300983809" data-chrome="nofooter noheader">Tweets from https://twitter.com/HeavenBurner/lists/widget</a>
		</div>
	</div>
</div>

</BODY>
</HTML>