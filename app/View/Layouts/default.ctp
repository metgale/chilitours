
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $title_for_layout; ?>
		</title>
		<script src="js/jquery.js"></script>
		<script src="js/chili.js"></script>
		<?php
		echo $this->Html->meta('icon');


		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="container">
			<div id="header">

			</div>
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>
