<?PHP
$_head= '';
$_content = '';
if (!empty($_GET['page'])) {
	$page = $_GET['page'];
	$page = basename($page);
	include("$page.php");
	}
else {include("home.php");}
?>

<?PHP
include("simple_html_dom.php");
$html = file_get_html('http://www.extremetech.com/?s=elon+musk');
$srimg = [];
$srtxt = [];
foreach($html->find('li.') as $article) {
	array_push ($srimg, $article->find('div.image'));
	array_push ($srtxt, $article->find('div.deck'));
	}
?>

<?PHP
	require_once('session.php');
	require_once('class.user.php');
	$user_state = new USER();
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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

<?php echo $_head; ?>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#show').innerFade({
				timeout: 3000,
			});
		});	
	</script>
</HEAD>
<BODY>
<div class="toolbar-pic">
	<div class="toolbar">
		<div class="logo">
			<a href="index.php?page=home">
				<img src="logo.png" class="logo-pic">
			</a>
		</div>
		<div class="tool-btns">
			<div class="srch-nav">
				<ul class="nav-list">
					<?PHP
					if($user_state->is_loggedin()!="")
						{echo '
					<li class="emptymenu">
						<p><a href="logout.php?logout=true">Log out</a></p>
					</li>
							';}
					else {echo '
					<li class="emptymenu">
								<p><a href="sign-up.php">Sign up</a></p>
							</li>
					<li class="emptymenu">
						<p><a href="login.php">Log in</a></p>
					</li>';}
					?>
				</ul>
			</div>
			<div class="btns-nav">
				<ul class="nav-list">					
					<li class="emptymenu">
						<p><a href="index.php?page=contact">Contact</a></p>
					</li>
					<li class="emptymenu">
						<p><a href="index.php?page=recentnews">Recent news</a></p>
					</li>
					<li class="js-dropdown">
						<p><a href="#">Opinions</a></p>
						<p class="menu-item">
							<a href="index.php?page=ai">Artificial Intelligence</a>
						</p>
						<p class="menu-item">
							<a href="index.php?page=extraterrestrial">Extraterrestrial Life</a>
						</p>
					</li>
					<li class="js-dropdown">
						<p><a href="#">Projects</a></p>
						<p class="menu-item">
							<a href="index.php?page=tesla">Tesla</a>
						</p>
						<p class="menu-item">
							<a href="index.php?page=spacex">SpaceX</a>
						</p>
						<p class="menu-item">
							<a href="index.php?page=solarcity">SolarCity</a>
						</p>
						<p class="menu-item">
							<a href="index.php?page=hyperloop">Hyperloop</a>
						</p>
					</li>
					<li class="js-dropdown">
						<p><a href="#">Life</a></p>
						<p class="menu-item">
							<a href="index.php?page=childhood">Childhood</a>
						</p>
						<p class="menu-item">
							<a href="index.php?page=personal">Personal Life</a>
						</p>
						<p class="menu-item">
							<a href="index.php?page=philanthropy">Philanthropy</a>
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
		<button onclick = "randomLink();" class="randombutton">Life</button>
		<br><br>
		<button onclick = "randomLink1();" class="randombutton">Projects</button>
		<br><br>
		<button onclick = "randomLink2();" class="randombutton">Opinions</button>
		<div class="twitter-foo">
			<a class="twitter-timeline" href="https://twitter.com/HeavenBurner/lists/widget" data-widget-id="705740713300983809" data-chrome="nofooter noheader">Tweets from https://twitter.com/HeavenBurner/lists/widget</a>
		</div>
	</div>
	<?php 
		foreach(array_combine($srimg, $srtxt) as $image => $deck) {
			echo $image, $deck;
		}
	?>
</div>

</BODY>
</HTML>