<!DOCTYPE html>
<html lang="en">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<script src="/js/jquery.js"></script>
		<script src="/js/chili.js"></script>

		<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min', 'bootstrap-responsive.min', 'chili'));


		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">



		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="../assets/ico/favicon.png">
	</head>

	<body>
		<div class="logo">
			<?php echo $this->Html->image('/img/logo.png');?>
			
		</div>
		<div class="navbar menu">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">O nama</a></li>
							<li><a href="#">B2B</a></li>
							<li><a href="#">Chili Oaza</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Kontakt</a></li>
						</ul>
						
					</div><!-- /.nav-collapse -->
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
		<div class="container">


			<div class="content">
				<?php echo $this->fetch('content'); ?>
			</div>

			<hr>

			<div class="footer">
				<p>&copy; Company 2013</p>
			</div>

		</div> <!-- /container -->
	</body>
</html>







<div class="navbar">
				<div class="navbar-inner">
					<div class="container" style="width: auto;">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="#">Chili Tours</a>
						<div class="nav-collapse">
							<ul class="nav">
								<li><a href="#">O nama</a></li>
								<li><a href="#">B2B</a></li>
								<li><a href="#">Chili Oaza</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Kontakt</a></li>
							</ul>
						</div><!-- /.nav-collapse -->
					</div>
				</div><!-- /navbar-inner -->
			</div><!-- /navbar -->