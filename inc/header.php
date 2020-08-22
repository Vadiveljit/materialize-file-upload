<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98175840-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-98175840-1');
</script>
<header>

	<nav class="red navbar-fixed">
		<div class="nav-wrapper">
			<div class="row teal darken-2">
				<div class="col s12">
					<a href="<?php echo $config['site_url']; ?>" class="brand-logo pagelogo"><img class="responsive-img" src="<?php echo $config['site_url']; ?>/images/logo-white.png" width="200px" title="Anival Logo" alt="Anival Logo"></a>

					<a href="#" class="sidenav-trigger" data-target="mobile-nav">
						<i class="material-icons">menu</i>
					</a>

					<ul class="right hide-on-med-and-down ">
						<li class="active"><a href="<?php echo $config['site_url']; ?>">Home</a></li>
						<li><a href="<?php echo $config['site_url']; ?>/#about">About</a></li>
						<li><a href="<?php echo $config['site_url']; ?>/#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<ul class="sidenav" id="mobile-nav">
						<li class="active"><a href="<?php echo $config['site_url']; ?>">Home</a></li>
						<li><a href="<?php echo $config['site_url']; ?>/#about">About</a></li>
						<li><a href="<?php echo $config['site_url']; ?>/#contact">Contact</a></li>
	</ul>
	
</header>