<?php

function head($parameters, $page)
{
?>
<html>
	<head>
		<title><?php echo $page['title'].' | '.$parameters['nomSite']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="<?php echo $page['description']; ?>" />
		<meta name="keywords" content="<?php echo $parameters['keywords'].','.$page['keywords']; ?>" />
		<meta name="author" content="<?php echo $parameters['nomSite']; ?>">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>
<?php
}

function menu($nomSite, $menu)
{
  ?>
    <header id="header" class="alt">
      <h1><a href="index.html"><?php echo $nomSite; ?></a></h1>
      <nav id="nav">
        <ul>
					<?php
					foreach($menu as $i => $page)
					{
						if (count($page['subPages']))
						{
							echo '<li><a href="/'.$page['link'].'" class="submenu fa-angle-down">'.$page['title'].'</a><ul>';
							foreach($page['subPages'] as $j => $subPage)
							{
								echo '<li><a href="/'.$subPage['link'].'">'.$subPage['title'].'</a></li>';
							}
							echo '</li></ul>';
						}
						else {
							echo '<li><a href="/'.$page['link'].'">'.$page['title'].'</a></li>';
						}
					}
					?>
        </ul>
      </nav>
    </header>
    <?php
}

function banner($banner)
{
  ?>
  <section id="banner">
    <article>
      <img src="<?php echo $banner['image']; ?>" alt="" />
      <div class="inner">
        <h2><a href="/<?php echo $banner['link']; ?>"><?php echo $banner['title']; ?></a></h2>
      </div>
    </article>
  </section>
  <?php
}

function sectionSpotlight($section)
{
	?>
		<section id="<?php echo $section['idSection']; ?>" class="wrapper major-pad">
			<div class="inner">
				<section class="spotlight">
					<div class="content">
						<h2><?php echo $section['title']; ?></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id interdum magna, ultricies aliquet curabitur sed metus pellentesque, ornare sapien quis.</p>
					</div>
					<span class="image"><img src="images/pic07.jpg" alt="" /></span>
				</section>
			</div>
		</section>
		<?php
}

function sectionPosts($section)
{
	?>
	<section id="<?php echo $section['idSection']; ?>" class="wrapper style2">
			<div class="inner">
				<h2><?php echo $section['title']; ?></h2>
				<div class="posts">
					<section class="post">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h3>Congue portitor</h3>
							<p>Aenean ultricies magna non sapien rhoncus, ac ullamcorper lorem convallis. Quisque at venenatis nisi, amet finibus mauris. Sed sodales ultricies eros, sit amet sodales sapien.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</div>
					</section>
					<section class="post">
						<span class="image"><img src="images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h3>Duis nisl euismod</h3>
							<p>Ultrices nec metus. Aenean ultricies magna et sapien rhoncus ac ullamcorper lorem convallis. Quisque at venenatis nisi amet finibus mauris. Sed sodales ultricies magna etiam.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</div>
					</section>
				</div>
			</div>
		</section>

	<?php
}

function footer($parameters)
{
?>
<!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <p class="copyright">&copy; <?php echo date('Y').' - '.$parameters['nomSite']; ?></p>
      <ul class="menu">
        <li><a href="#">Informations légales</a></li>
      </ul>
    </div>
  </footer>

<!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.dropotron.min.js"></script>
  <script src="assets/js/jquery.scrollex.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
  <script src="assets/js/main.js"></script>

</body>
</html>
<?php
}

?>
