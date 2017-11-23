<?php

function head($nomSite)
{
?>
<html>
	<head>
		<title><?php echo $nomSite; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>
<?php
}

function menu($nomSite)
{
  ?>
    <header id="header" class="alt">
      <h1><a href="index.html"><?php echo $nomSite; ?></a></h1>
      <nav id="nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li>
            <a href="#" class="submenu fa-angle-down">Page Layouts</a>
            <ul>
              <li><a href="left-sidebar.html">Left Sidebar</a></li>
              <li><a href="right-sidebar.html">Right Sidebar</a></li>
              <li><a href="no-sidebar.html">No Sidebar</a></li>
              <li>
                <a href="#">Submenu</a>
                <ul>
                  <li><a href="#">Option One</a></li>
                  <li><a href="#">Option Two</a></li>
                  <li><a href="#">Option Three</a></li>
                  <li><a href="#">Option Four</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="elements.html">Elements</a></li>
          <li><a href="#" class="button">Sign Up</a></li>
        </ul>
      </nav>
    </header>
    <?php
}

function banner($titre, $lien, $image)
{
  ?>
  <section id="banner">
    <article>
      <img src="<?php echo $image; ?>" alt="" />
      <div class="inner">
        <h2><a href="<?php echo $lien; ?>"><?php echo $titre; ?></a></h2>
      </div>
    </article>
  </section>
  <?php
}

function footer($nomSite)
{
?>
<!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <p class="copyright">&copy; <?php echo date('Y').' - '.$nomSite; ?></p>
      <ul class="menu">
        <li><a href="#">Terms<span> of Use</span></a></li>
        <li><a href="#">Privacy<span> Policy</span></a></li>
        <li><a href="#">Legal<span> Information</span></a></li>
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
